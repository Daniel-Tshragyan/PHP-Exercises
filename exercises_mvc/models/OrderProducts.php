<?php
    require_once $_SERVER['DOCUMENT_ROOT']."/db/db.php";

    class OrderProducts 
    {
        private $tablename = "order_products";
        private $conn;
        function __construct($connection){
            $this->conn = $connection;
        }

        public function getAll()
        {
            $result = $this->conn->query("SELECT * FROM $this->tablename");
            $all = [];
            while ($row = $result->fetch()) {
                $all[] = $row;
            }
            return $all;
        }
        public function showAll($id)
        {
            
            $result = $this->conn->query("SELECT * FROM $this->tablename INNER JOIN
            products ON products.id = $this->tablename.product_id WHERE $this->tablename.order_id = $id");
            return $result->fetchAll();

        }
        public function create($order,$prod,$qty)
        {
            $result = $this->conn->query("INSERT INTO  $this->tablename 
            (order_id, product_id, qty) VALUES ('$order','$prod','$qty')");
            return;
        }
    }
    $OrderProducts = new OrderProducts($conn);
