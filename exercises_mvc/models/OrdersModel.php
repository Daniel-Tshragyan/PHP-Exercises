<?php
    namespace models;

    use db\DB;

    class OrdersModel 
    {
        private $tablename = 'orders';
        private $conn;
        public function __construct()
        {
            $db = DB::getInstance();
            $this->conn = $db::getConnection();
        }
                                                 
        public function getAll(){
           
        }

        public function create($user_id, $sum, $date)
        {
            $stm = $this->conn->prepare("INSERT INTO  {$this->tablename} 
            (user_id, sum, order_date) VALUES (?, ?, ?)");
            $stm->execute([$user_id, $sum, $date]);
            
            return  $this->conn->lastInsertId();
        }

        public function showAll()
        {
            $result = $this->conn->query("SELECT * FROM {$this->tablename} INNER JOIN
             users ON {$this->tablename}.user_id = users.id ");
            return $result->fetchAll();
        }
    }
