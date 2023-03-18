<?php

    class Database{

        // property database
        protected $conn = "";
        private $server = "localhost";
        private $username = "root";
        private $password = "";
        private $database = "cms_3gu0ke";

        // method open koneksi
        function __construct(){
            try{
                $this->conn = new mysqli(
                    $this->server, $this->username, $this->password, $this->database
                );
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