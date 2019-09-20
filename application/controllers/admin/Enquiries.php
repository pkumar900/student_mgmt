<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiries extends AUTH_Controller {

     function __construct() { 
         parent::__construct(); 
         $this->load->model('Enquiry_model'); 
 
      } 

    public function index()
    {
        $data['title']="Enquiries";
        $data['all_data']=$this->Enquiry_model->view_enquiry();
        // print_r($data['all_branch']);
        // exit;
        template('enquiry/enquiry',$data);
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
