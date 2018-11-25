<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* 
	*/
	class M_detail_barang extends CI_Model {
		function read($id_barang) {
			// if(!empty($where)) $this->db->where($where);
			$query = $this->db->query("SELECT m.member_id, m.foto, b.barang_id, b.images, b.nama_barang,b.harga, b.informasi, b.spesifikasi, b.deskripsi, b.catatan, t.toko_id, t.nama_toko, t.alamat 
				FROM member m, barang b, toko t WHERE t.member_id=m.member_id AND t.toko_id=b.toko_id AND b.barang_id='$id_barang'");
			if($query->num_rows() != 0) {
				return $query->row();
			} else {
				return result_array();
			}
		}
		function get_data($barang_id){
			$this->db->where("b.barang_id", $barang_id);
			$barang_ida=$barang_id-2;
			$this->db->where("t.toko_id",$barang_ida);
			$this->db->where("m.member_id",$barang_ida);
			$query = $this->db->get("barang b,toko t,member m");
			
			return $query->result_array();
		}
		function baca() {
			// if(!empty($where)) $this->db->where($where);
			$query = $this->db->query("SELECT m.member_id, m.email, m.nama, m.no_tlp, m.jenis_kelamin, m.alamat, m.foto
				FROM member m, login l WHERE l.email=m.email");
			
			if($query->num_rows() != 0) {
				return $query->row();
			} else {
				return result_array();
			}
		}
		function addkomen($data){
			//Bentuk Umum: $this->db->insert("nama_table", $data);
			$this->db->insert("komen_b", $data);
		}
	
	}	
?>