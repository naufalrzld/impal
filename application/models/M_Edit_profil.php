<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* 
	*/
	class M_Edit_profil extends CI_Model {
		function edit($member_id, $data) {
			$this->db->where("member_id", $member_id);
			$this->db->update("member", $data);
		}
		 function caridata($cari){
			$this->db->like('member_id', $cari);
			$query = $this->db->get ('member');
			return $query->result(); 
 		}

	}
?>