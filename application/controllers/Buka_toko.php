<?php 
class Buka_toko extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('toko_model');
	}
	function index()
	{
		$this->load->view('v_buka_toko');
	}
	function buat_toko(){
		$member_id = $this->session->userdata("member_id");
		$nama = $this->input->post("name");
		$desc = $this->input->post("desc");
		$alamat = $this->input->post("alamat");

		$config['upload_path']          = './assets/image/uploads/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 10000;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('userfile')) {
	        $data = array(
				"member_id" => $member_id,
				"nama_toko" => $nama,
				"deskripsi" => $desc,
				"alamat" => $alamat
			);
        } else {
        	$upload_data = $this->upload->data();
        	$image = $upload_data["file_name"];

            $data = array(
				"member_id" => $member_id,
				"nama_toko" => $nama,
				"deskripsi" => $desc,
				"alamat" => $alamat,
				"gambar" => $image
			);
			$toko_id = $this->toko_model->create($data);
			$this->session->set_userdata("has_toko", $toko_id);
			redirect('dashboard');
		}		
	}
}
