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
					 'isi'   		=> 'admin/calon/list'

			);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// add data
	public function add()
	{
		$id_user 		= $this->session->userdata('id_user');
		$profile 		= $this->user_model->detail($id_user);
		//validasi
		$valid = $this->form_validation;
		$valid->set_rules('nama','Nama Bakal Calon Ketua','required[tb_calon.nama]',
				array('required' => '%s harus diisi',
					));

		

		if($valid->run()===FALSE)
		{


		$data =array('title' => 'Add Calon Ketua',
                     'profile'  		=> $profile,
					 'isi'   => 'admin/calon/add'

			);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}else{
		$i = $this->input;

		$data = array( 
					   'nama'  => $i->post('nama'),
						);
		$this->calon_model->add($data);
		$this->session->set_flashdata('sukses', 'Data Calon Ketua telah ditambah');
		redirect(base_url('admin/calon'),'refresh');
	}
}

	// edit data
	public function edit($id_calon)
	{
		$id_user 		= $this->session->userdata('id_user');
		$profile 		= $this->user_model->detail($id_user);
		$calon          = $this->calon_model->detail($id_calon);
		//validasi
		$valid = $this->form_validation;
		$valid->set_rules('nama','Nama Calon','required',
				array('required' => '%s harus diisi'));

		if($valid->run()===FALSE)
		{


		$data =array('title' => 'Edit Data Bakal Calon Ketua',
					 'calon'  =>  $calon,
					 'profile'  =>  $profile,
					 'isi'   => 'admin/calon/edit'

			);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}else{
		$i = $this->input;
		$data = array( 
					   'id_calon'    => $id_calon,
					   'nama'  => $i->post('nama'),
						);
		$this->calon_model->edit($data);
		$this->session->set_flashdata('sukses', 'Data Calon Berhasil diupdate');
		redirect(base_url('admin/calon'),'refresh');
	}

}
	public function delete($id_calon)
	{
		$data = array('id_calon' =>$id_calon);
		$this->calon_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data Calon Berhasil dihapus');
		redirect(base_url('admin/calon'),'refresh');
	}

	public function chart_calon() {
		$id_user 		= $this->session->userdata('id_user');
		$profile 		= $this->user_model->detail($id_user);

        $data = [
			'title' 		=> 'Hasil Voting Calon Ketua',
			'profile'  		=> $profile,
            'isi' 			=> "admin/calon/chart_calon",
        ];
		$this->load->view('admin/layout/wrapper', $data, FALSE);
    }
}

/* End of file Kategori.php */
/* Location: ./application/controllers/admin/Kategori.php */