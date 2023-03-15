<?php

	if($_GET["page"] == "home"){
		include "modul/mod_home/home.php";
	}
	else if($_GET["page"] == "siswa"){
		include "modul/mod_siswa/siswa.php";
	}
	else if($_GET["page"] == "spp"){
		include "modul/mod_pembayaran_spp/spp.php";
	}
	else if($_GET["page"] == "pembayaran_spp"){
		include "modul/mod_pembayaran_spp/pembayaran_spp.php";
	}
	else{
		// <!-- div welcome -->
		echo "
			<div class='callout callout-success'>
				<p class='text-secondary'>Modul tidak tersedia</p>
			</div>
		";
		// <!-- /.div welcome -->
	}


?>
