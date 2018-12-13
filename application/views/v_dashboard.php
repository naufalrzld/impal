
  <!-- Body Index -->
	<div class="container">
    <div class="row">
      <?php foreach ($barang as $barang): ?>
        <div class="col-md-2 col-sm-4 col-xs-6">
          <div class="frame-produk">
						<a target="_blank" href="<?php echo base_url("assets")?>/image/uploads/<?php echo $barang['images']; ?>">
							<img src="<?php echo base_url('assets')?>/image/uploads/<?php echo $barang['images']; ?> " class="produk img-fluid" alt="Baju">
							<!-- <img src="image/baju.jpg" class="img-fluid" alt="Trolltunga Norway" width="300px" height="200px" style="width: 175px; height: auto;"> -->
						</a>
						<div class="frame-produk-body">
							<div class="desc">
	              <h6 style="font-family: Arial; "><?php echo $barang['nama_barang']; ?></h6>
	              <h6 style="color: #ED9D00; font-weight: bold; font-family: Arial; ">Rp <?php echo number_format($barang['harga']); ?></h6>
								<?php
									$stok = $barang['stok'];
									$disable = "";
									if ($stok == 0) {
										$disable = "disabled";
								?>
									<center><span class="badge badge-secondary" style="background-color: #D32F2F;">Stok habis</span></center>
								<?php
									} else {
										$disable = "enabled";
									}
								?>
	            </div>
							<div class="tombol-beli">
	              <a href="<?php echo base_url('dashboard/detail')?>/<?php echo $barang['barang_id']; ?> " class="btn btn-outline-danger btn-block mx-auto" role="button" aria-pressed="true">Detail Barang</a>
	              <button class="btn btn-outline-danger btn-block mx-auto" data-toggle="modal" data-target="#addCart<?= $barang['barang_id']; ?>" <?= $disable; ?>>Beli</button>
	            </div>
						</div>
            <div class="modal fade" id="addCart<?= $barang['barang_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                              <img src="<?php echo base_url('assets')?>/image/uploads/<?php echo $barang['images']; ?> " class="produk img-fluid" alt="Baju">
															<input type="hidden" name="image" value="<?php echo base_url('assets')?>/image/uploads/<?php echo $barang['images']; ?>">
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                              <input type="hidden" name="barang_id" value="<?= $barang["barang_id"] ?>">
                              <h3><label><?php echo $barang['nama_barang']; ?></label></h3>
                              <input type="hidden" name="nama_barang" value="<?= $barang["nama_barang"] ?>">
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                              Harga
                              <label><?php echo $barang['harga']; ?></label>
                              <input type="hidden" name="harga" value="<?= $barang["harga"] ?>">
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
      <?php endforeach; ?>
      </div>
      <center>
        <?php if (isset($links)) { ?>
                <?php echo $links ?>
      <?php } ?>
      </center>
    </div>
    <!-- List Barang End -->
	</div>
