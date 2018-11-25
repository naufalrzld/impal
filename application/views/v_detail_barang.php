	<div class="container">
		<div class="row">
			<!-- Barang -->
			<?php
                        foreach ($dataBrg as $barang) {
                            $id = $barang["barang_id"];
                    ?>
                    <?php

                        }
                    ?>
			<div class="col-md-9">
				<div class="jumbotron text-center bg_detail" style="background-color: white;">
					<div class="container coba">
						<div id="blabla" class="row">
							<div class="col-md-6">
								<img class="gbr_produk" src="<?php echo base_url('assets') ?>/image/uploads/<?php echo $barang['images'] ?>">
							</div>
							<div class="col-md-6">
								<h3 class="judul_p"><?php echo $barang["nama_barang"]; ?></h3>
								<hr class="onepixel">
								<h4 class="judul_p" align="left">Harga</h4>
								<h3 class="harga" align="left">Rp. <?php echo $barang["harga"]; ?></h3>
								<button id="button_beli" class="btn btn-outline-danger btn-login">Beli</button>

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Informasi Pelapak -->
			<div class="col-md-3 bg_detail2">
				<label>Pelapak</label>
					<div class="row">
						<div class="col-4">
							<img class="gbr_pelapak" src="<?php echo base_url('assets') ?>/image/uploads/<?php echo $barang['foto'] ?>">
						</div>
						<div class="col">
							<a href="#" class="nm_pelapak"><?php echo $barang["nama_toko"]; ?></a><br>
							<a  class="fdb_pelapak">Dikirim dari</a><br>
							<p><?php echo $barang["alamat"]; ?></p>
						</div>	
					</div>
					<hr class="onepixel" style="width: 250px;">
					<label>Deskripsi</label>
					<div class="row">
						
						<h5><?php echo $barang["deskripsi"]; ?></h5>	
					</div>
					<div>
						<label>Pesan</label>
								<form action="<?php echo site_url("detail_barang/komen")?>" method="post">
								 	<textarea style="height: 100px; width: 270px" name="komen" class="form-control" rows="5" id="comment"></textarea>
								 	<button  id="button_beli" class="btn btn-outline-danger btn-login">Beli</button>
								</form>
					</div>

			</div>
		</div>
		<!-- Detail Barang -->
		<div class="row text-left">
			<div class="col-md-9">
				<div class="jumbotron text-center bg_detail" style="background-color: white;">
					<p class="text-left">Detail Barang</p>
					<hr align="left" class="onepixel" style="width: 150px;">
					<div class="row">
						<div class="col-md-3">
							<p class="text-left">Infromasi</p>
						</div>
						<div class="col-md-7">
							<p class="text-left"><?php echo $barang["informasi"]; ?></p>
						</div>						
					</div>
					<div class="row">
						<div class="col-md-3">
							<p class="text-left">Spesifikasi</p>
						</div>
						<div class="col-md-7">
							<p class="text-left"><?php echo $barang["spesifikasi"]; ?></p>
						</div>						
					</div>
					<div class="row">
						<div class="col-md-3">
							<p class="text-left">Deskripsi</p>
						</div>
						<div class="col-md-7">
							<p class="text-left"><?php echo $barang["deskripsi_b"]; ?></p>
						</div>						
					</div>
					<div class="row">
						<div class="col-md-3">
							<p class="text-left">Catatan</p>
						</div>
						<div class="col-md-7">
							<p class="text-left"><?php echo $barang["catatan"]; ?></p>
						</div>						
					</div>
				</div>
			</div>
		</div>

		<div class="row text-left">
			<div class="col-md-9">
				<div class="jumbotron text-center bg_detail" style="background-color: white;">
					<form action="<?php echo site_url("detail_barang/komen")?>" method="post" enctype="multipart/form-data">
						<p class="text-left">Komentar Anda</p>
						<div class="row">
							<div align="left" class="col-md-9">
								<form action="<?php echo site_url("detail_barang/komen")?>" method="post">
								 	<textarea style="height: 200px;" name="komen" class="form-control" rows="5" id="comment"></textarea>
								 	<button  id="button_beli" class="btn btn-outline-danger btn-login">Submit</button>
								</form>
							</div>						
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>