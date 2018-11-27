<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Pemesanan_Model extends CI_Model {
		public function get_history($member_id) {
      $this->db->select('p.kode_pemesanan, p.tanggal, b.nama_barang, b.harga, p.kuantitas, p.total');
      $this->db->from('pemesanan p');
      $this->db->join('barang b', 'b.barang_id = p.barang_id');
			$this->db->where('p.member_id', $member_id);
			return $this->db->get()->result_array();
		}
	}
