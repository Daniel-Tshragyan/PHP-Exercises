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
            $result = $this->conn->query("SELECT {$this->tablename}.id, {$this->tablename}.user_id, {$this->tablename}.sum, {$this->tablename}.order_date, users.first_name, users.last_name, users.email FROM {$this->tablename} INNER JOIN
            users ON {$this->tablename}.user_id = users.id ");
            return $result->fetchAll($this->conn::FETCH_ASSOC);
        }

        public function create($user_id, $sum, $date)
        {
            $stm = $this->conn->prepare("INSERT INTO  {$this->tablename} 
            (user_id, sum, order_date) VALUES (?, ?, ?)");
            $stm->execute([$user_id, $sum, $date]);
            
            return  $this->conn->lastInsertId();
        }
        
    }
