<?php
    require("./models/OrdersModel.php");
    require("./models/UsersModel.php");
    require("./models/OrderProducts.php");
    class OrderController  
    {
        private $orders;
        private $users;
        private $orderproducts;
        private $product;
        function __construct($orders,$users,$orderproducts,$product)
        {
            $this->orders = $orders;
            $this->users = $users;
            $this->orderproducts = $orderproducts;
            $this->product = $product;
        }

        public function showAll()
        {
            $result = $this->orders->showAll();
            for($i = 0; $i < count($result); $i++){
                echo "User ID : ".$result[$i]["id"]."<br>";
                echo "Order Id : ".$result[$i][0]."<br>";
                echo "Order Sum : ".$result[$i]["sum"]."<br>";
                echo "Order Date : ".$result[$i]["order_date"]."<br>";
                echo "User Lastame : ".$result[$i]["last_name"]."<br>";
                echo "User Firstname : ".$result[$i]["first_name"]."<br>";
                echo "User Email : ".$result[$i]["email"]."<br>";
                $res = $this->orderproducts->showAll($result[$i][0]);
                for($j = 0; $j < count($res); $j++){
                    echo "Product Name : ".$res[$j]["name"]."<br>";
                    echo "Product description : ".$res[$j]["description"]."<br>";
                    echo "Product price : ".$res[$j]["price"]."<br>";
                    echo "Product quantity : ".$res[$j]["qty"]."<br>";
                }    
                echo "<hr>";
            }        
        }

        public function create()
        {
            $errors = array();
            if($_SERVER['REQUEST_METHOD'] == "POST"){
                if(empty($_POST["name"])){
                    $errors["name"] = "name is required";
                }elseif(empty($_POST["lastname"])){
                    $errors["lastname"] = "lastname is required";
                }elseif(empty($_POST["email"])){
                    $errors["email"] = "email is required";
                }
                if(!empty($errors)){
                    ob_start();
                    require_once $_SERVER['DOCUMENT_ROOT']."/views/cart.php";
                    $out = ob_get_clean();
                    return $out;
                }else{
                   $id = $this->users->create($_POST["name"],$_POST["lastname"],$_POST["email"]);
                   $today = date("y/d/m");
                   $orderId = $this->orders->create($id,$_SESSION["total"],$today);
                   $arr = $_SESSION["products"];
                   for($i = 0; $i < count($arr);$i++){
                        $this->orderproducts->create($orderId,$arr[$i]->id,$arr[$i]->quantity);
                    }
                    $products =  $this->product->getAll();
                    ob_start();
                    require_once $_SERVER['DOCUMENT_ROOT']."/views/main.php";
                    $out = ob_get_clean();
                    return $out;
                    return;
                }
            }

        }

        
    }

    $orderController = new OrderController($ordersModel,$usersModel,$OrderProducts,$productModel);
