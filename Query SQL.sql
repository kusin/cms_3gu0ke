use cms_3gu0ke;

drop table tb_siswa;
CREATE TABLE tb_siswa (
	nis VARCHAR(255) NOT NULL , 
	nisn VARCHAR(255) NOT NULL , 
	nama_siswa VARCHAR(255) NULL , 
	jenis_kelamin VARCHAR(255) NULL , 
	tempat_lahir VARCHAR(255) NULL , 
	tanggal_lahir DATE NULL ,
	username VARCHAR(255) NULL,
	password VARCHAR(255) NULL,
	status_data VARCHAR(255) NULL , 
	create_at DATETIME NULL , 
	update_at DATETIME NULL , 
	delete_at DATETIME NULL ,
PRIMARY KEY (nis, nisn)) ENGINE = InnoDB;


truncate table tb_siswa;
select * from tb_siswa;
insert into tb_siswa (nis, nisn, nama_siswa, jenis_kelamin, tempat_lahir, tanggal_lahir, status_data)
	values
		('1.20.001', '0059701362', 'Akhsan Farizki', 'Laki-Laki', 'Jakarta', '1995-01-01', 'Aktif'),
		('1.20.002', '0046575602', 'Chikal Jaya Saputra', 'Laki-Laki', 'Jakarta', '1995-01-01', 'Aktif'),
		('1.20.003', '0046450925', 'Diaz Faaqlis Sandigia', 'Laki-Laki', 'Jakarta', '1995-01-01', 'Aktif');


