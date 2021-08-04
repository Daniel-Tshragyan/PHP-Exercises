<?php
    namespace controllers;

    use models\OrdersModel;
    use models\UsersModel;
    use models\OrderProducts;
    use models\ProductModel;

    class OrderController  
    {
        private $orders;
        private $users;
        private $orderproducts;
        private $product;
        public function __construct()
        {
            $this->orders = new OrdersModel();
            $this->users = new UsersModel();
            $this->orderproducts = new OrderProducts();
            $this->product =  new ProductModel();
        }

        public function showAll()
        {
            $myorders = $this->orders->showAll();
            ob_start();

            foreach( $myorders as $myorder){
                $myproducts = $this->orderproducts->showAll($myorder[0]);
                require($_SERVER['DOCUMENT_ROOT'].'/views/show.php');
            }
            $out = ob_get_clean();
            return $out;
        }

        public function create()
        {
            $errors = [];
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                if(empty($_POST['name'])){
                    $errors['name'] = 'name is required';
                } elseif(empty($_POST['lastname'])) {
                    $errors['lastname'] = 'lastname is required';
                } elseif(empty($_POST['email'])){
                    $errors['email'] = 'email is required';
                }
                if(!empty($errors)) {
                    ob_start();
                    require_once $_SERVER['DOCUMENT_ROOT'].'/views/cart.php';
                    $out = ob_get_clean();
                    return $out;
                } else {
                   $id = $this->users->create($_POST['name'], $_POST['lastname'], $_POST['email']);
                   $today = date('y/d/m');
                   $orderId = $this->orders->create($id, $_SESSION['total'], $today);
                   $sessionproducts = $_SESSION['products'];
                   foreach($sessionproducts as $item){
                        $this->orderproducts->create($orderId, $item->id, $item->quantity);
                   }
                    $products =  $this->product->getAll();
                    ob_start();
                    require_once $_SERVER['DOCUMENT_ROOT'].'/views/main.php';
                    $out = ob_get_clean();
                    return $out;
                    return;
                }
            }
        }
    }
