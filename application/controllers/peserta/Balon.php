<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Balon extends CI_Controller {

	//load model

	public function __construct()
	{
		parent::__construct();
		$this->load->model('balon_model');
		$this->load->model('hasil_balon_model');

		$this->simple_login->cek_login();
	}

	public function index()
	{
		$id_user 		= $this->session->userdata('id_user');
		$profile 		= $this->user_model->detail($id_user);
		$balon          = $this->balon_model->listing();
		$hasil_balon 	= $this->hasil_balon_model->list($id_user); 
        $users 			= $this->user_model->list();
		$data =array('title' 		=> 'Data Bakal Calon Ketua',
					 'balon'  	    => $balon,
					 'users'  		=> $users,
					'hasil_balon'  	=> $hasil_balon,
                    'profile'  		=> $profile,
					 'isi'   		=> 'peserta/balon/list'

			);
		$this->load->view('peserta/layout/wrapper', $data, FALSE);
	}

	public function vote($id_balon) {


		$id_user 		= $this->session->userdata('id_user');
		$balon       	= $this->balon_model->detail($id_balon);

		

		$data = array( 
			'id_user'  		 => $id_user,
			'id_balon'  	=> $id_balon,
			'is_vote_balon'     => 1
		);
		$this->hasil_balon_model->vote($data);
		$this->session->set_flashdata('sukses', 'Anda Sudah Melakukan Vote');

		redirect(base_url('peserta/balon'));

	}

	public function chart_balon() {
		$id_user 		= $this->session->userdata('id_user');
		$profile 		= $this->user_model->detail($id_user);

        $data = [
			'title' 		=> 'Hasil Voting Bakal Calon Ketua',
			'profile'  		=> $profile,
            'isi' => "peserta/balon/chart_balon",
        ];
		$this->load->view('peserta/layout/wrapper', $data, FALSE);
    }
}

/* End of file Balon.php */
/* Location: ./application/controllers/peserta/balon.php */