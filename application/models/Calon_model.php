<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calon_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function listing()
	{
		$this->db->select('*');
		$this->db->from('tb_calon');
		$this->db->order_by('id_calon', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function detail($id_calon)
	{
		$this->db->select('*');
		$this->db->from('tb_calon');
		$this->db->where('id_calon', $id_calon);
		$this->db->order_by('id_calon', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	public function add($data)
	{
		$this->db->insert('tb_calon', $data);
	}

	public function edit($data)
	{
		$this->db->where('id_calon', $data['id_calon']);
		$this->db->update('tb_calon',$data);
	}
	public function delete($data)
	{
		$this->db->where('id_calon', $data['id_calon']);
		$this->db->delete('tb_calon',$data);
	}

}

/* End of file calon_model.php */
/* Location: ./application/models/calon_model.php */