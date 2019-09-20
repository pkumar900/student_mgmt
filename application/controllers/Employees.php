<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees extends AUTH_Controller {

	 function __construct() { 
         parent::__construct(); 
         $this->load->model('Employee_model'); 
      
 
      } 

	public function index()
	{
		$data['title']="Employees";
		$data['all_data']=$this->Employee_model->view_employee();
		// print_r($data['all_branch']);
		// exit;
		template('employee/employee',$data);
	}

	public function Add()
 	{
        if($this->session->userdata('role')!=0)
        {
            redirect('Dashboard','refresh');
        } 
      
        $data['title'] = 'Add Employee';
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('branch_id', 'Branch', 'required');
        $this->form_validation->set_rules('role', 'Role', 'required');
        $this->form_validation->set_error_delimiters('<p style="color:red">', '</p>');
        $data['branch']=$this->Employee_model->view_branch();
        if ($this->form_validation->run() === FALSE)
        {
           template('employee/add-employee',$data);
        } 
        else

        {	 
        	if(Duplicate_data('tbl_admin','email',$this->input->post('email')))
        	{
        		$data['msg']='<div class="alert alert-danger">Email Already Exists.</div>';
            	template('employee/add-employee',$data);
        	}

            else if($this->Employee_model->add())
            {
            	 $this->session->set_flashdata('msg', '<div class="alert alert-success">Employee Added successfully.</div>');

           		 redirect('Employees');
            }
            else
            {
            	$this->session->set_flashdata('msg', '<div class="alert alert-danger"><strong>Oops!</strong>Something Went Wrong.</div>');
            	template('employee/add-employee',$data);
            }
            
        }
    }

    public function Edit($id='')
 	{
      	$id=base64_decode($id);
        $data['title'] = 'Edit Employee';
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('role', 'Role', 'required');
        $this->form_validation->set_error_delimiters('<p style="color:red">', '</p>');
        $data['data']=$this->Employee_model->view_employeeby_id($id);
        $data['branch']=$this->Employee_model->view_branch();
        if ($this->form_validation->run() === FALSE)
        {
           template('employee/edit-employee',$data);
        } 
        else
        {
           $id=base64_decode($this->input->post('admin_id'));
          
            if(Duplicate_data('tbl_admin','email',$this->input->post('email'),$id,'id'))
            {
                $data['data']=$this->Employee_model->view_employeeby_id($id);
                $data['msg']='<div class="alert alert-danger">Email Already Exists.</div>';
                
                template('employee/edit-employee',$data);
            }
            else
            if($this->Employee_model->edit($id))
            {
            	 $this->session->set_flashdata('msg', '<div class="alert alert-success">Employee Updated successfully.</div>');

           		 redirect('Employees');
            }
            else
            {
            	 $data['data']=$this->Employee_model->view_employeeby_id($id);
            	$this->session->set_flashdata('msg', '<div class="alert alert-success"><strong>Oops!</strong>Something Went Wrong.</div>');
            	template('employee/edit-employee',$data);
            }
            
        }
    }

    public function delete()
	{
		$id=$this->input->post('id');
		if($this->Employee_model->delete($id))
		{
			echo "Employee Deleted Successfully.";
		}
		else
		{
			echo "Something Went Wrong.";
		}
		
	}
	
}
