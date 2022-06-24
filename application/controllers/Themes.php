<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Themes extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index($id = 0)
	{
		$this->load->model('themes_model');
		$cdata['name'] = $this->themes_model->get_course_by_id($id);
		$cdata['themes'] = $this->themes_model->get_themes_by_course($id);
		$cdata['categories'] = $this->themes_model->get_categories();
		$this->data['title'] = 'Themes';
		$this->load->view('templates/header_view', $this->data);
		$this->load->view('templates/navigation_view');
		$this->load->view('templates/themes_view', $cdata);
		$this->load->view('templates/footer_view');	
	}
}