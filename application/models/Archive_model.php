<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Archive_model extends CI_Model {

	
	
	public function add_archive($add)
	{
		$this->db->insert('archive', $add);
	}
	public function update_archive_by_id($id, $up)
	{
		$this->db->where('id', $id);
		$this->db->update('archive', $up);
	}
	public function delete_archive_by_id($id){
		$this->db->where('id', $id);
		$this->db->delete('archive');
	}
	public function update_statustogreen_by_id($id, $up)
	{
		$this->db->where('id', $id);
		$this->db->update('rooms', $up);
	}
	public function update_count($up)
	{
		$this->db->update('count', $up);
	}
	public function update_statustored_by_id($id, $up)
	{
		$this->db->where('id', $id);
		$this->db->update('rooms', $up);
	}
	
	public function get_archive_by_id($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$this->db->from('archive');

		$mquery = $this->db->get();
		return $mquery->result_array();
	}
	public function get_archive()
	{
		$this->db->select('*');
		$this->db->order_by('date', 'desc');
		$this->db->from('archive');
		$mquery = $this->db->get();
		return $mquery->result_array();
	}
	public function get_rooms()
	{
		$this->db->select('*');
		$this->db->from('rooms');
		$mquery = $this->db->get();
		return $mquery->result_array();
	}
	public function get_count()
	{
		$this->db->select('*');
		$this->db->from('count');
		$mquery = $this->db->get();
		return $mquery->result_array();
	}
}