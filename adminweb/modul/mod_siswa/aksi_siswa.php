<?php

    // import conn database
    require_once "../config/koneksi.php";

    // main class
    class Siswa extends Database{

        // method showData
        public function showData(){

            $sql = $this->conn->prepare("SELECT * FROM tb_siswa ORDER BY nama_siswa ASC");

            $sql->execute();

            return $sql;
        }

        // method addData
        public function addData(){
            
            return $data;
        }

        // method editData
        public function editData(){

            return $data;
        }

        // method deleteData
        public function deleteData(){

            return $data;
        }
        
    }
    
?>