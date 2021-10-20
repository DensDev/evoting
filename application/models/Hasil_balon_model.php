<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil_balon_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function listing()
	{
		$this->db->select('*');
		$this->db->from('tb_hasil_calon');
		$query = $this->db->get();
		return $query->row();
	}

	public function list($id_user)
	{
		$this->db->select('tb_hasil_balon.id_hasil_balon,
		tb_hasil_balon.id_balon,
		tb_hasil_balon.id_user,tb_hasil_balon.is_vote_balon,tb_bakal_calon.*,tb_user.*');
		$this->db->from('tb_hasil_balon');
		$this->db->join('tb_bakal_calon', 'tb_hasil_balon.id_balon = tb_bakal_calon.id_balon', 'left');
		$this->db->join('tb_user', 'tb_hasil_balon.id_user = tb_user.id_user', 'left');
		$this->db->where('tb_hasil_balon.id_user', $id_user);
		$query = $this->db->get();
		return $query->row();
	}

	public function hasil_vote()
	{
		$this->db->select(' COUNT(tb_hasil_balon.id_hasil_balon) AS total, tb_bakal_calon.nama');
		$this->db->from('tb_hasil_balon');
		$this->db->join('tb_bakal_calon', 'tb_hasil_balon.id_balon = tb_bakal_calon.id_balon', 'left');
		$this->db->group_by('tb_bakal_calon.nama');
		$query = $this->db->get();
		return $query->result();
	}

	public function detail($id_balon)
	{
		$this->db->select('*');
		$this->db->from('tb_hasil_calon');
		$this->db->where('id_calon', $id_balon);
		$query = $this->db->get();
		return $query->row();
	}

	public function vote($data)
	{
		$this->db->insert('tb_hasil_balon', $data);
	}

}

/* End of file balon_model.php */
/* Location: ./application/models/balon_model.php */