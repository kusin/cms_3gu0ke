<?php

    class Database{

        // property database
        public $conn = "";
        public $server = "localhost";
        public $username = "root";
        public $password = "";
        public $database = "cms_3gu0ke";

        // method open koneksi
        function __construct(){
            
            try{
                $this->conn = new mysqli($this->server, $this->username, $this->password, $this->database);
            } catch(Exception $e){
                echo 'Message: ' .$e->getMessage();
            }

            return $this->conn;
        }

        // method close koneksi
        function __destruct(){
            return $this->conn->close();
        }
    }

?>