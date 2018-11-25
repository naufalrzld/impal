<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* 
	*/
	class Toko_Model extends CI_Model {
		function create($data){
			//Bentuk Umum: $this->db->insert("nama_table", $data);
			$this->db->insert("toko", $data);
			$insertId = $this->db->insert_id();
			return $insertId;
		}

		function cek_toko($data){
			$this->db->where($data);
			$query = $this->db->get("toko");

			if($query and $query->num_rows()!=0){
				return $query->row();
			}
			else{
				return 0;
			}
		}
	}
?>