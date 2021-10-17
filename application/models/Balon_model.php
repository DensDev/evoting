<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Balon_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function listing()
	{
		$this->db->select('*');
		$this->db->from('tb_bakal_calon');
		$this->db->order_by('id_balon', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function detail($id_kategori)
	{
		$this->db->select('*');
		$this->db->from('tb_bakal_calon');
		$this->db->where('id_balon', $id_kategori);
		$this->db->order_by('id_balon', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	public function add($data)
	{
		$this->db->insert('tb_bakal_calon', $data);
	}

	public function edit($data)
	{
		$this->db->where('id_balon', $data['id_balon']);
		$this->db->update('tb_bakal_calon',$data);
	}
	public function delete($data)
	{
		$this->db->where('id_balon', $data['id_balon']);
		$this->db->delete('tb_bakal_calon',$data);
	}

}

/* End of file balon_model.php */
/* Location: ./application/models/balon_model.php */