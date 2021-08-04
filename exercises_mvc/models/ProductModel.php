<?php
    namespace models;

    use db\DB;

    class ProductModel 
    {
        private $tablename = 'products';
        private $conn;
        public function __construct()
        {
            $db = DB::getInstance();
            $this->conn = $db::getConnection();
        }

        public function getAll()
        {
            $result = $this->conn->query("SELECT * FROM {$this->tablename}");
            $all = [];
            while ($row = $result->fetch()) {
                $all[] = $row;
            }
            return $all;
        }

        public function create($name, $desc, $price)
        {
            $stm = $this->conn->prepare("INSERT INTO  {$this->tablename} 
            (name, description, price) VALUES (?, ?, ?)");
            $stm->execute([$name, $desc, $price]);
            return true;
        }
    }
