<?php

	if($_GET["page"] == "home"){
		include "modul/mod_home/home.php";
	}
	else if($_GET["page"] == "siswa"){
		include "modul/mod_siswa/siswa.php";
	}
	else if($_GET["page"] == "pembayaran-spp"){
		include "modul/mod_pembayaran_spp/pembayaran_spp.php";
	}
	else if($_GET["page"] == "cetak-laporan"){
		include "modul/mod_cetak_laporan/cetak_laporan.php";
	}
	else if($_GET["page"] == "jurusan"){
		include "modul/mod_jurusan/jurusan.php";
	}
	else{
		echo "
			<div class='callout callout-success'>
				<p class='text-secondary'>Modul tidak tersedia</p>
			</div>
		";
	}

?>
