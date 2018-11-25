<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	*
	*/
	class Login_Model extends CI_Model {
		function read($email, $password) {
			// if(!empty($where)) $this->db->where($where);
			$query = $this->db->query("SELECT m.member_id, m.email, m.nama, m.no_tlp, m.jenis_kelamin, m.alamat, m.foto, l.status
				FROM member m, login l WHERE l.email=m.email AND l.email='$email' AND l.password='$password'");

			if($query->num_rows() != 0) {
				return $query->row();
			} else {
				return array();
			}
		}
	}
?>
