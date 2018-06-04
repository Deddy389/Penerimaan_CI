<?php defined('BASEPATH') OR exit('No direct script access allowed');

class control_tbp extends CI_controller{

	private $module = 'dashboard';
	private $page_title = 'TBP';
	private $application_title = 'APLIKASI STS';

	function __construct()
	{
		parent::__construct();
		$this->load->model('Tbp_model','get_db');
	}

	function list_tbp(){
		
		$data['show'] = $this->get_db->select('v_tbp');
		
		# Data view
		$data['page_title'] = $this->page_title;
		//$data['application_title'] = $this->application_title;

		# Data page content
		$data['page_content'] = 'pages/list_tbp';

		# Load view using template
		$this->load->view('Admin/home_view',$data);
	}

	function viewdata()
	{
		$data=$this->get_db->tbp_list();
		echo json_encode($data);
	}

	function tambah_tbp(){
		
		# Data view
		$data['page_title'] = $this->page_title;
		//$data['application_title'] = $this->application_title;

		# Data page content
		$data['page_content'] = 'pages/add_tbp';

		# Load view using template
		$this->load->view('Admin/home_view',$data);		
	}

	function simpan_tbp(){

		$data['notbp']=$this->input->post('notbp');
		$data['tgltbp']=date ('Y-m-d H:i:s',strtotime($this->input->post('tgltbp')));
		$data['uraianrbp']=$this->input->post('uraian');
		$data['tglvalid']=date('Y-m-d H:i:s', strtotime($this->input->post('tglvalid')));
		$this->get_db->insert('tbp',$data);
		
		$data2['notbp']=$this->input->post('notbp');
		$data2['kdkegunit']=$this->input->post('kdkegunit');
		$data2['nilai']=$this->input->post('nilai');
		$this->get_db->insert('tbpdetkeg',$data2);


		header('location:'.base_url().'index.php/control_tbp/list_tbp');
	}

	function edit_tbp($id=null){
		
		// $notbp='';
		// if ($this->uri->segment(3) === FALSE)
		// {
  //   			$notbp=$notbp;
		// }
		// else
		// {
  //   			$notbp = $this->uri->segment(3);
		// }
		$data["edit_tbp"]=$this->get_db->get_tbp($id);

		# Data view
		$data['page_title'] = $this->page_title;
		//$data['application_title'] = $this->application_title;

		# Data page content
		$data['page_content'] = 'pages/edit_tbp';

		# Load view using template
		$this->load->view('Admin/home_view',$data);
		
	}
}