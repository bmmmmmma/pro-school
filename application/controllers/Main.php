<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->data['title'] = 'Main';
		$this->load->view('templates/header_view', $this->data);
		$this->load->view('templates/navigation_view');
		$this->load->view('templates/main_view');
		$this->load->view('templates/footer_view');
		
	}


}