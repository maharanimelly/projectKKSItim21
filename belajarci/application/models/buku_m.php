<?php if  ( ! defined('BASEPATH')) exit ('No direct script access allowed');

class Buku_m extends CI_Model
{
	private $table_name = 'buku';

	function __construct()
	{
		parent :: __construct();
	}

	function get_records($criteria ='', $order ='', $limit ='', $offset = 0 )
	{
		$this->db->select('*');
		$this->db->from($this->table_name);
		if ($criteria !='')
			$this->db->where($criteria);
		if ($order !='')
			$this->db->order_by($order);
		if ($limit !='')
			$this->db->limit($limit, $offset);
		$query = $this->db->get();
		return $query;
	}

	function insert($data)
	{
		$query = $this->db->insert($this->table_name, $data);
		return $query;
	}

	function update_by_id($data, $id)
	{
		$this->db->where("id_buku= '$id'"	);
		$query = $this->db->update($this->table_name, $data);
		return $query;
	}

	function delete_by_id($id)
	{
		$query = $this->db->delete($this->table_name, "id_buku = '$id'");
		return $query;
	}
}