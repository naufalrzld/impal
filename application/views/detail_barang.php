	<div class="container">
		<div class="row">
			<!-- Barang -->
			<div class="col-md-12">
				<div class="jumbotron text-center bg_detail" style="background-color: white;">
					<div class="container coba">
						<div id="blabla" class="row">
							<div class="col-md-6">
								<img class="gbr_produk" src="<?php echo base_url('assets')?>/image/uploads/<?php echo $barang->images; ?> ">
							</div>
							<div class="col-md-6">
								<h2 class="judul_p"><?php echo $barang->nama_barang; ?></h2>
								<hr class="onepixel">
								<h3 class="harga" align="left">Rp <?php echo number_format($barang->harga); ?></h3>
								<p class="text-left">Detail Barang</p>
								<div class="row">
									<div class="col-md-3">
										<p class="text-left">Deskripsi</p>
									</div>
									<div class="col-md-7">
										<p class="text-left"><?php echo $barang->deskripsi_b; ?></p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-3">
										<p class="text-left">Stok</p>
									</div>
									<div class="col-md-7">
										<p class="text-left"><?php echo $barang->stok; ?></p>
									</div>
								</div>
								<button id="button_beli" class="btn btn-outline-danger btn-login">Beli</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
