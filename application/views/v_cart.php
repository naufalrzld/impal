  <!-- Body Index -->
	<div class="container">
      <!-- List Barang Begin -->
    <div class="row">
        <div class="col-md-8 col-sm-8 col-xs-8">
          <h4>Shopping Cart</h4>
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
        </div>
    </div>
		<div class="row">
			<div class="col-md-8 col-sm-8 col-xs-8">
				<a href="<?php echo site_url("dashboard"); ?>">
					<button class="btn btn-outline-danger btn-tambah-barang">Belanja Kembali</button>
				</a>
			</div>
		</div>
  </div>
    <!-- List Barang End -->
