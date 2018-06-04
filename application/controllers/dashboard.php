<?php
class Dashboard extends CI_controller{

	private $module = 'dashboard';
	private $page_title = 'Dashboard';
	private $application_title = 'APLIKASI STS';

	function __construct()
	{
		parent::__construct();
		$this->load->model('Tbp_model','get_db');
	}

	function index(){
		
		# Data view
		$data['page_title'] = $this->page_title;
		//$data['application_title'] = $this->application_title;

		# Data page content
		//$data['page_content'] = 'pages/list_tbp';
		$data['page_content'] = 'dashboard/dashboard_view';

		# Load view using template
		$this->load->view('Admin/home_view',$data);
	}
}