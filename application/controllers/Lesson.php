<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lesson extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index($id = 0)
	{
		$this->load->model('lesson_model');
		$cdata['lesson'] = $this->lesson_model->get_lesson_by_id($id);
		$cdata['courses'] = $this->lesson_model->get_courses();
		$cdata['categories'] = $this->lesson_model->get_categories();
		$this->data['title'] = 'Lesson';
		$this->load->view('templates/header_view', $this->data);
		$this->load->view('templates/navigation_view');
		$this->load->view('templates/lesson_view', $cdata);
		$this->load->view('templates/footer_view');	
	}
}