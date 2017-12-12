<?php


class Teacherdashboard extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
        $this->load->helper('url');
        $this->load->model('Subject_model');
	}

	public function index () {	
		if ($this->session->userdata('session')) {
			$data['addstud'] = $this->Subject_model->get_student();
			$this->load->view('dashboard_teacher/header');
			$this->load->view('dashboard_teacher/dashboard_menu',$data);
			$this->load->view('dashboard_teacher/footer',$data);
		}
		else {
			$this->load->view('Login/login');
		}
		
	}

}