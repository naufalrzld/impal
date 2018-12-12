<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	*
	*/
	class Register extends CI_Controller {
		function index() {
			$data['error'] = $this->session->flashdata("error");
			$this->load->view("v_register", $data);
		}

		function addNewUser() {
			$name = $this->input->post("name");
			$email = $this->input->post("email");
			$jk = $this->input->post("jk");
			$no_tlp = $this->input->post("no_tlp");
			$password = $this->input->post("password");

			$this->load->model("register_model");

			$checkEmail = $this->register_model->checkEmail($email);

			if (count($checkEmail) == 0) {
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

				$this->register_model->create($data_login, $data_member);

				//Mengarahkan ke satu halaman
				redirect("login");
			} else {
				$this->session->set_flashdata("error", "Email sudah terdafar!");
				redirect("register");
			}
		}
	}
?>
