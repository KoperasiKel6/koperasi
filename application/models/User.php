<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {

	public function get_file(){
		$query = $this->db->get('anggota');
		return $query->result();
	}
	public function get_anggota_by_kode($kode){
		$hsl=$this->db->query("SELECT * FROM anggota WHERE id_anggota=".$kode);
		return $hsl->result();
	}
}