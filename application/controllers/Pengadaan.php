<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengadaan extends CI_Controller {

	function __construct(){
		parent::__construct();
		if (!$this->session->userdata('id_user')) {
			redirect('dashboard');
		}
		$this->load->model('M_crud');
	}

	function permintaanLelang(){
		$data['judul'] = 'My App | Permintaan Lelang';
		$data['content'] = $this->M_crud->getReqLelang();
		$this->template->display('pengadaan/permintaan_lelang', $data);
	}

	function readyLelang(){
		if ($_POST) {
			$data = array(
				'harga'  => $this->input->post('hrg_brg'),
				'status' => 1
			);
			$where = array('id_list_lelang' => $this->input->post('id_lelang'));

			$this->M_crud->menyiapkanLelang($data, $where, 'list_lelang');

		} else {
			redirect('pengadaan/permintaanLelang');
		}
	}

	function hasil_lelang(){
		$data['judul'] = 'My App | Lelang Result';
		$data['content'] = $this->M_crud->getResult();
		$this->template->display('pengadaan/hasil_lelang',$data);
	}

}

/* End of file Pengadaan.php */
/* Location: ./application/controllers/Pengadaan.php */