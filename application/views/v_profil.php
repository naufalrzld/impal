<?php
  $user_data = $this->session->userdata('datauser');
  $status = $user_data["status"];
  if ($status == 1) {
    $status = "Admin";
    $color = "#ED9D00";
  } else if ($status == 0) {
    $status = "Customer";
    $color = "#9f9fa0";
  }
?>
<div class="row">
  <div class="col-lg-12">
    <div class="profile-header">
      <img class="foto" src="<?php echo base_url('assets') ?>/image/uploads/<?php echo $user_data['foto'] ?>">
    </div>
  </div>
</div>
<div class="container">
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" href="#profile" role="tab" data-toggle="tab">Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#pesanan" role="tab" data-toggle="tab">Status Pesanan</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#transaction" role="tab" data-toggle="tab">Riwayat Transaksi</a>
    </li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="profile">
      <div class="row">
        <div class="col-lg-12">
          <div class="people">
            <div class="row">
              <div class="col-lg-2">
                Nama
              </div>
              <div class="col-lg-10">
                : <?php echo $user_data['nama'] ?> <span class="badge badge-secondary" style="background-color: <?php echo $color; ?>;"><?php echo $status; ?></span>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2">
                Email
              </div>
              <div class="col-lg-10">
                : <?php echo $user_data['email'] ?>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2">
                Nomor Telepon
              </div>
              <div class="col-lg-10">
                : <?php echo $user_data['no_tlp'] ?>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-2">
                Alamat
              </div>
              <div class="col-lg-8">
                : <?php echo $user_data['alamat'] ?>
              </div>
              <div class="col-lg-2">
                <a href="<?php echo site_url('profil/veditprofil')?>">
                   <button type="button" class="btn btn_edit_profil">Edit</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div role="tabpanel" class="tab-pane fade" id="pesanan">
      <div class="people">
        <div class="row">
          <div class="col-lg-12">
            <table id="tblPemesanan" class="table table-striped">
              <thead>
                <tr>
                  <th>ID Pengiriman</th>
                  <th>Nama Penerima</th>
                  <th>Nomor Telepon</th>
                  <th>Alamat</th>
                  <th>Status Pengiriman</th>
                  <th>Action</th>
                </tr>
            </thead>
            <tbody>
              <?php
                  foreach ($pengiriman as $p) {
                      $id = $p["id_pengiriman"];
              ?>
              <tr>
                  <td><?php echo $p["id_pengiriman"]; ?></td>
                  <td><?php echo $p["nama_penerima"]; ?></td>
                  <td><?php echo $p["no_tlp"]; ?></td>
                  <td><?php echo $p["alamat"]; ?></td>
                  <td>
                    <?php
                      $status = $p["status"];
                      $disabled = "";
                      if ($status == 0) {
                        $disabled = "disabled";
                        echo "Belum Dikirim";
                      } else if ($status == 1) {
                        $disabled = "enabled";
                        echo "Sedang Dikirim";
                      }
                    ?>
                  </td>
                  <td>
                      <button type="button" class="btn btn-edit" data-toggle="modal" data-target="#detail<?= $id ?>">Detail</button>
                      <button type="button" class="btn btn-tambah-stok" data-toggle="modal" data-target="#konfirmasi<?= $id ?>" <?= $disabled ?>>Terima</button>
                  </td>
              </tr>
              <div class="modal fade" id="konfirmasi<?= $id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Penerimaan</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin pesanan sudah diterima?</h5>
                          </div>
                          <div class="modal-footer">
                              <form method="POST" action="<?php echo site_url('profil/terima') ?>">
                                  <input type="hidden" name="id_pengiriman" value="<?= $id ?>">
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
            <?php
							foreach ($pengiriman as $p) {
								$id = $p["id_pengiriman"];
						?>
						<div class="modal fade" id="detail<?= $id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg">
									<div class="modal-content">
											<div class="modal-header">
													<h3 class="modal-title" id="exampleModalLabel">Detail Pesanan</h3>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
													</button>
											</div>
											<div class="modal-body">
												<table class="table table-striped">
													<thead>
															<tr>
																	<th>Kode Pemesanan</th>
																	<th>Nama Barang</th>
																	<th>Harga</th>
																	<th>Kuantitas</th>
																	<th>Total</th>
																	<th>Tanggal</th>
															</tr>
													</thead>
													<tbody>
														<?php foreach ($controller->getDetailPengiriman($id) as $p) { ?>
															<tr>
																	<td><?php echo $p["kode_pemesanan"]; ?></td>
																	<td><?php echo $p["nama_barang"]; ?></td>
																	<td><?php echo "Rp ".number_format($p["harga"]); ?></td>
																	<td><?php echo $p["kuantitas"]; ?></td>
																	<td><?php echo "Rp ".number_format($p["total"]); ?></td>
																	<td><?php echo $p["tanggal"]; ?></td>
															</tr>
														<?php } ?>
													</tbody>
												</table>
											</div>
									</div>
							</div>
						</div>
						<?php } ?>
          </div>
        </div>
      </div>
    </div>
    <div role="tabpanel" class="tab-pane fade" id="transaction">
      <div class="people">
        <div class="row">
          <div class="col-lg-12">
            <table id="tblPemesanan" class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Tanggal Pembelian</th>
                  <th>Nama Barang</th>
                  <th>Harga Satuan</th>
                  <th>Kuantitas</th>
                  <th>Total harga</th>
                </tr>
            </thead>
            <tbody>
              <?php
                foreach ($history as $trx) {
              ?>
              <tr>
                <td><?php echo $trx["kode_pemesanan"] ?></td>
                <td><?php echo $trx["tanggal"] ?></td>
                <td><?php echo $trx["nama_barang"] ?></td>
                <td><?php echo "Rp ".number_format($trx["harga"]) ?></td>
                <td><?php echo $trx["kuantitas"] ?></td>
                <td><?php echo "Rp ".number_format($trx["total"]) ?></td>
              </tr>
              <?php
                }
              ?>
            </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
