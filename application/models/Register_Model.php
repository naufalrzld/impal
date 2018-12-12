<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	*
	*/
	class Register_Model extends CI_Model {
		function create($data_login, $data_member){
			//Bentuk Umum: $this->db->insert("nama_table", $data);
			$this->db->insert("login", $data_login);
			$this->db->insert("member", $data_member);
		}

		function checkEmail($email) {
			// if(!empty($where)) $this->db->where($where);
			$this->db->where("email", $email);
			return $this->db->get("member")->result_array();
		}
	}
?>
