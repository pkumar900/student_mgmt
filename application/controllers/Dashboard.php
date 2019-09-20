<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends AUTH_Controller {

	 function __construct() { 
         parent::__construct(); 
         $this->load->model('Dashboard_model'); 
 
      }

	public function index()
	{
		$data['all_branch']=$this->Dashboard_model->view_branch();
		$data['all_employee']=$this->Dashboard_model->view_employee();
		template('dashboard',$data);
	}

	public function punchin()
	{
		if($this->Dashboard_model->punchin())
		{
			echo "Punchin Suucessfully";
		}
		
	}
}
