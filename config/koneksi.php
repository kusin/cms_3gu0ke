<?php

    class Database{

		public function DBConnect(){
			try{
	
				// membuka koneksi database
				$this->conn = new PDO("mysql:host=localhost;dbname=cms_3gu0ke", "root", "");

				// return values
				return $this->conn;
				
			}catch (PDOException $e) {
		
				// tampilkan pesan kesalahan jika koneksi gagal
				return 'Connection failed: ' . $e->getMessage();

			}
		}
	}

?>