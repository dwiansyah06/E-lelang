<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller {

	function __construct(){
		parent::__construct();
		if (!$this->session->userdata('id_user')) {
			redirect(base_url());
		}
		$this->load->model('M_crud');
	}

	function listLelang(){
		$data['judul'] = 'My App | List Permintaan Lelang';
		$data['lelang'] = $this->M_crud->getListLelang();
		$this->template->display('manager/list-lelang',$data);
	}

	function kirimBrgLelang(){
		if ($_POST) {
			$id_lelang = $this->input->post('id_lelang');
			$data = array(
				'nama' 		=> $this->input->post('nama'),
				'divisi'	=> $this->input->post('divisi'),
				'nama_brg'	=> $this->input->post('nm_brg'),
				'harga'		=> 0,
				'gambar'	=> $this->input->post('gambar')
			);

			$this->M_crud->insertListLelang($data, 'list_lelang');

			// Update Status Lelang
			$data_upd = array('status' => 1);
			$where = array('id_lelang' => $id_lelang);
			$this->M_crud->updateStatusLelang($data_upd, $where, 'tambah_lelang');
			
		} else {
			redirect('manager/listLelang');
		}
	}

}

/* End of file Manager.php */
/* Location: ./application/controllers/Manager.php */