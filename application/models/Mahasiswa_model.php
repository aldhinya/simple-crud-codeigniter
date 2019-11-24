<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{

	private $_table = "mahasiswa";

	public function __construct()
	{
		parent::__construct();
	}

	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}

	public function getById($id)
	{
		return $this->db->get_where($this->_table, array("id" => $id))->row();
	}

	public function add($data)
	{
		$this->db->insert($this->_table,$data);
	}

	function edit_data($where){
		return $this->db->get_where($this->_table,$where)->result();
	}

	function update($where,$data){
		$this->db->where($where);
		$this->db->update($this->_table,$data);
	}

	public function delete($where)
	{
		return $this->db->delete($this->_table, $where);
	}

}
?>
