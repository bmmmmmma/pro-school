<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

	public function index()
	{
		
		$data['title'] = 'Регистрация';

		if($this->input->post('enter')) {	
			$this->load->model('registration_model');
			$this->load->model('login_model');
			$add['name'] = $_POST['field_name'];
			$add['first_name'] = $_POST['field_surname'];
			$add['email'] = $_POST['field_email'];
			$add['password'] = $_POST['field_password'];
			$this->registration_model->add_user($add);
			if($this->login_model->verify($this->input->post('field_email'), $this->input->post('field_password'))) {

					$temp = $this->login_model->get_user_by_login($this->input->post('field_email'));
					$session_data = array(
						'id'		=> $temp[0]['id'],
				        'username'  => $temp[0]['first_name'].' '.$temp[0]['name'],
				        'logged_in' => date('Y-m-d H:i:s')
					);
					
					$this->session->set_userdata($session_data);
					redirect(base_url(),'refresh');
					
			} else {
				$data['wrongLoginPassword'] = 1;
			}
		} 

		$this->load->view('templates/registration_view', $data);
	}
	 
}
