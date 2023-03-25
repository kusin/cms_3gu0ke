<?php

    // import conn databse
    require_once "../config/database.php";

    // main class
    class Jurusan extends Database{

        // method setAttribute
        public function setAttribute(){
            
            return $data;
        }

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
        public function addData($_post, $create_at=NULL, $update_at=NULL, $delete_at=NULL){
            
            // attribut data
            $nama_jurusan   = $this->conn->real_escape_string($_POST['txt_nama_jurusan']);
            $singkatan      = $this->conn->real_escape_string($_POST['txt_singkatan']);
            $status_data    = $this->conn->real_escape_string($_POST['cb_status_data']);
            
            // statment sql
            $sql = $this->conn->query(
                "INSERT INTO tb_jurusan(nama_jurusan, singkatan, status_data, create_at, update_at, delete_at)
                    VALUES('$nama_jurusan', '$singkatan', '$status_data', '$create_at', '$update_at', '$delete_at')"
            );
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