<?php
    class Database {
        private $host = 'localhost';
        private $db_name = 'myblog';
        private $username = 'monkeyUser';
        private $password = 'uh-uh-ah-ah';
        private $conn;

        public function connect() {
            $this->conn = null;
            echo 'Attempting to connect... ';

            try {
                $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e) {
                echo 'Connection Error: ' . $e->getMessage();
            }
            return $this->conn;
        }
    }