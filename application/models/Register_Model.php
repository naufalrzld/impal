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
	}
?>