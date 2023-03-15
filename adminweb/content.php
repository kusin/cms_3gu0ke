<?php

	if($_GET["page"] == "home"){
		include "modul/mod_home/home.php";
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
