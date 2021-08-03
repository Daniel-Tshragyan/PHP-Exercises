<?php
    class DB
    {
        private static $instance = null;
        private $pdo;

        private function __construct()
        {
            $this->pdo = new PDO("mysql:host=localhost;dbname=exercise", 'root', "");
        }
        public static function getInstance()
        {
            if(!self::$instance){
                self::$instance = new DB();
            }
            return self::$instance;
        }

        public function getConnection()
        {
            return $this->pdo;
        }
    }

    $db = DB::getInstance();
    $conn = $db->getConnection();

