<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Pemesanan_Model extends CI_Model {
		function getPengiriman($member_id) {
			$this->db->select('k.id_pengiriman, k.nama_penerima, k.no_tlp, k.alamat, k.status');
			$this->db->from('pemesanan p');
      $this->db->join('member m', 'm.member_id = p.member_id');
      $this->db->join('pengiriman k', 'k.id_pengiriman = p.id_pengiriman');
			$this->db->where("m.member_id", $member_id);
			$this->db->where("k.status !=", 2);
			$this->db->group_by("p.id_pengiriman");
			return $this->db->get()->result_array();
		}
		public function get_history($member_id) {
      $this->db->select('p.kode_pemesanan, p.tanggal, b.nama_barang, b.harga, p.kuantitas, p.total');
      $this->db->from('pemesanan p');
      $this->db->join('barang b', 'b.barang_id = p.barang_id');
      $this->db->join('pengiriman k', 'k.id_pengiriman = p.id_pengiriman');
			$this->db->where('p.member_id', $member_id);
			$this->db->where('k.status', 2);
			return $this->db->get()->result_array();
		}
	}
