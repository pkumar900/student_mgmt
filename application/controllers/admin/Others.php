<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Others extends AUTH_Controller {

     function __construct() { 
         parent::__construct(); 
         $this->load->model('Other_model'); 
 
      } 

    public function index()
    {
        $data['title']="Other Expenses";
        $data['all_expenses']=$this->Other_model->view_expenses();
        // print_r($data['all_branch']);
        // exit;
        template('other/other',$data);
    }
   
   public function Add()
    {
      
        $data['title'] = 'Add Other Expenses';
        $this->form_validation->set_rules('price', 'Price', 'required');
        $this->form_validation->set_rules('desc', 'Description', 'required');
        $this->form_validation->set_error_delimiters('<p style="color:red">', '</p>');
        if ($this->form_validation->run() === FALSE)
        {
           template('other/add-other',$data);
        } 
        else
        {
          
            if($this->Other_model->add())
            {
                 $this->session->set_flashdata('msg', '<div class="alert alert-success">Expenses Added successfully.</div>');

                 redirect('admin/Others');
            }
            else
            {
                $this->session->set_flashdata('msg', '<div class="alert alert-success"><strong>Oops!</strong>Something Went Wrong.</div>');
                template('other/add-other',$data);
            }
            
        }
    }
    public function delete()
    {
        $id=$this->input->post('id');
        if($this->Enquiry_model->delete($id))
        {
            echo "Enquiry Deleted Successfully.";
        }
        else
        {
            echo "Something Went Wrong.";
        }
        
    }
    
}
