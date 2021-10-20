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
		$total_peserta        = $this->user_model->total_peserta();
		$total_peninjau        = $this->user_model->total_peninjau();

		$data = array('title' 	=> 'Dashboard Peninjau',
					  'profile'	=>	$profile,
					  'total_peserta'	=>	$total_peserta,
					  'total_peninjau'	=>	$total_peninjau,
					  'isi'   	=> 'peninjau/dashboard/list'

			);
		$this->load->view('peninjau/layout/wrapper', $data, FALSE);
	}

	
	public function chart() {
        $data = [
            'isi' => "peninjau/dashboard/list",
        ];
		$this->load->view('peninjau/layout/wrapper', $data, FALSE);
    }

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/peninjau/Dashboard.php */