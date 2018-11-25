<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Cart extends CI_Controller {

	public function index()
	{
		$this->load->view('v_header');
		$this->load->view('v_cart');
		$this->load->view('v_footer');
	}

	function show_cart(){ //Fungsi untuk menampilkan Cart
		$output = '';
		$no = 0;
		foreach ($this->cart->contents() as $items) {
			$no++;
			$output .='
				<tr>
					<td>'.$items['name'].'</td>
					<td>'.number_format($items['price']).'</td>
					<td>'.$items['qty'].'</td>
					<td>'.number_format($items['subtotal']).'</td>
					<td><button type="button" id="'.$items['rowid'].'" class="hapus_cart btn btn-danger btn-xs">Batal</button></td>
				</tr>
			';
		}
		$output .= '
			<tr>
				<th colspan="3">Total</th>
				<th>'.'Rp '.number_format($this->cart->total()).'</th>
				<th><button type="button" class="checkout btn btn-danger btn-xs">Checkout</button></th>
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
		foreach ($this->cart->contents() as $items) {
			$data = array(
				"member_id" => $this->session->userdata("member_id"),
				"barang_id" => $items["id"],
				"kuantitas" => $items["qty"],
				"total" => $items["price"]
			);
			$this->barang_model->addTransaction($data);

			$data = array(
				'rowid' => $items["rowid"], 
				'qty' => 0,
			);
			$this->cart->update($data);

		}
		echo $this->show_cart();
	}
}