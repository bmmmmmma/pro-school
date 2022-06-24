<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userbook extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('gradebook_model');

		$cdata['courses'] = $this->gradebook_model->get_courses();
		$cdata['users'] = $this->gradebook_model->get_users();
		$cdata['attempts'] = $this->gradebook_model->get_attempts();	
		$cdata['categories'] = $this->gradebook_model->get_categories();
		$this->data['title'] = 'Gradebook';
		$this->load->view('templates/header_view', $this->data);
		$this->load->view('templates/navigation_view');
		$this->load->view('templates/userbook_view', $cdata);
		$this->load->view('templates/footer_view');
	}


}