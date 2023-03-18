<?php

    require_once "../config/koneksi.php";

    class Jurusan extends Database{

        // method showData
        public function showData(){

            // statment sql
            $sql = $this->conn->query("SELECT * FROM tb_jurusan WHERE status_data='Aktif'");

            $data = array();
            while($row = $sql->fetch_assoc()){
                $data[] = $row;
            }

            return $data;
        }

        // method addData
        public function addData($nama_jurusan, $singkatan, $status_data="Aktif", $create_at=NULL, $update_at=NULL, $delete_at=NULL){

            // statment sql
            $sql = $this->conn->query(
                "INSERT INTO tb_jurusan(nama_jurusan, singkatan, status_data, create_at, update_at, delete_at)
                    VALUES('$nama_jurusan', '$singkatan', '$status_data', '$create_at', '$update_at', '$delete_at')"
            );

            return $hasil;
        }

        // method editData
        public function editData(){

            return $hasil;
        }

        // method deleteData
        public function deleteData(){

            return $hasil;
        }
        
    }
    
?>