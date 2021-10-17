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
					 'isi'   		=> 'admin/balon/list'

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
		$valid->set_rules('nama','Nama Bakal Calon Ketua','required[tb_bakal_calon.nama]',
				array('required' => '%s harus diisi',
					));

		

		if($valid->run()===FALSE)
		{


		$data =array('title' => 'Add Bakal Calon Ketua',
                     'profile'  		=> $profile,
					 'isi'   => 'admin/balon/add'

			);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}else{
		$i = $this->input;

		$data = array( 
					   'nama'  => $i->post('nama'),
						);
		$this->balon_model->add($data);
		$this->session->set_flashdata('sukses', 'Data Bakal Calon Ketua telah ditambah');
		redirect(base_url('admin/balon'),'refresh');
	}
}

	// edit data
	public function edit($id_balon)
	{
		$id_user 		= $this->session->userdata('id_user');
		$profile 		= $this->user_model->detail($id_user);
		$balon          = $this->balon_model->detail($id_balon);
		//validasi
		$valid = $this->form_validation;
		$valid->set_rules('nama','Nama Kategori','required',
				array('required' => '%s harus diisi'));

		if($valid->run()===FALSE)
		{


		$data =array('title' => 'Edit Data Bakal Calon Ketua',
					 'balon'  =>  $balon,
					 'profile'  =>  $profile,
					 'isi'   => 'admin/balon/edit'

			);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}else{
		$i = $this->input;
		$data = array( 
					   'id_balon'    => $id_balon,
					   'nama'  => $i->post('nama'),
						);
		$this->balon_model->edit($data);
		$this->session->set_flashdata('sukses', 'Data Bakal Calon Berhasil diupdate');
		redirect(base_url('admin/balon'),'refresh');
	}

}
	public function delete($id_balon)
	{
		$data = array('id_balon' =>$id_balon);
		$this->balon_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data Bakal Calon Berhasil dihapus');
		redirect(base_url('admin/balon'),'refresh');
	}
}

/* End of file Kategori.php */
/* Location: ./application/controllers/admin/Kategori.php */