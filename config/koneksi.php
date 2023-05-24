<?php

    class Database{

		public function DBConnect(){
			try{
	
				// membuka koneksi database
				$this->db = new PDO("mysql:host=localhost;dbname=cms_3gu0ke", "root", "");

				// return values
				return $this->db;
				
			}catch (PDOException $e) {
		
				// tampilkan pesan kesalahan jika koneksi gagal
				return 'Connection failed: ' . $e->getMessage();

			}
		}
	}

?>