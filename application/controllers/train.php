<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Train extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Menu_model','Menu');
	}

	public function index()
	{
		$result['CC'] = $this->Menu->show();
		$this->load->view('index',$result);
	}
	
	
	public function insert(){
		$data = array(
				't_id' => $this->input->post("t_id"),
				't_name' => $this->input->post("t_name"),
				't_out'=> $this->input->post("t_out"),
				'h_to'=> $this->input->post("h_to"),
				'h_out'=> $this->input->post("h_out"),
				'f_name'=> $this->input->post("f_name"),
				'f_out'=> $this->input->post("f_out"),
				'type'=> $this->input->post("type"),
		);

		$this->Menu->InsertData($data);
		$this->load->view('index');
	}
		
		public function FromIn() 
	{
		$this->load->view('insert');
	}

	

	
	
		

	

}


