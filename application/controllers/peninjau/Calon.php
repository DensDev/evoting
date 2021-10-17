<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calon extends CI_Controller {

	//load model

	public function __construct()
	{
		parent::__construct();
		$this->load->model('calon_model');

		$this->simple_login->cek_login();
	}

	public function index()
	{
		$id_user 		= $this->session->userdata('id_user');
		$profile 		= $this->user_model->detail($id_user);
		$calon          = $this->calon_model->listing();
		$data =array('title' 		=> 'Data Calon Ketua',
					 'calon'  	    => $calon,
                    'profile'  		=> $profile,
					 'isi'   		=> 'peninjau/calon/list'

			);
		$this->load->view('peninjau/layout/wrapper', $data, FALSE);
	}

	
}

/* End of file Calon.php */
/* Location: ./application/controllers/peninjau/Calon.php */