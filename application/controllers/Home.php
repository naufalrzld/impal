<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('Barang_Model');
	}

	public function index()
	{
		$data['barang'] = $this->Barang_Model->get_barang();
		$this->load->view('index', $data);

	}

	
