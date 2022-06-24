<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Themes_model extends CI_Model {

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
	

	function add_user($add){
		$this->db->insert('users', $add);
	}
	public function get_user_by_login($login)
	{
		$this->db->select('users.id, users.email, users.password, users.name, users.first_name');
		$this->db->from('users');
		$this->db->where('users.email = "'.$login.'"');
		$mquery = $this->db->get();
		
		return $mquery->result_array();	
	}

	public function verify($login, $password)
	{

		$this->db->select('users.email, users.password');
		$this->db->from('users');
		$this->db->where('users.email = "'.$login.'"');
		$mquery = $this->db->get()->result_array();

		if(!count($mquery)){
			return FALSE;

		}
		if($password == $mquery[0]['password'])
			return TRUE;
		
		else
			return FALSE;
	}
}