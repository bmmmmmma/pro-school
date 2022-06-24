<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Result extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index($id = 0)
	{
		$this->load->model('result_model');
		$cdata['attempt'] = $this->result_model->get_attempt_by_id($id);
		$cdata['questions'] = $this->result_model->get_questions_by_course_id($cdata['attempt'][0]['course_id']);
		$cdata['options'] = $this->result_model->get_options();
		$cdata['course'] = $this->result_model->get_course_by_id($cdata['attempt'][0]['course_id']);		
		$cdata['categories'] = $this->result_model->get_categories();
		$this->data['title'] = 'Attempt';
		$this->load->view('templates/header_view', $this->data);
		$this->load->view('templates/navigation_view');
		$this->load->view('templates/result_view', $cdata);
		$this->load->view('templates/footer_view');
	}


}