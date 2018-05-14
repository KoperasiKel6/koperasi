<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrUser extends CI_Controller {

	public function __construct()
	{ 
		parent::__construct();
		$this->load->model('User');
	}
 
	public function index()
	{
		$data['user'] = $this->User->get_file();
		$this->load->view('TampilUser', $data);
	}
	public function view($kode){
		$x['data']=$this->User->get_anggota_by_kode($kode);
		$this->load->view('TampilUserLengkap',$x);
	}
}