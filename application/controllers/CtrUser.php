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
	// 	$data['user'] = $this->User->get_file();
	// 	$this->load->view('TampilUser', $data);

	// $data['User'] = 'User';
		// Dapatkan data dari model Blog dengan pagination
 		// Jumlah artikel per halaman
 		$limit_per_page = 3;
 		// URI segment untuk mendeteksi "halaman ke berapa" dari URL
		 $start_index = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : 0;

 		// Dapatkan jumlah data
		 $total_records = $this->User->get_total();
		 if ($total_records > 0) {
 			// Dapatkan data pada halaman yg dituju
 			$data["user"] = $this->User->get_all_artikel($limit_per_page,
			$start_index);

		 // Konfigurasi pagination
 		$config['base_url'] = base_url() . 'CtrUser/index';
 		$config['total_rows'] = $total_records;
 		$config['per_page'] = $limit_per_page;
 		$config["uri_segment"] = 3;

		 $this->pagination->initialize($config);

		 // Buat link pagination
 		$data["links"] = $this->pagination->create_links();
		}

		$this->load->view('TampilUser', $data);

	}
	public function view($kode){
		$x['data']=$this->User->get_anggota_by_kode($kode);
		$this->load->view('TampilUserLengkap',$x);
	}
}