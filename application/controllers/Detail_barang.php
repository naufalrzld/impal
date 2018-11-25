<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Detail_barang extends CI_Controller {
	function __construct(){
			parent::__construct();
			$this->load->model('m_detail_barang');
		}
	public function index() {
			/*$dataD["dataDBrg"] = $this->m_detail_barang->read(3);*/
			$this->load->view("v_header");
			/*$dataD["dataDBrg"] = $this->m_detail_barang->read(3);*/
			$data["dataBrg"] = $this->m_detail_barang->get_data(4);
			$this->load->view("v_detail_barang",$data);

			$this->load->view("v_footer");
	}
	public function komen(){

			$komen = $this->input->post("komen");
			$barang_id = 4;

	        if ( ! $this->input->post("komen")) {
		        //komen belum diinputkan

		        $this->load->view('v_detail_barang', $error);
	        } else {
	            $datakomen = array(
	            	"komen" => $komen,
					"barang_id" =>$barang_id
				);
				$this->m_detail_barang->addkomen($datakomen);
				redirect('detail_barang/index');
	        }
	}
}
