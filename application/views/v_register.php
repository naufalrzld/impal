<!DOCTYPE html>
<html>
<head>
	<title>Tubes | Registrasi</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets")?>/css/bootstrap.css">
	<link rel="stylesheet" type="text/js" href="<?php echo base_url("assets")?>/js/bootstrap.min.js">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets")?>/css/mycss.css">
</head>
<body>
	<div class="top_header_area">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="web-tittle">
						<a href="<?php echo site_url("dashboard")?>">
							<img class="img-header-logo" src="<?php echo base_url("assets")?>/image/bukalapak.svg">
						</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="web-tittle">
						Daftar akun baru
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="register">
			<div class="header">
				<h2>Formulir Pendaftaran</h2>
			</div>
			<form action="<?php echo site_url("register/addNewUser")?>" method="post">
				<div class="row form-register">
				<div class="col-sm-12">
					<input type="text" class="form-control" aria-describedby="inputGroup-sizing-default" placeholder="Nama Lengkap" name="name">
				</div>
				</div>
				<div class="row form-register">
					<div class="col-sm-12">
						<input type="text" class="form-control" aria-describedby="inputGroup-sizing-default" placeholder="Alamat E-mail" name="email">
					</div>
				</div>
				<div class="row form-register">
					<div class="col-sm-12">
						<input type="radio" name="jk" value="1" checked> Laki-laki
						<input id="rbPerempuan" type="radio" name="jk" value="0"> Perempuan
					</div>
				</div>
				<div class="row form-register">
					<div class="col-sm-12">
						<input type="text" class="form-control" aria-describedby="inputGroup-sizing-default" placeholder="Nomor Telepon" name="no_tlp">
					</div>
				</div>
				<div class="row form-register">
					<div class="col-sm-12">
						<input type="password" class="form-control" aria-describedby="inputGroup-sizing-default" placeholder="Password" name="password">
					</div>
				</div>
				<div class="row form-register">
					<div class="col-sm-12">
						<button class="btn btn-outline-danger btn-login">Daftar</button>
					</div>
				</div>
			</form>
			<label id="lbl-register">Sudah punya akun? <a href="<?php echo site_url("login")?>">Masuk</a></label>
		</div>
	</div>
</body>
</html>