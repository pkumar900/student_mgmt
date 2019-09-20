<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Stocks extends AUTH_Controller {

	 function __construct() { 
         parent::__construct(); 
         $this->load->model('Stock_model'); 
 
      } 

	public function index()
	{
		$data['title']="Stocks";
		$data['all_data']=$this->Stock_model->view_stock();
		template('stock/stock',$data);
	}

	public function Add()
 	{
      
        $data['title'] = 'Add Stock';
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');
        $this->form_validation->set_error_delimiters('<p style="color:red">', '</p>');
        $data['branch']=$this->Stock_model->view_branch();
        if ($this->form_validation->run() === FALSE)
        {
           template('stock/add-stock',$data);
        } 
        else
        {
           
            if($this->Stock_model->add())
            {
            	 $this->session->set_flashdata('msg', '<div class="alert alert-success">Stock Added successfully.</div>');

           		 redirect('admin/Stocks');
            }
            else
            {
            	$this->session->set_flashdata('msg', '<div class="alert alert-success"><strong>Oops!</strong>Something Went Wrong.</div>');
            	template('stock/stock',$data);
            }
            
        }
    }

    public function Edit($id='')
 	{
      	$id=base64_decode($id);
        $data['title'] = 'Edit Branch';
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('price', 'Price', 'required');
        $this->form_validation->set_rules('weight', 'Weight', 'required');
        $this->form_validation->set_error_delimiters('<p style="color:red">', '</p>');
        $data['data']=$this->Stock_model->view_stockby_id($id);
        $data['branch']=$this->Stock_model->view_branch();
        if ($this->form_validation->run() === FALSE)
        {
           template('stock/edit-stock',$data);
        } 
        else
        {
           $id=base64_decode($this->input->post('id'));
        
            if($this->Stock_model->edit($id))
            {
            	 $this->session->set_flashdata('msg', '<div class="alert alert-success">Stock Updated successfully.</div>');

           		 redirect('admin/Stocks');
            }
            else
            {
                $data['data']=$this->Stock_model->view_stockby_id($id);
            	$this->session->set_flashdata('msg', '<div class="alert alert-success"><strong>Oops!</strong>Something Went Wrong.</div>');
            	template('stock/edit-stock',$data);
            }
            
        }
    }

    public function delete()
    {
        $id=$this->input->post('id');
        if($this->Stock_model->delete($id))
        {
            echo "Stock Deleted Successfully.";
        }
        else
        {
            echo "Something Went Wrong.";
        }
    }
	
}
