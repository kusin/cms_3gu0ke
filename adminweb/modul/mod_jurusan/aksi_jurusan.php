<?php

    // extend class koneksi
    include "../../../config/koneksi.php";

    // declare object database
    $conn = new Database();

    class Jurusan{

        // method showData
        public function showData(){

            // statment sql
            $sql = mysqli_query(
                $conn->getConnection(), "SELECT * FROM tb_jurusan WHERE status_data='Aktif'"
            );

            while($r = mysql_fetch_array($sql)){
                $hasil[] = $r;
            }

            return $hasil;
        }

        // method addData
        public function addData(){

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