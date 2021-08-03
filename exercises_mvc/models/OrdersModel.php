<?php
    require_once $_SERVER['DOCUMENT_ROOT']."/db/db.php";

    class OrdersModel 
    {
        private $tablename = "orders";
        private $conn;
        function __construct($connection)
        {
            $this->conn = $connection;
        }
                                                 
        public function getAll(){
           
        }
        public function create($user_id,$sum,$date)
        {
            $this->conn->query("INSERT INTO  $this->tablename 
            (user_id, sum, order_date) VALUES ('$user_id','$sum','$date')");
            $id = $this->conn->query("SELECT id FROM $this->tablename ORDER BY id DESC LIMIT 1");
            return $id->fetch()["id"];
        }
        public function showAll()
        {
            $result = $this->conn->query("SELECT * FROM $this->tablename INNER JOIN
             users ON $this->tablename.user_id = users.id ");
            return $result->fetchAll();
        }
    }
    $ordersModel = new OrdersModel($conn);


