<?php
	class Kelola_toko extends CI_Controller {
		function __construct(){
			parent::__construct();
			$this->load->model('kelola_toko_model');
			$this->load->model('pengiriman_model');
		}
		function index() {
			$member_id = $this->session->userdata("datauser")["member_id"];
			if ($member_id != null) {
				$toko_id =  $this->session->userdata("has_toko");

				$data["dataBrg"] = $this->kelola_toko_model->get_data();
				$data["pengiriman"] = $this->pengiriman_model->getPengiriman(0);
				$data["dikirim"] = $this->pengiriman_model->getPengiriman(1);
				$data["diterima"] = $this->pengiriman_model->getPengiriman(2);
				$data["controller"] = $this;
				$this->load->view("v_header");
				$this->load->view("v_kelola_toko", $data);
				$this->load->view('v_footer');
			} else {
				redirect("login");
			}
		}

		function tambah_barang() {
			$member_id = $this->session->userdata("datauser")["member_id"];
			if ($member_id != null) {
				$this->load->view('v_header');
				$this->load->view("v_tambah_barang");
				$this->load->view('v_footer');
			} else {
				redirect("login");
			}
		}

		function buat_barang(){
			$nama = $this->input->post("name");
			$harga = $this->input->post("harga");
			$stok = $this->input->post("stok");
			$desc = $this->input->post("desc");

			$config['upload_path']          = './assets/image/uploads/';
      $config['allowed_types']        = 'jpg|png';
      $config['max_size']             = 10000;

	    $this->load->library('upload', $config);

	    if ( ! $this->upload->do_upload('userfile')) {
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('v_tambah_barang', $error);
	    } else {
	    	$upload_data = $this->upload->data();
	    	$image = $upload_data["file_name"];

	      $data = array(
					"images" => $image,
					"nama_barang" => $nama,
					"harga" => $harga,
					"stok" => $stok,
					"deskripsi_b" => $desc
				);
				$this->kelola_toko_model->create($data);
				redirect('kelola_toko');
			}
		}

		function edit_barang() {
			$kode_barang = $this->input->post("kode_barang");
			$nama = $this->input->post("nama_barang");
			$harga = $this->input->post("harga");
			$desc = $this->input->post("desc");
			$stok = $this->input->post("stok");

			$config['upload_path']          = './assets/image/uploads/';
      $config['allowed_types']        = 'jpg|png';
      $config['max_size']             = 10000;

			$this->load->library('upload', $config);

	    if ($this->upload->do_upload('userfile')) {
				$upload_data = $this->upload->data();
      	$image = $upload_data["file_name"];
				$data = array(
					"images" => $image,
					"nama_barang" => $nama,
					"harga" => $harga,
					"deskripsi_b" => $desc,
					"stok" => $stok
				);
			} else {
      	$data = array(
					"nama_barang" => $nama,
					"harga" => $harga,
					"deskripsi_b" => $desc,
					"stok" => $stok
				);
      }
      $this->kelola_toko_model->update_barang($kode_barang, $data);
			redirect('kelola_toko');
		}

		function tambah_stok() {
			$kode_barang = $this->input->post("kode_barang");
			$stok = $this->input->post("stok");
			$data = array(
				"stok" => $stok
			);
			$this->kelola_toko_model->update_barang($kode_barang, $data);
			redirect('kelola_toko');
		}

		function edit_toko() {
			$toko_id = $this->session->userdata("has_toko");
			$nama = $this->input->post("nama_toko");
			$desc = $this->input->post("desc");
			$alamat = $this->input->post("alamat");

			$config['upload_path']          = './assets/image/uploads/';
      $config['allowed_types']        = 'jpg|png';
      $config['max_size']             = 10000;

			$this->load->library('upload', $config);

      if ($this->upload->do_upload('userfile')) {
        $upload_data = $this->upload->data();
      	$image = $upload_data["file_name"];
        $data = array(
					"toko_id" => $toko_id,
					"images" => $image,
					"nama_toko" => $nama,
					"deskripsi" => $desc,
					"alamat" => $alamat
				);
      } else {
      	$data = array(
          "toko_id" => $toko_id,
					"nama_toko" => $nama,
					"deskripsi" => $desc,
					"alamat" => $alamat
				);
			}
      $this->kelola_toko_model->update_toko($toko_id, $data);
			redirect('kelola_toko');
		}

		function delete_barang() {
			$kode_barang = $this->input->post("kode_barang");

			$this->kelola_toko_model->delete($kode_barang);
			redirect('kelola_toko');
		}

		function getDetailPengiriman($id_pengiriman) {
			return $this->pengiriman_model->getDetailPengiriman($id_pengiriman);
		}

		function kirim() {
			$id_pengiriman = $this->input->post("id_pengiriman");

			$data = array(
				"status" => 1
			);

			$this->pengiriman_model->updatePengiriman($id_pengiriman, $data);
			redirect("kelola_toko");
		}
	}
?>
