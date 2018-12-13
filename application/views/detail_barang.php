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
								<?php
									$stok = $barang->stok;
									$disable = "";
									if ($stok == 0) {
										$disable = "disabled";
									} else {
										$disable = "enabled";
									}
								?>
								<button id="button_beli" class="btn btn-outline-danger btn-login" data-toggle="modal" data-target="#addCart<?= $barang->barang_id; ?>" <?= $disable ?>>Beli</button>
							</div>
						</div>
						<div class="modal fade" id="addCart<?= $barang->barang_id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <label class="modal-title" id="exampleModalLabel"><h3>Tambah ke keranjang</h3></label>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                      <form action="<?php echo site_url('dashboard/addToCart') ?>" method="post">
                        <div class="modal-body">
                          <div class="row-fluid">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                              <img src="<?php echo base_url('assets')?>/image/uploads/<?php echo $barang->images; ?> " class="produk img-fluid" alt="Baju">
															<input type="hidden" name="image" value="<?php echo base_url('assets')?>/image/uploads/<?php echo $barang->images; ?>">
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                              <input type="hidden" name="barang_id" value="<?= $barang->barang_id ?>">
                              <h3><label><?php echo $barang->nama_barang; ?></label></h3>
                              <input type="hidden" name="nama_barang" value="<?= $barang->nama_barang ?>">
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                              Harga
                              <label><?php echo "Rp ".number_format($barang->harga); ?></label>
                              <input type="hidden" name="harga" value="<?= $barang->harga ?>">
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                              Jumlah
                              <input type="number" name="quantity" min="1" value="1" class="quantity form-control">
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                          <button type="submit" class="add_cart btn btn-primary">Tambah</button>
                        </div>
                      </form>
                  </div>
              </div>
          </div>
					</div>
				</div>
			</div>
		</div>
	</div>
