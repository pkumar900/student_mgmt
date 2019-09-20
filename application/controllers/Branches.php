<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Branches extends AUTH_Controller {

	 function __construct() { 
         parent::__construct(); 
         $this->load->model('Branch_model');
        if($this->session->userdata('role')!=0)
        {
            redirect('Dashboard','refresh');
        } 
 
      } 

	public function index()
	{
		$data['title']="Branches";
		$data['all_branch']=$this->Branch_model->view_branch();
		// print_r($data['all_branch']);
		// exit;
		template('branch/branch',$data);
	}

	public function Add()
 	{
      
        $data['title'] = 'Add Branch';
        $this->form_validation->set_rules('name', 'Branch', 'required');
        $this->form_validation->set_rules('branch_code', 'Branch Code', 'required');
        $this->form_validation->set_error_delimiters('<p style="color:red">', '</p>');
        if ($this->form_validation->run() === FALSE)
        {
           template('branch/add-branch',$data);
        } 
        else
        {
            if(Duplicate_data('tbl_branch','branch_code',$this->input->post('branch_code')))
            {
                $data['msg']='<div class="alert alert-danger">Branch Code Already Exists.</div>';

                template('branch/add-branch',$data);
            }
            else
            if($this->Branch_model->add())
            {
            	 $this->session->set_flashdata('msg', '<div class="alert alert-success">Branch Added successfully.</div>');

           		 redirect('Branches');
            }
            else
            {
            	$this->session->set_flashdata('msg', '<div class="alert alert-success"><strong>Oops!</strong>Something Went Wrong.</div>');
            	template('branch/add-branch',$data);
            }
            
        }
    }

    public function Edit($id='')
 	{
      	$id=empty($id)?base64_decode($this->input->post('id')):base64_decode($id);
        $data['title'] = 'Edit Branch';
        $this->form_validation->set_rules('name', 'Branch', 'required');
        $this->form_validation->set_rules('branch_code', 'Branch Code', 'required');
        $this->form_validation->set_error_delimiters('<p style="color:red">', '</p>');
        $data['data']=$this->Branch_model->view_branchby_id($id);
        if ($this->form_validation->run() === FALSE)
        {
           template('branch/edit-branch',$data);
        } 
        else
        {
           $id=base64_decode($this->input->post('id'));
           
           if(Duplicate_data('tbl_branch','branch_code',$this->input->post('branch_code'),$id,'id'))
            {
                $data['data']=$this->Branch_model->view_branchby_id($id);
                $data['msg']='<div class="alert alert-danger">Branch Code Already Exists.</div>';
                
                template('branch/edit-branch',$data);
            }
            else
            if($this->Branch_model->edit($id))
            {
            	 $this->session->set_flashdata('msg', '<div class="alert alert-success">Branch Updated successfully.</div>');

           		 redirect('Branches');
            }
            else
            {
                $data['data']=$this->Branch_model->view_branchby_id($id);
            	$this->session->set_flashdata('msg', '<div class="alert alert-success"><strong>Oops!</strong>Something Went Wrong.</div>');
            	template('branch/edit-branch',$data);
            }
            
        }
    }

    public function email_test($id='')
	{
        $this->load->library('email');
		$this->email->from('vinaysahani67@gmail', 'Pradeep');
		$this->email->to('pksahani240795@gmail.com');
		// $this->email->cc('another@another-example.com');
		// $this->email->bcc('them@their-example.com');

		$this->email->subject('Email');
		$this->email->message('Testing');

		if($this->email->send())
		{
			echo "suucess";
		}
		else
		{
			echo $this->email->print_debugger();
		}
	}
	
}
