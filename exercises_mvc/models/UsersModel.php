<?php
    require_once $_SERVER['DOCUMENT_ROOT']."/db/db.php";

    class UsersModel 
    {
        private $tablename = "users";
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

        public function showAll()
        {
            $result = $this->conn->query("SELECT * FROM $this->tablename INNER JOIN orders ON $this->tablename.id = orders.user_id ");
            return $result->fetch();
        }

        public function create($name,$lastname,$email)
        {
            $this->conn->query("INSERT INTO  $this->tablename 
            (first_name, last_name, email) VALUES ('$name','$lastname','$email')");
            $id = $this->conn->query("SELECT id FROM $this->tablename ORDER BY id DESC LIMIT 1");
            return $id->fetch()["id"];
        }
    }
    $usersModel = new UsersModel($conn);


