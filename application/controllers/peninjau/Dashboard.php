<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->simple_login->cek_login();
	}

	// halaman utama dashboard
	public function index()
	{
		$id_user 		= $this->session->userdata('id_user');
		$profile 		= $this->user_model->detail($id_user);
		$data = array('title' 	=> 'Dashboard',
					  'profile'	=>	$profile,
					  'isi'   	=> 'peninjau/dashboard/list'

			);
		$this->load->view('peninjau/layout/wrapper', $data, FALSE);
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/peninjau/Dashboard.php */