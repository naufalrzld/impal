  <!-- Body Index -->
	<div class="container">
    <div class="row">
			<div class="col-md-6 col-sm-6 col-xs-6">
				<h4>Detail Pengiriman</h4>
				<div class="people">
					<form action="<?php echo site_url("cart/checkout")?>" method="post">
						<div class="row form-register">
							<div class="col-sm-12">
								<label>Nama penerima :</label>
								<input type="text" class="form-control oval" aria-describedby="inputGroup-sizing-default" placeholder="Nama Penerima" name="name" value="<?php echo $user["nama"] ?>">
							</div>
						</div>
						<div class="row form-register">
							<div class="col-sm-12">
								<label>Nomor telepon :</label>
								<input type="text" class="form-control oval" aria-describedby="inputGroup-sizing-default" placeholder="Nomor Telepon" name="no_tlp" value="<?php echo $user["no_tlp"] ?>">
							</div>
						</div>
						<div class="row form-register">
							<div class="col-sm-12">
								<label>Alamat :</label>
								<textarea class="form-control oval" id="exampleFormControlTextarea1" rows="3" placeholder="Alamat" name="alamat"/><?php echo $user["alamat"] ?></textarea>
							</div>
						</div>
						<div class="row form-register">
							<div class="col-sm-12">
								<button class="btn btn-outline-danger btn-login">Checkout</button>
							</div>
						</div>
					</form>
				</div>
			</div>
      <div class="col-md-6 col-sm-6 col-xs-6">
        <h4>Keranjang</h4>
        <table class="table table-striped">
          <thead>
            <tr>
							<th>Gambar</th>
              <th>Produk</th>
              <th>Harga</th>
              <th>Qty</th>
              <th>Subtotal</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="detail_cart">
          </tbody>
        </table>
				<a href="<?php echo site_url("dashboard"); ?>">
					<button class="btn btn-outline-danger btn-tambah-barang oval">Belanja Kembali</button>
				</a>
      </div>
    </div>
		<!-- <div class="row">
			<div class="col-md-6 col-sm-6 col-xs-6">
				<a href="<?php echo site_url("dashboard"); ?>">
					<button class="btn btn-outline-danger btn-tambah-barang">Belanja Kembali</button>
				</a>
			</div>
		</div> -->
  </div>
    <!-- List Barang End -->
