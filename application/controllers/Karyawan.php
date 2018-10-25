<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller {

	function __construct(){
		parent::__construct();
		if (!$this->session->userdata('id_user')) {
			redirect(base_url());
		}
		$this->load->model('M_crud');
	}

	function permintaan_lelang(){
		$data['judul'] = 'My App | Input Lelang';
		$data['nama'] = $this->session->userdata('username');
		$data['divisi'] = $this->session->userdata('divisi');
		$this->template->display('karyawan/input', $data);
	}

	function entryLelang(){
		if($_POST){
			$config['upload_path'] = "./asset/images/lelang/";
			$config['allowed_types'] = 'gif|jpg|png';
			$this->load->library('upload',$config);
			
			if ($this->upload->do_upload('gambar')){
				$gambar = array('upload_data' => $this->upload->data());
				$data = array(
					'nama' => $this->input->post('nama'),
					'divisi' => $this->input->post('divisi'),
					'nama_brg' => $this->input->post('nm_brg'),
					'gambar' => $gambar['upload_data']['file_name']
				);

				$this->M_crud->InsertLelang($data,'tambah_lelang');
				redirect('dashboard');
			}
		} else {
			redirect('karyawan/permintaan_lelang');
		}
	}

	function voting(){
		$data['judul'] = 'My App | Voting Online';
		$data['username'] = $this->session->userdata('username');
		$data['divisi'] = $this->session->userdata('divisi');
		$data['list_lelang'] = $this->M_crud->getReadyLelang();

		foreach ($data['list_lelang'] as $value) {
			$stts = $this->M_crud->statusFilter($value->nama_brg, $data['username']);
			$data['hasil_lelang'][] = $stts;
		}

		$this->template->display('karyawan/voting',$data);
	}

	function votingProcess(){
		if ($_POST) {
				$data = array(
					'nama_pelelang'		=> $this->input->post('nama_pelelang'),
					'divisi_pelelang'	=> $this->input->post('div_pelelang'),
					'nama_penawar'		=> $this->input->post('nama'),
					'divisi_penawar'	=> $this->input->post('divisi'),
					'nama_brg'			=> $this->input->post('nm_brg'),
					'harga_lelang'		=> $this->input->post('hrg_lelang'),
					'harga_tawaran'		=> $this->input->post('harga_pw'),
					'gambar'			=> $this->input->post('gambar')
				);

				$this->M_crud->insertResult($data, 'hasil_lelang');
		} else {
			redirect('karyawan/voting');
		}
	}

}

?>