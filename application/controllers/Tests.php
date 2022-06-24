<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tests extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index($id = 0)
	{
		if(!$this->session->userdata('id')){
			header("Location:".base_url());
		}
		$this->load->model('tests_model');
		if($id != 0){
			$cdata['courses'] = $this->tests_model->get_courses_by_cat($id);
		}
		else{
			$cdata['courses'] = $this->tests_model->get_courses();
		}
		
		$cdata['categories'] = $this->tests_model->get_categories();

		$this->data['title'] = 'Tests';
		$this->load->view('templates/header_view', $this->data);
		$this->load->view('templates/navigation_view');
		$this->load->view('templates/tests_view', $cdata);
		$this->load->view('templates/footer_view');
	}


}