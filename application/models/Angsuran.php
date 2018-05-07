<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Angsuran extends CI_Model {

	public function get_pinjaman(){
		$query = $this->db->get('angsuran');
		return $query->result_array();
	}
	public function get_single_pinjaman($id)
	{
		$query = $this->db->query('SELECT * from angsuran WHERE id_angsuran='.$id);
		return $query->result();
	}

	
	public function insert()
	{
		$data = array(
			'id_angsuran' => '',
			'id_anggota' => $this->input->post('id_anggota'),
			'id_pinjaman' => $this->input->post('id_pinjaman'),
			'tanggal_angsuran' => $this->input->post('tanggal_angsuran'),
			'besar_angsuran' => $this->input->post('besar_angsuran')
		);

		$this->db->insert('angsuran', $data);
	}


	public function delete($id){
		$query = $this->db->query('DELETE from angsuran WHERE id_angsuran= '.$id);
	}
}