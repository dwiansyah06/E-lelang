<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_crud extends CI_Model {

	public function InsertLelang($data,$tabel){
		$this->db->set($data);
		$this->db->insert($tabel);
	}

	public function getListLelang(){
		$data = $this->db->get('tambah_lelang');
		return $data->result();
	}

	public function insertListLelang($data,$tabel){
		$this->db->set($data);
		$this->db->insert($tabel);
	}

	public function updateStatusLelang($data, $where, $tabel){
		$this->db->where($where);
		$this->db->update($tabel,$data);
	}

	public function getReqLelang(){
		$data = $this->db->get('list_lelang');
		return $data->result();
	}

	public function menyiapkanLelang($data, $where, $tabel){
		$this->db->where($where);
		$this->db->update($tabel,$data);
	}

	public function getReadyLelang(){
		$data = $this->db->where('status', 1)
						 ->get('list_lelang');
						 
		return $data->result();
	}

	public function statusFilter($nm_brg, $nm_pnwr){
		$stts = $this->db->where('nama_penawar',$nm_pnwr)
						 ->where('nama_brg',$nm_brg)
						 ->get('hasil_lelang');

		return $stts->num_rows();
	}

	public function insertResult($data, $tabel){
		$this->db->set($data);
		$this->db->insert($tabel);
	}

	public function getResult(){
		$data = $this->db->get('hasil_lelang');
		return $data->result();
	}

}

?>