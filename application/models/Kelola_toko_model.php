<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	*
	*/
	class Kelola_toko_model extends CI_Model {
		function create($data){
			//Bentuk Umum: $this->db->insert("nama_table", $data);
			$this->db->insert("barang", $data);
		}
		function get_data(){
			$query = $this->db->get("barang");
			return $query->result_array();
		}
		function get_toko($id){
			$this->db->where("toko_id", $id);
			$query = $this->db->get("toko");
			return $query->row();
		}
		function update_toko($toko_id, $data) {
			$this->db->where("toko_id", $toko_id);
			$this->db->update("toko", $data);
		}
		function update_barang($barang_id, $data) {
			$this->db->where("barang_id", $barang_id);
			$this->db->update("barang", $data);
		}
		function delete($barang_id) {
			$this->db->where("barang_id", $barang_id);
			$this->db->delete("barang");
		}
	}
?>
