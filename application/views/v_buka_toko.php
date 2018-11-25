<!DOCTYPE html>
<html>
<head>
	<title>E-Commerce</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets")?>/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets")?>/css/mycss.css">
</head>
<body>
  <!-- Navigation Bar -->
	<div class="top_header_area">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="web-tittle">
						<a href="<?php echo site_url("dashboard")?>">
							<img class="img-header-logo" src="<?php echo base_url("assets")?>/image/bukalapak.svg">
						</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="search-container">
						<form action="#">
							<input type="text" placeholder="Search.." name="search">
							<button type="submit"><i class="fa fa-search"></i></button>
						</form>
					</div>
				</div>
				<div class="col-md-3">
					<div class="signup-area d-flex align-items-center justify-content-end">
						<div class="d-flex">
							<div class="login-or-register">
								<?php
									$nama = $this->session->userdata("nama");
									if (isset($nama)) {
								?>
								<div class="dropdown">
								  <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								    <?php
								    	echo $nama;
								    ?>
								  </button>
								  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
								    <a class="dropdown-item" href="<?php echo site_url("buka_toko") ?>">Buka Toko</a>
								    <a class="dropdown-item" href="#">Another action</a>
								    <div class="dropdown-divider"></div>
								    <a class="dropdown-item" href="<?php echo site_url("login/logout") ?>">Logout</a>
								  </div>
								</div>
								<?php
									} else {
								?>
								<a href="<?php echo site_url('login');?>">
									<button class="btn btn-outline-light">Masuk/Daftar</button>
								</a>
								<?php
									}
								?>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
  <!-- Navigation Bar End -->
<div class="container">
		<div class="register">
			<div class="header">
				<h2>Formulir Buka Toko</h2>
			</div>
			<form action="<?php echo site_url("buka_toko/buat_toko")?>" method="post" enctype="multipart/form-data">
				<div class="row form-register">
					<div class="col-sm-12">
						<input type="text" class="form-control" aria-describedby="inputGroup-sizing-default" placeholder="Nama Toko" name="name">
					</div>
				</div>
				<div class="row form-register">
					<div class="col-sm-12">
						<textarea rows="4" cols="50" class="form-control" aria-describedby="inputGroup-sizing-default" placeholder="Deskripsi Toko" name="desc"></textarea>
					</div>
				</div>
				<div class="row form-register">
					<div class="col-sm-12">
						<textarea rows="4" cols="50" class="form-control" aria-describedby="inputGroup-sizing-default" placeholder="Alamat" name="alamat"></textarea>
					</div>
				</div>
				<div class="row form-register">
					<div class="col-sm-12">

						<input type="file" name="userfile" size="20" />
					</div>
				</div>
				<div class="row form-register">
					<div class="col-sm-12">
						<button class="btn btn-outline-danger btn-login">Buka Toko</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>