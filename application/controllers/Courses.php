<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index($id = 0)
	{
		$this->load->model('courses_model');
		if($id != 0){
			$cdata['courses'] = $this->courses_model->get_courses_by_cat($id);
		}
		else{
			$cdata['courses'] = $this->courses_model->get_courses();
		}
		
		$cdata['categories'] = $this->courses_model->get_categories();
		$this->data['title'] = 'Main';
		$this->load->view('templates/header_view', $this->data);
		$this->load->view('templates/navigation_view');
		$this->load->view('templates/courses_view', $cdata);
		$this->load->view('templates/footer_view');	
	}
}