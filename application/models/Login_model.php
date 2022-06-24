<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function get_all_users()
	{
		$this->db->select('*');
		$this->db->from('users');
		$mquery = $this->db->get();
		return $mquery->result_array();
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