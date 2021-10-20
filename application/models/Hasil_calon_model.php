<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil_calon_model extends CI_Model 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function listing()
	{
		$this->db->select('*');
		$this->db->from('tb_hasil_balon');
		$query = $this->db->get();
		return $query->row();
	}

	public function list($id_user)
	{
		$this->db->select('tb_hasil_calon.id_hasil_calon,
		tb_hasil_calon.id_calon,
		tb_hasil_calon.id_user,tb_hasil_calon.is_vote_calon,tb_calon.*,tb_user.*');
		$this->db->from('tb_hasil_calon');
		$this->db->join('tb_calon', 'tb_hasil_calon.id_calon = tb_calon.id_calon', 'left');
		$this->db->join('tb_user', 'tb_hasil_calon.id_user = tb_user.id_user', 'left');
		$this->db->where('tb_hasil_calon.id_user', $id_user);
		$query = $this->db->get();
		return $query->row();
	}

	public function hasil_vote()
	{
		$this->db->select(' COUNT(tb_hasil_calon.id_hasil_calon) AS total, tb_calon.nama');
		$this->db->from('tb_hasil_calon');
		$this->db->join('tb_calon', 'tb_hasil_calon.id_calon = tb_calon.id_calon', 'left');
		$this->db->group_by('tb_calon.nama');
		$query = $this->db->get();
		return $query->result();
	}

	public function detail($id_balon)
	{
		$this->db->select('*');
		$this->db->from('tb_hasil_balon');
		$this->db->where('id_balon', $id_balon);
		$query = $this->db->get();
		return $query->row();
	}

	public function vote($data)
	{
		$this->db->insert('tb_hasil_calon', $data);
	}

	public function add($data)
	{
		$this->db->insert('tb_hasil_balon', $data);
	}

	public function edit($data)
	{
		$this->db->where('id_balon', $data['id_balon']);
		$this->db->update('tb_hasil_balon',$data);
	}
	public function delete($data)
	{
		$this->db->where('id_balon', $data['id_balon']);
		$this->db->delete('tb_hasil_balon',$data);
	}

}

/* End of file balon_model.php */
/* Location: ./application/models/balon_model.php */