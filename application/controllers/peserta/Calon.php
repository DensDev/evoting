<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calon extends CI_Controller {

	//load model

	public function __construct()
	{
		parent::__construct();
		$this->load->model('calon_model');
		$this->load->model('hasil_calon_model');

		$this->simple_login->cek_login();
	}

	public function index()
	{
		$id_user 		= $this->session->userdata('id_user');
		$profile 		= $this->user_model->detail($id_user);
		$calon          = $this->calon_model->listing();
		$hasil_calon 	= $this->hasil_calon_model->list($id_user); 
		$users 			= $this->user_model->list();

		$data =array('title' 		=> 'Data Calon Ketua',
					 'calon'  	    => $calon,
					 'users'  		=> $users,
					 'hasil_calon'  	=> $hasil_calon,
                    'profile'  		=> $profile,
					 'isi'   		=> 'peserta/calon/list'

			);
		$this->load->view('peserta/layout/wrapper', $data, FALSE);
	}

	public function vote($id_calon) {


		$id_user 		= $this->session->userdata('id_user');
		$calon       	= $this->calon_model->detail($id_calon);

		

		$data = array( 
			'id_user'  		 => $id_user,
			'id_calon'  	=> $id_calon,
			'is_vote_calon'     => 1
		);
		$this->hasil_calon_model->vote($data);
		$this->session->set_flashdata('sukses', 'Anda Sudah Melakukan Vote');

		redirect(base_url('peserta/calon'));

	}

	public function chart_calon() {
		$id_user 		= $this->session->userdata('id_user');
		$profile 		= $this->user_model->detail($id_user);

        $data = [
			'title' 		=> 'Hasil Voting Calon Ketua',
			'profile'  		=> $profile,
            'isi' => "peserta/calon/chart_calon",
        ];
		$this->load->view('peserta/layout/wrapper', $data, FALSE);
    }


}

/* End of file Calon.php */
/* Location: ./application/controllers/peserta/calon.php */