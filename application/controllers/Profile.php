<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Profile extends MY_Controller {

	public function __construct()
	{
		$this->ok = 1;
		parent::__construct();
		$this->load->model('profile_model');
	}
	public function index($id1 = 0){
		// $this->load->model('profile_model');

		
		if($id1 > 0)
			$cdata['photo_an'] = 1;
		
		$cdata['users'] = $this->profile_model->get_profile($this->session->userdata('id'));
		if(isset($_POST['update_password'])){
			$cdata['change_password'] = true;
		}
		
		if(isset($_POST['update_name']))
			$cdata['update_name'] = true;

		if(isset($_POST['update_login']))
			$cdata['update_login'] = true;

		if(isset($_POST['save'])){
			if(md5($_POST['current_password']) !== $cdata['users']['0']['password'] || $_POST['new_password'] !== $_POST['new_password_confirm'] || $_POST['new_password'] === ''){
					$cdata['wrong'] = true;
			}
			else{
				$up['password'] = md5($_POST['new_password']);
				$this->profile_model->update_password($up, $cdata['users']['0']['id']);
			}
		}
		if(isset($_POST['save_name'])){
				$up['name'] = $_POST['new_name'];
				$up['first_name'] = $_POST['new_first_name'];
				$this->profile_model->update_name($up, $this->session->userdata('id'));
				$session_data = array(
				        'username'  => $up['first_name'].' '.$up['name'],
				       
					);
					
				$this->session->set_userdata($session_data);
				header('Location:./');
		}
		if(isset($_POST['save_login'])){
				$up['login'] = $_POST['new_login'];
				$this->profile_model->update_name($up, $this->session->userdata('id'));
				header('Location:./');
		}
        
		$this->data['title'] = 'Профиль';
		$cdata['users'] = $this->profile_model->get_profile($this->session->userdata('id'));
		$this->load->view('templates/header_view', $this->data);
		$this->load->view('templates/navigation_view');
		$this->load->view('templates/profile_view', $cdata);
		$this->load->view('templates/footer_view');		
	}
	

	public function do_upload()
        {
                $config['upload_path']          = './assets/images/';
                $config['allowed_types']        = 'gif|jpg|png|';
                $config['max_size']             = 100000000;
                $config['max_width']            = 30000;
                $config['max_height']           = 30000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                     header("Location:".base_url().'index.php/profile');
                       
                }
                else
                {
                    
                    // $dir    = './assets/images';
                    // $files1 = scandir($dir);
                    // $temp = $this->profile_model->get_profile(1);
                    // if($temp[0]['photo_url'] != "no-title.jpg"){
                    //     foreach ($files1 as $value) {
                    //         if($value == $temp[0]['photo_url']){
                    //             unlink('./assets/images/'.$value);
                    //             print_r($value);
                    //             break;
                    //         }
                    //     }
                    // }

                    $data = array('upload_data' => $this->upload->data());
                    $up['photo_url'] = $data['upload_data']['file_name'];
                    $this->profile_model->update_name($up, 1);
                    $session_data = array('photo_url' => $up['photo_url']);
                    $this->session->set_userdata($session_data);
                    header("Location: ./");
                }
        }

}