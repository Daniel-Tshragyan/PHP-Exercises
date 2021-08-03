<?php
    require_once $_SERVER['DOCUMENT_ROOT']."/db/db.php";

    class ProductModel 
    {
        private $tablename = "products";
        private $conn;
        function __construct($connection)
        {
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
        public function create($name,$desc,$price)
        {
            $result = $this->conn->query("INSERT INTO  $this->tablename 
            (name, description, price) VALUES ('$name','$desc','$price')");
        }
    }
    $productModel = new ProductModel($conn);


