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
    <div role="tabpanel" class="tab-pane fade" id="transaction">
      <div class="people">
        <div class="row">
          <div class="col-table col-md-12">
            <table id="tblPemesanan" class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Tanggal Pembelian</th>
                  <th>Nama Barang</th>
                  <th>Harga Satuan</th>
                  <th>Kuantitas</th>
                  <th>Total harga</th>
                  <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
              <!-- Isi -->
            </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
