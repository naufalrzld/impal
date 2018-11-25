<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* 
	*/
	class Register extends CI_Controller {
		function index() {
			$this->load->view("v_register");
		}

		function addNewUser() {
			$name = $this->input->post("name");
			$email = $this->input->post("email");
			$jk = $this->input->post("jk");
			$no_tlp = $this->input->post("no_tlp");
			$password = $this->input->post("password");

			$data_login = array(
				"email" => $email,
				"password" => $password
			);

			$data_member = array(
				"email" => $email,
				"nama" => $name,
				"no_tlp" => $no_tlp,
				"jenis_kelamin" => $jk
			);

			print_r($data_member);

			$this->load->model("register_model");
			$this->register_model->create($data_login, $data_member);
			
			//Mengarahkan ke satu halaman
			redirect("login");
		}
	}
?>