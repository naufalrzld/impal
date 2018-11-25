  <!-- Body Index -->
	<div class="container">
    <!-- Slideshow -->
    <div id="demo" class="carousel slide" data-ride="carousel">
			  <ul class="carousel-indicators">
			    <li data-target="#demo" data-slide-to="0" class="active"></li>
			    <li data-target="#demo" data-slide-to="1"></li>
			    <li data-target="#demo" data-slide-to="2"></li>
			  </ul>
         <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?php echo base_url("assets")?>/image/a.jpg" alt="Los Angeles" width="1100" height="500">
            <!-- <div class="carousel-caption">
              <h3>sale up to 30%</h3>
              <p>Berlaku sampai tanggal 25 Maret 2018</p>
            </div> -->   
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url("assets")?>/image/a.jpg" alt="Chicago" width="1100" height="500">
            <!-- <div class="carousel-caption">
              <h3>Yakali ga Order</h3>
              <p>Dapatkan Promo dari barang yang telah di order</p>
            </div> -->   
          </div>
          <div class="carousel-item">
            <img src="<?php echo base_url("assets")?>/image/c.jpg" alt="New York" width="1100" height="500">
            <!-- <div class="carousel-caption">
              <h3>Potongan Harga</h3>
              <p>Khusus pengguna BCA</p>
            </div> -->   
          </div>
        </div>
			  <a class="carousel-control-prev" href="#demo" data-slide="prev">
			    <span class="carousel-control-prev-icon"></span>
			  </a>
			  <a class="carousel-control-next" href="#demo" data-slide="next">
			    <span class="carousel-control-next-icon"></span>
			  </a>
			</div>
      <!-- SlideShow End -->

      <!-- List Barang Begin -->
    <div class="row">
      <div class="col-md-2 col-sm-4 col-xs-6">
        <div class="frame-produk">
          <div class="pro-gambar">
            <a target="_blank" href="<?php echo base_url("assets")?>/image/baju.jpg">
              <img src="<?php echo base_url("assets")?>/image/baju.jpg" class="produk img-fluid" alt="Baju">
              <img src="image/baju.jpg" class="img-fluid" alt="Trolltunga Norway" width="300px" height="200px" style="width: 175px; height: auto;">
            </a>
          </div>        
          <div class="desc">
            <h6 style="font-family: Arial; ">BEST SELLER- GAMIS BAHAN BALOTELI</h6>
            <h6 style="color: red; font-weight: bold; font-family: Arial; ">Rp.30.000</h6>
          </div>
          <div class="tombol-beli">
            <a href="detail_barang.html" class="btn btn-outline-danger btn-block mx-auto" role="button" aria-pressed="true">Detail Barang</a>
            <a href="detail_barang.html" class="btn btn-outline-danger btn-block mx-auto" role="button" aria-pressed="true">Beli</a>
          </div>
        </div>        
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6">
        <div class="frame-produk">
          <div class="pro-gambar">
            <a target="_blank" href="<?php echo base_url("assets")?>/image/tas.jpg">
              <!-- <img src="image/tas.jpg" class="img-fluid" alt="Tas" width="300px" height="200px" style="width: 175px; height: auto;"> -->
              <img src="<?php echo base_url("assets")?>/image/tas.jpg" class="produk img-fluid" alt="Tas">
            </a>
          </div>
          <div class="desc">
            <h6 style="font-family: Arial; ">BEST SELLER- Tas H&M</h6>
            <h6 style="color: red; font-weight: bold; font-family: Arial; ">Rp.340.000</h6>
          </div>
          <div class="tombol-beli">
            <button class="btn btn-outline-danger btn-block mx-auto" role="button" aria-pressed="true" onclick="detailBelumAda()">Detail Barang</button>
            <a href="detail_barang.html" class="btn btn-outline-danger btn-block mx-auto" role="button" aria-pressed="true">Beli</a>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6">
        <div class="frame-produk">
          <div class="pro-gambar">
            <a target="_blank" href="<?php echo base_url("assets")?>/image/sep.jpg">
              <!-- <img src="image/sep.jpg" class="img-fluid" alt="Trolltunga Norway" width="300px" height="200px" style="width: 175px; height: auto;"> -->
              <img src="<?php echo base_url("assets")?>assets/image/sep.jpg" class="produk img-fluid" alt="sepatu kets">
            </a>
          </div>
          <div class="desc">
            <h6 style="font-family: Arial; ">BEST SELLER- Sepatu Tory Kets</h6>
            <h6 style="color: red; font-weight: bold; font-family: Arial; ">Rp.900.000</h6>
          </div>
          <div class="tombol-beli">
            <button class="btn btn-outline-danger btn-block mx-auto" role="button" aria-pressed="true" onclick="detailBelumAda()">Detail Barang</button>
            <a href="detail_barang.html" class="btn btn-outline-danger btn-block mx-auto" role="button" aria-pressed="true">Beli</a>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6">
        <div class="frame-produk">
          <div class="pro-gambar">
            <a target="_blank" href="<?php echo base_url("assets")?>/image/dior1.jpg">
              <!-- <img src="image/dior1.jpg" class="img-fluid" alt="Trolltunga Norway" width="300px" height="200px" style="width: 175px; height: auto;"> -->
              <img src="<?php echo base_url("assets")?>/image/dior1.jpg" class="produk img-fluid" alt="Lipstik Dior">
            </a>
          </div>
          <div class="desc">
            <h6 style="font-family: Arial; ">BEST SELLER- Dior Lip Tatto</h6>
            <h6 style="color: red; font-weight: bold; font-family: Arial; ">Rp.350.000</h6>
          </div>
          <div class="tombol-beli">
            <button class="btn btn-outline-danger btn-block mx-auto" role="button" aria-pressed="true" onclick="detailBelumAda()">Detail Barang</button>
            <a href="detail_barang.html" class="btn btn-outline-danger btn-block mx-auto" role="button" aria-pressed="true">Beli</a>
          </div>
        </div>  
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6">
        <div class="frame-produk">
          <div class="pro-gambar">
            <a target="_blank" href="adidas1.jpg">
              <!-- <img src="image/baju.jpg" class="img-fluid" alt="Trolltunga Norway" width="300px" height="200px" style="width: 175px; height: auto;"> -->
              <img src="<?php echo base_url("assets")?>/image/adidas1.jpg" class="produk img-fluid" alt="Sepatu adidas">
            </a>
          </div>
          <div class="desc">
            <h6 style="font-family: Arial; ">BEST SELLER- Adidas New Generation</h6>
            <h6 style="color: red; font-weight: bold; font-family: Arial; ">Rp.1.559.000</h6>
          </div>
          <div class="tombol-beli">
           <button class="btn btn-outline-danger btn-block mx-auto" role="button" aria-pressed="true" onclick="detailBelumAda()">Detail Barang</button>
            <a href="detail_barang.html" class="btn btn-outline-danger btn-block mx-auto" role="button" aria-pressed="true">Beli</a>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6">
        <div class="frame-produk">
          <div class="pro-gambar">
            <a target="_blank" href="cet.jpg">
              <!-- <img src="image/baju.jpg" class="img-fluid" alt="Trolltunga Norway" width="300px" height="200px" style="width: 175px; height: auto;"> -->
              <img src="<?php echo base_url("assets")?>/image/cet.jpg" class="produk img-fluid" alt="Cetaphil">
            </a>
          </div>
          <div class="desc">
            <h6 style="font-family: Arial; ">BEST SELLER- Cetaphil Gantle Skin Care</h6>
            <h6 style="color: red; font-weight: bold; font-family: Arial; ">Rp.215.000</h6>
          </div>
          <div class="tombol-beli">
            <button class="btn btn-outline-danger btn-block mx-auto" role="button" aria-pressed="true" onclick="detailBelumAda()">Detail Barang</button>
            <a href="detail_barang.html" class="btn btn-outline-danger btn-block mx-auto" role="button" aria-pressed="true">Beli</a>
          </div>
        </div>
      </div>
    </div>
    <div class="tambah-baris"></div>
    <div class="row">
      <div class="col-md-2 col-sm-4 col-xs-6">
        <div class="frame-produk">
          <div class="pro-gambar">
            <a target="_blank" href="popok.jpg">
              <img src="<?php echo base_url("assets")?>/image/popok.jpg" class="produk img-fluid" alt="popok bayi">
              <!-- <img src="image/baju.jpg" class="img-fluid" alt="Trolltunga Norway" width="300px" height="200px" style="width: 175px; height: auto;"> -->
            </a>
          </div>        
          <div class="desc">
            <h6 style="font-family: Arial; ">BEST SELLER- Mamy Popok size S/M/L/XL</h6>
            <h6 style="color: red; font-weight: bold; font-family: Arial; ">Rp.175.000</h6>
          </div>
          <div class="tombol-beli">
            <button class="btn btn-outline-danger btn-block mx-auto" role="button" aria-pressed="true" onclick="detailBelumAda()">Detail Barang</button>
            <a href="detail_barang.html" class="btn btn-outline-danger btn-block mx-auto" role="button" aria-pressed="true">Beli</a>
          </div>
        </div>        
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6">
        <div class="frame-produk">
          <div class="pro-gambar">
            <a target="_blank" href="wakai.gif">
              <!-- <img src="image/tas.jpg" class="img-fluid" alt="Tas" width="300px" height="200px" style="width: 175px; height: auto;"> -->
              <img src="<?php echo base_url("assets")?>/image/wakai.gif" class="produk img-fluid" alt="">
            </a>
          </div>
          <div class="desc">
            <h6 style="font-family: Arial; ">BEST SELLER- Wakai New Old</h6>
            <h6 style="color: red; font-weight: bold; font-family: Arial; ">Rp.450.000</h6>
          </div>
          <div class="tombol-beli">
            <button class="btn btn-outline-danger btn-block mx-auto" role="button" aria-pressed="true" onclick="detailBelumAda()">Detail Barang</button>
            <a href="detail_barang.html" class="btn btn-outline-danger btn-block mx-auto" role="button" aria-pressed="true">Beli</a>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6">
        <div class="frame-produk">
          <div class="pro-gambar">
            <a target="_blank" href="lemari.jpg">
              <!-- <img src="image/sep.jpg" class="img-fluid" alt="Trolltunga Norway" width="300px" height="200px" style="width: 175px; height: auto;"> -->
              <img src="<?php echo base_url("assets")?>/image/lemari.jpg" class="produk img-fluid" alt="lemari">
            </a>
          </div>
          <div class="desc">
            <h6 style="font-family: Arial; ">BEST SELLER- Lemari </h6>
            <h6 style="color: red; font-weight: bold; font-family: Arial; ">Rp.312.000</h6>
          </div>
          <div class="tombol-beli">
            <button class="btn btn-outline-danger btn-block mx-auto" role="button" aria-pressed="true" onclick="detailBelumAda()">Detail Barang</button>
            <a href="detail_barang.html" class="btn btn-outline-danger btn-block mx-auto" role="button" aria-pressed="true">Beli</a>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6">
        <div class="frame-produk">
          <div class="pro-gambar">
            <a target="_blank" href="li.jpg">
              <!-- <img src="image/dior1.jpg" class="img-fluid" alt="Trolltunga Norway" width="300px" height="200px" style="width: 175px; height: auto;"> -->
              <img src="<?php echo base_url("assets")?>/image/baju2.jpg" class="produk img-fluid" alt="baju">
            </a>
          </div>
          <div class="desc">
            <h6 style="font-family: Arial; ">BEST SELLER- Baju XX</h6>
            <h6 style="color: red; font-weight: bold; font-family: Arial; ">Rp.150.000</h6>
          </div>
          <div class="tombol-beli">
            <button class="btn btn-outline-danger btn-block mx-auto" role="button" aria-pressed="true" onclick="detailBelumAda()">Detail Barang</button>
            <a href="detail_barang.html" class="btn btn-outline-danger btn-block mx-auto" role="button" aria-pressed="true">Beli</a>
          </div>
        </div>  
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6">
        <div class="frame-produk">
          <div class="pro-gambar">
            <a target="_blank" href="mascara.jpg">
              <!-- <img src="image/baju.jpg" class="img-fluid" alt="Trolltunga Norway" width="300px" height="200px" style="width: 175px; height: auto;"> -->
              <img src="<?php echo base_url("assets")?>/image/mascara.jpg" class="produk img-fluid" alt="mascara">
            </a>
          </div>
          <div class="desc">
            <h6 style="font-family: Arial; ">BEST SELLER- Mascara Maybelline Lash Sensational</h6>
            <h6 style="color: red; font-weight: bold; font-family: Arial; ">Rp.216.500</h6>
          </div>
          <div class="tombol-beli">
            <button class="btn btn-outline-danger btn-block mx-auto" role="button" aria-pressed="true" onclick="detailBelumAda()">Detail Barang</button>
            <a href="detail_barang.html" class="btn btn-outline-danger btn-block mx-auto" role="button" aria-pressed="true">Beli</a>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-6">
        <div class="frame-produk">
          <div class="pro-gambar">
            <a target="_blank" href="bodypack.jpg">
              <!-- <img src="image/baju.jpg" class="img-fluid" alt="Trolltunga Norway" width="300px" height="200px" style="width: 175px; height: auto;"> -->
              <img src="<?php echo base_url("assets")?>/image/bodypack.jpg" class="produk img-fluid" alt="tas bodypack">
            </a>
          </div>
          <div class="desc">
            <h6 style="font-family: Arial; ">BEST SELLER- Bodypack</h6>
            <h6 style="color: red; font-weight: bold; font-family: Arial; ">Rp.670.000</h6>
          </div>
          <div class="tombol-beli">
            <button class="btn btn-outline-danger btn-block mx-auto" role="button" aria-pressed="true" onclick="detailBelumAda()">Detail Barang</button>
            <a href="detail_barang.html" class="btn btn-outline-danger btn-block mx-auto" role="button" aria-pressed="true">Beli</a>
          </div>
        </div>
      </div>
    </div>
    <div class="tambah-baris"></div>
    <div class="row">
      <div class="col-12">
        <div class="d-flex justify-content-center">
          <nav aria-label="Page navigation example">
            <ul class="pagination">
              <!-- <li class="page-item"><a class="page-link" href="#">Previous</a></li> -->
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <!-- <li class="page-item"><a class="page-link" href="#">Next</a></li> -->
            </ul>
          </nav>
        </div>    
      </div>        
    </div>
    <!-- List Barang End -->
	</div>