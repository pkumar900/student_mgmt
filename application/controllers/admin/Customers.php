<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends AUTH_Controller {

	 function __construct() { 
         parent::__construct(); 
         $this->load->model('Customer_model'); 
 
      } 

	public function index()
	{
		$data['title']="Customers";
		$data['all_data']=$this->Customer_model->view_customer();

		template('customer/customer',$data);
	}

    public function details($id)
    {
        $id=base64_decode($id);
        $data['title']="Customer Details";
        $data['all_data']=$this->Customer_model->view_customerby_id($id);
        $this->Customer_model->seen_status($id);
        template('customer/customer',$data);
    }
     public function Handels()
    {
        $data['title']="Customer Details";
        $data['all_data']=$this->Customer_model->handel_customer();
        template('customer/handle_customer',$data);
    }
	public function Add()
 	{
      
        $data['title'] = 'Add Customer';
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_error_delimiters('<p style="color:red">', '</p>');
        $data['branch']=$this->Customer_model->view_branch();
        if ($this->form_validation->run() === FALSE)
        {
           template('customer/add-customer',$data);
        } 
        else
        {
           
            if($this->Customer_model->add())
            {
            	 $this->session->set_flashdata('msg', '<div class="alert alert-success">Customer Added successfully.</div>');

           		 redirect('admin/Customers');
            }
            else
            {
            	$this->session->set_flashdata('msg', '<div class="alert alert-success"><strong>Oops!</strong>Something Went Wrong.</div>');
            	template('customer/customer',$data);
            }
            
        }
    }

    public function generate_token($id='')
    {
        $data['id']=base64_decode($id);
        $data['title'] = 'Generate Token';
        $this->form_validation->set_rules('price', 'Price', 'required');
        $this->form_validation->set_rules('desc', 'Description', 'required');
        $this->form_validation->set_error_delimiters('<p style="color:red">', '</p>');
        $data['all_data']=$this->Customer_model->view_tokens($data['id']);
        $data['data']=$this->Customer_model->view_customerby_id($data['id']);
        $data['employees']=$this->Customer_model->view_employee();
        if ($this->form_validation->run() === FALSE)
        {
           template('customer/token',$data);
        } 
        else
        {
           
            if($this->Customer_model->token_add())
            {
                 $this->session->set_flashdata('msg', '<div class="alert alert-success">Token Generated successfully.</div>');

                 redirect('admin/Customers/generate_token/'.$this->input->post('customer_id'));
            }
            else
            {
                $this->session->set_flashdata('msg', '<div class="alert alert-success"><strong>Oops!</strong>Something Went Wrong.</div>');
                template('customer/token',$data);
            }
            
        }
    }
    public function Edit($id='')
 	{
      	$id=base64_decode($id);
        $data['title'] = 'Edit Customer';
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_error_delimiters('<p style="color:red">', '</p>');
        $data['data']=$this->Customer_model->view_customerby_id($id);
        if ($this->form_validation->run() === FALSE)
        {
           template('customer/edit-customer',$data);
        } 
        else
        {
           $id=base64_decode($this->input->post('id'));
           
           if(Duplicate_data('tbl_customer','email',$this->input->post('email'),$id,'id'))
            {
                $data['data']=$this->Customer_model->view_customerby_id($id);
                $data['msg']='<div class="alert alert-danger">Email Already Exists.</div>';
                
                template('customer/edit-customer',$data);
            }
            else
            if($this->Customer_model->edit($id))
            {
            	 $this->session->set_flashdata('msg', '<div class="alert alert-success">Customer Updated successfully.</div>');

           		 redirect('admin/Customers');
            }
            else
            {
                $data['data']=$this->Customer_model->view_customerby_id($id);
            	$this->session->set_flashdata('msg', '<div class="alert alert-success"><strong>Oops!</strong>Something Went Wrong.</div>');
            	template('customer/edit-customer',$data);
            }
            
        }
    }

    public function delete()
    {
        $id=$this->input->post('id');
        if($this->Customer_model->delete($id))
        {
            echo "Customer Deleted Successfully.";
        }
        else
        {
            echo "Something Went Wrong.";
        }
    }
	
    public function assign_employee()
    {
        $employee=$this->input->post('employee');
        $token=$this->input->post('customer');
        if($this->Customer_model->assign_employee($employee,$token))
        {
            echo "Assigned Successfully.";
        }
        else
        {
            echo "Something Went Wrong.";
        }
    }
}
