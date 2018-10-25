<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model{
	public function get_data()
	{
		$id_user = $this->session->userdata('id_user');
		$w 	= $this->db->where('id_user', $id_user)
					   ->get('user');

		return $w->result();
	}

	public function totalUser(){
		return $this->db->get('user')->num_rows();
	}

	public function totalBarangLelang(){
		return $this->db->where('status', 1)->get('list_lelang')->num_rows();
	}

	public function totalHasilLelang(){
		return $this->db->get('hasil_lelang')->num_rows();
	}

	public function getWinner(){
		$data = $this->db->query("SELECT nama_pelelang, divisi_pelelang, nama_penawar, divisi_penawar, nama_brg, harga_lelang, max(harga_tawaran) as terbesar FROM hasil_lelang GROUP BY nama_brg order by id_hasil_lelang asc");

		return $data->result();
	}

}

?>