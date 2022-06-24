<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Archive extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index($id = 0)
	{
		
		$this->load->model('archive_model');

		if($id > 0){


			if(isset($_POST['update_archive'])){
				$res = '';
				for($i = 1; $i <= 4; ++$i){
					for($j = 1; $j <= 8; ++$j){
						if(strval($_POST[$j.'_'.$i]) != "")
							$res = $res.strval($_POST[$j.'_'.$i]).',';
					}
				}
				$up['data'] = $res;
				$cdata['archive'] = $this->archive_model->update_archive_by_id($id, $up);
			}

			$cdata['archive'] = $this->archive_model->get_archive_by_id($id);
			$cdata['arr'] = explode(',', $cdata['archive'][0]['data']);
			for($i = 0; $i < count($cdata['arr']); ++$i){
				$cdata['arr'][$i] = trim($cdata['arr'][$i]);
			}
			$cdata['rooms'] = $this->archive_model->get_rooms();
			$this->data['title'] = 'Архив. '.$cdata['archive'][0]['month'].'.'.$cdata['archive'][0]['year'];
			$this->load->view('templates/header_view', $this->data);
			$this->load->view('templates/navigation_view');
			$this->load->view('templates/archive_view', $cdata);
			$this->load->view('templates/footer_view');
		}
		else{

			if(isset($_POST['add_arch'])){
				$add['month'] = $_POST['month'];
				$add['year'] = $_POST['year'];
				$add['date'] = $_POST['year'].'-'.$_POST['month'].'-01';
				$this->archive_model->add_archive($add);
			}
			if(isset($_POST['add'])){
				$cdata['add'] = 1;
			}
			if(isset($_POST['delete_archive'])){
				$this->archive_model->delete_archive_by_id($_POST['delete_archive']);
			}

			$cdata['archives'] = $this->archive_model->get_archive();

			$this->data['title'] = 'Архив';
			$this->load->view('templates/header_view', $this->data);
			$this->load->view('templates/navigation_view');
			$this->load->view('templates/archive_view', $cdata);
			$this->load->view('templates/footer_view');
		}
	}


}