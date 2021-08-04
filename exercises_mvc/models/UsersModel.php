<?php
    namespace models;

    use db\DB;


    class UsersModel 
    {
        private $tablename = 'users';
        private $conn;
        public function __construct()
        {
            $db = DB::getInstance();
            $this->conn = $db::getConnection();
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

        public function showAll()
        {
            $result = $this->conn->query("SELECT * FROM $this->tablename INNER JOIN orders ON $this->tablename.id = orders.user_id ");
            return $result->fetch();
        }

        public function create($name,$lastname,$email)
        {
            $stm = $this->conn->prepare("INSERT INTO  $this->tablename 
            (first_name, last_name, email) VALUES (?, ?, ?)");
            $stm->execute(array($name, $lastname, $email));
            return  $this->conn->lastInsertId();
            
        }
    }
