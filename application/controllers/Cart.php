<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cart extends CI_Controller {

	public function index()
	{
		$data["user"] = $this->session->userdata("datauser");
		$this->load->view('v_header');
		$this->load->view('v_cart', $data);
		$this->load->view('v_footer');
	}

	function show_cart(){ //Fungsi untuk menampilkan Cart
		$output = '';
		$no = 0;
		foreach ($this->cart->contents() as $items) {
			$no++;
			$output .='
				<tr>
					<td><img src="'.$items['image'].'"></td>
					<td valign="center">'.$items['name'].'</td>
					<td>'.number_format($items['price']).'</td>
					<td>'.$items['qty'].'</td>
					<td>'.number_format($items['subtotal']).'</td>
					<td><button type="button" id="'.$items['rowid'].'" class="hapus_cart btn btn-danger btn-xs">Batal</button></td>
				</tr>
			';
		}
		$output .= '
			<tr>
				<th colspan="4">Total</th>
				<th colspan="2">'.'Rp '.number_format($this->cart->total()).'</th>
			</tr>
		';
		return $output;
	}

	function load_cart(){ //load data cart
		echo $this->show_cart();
	}

	public function hapus_cart(){ //fungsi untuk menghapus item cart
		$data = array(
			'rowid' => $this->input->post('row_id'),
			'qty' => 0,
		);
		$this->cart->update($data);
		echo $this->show_cart();
	}

	function checkout() {
		$this->load->model("barang_model");
		$datauser = $this->session->userdata("datauser");

		if ($datauser != null) {
			$name = $this->input->post("name");
			$no_tlp = $this->input->post("no_tlp");
			$alamat = $this->input->post("alamat");

			$dataPengiriman = array(
				"nama_penerima" => $name,
				"no_tlp" => $no_tlp,
				"alamat" => $alamat,
				"status" => 0
			);

			$id_pengiriman = $this->barang_model->addPengiriman($dataPengiriman);

			foreach ($this->cart->contents() as $items) {
				$data = array(
					"member_id" => $datauser["member_id"],
					"barang_id" => $items["id"],
					"id_pengiriman" => $id_pengiriman,
					"kuantitas" => $items["qty"],
					"total" => $items["subtotal"]
				);

				$this->barang_model->addTransaction($data);

				$data = array(
					'rowid' => $items["rowid"],
					'qty' => 0,
				);
				$this->cart->update($data);
			}
			redirect("cart");
		} else {
			redirect("login");
		}
	}
}
