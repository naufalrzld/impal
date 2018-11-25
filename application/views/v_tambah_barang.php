<div class="container">
		<div class="register">
			<div class="header">
				<h2>Tambah Barang</h2>
			</div>
			<form action="<?php echo site_url("kelola_toko/buat_barang")?>" method="post" enctype="multipart/form-data">
				<div class="row form-register">
					<div class="col-sm-12">
						<input type="text" class="form-control" aria-describedby="inputGroup-sizing-default" placeholder="Nama Barang" name="name" required>
					</div>
				</div>
				<div class="row form-register">
					<div class="col-sm-12">
						<input type="text" class="form-control" aria-describedby="inputGroup-sizing-default" placeholder="Harga" name="harga" required>
					</div>
				</div>
				<div class="row form-register">
					<div class="col-sm-12">
						<input type="text" class="form-control" aria-describedby="inputGroup-sizing-default" placeholder="Stok" name="stok" required>
					</div>
				</div>
				<div class="row form-register">
					<div class="col-sm-12">
						<textarea rows="4" cols="50" class="form-control" aria-describedby="inputGroup-sizing-default" placeholder="Deskripsi" name="desc" required></textarea>
					</div>
				</div>
				<div class="row form-register">
					<div class="col-sm-12">
						<input type="file" name="userfile" size="20" />
					</div>
				</div>
				<div class="row form-register">
					<div class="col-sm-12">
						<button class="btn btn-outline-danger btn-tambah-barang">Simpan</button>
					</div>
				</div>
			</form>
		</div>
	</div>
