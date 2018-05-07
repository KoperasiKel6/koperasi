<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrAngsuran extends CI_Controller {

	public function __construct()
	{ 
		parent::__construct();
		$this->load->model('Nasabah');
		$this->load->model('Pinjam');
		$this->load->model('angsuran');

	}
 
	public function index()
	{
		$data['angsuran'] = $this->angsuran->get_pinjaman();
		$this->load->view('TabelAngsuran', $data);
	}

	public function tambah()
	{
		$data = array();
		$data['data'] = $this->Nasabah->get_all_nasabah();
		$data['pinjam'] = $this->Pinjam->get_all_pinjam();

		$this->load->library('form_validation');
		$this->form_validation->set_rules('id_anggota', 'besar pinjaman', 'required', array('required' => 'Isi %s terlebih dahulu , '));
		$this->form_validation->set_rules('id_pinjaman', 'tanggal pinjaman', 'required', array('required' => 'Isi %s terlebih dahulu, '));
		$this->form_validation->set_rules('tanggal_angsuran', 'id anggota', 'required', array('required' => 'Isi %s terlebih dahulu, '));
		$this->form_validation->set_rules('besar_angsuran', 'tanggal pelunasan', 'required', array('required' => 'Isi %s terlebih dahulu, '));

		if($this->form_validation->run() == FALSE){
			$this->load->view('tambahangsuran', $data);
		} else {
			if ($this->input->post('simpan')) {
				$this->angsuran->insert();
				redirect('CtrAngsuran');
			}
			$this->load->view('TabelAngsuran');
		}
	}

	public function delete($id){
		$this->angsuran->delete($id);
		redirect('CtrAngsuran');
	}
}