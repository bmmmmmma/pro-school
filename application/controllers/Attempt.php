<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Attempt extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index($id = 0)
	{
		if(!$this->session->userdata('id')){
			header("Location:".base_url());
		}
		$this->load->model('attempt_model');
		if($this->attempt_model->check_attempt($this->session->userdata('id'), $id)){
			$cdata['attempt'] = $this->attempt_model->get_attempt($this->session->userdata('id'), $id);
			header("Location:".base_url().'index.php/result/index/'.$cdata['attempt'][0]['id']);
		}
		$cdata['questions'] = $this->attempt_model->get_questions_by_course_id($id);
		$cdata['options'] = $this->attempt_model->get_options();
		$cdata['course'] = $this->attempt_model->get_course_by_id($id);
		if (isset($_POST['submit'])) {
			$add['user_id'] = $this->session->userdata('id');
			$add['course_id'] = $cdata['course'][0]['id'];
			$add['result'] = "";
			$add['score'] = 0;
			foreach($cdata['questions'] as $key => $ques){
				if($_POST[$key] == $ques['answer_id']){
					$add['score'] += 1;
				}
				$add['result'] = $add['result'].$ques['id'].'-'.$_POST[$key].',';
			}
			$this->attempt_model->add_attempt($add);
			header("Location:".base_url()."index.php/attempt/index/".$id);
		}

		
		$cdata['categories'] = $this->attempt_model->get_categories();

		$this->data['title'] = 'Attempt';
		$this->load->view('templates/header_view', $this->data);
		$this->load->view('templates/navigation_view');
		$this->load->view('templates/attempt_view', $cdata);
		$this->load->view('templates/footer_view');
	}


}