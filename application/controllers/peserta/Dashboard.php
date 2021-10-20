<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('hasil_balon_model');
		$this->load->model('hasil_calon_model');

		$this->simple_login->cek_login();
	}

	// halaman utama dashboard
	public function index()
	{
		$id_user 		= $this->session->userdata('id_user');
		$profile 		= $this->user_model->detail($id_user);
		$users 			= $this->user_model->list();
		$total_peserta        = $this->user_model->total_peserta();
		$total_peninjau        = $this->user_model->total_peninjau();
		$hasil_vote 	= $this->hasil_balon_model->hasil_vote();
		$hasil_vote_calon = $this->hasil_calon_model->hasil_vote(); 
 

		$data = array('title' 	=> 'Dashboard',
					  'profile'	=>	$profile,
					  'users'  		=> $users,
					  'total_peserta'	=>	$total_peserta,
					  'total_peninjau'	=>	$total_peninjau,

					   'hasil_vote' => $hasil_vote,
					   'hasil_vote_calon' => $hasil_vote_calon,

					  'isi'   	=> 'peserta/dashboard/list'

			);
		$this->load->view('peserta/layout/wrapper', $data, FALSE);
	}

	
	public function chart() {
        $data = [
            'isi' => "peserta/dashboard/list",
        ];
		$this->load->view('peserta/layout/wrapper', $data, FALSE);
    }

	
}

/* End of file Dashboard.php */
/* Location: ./application/controllers/peserta/Dashboard.php */