<div class="container">
	<div class="header">
        <center>
            <h2>Kelola Toko</h2>
        </center>
	</div>
	<div class="row">
		<a href="<?php echo site_url('kelola_toko/tambah_barang')?>">
				<button class="btn btn-outline-danger btn-tambah-barang">Tambah Barang</button>
		</a>
	  <div class="col-table col-md-12">
	      <table class="table table-striped">
	          <thead>
	              <tr>
	                  <th>Gambar</th>
	                  <th>Nama Barang</th>
	                  <th>Harga</th>
	                  <th>Deskripsi</th>
										<th>Stok</th>
	                  <th>Action</th>
	              </tr>
	          </thead>
	          <tbody>
	              <?php
	                  foreach ($dataBrg as $barang) {
	                      $id = $barang["barang_id"];
	              ?>
	              <tr>
	                  <td><img src="<?php echo base_url('assets') ?>/image/uploads/<?php echo $barang["images"]; ?>"></td>
	                  <td><?php echo $barang["nama_barang"]; ?></td>
	                  <td><?php echo $barang["harga"]; ?></td>
	                  <td><?php echo $barang["deskripsi_b"]; ?></td>
	                  <td><?php echo $barang["stok"]; ?></td>
	                  <td>
	                      <button type="button" class="btn btn-tambah-stok" data-toggle="modal" data-target="#stok<?= $id ?>"><span class="glyphicon glyphicon-plus"></span></button>
	                      <button type="button" class="btn btn-edit" data-toggle="modal" data-target="#edit<?= $id ?>"><span class="glyphicon glyphicon-edit"></span></button>
	                      <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#del<?= $id?>"><span class="glyphicon glyphicon-trash"></span></button>
	                  </td>
	              </tr>
								<div class="modal fade" id="stok<?= $id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                  <div class="modal-dialog" role="document">
	                      <div class="modal-content">
	                          <div class="modal-header">
	                              <h3 class="modal-title" id="exampleModalLabel">Tambah Stok Barang</h3>
	                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                  <span aria-hidden="true">&times;</span>
	                              </button>
	                          </div>
														<form method="POST" action="<?php echo site_url('kelola_toko/tambah_stok') ?>" enctype="multipart/form-data">
		                          <div class="modal-body">
																<div class="row">
																	<div class="col-lg-4">
																		<img src="<?php echo base_url('assets')?>/image/uploads/<?php echo $barang['images']; ?> " class="produk img-fluid" alt="Baju">
																	</div>
																	<div class="col-lg-8">
	                                  <div class="form-group">
	                                      <label for="exampleInputEmail1">Nama Barang</label>
	                                      <input type="text" class="form-control" name="nama_barang" value="<?= $barang["nama_barang"] ?>" disabled>
																				<input type="hidden" name="kode_barang" value="<?= $barang["barang_id"] ?>">
	                                  </div>
																		<div class="form-group">
	                                      <label for="exampleInputEmail1">Stok</label>
																				<input type="number" name="stok" min="1" class="quantity form-control" value="<?= $barang["stok"] ?>">
	                                  </div>
																	</div>
																</div>
		                          </div>
															<div class="modal-footer">
			                          <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
			                          <button type="submit" class="btn btn-tambah-stok">Tambah</button>
			                        </div>
														</form>
	                      </div>
	                  </div>
	              </div>
	              <div class="modal fade" id="edit<?= $id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                  <div class="modal-dialog" role="document">
	                      <div class="modal-content">
	                          <div class="modal-header">
	                              <h3 class="modal-title" id="exampleModalLabel">Edit Data</h3    >
	                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                  <span aria-hidden="true">&times;</span>
	                              </button>
	                          </div>
	                          <div class="modal-body">
	                              <center><h3 class="modal-title" id="exampleModalLabel">Data <?= $barang["nama_barang"] ?></h3></center>
	                              <!-- Insert Form here -->
	                              <form method="POST" action="<?php echo site_url('kelola_toko/edit_barang') ?>" enctype="multipart/form-data">
	                                  <div class="form-group">
	                                      <label for="exampleInputEmail1">Kode Barang</label>
	                                      <input type="text" class="form-control" value="<?= $barang["barang_id"] ?>" disabled>
	                                      <input type="hidden" name="kode_barang" value="<?= $barang["barang_id"] ?>">
	                                  </div>
	                                  <div class="form-group">
	                                      <label for="exampleInputEmail1">Nama Barang</label>
	                                      <input type="text" class="form-control" name="nama_barang" value="<?= $barang["nama_barang"] ?>">
	                                  </div>
	                                  <div class="form-group">
	                                      <label for="exampleInputEmail1">Harga</label>
	                                      <input type="text" class="form-control" name="harga" value="<?= $barang["harga"] ?>">
	                                  </div>
	                                  <div class="form-group">
	                                      <label for="exampleInputPassword1">Deskripsi</label>
	                                      <input type="text" class="form-control" name="desc" value="<?= $barang["deskripsi_b"] ?>">
	                                  </div>
	                                  <div class="form-group">
	                                      <label for="exampleInputEmail1">Stok</label>
	                                      <input type="text" class="form-control" name="stok" value="<?= $barang["stok"] ?>">
	                                  </div>
	                                  <div class="form-group">
	                                      <label for="exampleInputEmail1">Gambar</label>
	                                      <input type="file" name="userfile" size="20" value="<?= $barang["images"] ?>" >
	                                  </div>
	                                  <button type="submit" name="edit" class="btn btn-primary btn-block">Submit</button>
	                              </form>
	                          </div>
	                      </div>
	                  </div>
	              </div>
	              <div class="modal fade" id="del<?= $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                  <div class="modal-dialog" role="document">
	                      <div class="modal-content">
	                          <div class="modal-header">
	                              <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
	                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                  <span aria-hidden="true">&times;</span>
	                              </button>
	                          </div>
	                          <div class="modal-body">
	                              <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete <?= $barang["nama_barang"] ?> ?</h5>
	                          </div>
	                          <div class="modal-footer">
	                              <form method="POST" action="<?php echo site_url('kelola_toko/delete_barang') ?>">
	                                  <input type="hidden" name="kode_barang" value="<?= $id ?>">
	                                  <button type="submit" name="delete" class="btn btn-danger">Ya</a>
	                              </form>
	                              <button type="button" class="btn btn-tambah-stok" data-dismiss="modal">Tidak</button>
	                          </div>
	                      </div>
	                  </div>
	              </div>
	              <?php
	                  }
	              ?>
	          </tbody>
	      </table>
	  </div>
	</div>
</div>
