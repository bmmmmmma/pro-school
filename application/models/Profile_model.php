<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_Model {
	
	public function get_profile($id){
		$this->db->select('*');
		$this->db->where('id', $id);
		$this->db->from('users');
		$query = $this->db->get();
		return $query->result_array();	
	}
	function update_password($up, $id){
		$this->db->where('id', $id);
		$this->db->update('users', $up);
	}
	function update_name($up, $id){
		$this->db->where('id', $id);
		$this->db->update('users', $up);
	}
}

