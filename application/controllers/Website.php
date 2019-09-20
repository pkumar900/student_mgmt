<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {


    public function index() {

          $this->load->model('Website_model');
    	  $data['title']='bglooks';
    	  $data['all_branch']=$this->Website_model->view_branch();
          $this->load->view('website/index',$data);
    }

    public function Add()
 	{
      	$this->load->model('Website_model');
        $data['title'] = 'bglooks';
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_error_delimiters('<p style="color:red">', '</p>');
        if ($this->form_validation->run() === FALSE)
        {
           $this->load->view('website/index',$data);
        } 
        else
        {
          
            if($this->Website_model->add_appoinment())
            {
            	 // $this->session->set_flashdata('msg', '<div class="alert alert-success">Branch Added successfully.</div>');
            	 echo "<script>alert('Appointment added successfully');</script>";
           		 redirect('Website','refresh');
            }
            else
            {
            	$this->session->set_flashdata('msg', '<div class="alert alert-success"><strong>Oops!</strong>Something Went Wrong.</div>');
            	 $this->load->view('website/index',$data);
            }
            
        }
    }
    public function Add_enquiry()
    {
        $this->load->model('Website_model');
        $data['title'] = 'bglooks';
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_error_delimiters('<p style="color:red">', '</p>');
        if ($this->form_validation->run() === FALSE)
        {
           $this->load->view('website/index',$data);
        } 
        else
        {
          
            if($this->Website_model->add_enquiry())
            {
                 // $this->session->set_flashdata('msg', '<div class="alert alert-success">Branch Added successfully.</div>');
                 echo "<script>alert('Enquiry added successfully');</script>";
                 // $this->load->view('website/index',$data);
                 redirect('Website','refresh');
            }
            else
            {
                $this->session->set_flashdata('msg', '<div class="alert alert-success"><strong>Oops!</strong>Something Went Wrong.</div>');
                 $this->load->view('website/index',$data);
            }
            
        }
    }
      
    }