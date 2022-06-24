<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tests_model extends CI_Model {

	public function get_categories()
	{
		$this->db->select('*');
		$this->db->from('category');
		$mquery = $this->db->get();
		return $mquery->result_array();
	}


	public function get_courses()
	{
		$this->db->select('*');
		$this->db->from('courses');
		$mquery = $this->db->get();
		return $mquery->result_array();
	}

	public function get_course_by_id($id)
	{
		$this->db->select('*');
		$this->db->where("id", $id);
		$this->db->from('courses');
		$mquery = $this->db->get();
		return $mquery->result_array();
	}
	public function get_themes_by_course($id)
	{
		$this->db->select('*');
		$this->db->where("course_id", $id);
		$this->db->from('themes');
		$mquery = $this->db->get();
		return $mquery->result_array();
	}


	public function get_courses_by_cat($id)
	{
		$this->db->select('*');
		$this->db->where("category", $id);
		$this->db->from('courses');
		$mquery = $this->db->get();
		return $mquery->result_array();
	}

	public function update_room_by_id($id, $up)
	{
		$this->db->where('id', $id);
		$this->db->update('rooms', $up);
	}
	public function update_archive_by_id($id, $up)
	{
		$this->db->where('id', $id);
		$this->db->update('archive', $up);
	}
	public function get_date()
	{
		$this->db->select('*');
		$this->db->order_by('date', 'desc');
		$this->db->from('archive');
		$mquery = $this->db->get();
		return $mquery->result_array();
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