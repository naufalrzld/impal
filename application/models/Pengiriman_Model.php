<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	*
	*/
	class Pengiriman_Model extends CI_Model {
		function getPengiriman($status) {
			$this->db->where("status", $status);
			return $this->db->get("pengiriman")->result_array();
		}
		function getDetailPengiriman($id_pengiriman) {
      $this->db->select('p.kode_pemesanan, b.nama_barang, b.harga, p.kuantitas, p.total, p.tanggal');
      $this->db->from('pemesanan p');
      $this->db->join('barang b', 'b.barang_id = p.barang_id');
			$this->db->where("p.id_pengiriman", $id_pengiriman);
			return $this->db->get()->result_array();
    }
		function updatePengiriman($id_pengiriman, $data) {
			$this->db->where("id_pengiriman", $id_pengiriman);
			$this->db->update("pengiriman", $data);
		}
	}
?>
