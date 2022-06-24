<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		
		$data['title'] = 'Авторизация';

		if($this->input->post('enter')) {	
			$this->load->model('login_model');
			// echo $this->input->post('field_login').' '.$this->input->post('field_password');

			// die();
			if($this->login_model->verify($this->input->post('field_login'), $this->input->post('field_password'))) {

					$temp = $this->login_model->get_user_by_login($this->input->post('field_login'));
					$session_data = array(
						'id'		=> $temp[0]['id'],
				        'username'  => $temp[0]['first_name'].' '.$temp[0]['name'],
				        'logged_in' => date('Y-m-d H:i:s')
					);
					
					$this->session->set_userdata($session_data);
					redirect(base_url().'index.php/courses', 'refresh');
					
			} else {
				$data['wrongLoginPassword'] = 1;
			}
		} 

		$this->load->view('templates/login_view', $data);
	}

	public function logout()
	{
		unset($_SESSION['id']);
		unset($_SESSION['username']);
		// $this->session->sess_destroy();

		redirect(base_url(),'refresh');
	}
	 
}