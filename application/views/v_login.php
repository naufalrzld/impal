

<!DOCTYPE html>
<html>
<head>
	<title>Tubes | Masuk</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets")?>/css/bootstrap.css">
	<link rel="stylesheet" type="text/js" href="<?php echo base_url("assets")?>/js/bootstrap.min.js">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets")?>/css/mycss.css">
</head>
<body>
	<div class="top_header_area">
		<div class="container">
			<div class="row">
			<!--Test-->
				<div class="col-sm-6">
					<div class="web-tittle">
						<a href="<?php echo site_url("dashboard")?>">
							<img class="img-header-logo" src="<?php echo base_url("assets")?>/image/tb.svg">
						</a>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="web-tittle">
						Masuk
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="login">
			<form action="<?php echo site_url("login/do_login");?>" method="post">
				<div class="card">
					<div class="logo">
						<img class="img-logo" src="<?php echo base_url("assets")?>/image/tb.svg">
					</div>
					<div class="row">
						<?php
							if (isset($error)) {
						?>
						<div class="col-sm-12">
							<div class="alert alert-danger">
								<?php echo $error ?>
							</div>
						</div>
						<?php
							}
						?>
						<div class="col-sm-12">
							<input type="text" class="form-control oval" aria-describedby="inputGroup-sizing-default" placeholder="E-mail / Username" name="username">
						</div>
						<div class="col-sm-12">
							<input type="password" class="form-control oval" aria-describedby="inputGroup-sizing-default" placeholder="Password" name="password">
						</div>
					</div>
					<button class="btn btn-outline-danger btn-login">Masuk</button>
					<label id="lbl-register">Belum punya akun? <a href="<?php echo site_url("register")?>">Daftar</a></label>
				</div>
			</form>
		</div>
	</div>
</body>
</html>
