	<div class="container">
		<div class="register">
			<div class="header">
				<h2>Edit Profil</h2>
			</div>
			<form action="<?php echo site_url("profil/editprofil")?>" method="post" enctype="multipart/form-data">
				 <?php
            		$user_data = $this->session->userdata('datauser');
          		  ?>

					<input type="text" class="form-control" aria-describedby="inputGroup-sizing-default" value="<?php echo $user_data['member_id'] ?>" disabled >
					<input type="hidden" class="form-control" aria-describedby="inputGroup-sizing-default" placeholder="member id" name="p_member_id" value="<?php echo $user_data['member_id'] ?>"><br>

					<input type="text" class="form-control" aria-describedby="inputGroup-sizing-default" placeholder="Nama Lengkap" name="p_namalengkap" value="<?php echo $user_data['nama'] ?>" ><br>

					<input type="text" class="form-control" aria-describedby="inputGroup-sizing-default" placeholder="Email" name="p_email" value="<?php echo $user_data['email'] ?>" ><br>

					<input type="text" class="form-control" aria-describedby="inputGroup-sizing-default" placeholder="Nomor Telepon" name="p_no_tlp" value="<?php echo $user_data['no_tlp'] ?>" ><br>

					<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Alamat" name="p_alamat" ><?php echo $user_data['alamat'] ?></textarea><br>

					<button class="btn btn-outline-danger btn-tambah-barang">Submit</button>
			</form>
		</div>
	</div>
