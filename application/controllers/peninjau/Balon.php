<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Balon extends CI_Controller {

	//load model

	public function __construct()
	{
		parent::__construct();
		$this->load->model('balon_model');

		$this->simple_login->cek_login();
	}

	public function index()
	{
		$id_user 		= $this->session->userdata('id_user');
		$profile 		= $this->user_model->detail($id_user);
		$balon          = $this->balon_model->listing();
		$data =array('title' 		=> 'Data Bakal Calon Ketua',
					 'balon'  	    => $balon,
                    'profile'  		=> $profile,
					 'isi'   		=> 'peninjau/balon/list'

			);
		$this->load->view('peninjau/layout/wrapper', $data, FALSE);
	}

	
}

/* End of file Balon.php */
/* Location: ./application/controllers/peninjau/balon.php */