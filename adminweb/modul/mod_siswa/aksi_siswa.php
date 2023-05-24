<?php

    // import conn database
    require_once "../config/koneksi.php";

    // main class
    class Siswa{

        // method __construct 
        function __construct(){

            // membuka koneksi database
            $this->db = (new Database())->DBConnect();;
        }

        // method showData
        public function showData(){

            $sql = $this->db->prepare("SELECT * FROM tb_siswa ORDER BY nama_siswa ASC");

            $sql->execute();

            return $sql;
        }

        // method addData
        public function addData($nis, $nisn, $nama_siswa, $jenis_kelamin, $tempat_lahir, $tanggal_lahir, $username, $password, $status_data){
            
            try{

                $data = $this->db->prepare(
                    "INSERT INTO tb_siswa(nis, nisn, nama_siswa, jenis_kelamin, tempat_lahir, tanggal_lahir, username, password, status_data)
                        VALUES(:nis, :nisn, :nama_siswa, :jenis_kelamin, :tempat_lahir, :tanggal_lahir, :username, :password, :status_data)"
                );
    
                $data->execute([
                    'nis' => $nis,
                    'nisn' => $nisn,
                    'nama_siswa' => $nama_siswa,
                    'jenis_kelamin' => $jenis_kelamin,
                    'tempat_lahir' => $tempat_lahir,
                    'tanggal_lahir' => $tanggal_lahir,
                    'username' => $username,
                    'password' => $password,
                    'status_data' => $status_data
                ]);

                // jika berhasil tambah data
                return true;

            }catch(PDOException $e){

                // jika gagal tambah data
                return $e->getMessage();
            }
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