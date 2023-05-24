<?php

    class Database{

		public function __construct(){
			try{
	
				// membuka koneksi database
				$this->conn = new PDO("mysql:host=localhost;dbname=cms_3gu0ke", "root", "");
				
			}catch (PDOException $e) {
		
				// tampilkan pesan kesalahan jika koneksi gagal
				echo "Koneksi atau query bermasalah : " . $e->getMessage() . "<br/>";
				
				// membuka koneksi database
				die();
		
			}

			return $this->conn;
		}
	}

?>