<?php

    class Database{

        protected $conn = "";

        private $server = "localhost";
        private $username = "root";
        private $password = "";
        private $database = "cms_3gu0ke";
        
        function getConnection(){
            
            try{
                $this->conn = new mysqli(
                    $this->server, $this->username, $this->password, $this->database
                );
            } catch(Exception $e){
                echo 'Message: ' .$e->getMessage();
            }

            return $this->conn;
        }

        // function __construct(){
        //     $this->conn = new mysqli(
        //         $this->server, $this->username, $this->password, $this->database
        //     );

        //     return $this->conn;
        // }

        // function __destruct(){
        //     return $this->conn->close();
        // }
    }

?>