<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('id_user')) {
			redirect(base_url());
		}
	}

	public function index()
	{
		$this->load->model('M_data');
		$data['judul'] = 'My App | Dashboard';
		$data['username'] = $this->session->userdata('username');
		$data['total_user'] = $this->M_data->totalUser();
		$data['total_brgL'] = $this->M_data->totalBarangLelang();
		$data['tot_hslLelang'] = $this->M_data->totalHasilLelang();
		$data['tertinggi'] = $this->M_data->getWinner();
		$this->template->display('dashboard',$data);
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

}
