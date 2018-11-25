<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Barang_Model');
	}

// pagination
	public function index()
	{
		$limit_per_page = 6;
        $start_index = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;

		$data['barang'] = $this->Barang_Model->get_barang($limit_per_page, $start_index);

		$config['base_url'] = base_url()."page";
		$config['total_rows'] = $this->Barang_Model->get_data_row();
		$config['per_page'] = $limit_per_page;
		$config["uri_segment"] = 2;

		$config['first_link']       = 'Pertama';
    $config['last_link']        = 'Terakhir';
    $config['next_link']        = 'Selanjutnya';
    $config['prev_link']        = 'Sebelumnya';
    $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
    $config['full_tag_close']   = '</ul></nav></div>';
    $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
    $config['num_tag_close']    = '</span></li>';
    $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
    $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
    $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
    $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['prev_tagl_close']  = '</span>Next</li>';
    $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
    $config['first_tagl_close'] = '</span></li>';
    $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
    $config['last_tagl_close']  = '</span></li>';

		$this->pagination->initialize($config);

		$data["links"] = $this->pagination->create_links();

		$this->load->view('index', $data);
	}
	// *pagitation
	// detail barang

	public function detail($barang_id)
	{
		$data['barang'] = $this->Barang_Model->detail_barang($barang_id);
		$this->load->view('v_header');
		$this->load->view('detail_barang',$data);
		$this->load->view('v_footer');
	}
	// *detail barang

	// chart
	public function addToCart() {
		$data = array(
			'id' => $this->input->post('barang_id'),
			'name' => $this->input->post('nama_barang'),
			'price' => $this->input->post('harga'),
			'qty' => $this->input->post('quantity'),
		);

		$this->cart->insert($data);
		echo "Barang sudah dimasukkan ke keranjang";
	}
	// *chart
}
