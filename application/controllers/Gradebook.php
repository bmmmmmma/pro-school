<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gradebook extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		if(!$this->session->userdata('id')){
			header("Location:".base_url());
		}
		$this->load->model('gradebook_model');

		// $cdata['attempt'] = $this->gradebook_model->get_attempt_by_id($id);
		// $cdata['questions'] = $this->gradebook_model->get_questions_by_course_id($cdata['attempt'][0]['course_id']);
		
		$cdata['courses'] = $this->gradebook_model->get_courses();
		$cdata['users'] = $this->gradebook_model->get_users();
		$cdata['attempts'] = $this->gradebook_model->get_attempts();	
		$cdata['categories'] = $this->gradebook_model->get_categories();
		$this->data['title'] = 'Gradebook';
		$this->load->view('templates/header_view', $this->data);
		$this->load->view('templates/navigation_view');
		$this->load->view('templates/gradebook_view', $cdata);
		$this->load->view('templates/footer_view');
	}


}