<?php
    namespace models;

    use db\DB;

    class OrderProducts 
    {
        private $tablename = 'order_products';
        private $conn;
        function __construct(){
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

        public function showAll($id)
        {
            
            $result = $this->conn->prepare("SELECT * FROM {$this->tablename} INNER JOIN
            products ON products.id = {$this->tablename}.product_id WHERE {$this->tablename}.order_id = ?");
            $result->execute([$id]);
            return $result->fetchAll($this->conn::FETCH_ASSOC);
        }

        public function create($order,$prod,$qty)
        {
            $stm = $this->conn->prepare("INSERT INTO  {$this->tablename} 
            (order_id, product_id, qty) VALUES (?, ?, ?)");
            $stm->execute([$order, $prod, $qty]);
            return true;
        }
    }
