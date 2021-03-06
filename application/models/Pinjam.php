<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pinjam extends CI_Model {

	public function get_pinjaman(){
		$query = $this->db->get('pinjaman');
		return $query->result_array();
	}
	public function get_single_pinjaman($id)
	{
		$query = $this->db->query('SELECT * from pinjaman WHERE id_pinjaman='.$id);
		return $query->result();
	}

	public function get_all_pinjam(){
		$query = $this->db->get('pinjaman');
		return $query->result(); 
	}


	public function insert()
	{
		$data = array(
			'id_pinjaman' => '',
			'besar_pinjaman' => $this->input->post('besar_pinjaman'),
			'sisa_angsuran' => $this->input->post('besar_pinjaman'),
			'tanggal_pinjaman' => $this->input->post('tanggal_pinjaman'),
			'id_anggota' => $this->input->post('id_anggota'),
			'tangga_pelunasan' => $this->input->post('tangga_pelunasan')
		);

		$this->db->insert('pinjaman', $data);
	}


	public function delete($id){
		$query = $this->db->query('DELETE from pinjaman WHERE id_pinjaman= '.$id);
	}
}