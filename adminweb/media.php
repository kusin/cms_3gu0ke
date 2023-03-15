<!DOCTYPE html>
<html lang="en">

<head>
	<!-- metadata -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- title website -->
	<title>AdminLTE 3 | Blank Page</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	
	<!-- Font Awesome -->
	<link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/brands.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/solid.css">
	
	<!-- Theme style -->
	<link rel="stylesheet" href="assets/dist/css/adminlte.min.css">

	
</head>

<body class="hold-transition sidebar-mini">
	
	<!-- site wrapper -->
	<div class="wrapper">

		<!-- main-sidebar container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			
			<!-- sidebar -->
			<div class="sidebar">
			
				<?php include "menu.php"; ?>
			
			</div>
			<!-- /.sidebar -->
			
		</aside>
		<!-- /. main-sidebar container -->

		<!-- content-wrapper -->
		<div class="content-wrapper">

			<!-- section-header -->
			<section class="content-header">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6">
							<h1>Main Dashboard</h1>
						</div>
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item">Main Dashboard</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			<!-- /.section-header -->

			<!-- section-content -->
			<section class="content">
					<?php include "content.php"; ?>
			</section>
			<!-- /.section-content -->
			
		</div>
		<!-- /.content-wrapper -->

		<footer class="main-footer">
    		<div class="float-right d-none d-sm-block">Version 1.0</div>
    		Copyright &copy; 2023 Aryajaya Alamsyah, S.Kom. All rights reserved.
  		</footer>

	</div>
	<!-- ./wrapper -->

	<!-- REQUIRED SCRIPTS -->
	<!-- JS jQuery -->
	<script src="assets/plugins/jquery/jquery.min.js"></script>
	
	<!-- JS Bootstrap 4 -->
	<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- JS AdminLTE App -->
	<script src="assets/dist/js/adminlte.min.js"></script>

	<!-- JS fontawesome for icon-icon website -->
    <script src="assets/plugins/fontawesome/js/fontawesome.js"></script>
    <script src="assets/plugins/fontawesome/js/brands.js"></script>
    <script src="assets/plugins/fontawesome/js/solid.js"></script>

</body>
</html>