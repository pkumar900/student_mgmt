<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daily_expenses extends AUTH_Controller {

	 function __construct() { 
         parent::__construct(); 
         $this->load->model('Expenss_model'); 
       
      } 

	public function index()
	{
		if(!empty($this->input->post()))
        {
            $data['all_data']=$this->Expenss_model->view_expenssby_filter();
        }
        else
        {
            $data['all_data']=$this->Expenss_model->view_expenss();
        }
		
        $data['l_month']=$this->Expenss_model->view_expensslmonth();
        $data['c_month']=$this->Expenss_model->view_expensscmonth();
        $data['total_exp']=$this->Expenss_model->view_expenss_total();
		// print_r($data['all_branch']);
		// exit;
		$this->load->view('panel/daily_expenses',$data);
	}

    public function view_expenssby_id()
    {
        $id=$this->input->post('id');
        $data=$this->Expenss_model->view_expenssby_id($id);
        $html=' <div>'.form_open('Daily_expenses/Edit').'
            <div class="row">
              <div class="form-group col-md-3">
                <label for="pname">Product Name</label>
                <input type="text" class="form-control" name="product" required="" id="pname" value="'.$data[0]->product.'" placeholder="Enter Product">
              </div>
              <div class="form-group col-md-3">
                <label for="name">Quantity</label>
                <input type="number" class="form-control" required name="qty" id="qty1" value="'.$data[0]->qty.'" placeholder="Enter Quantity">
              </div>
              <div class="form-group col-md-3">
                <label for="name">Amount/per</label>
                <input type="text" class="form-control" required name="p_price" onkeyup="edit_set_tamount()" id="p_price1" value="'.$data[0]->p_price.'" placeholder="Enter Amount/per">
              </div>
              <div class="form-group col-md-3">
                <label for="name">Total Amount</label>
                <input type="text" class="form-control" required name="t_price" id="t_price1" readonly  value="'.$data[0]->t_price.'"  placeholder="Enter Total Amount">
              </div>
            </div>
            <input type="hidden" name="id" value="'.base64_encode($data[0]->id).'">
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>';
      echo $html;
       
    }

	public function Add()
 	{
      
        $this->form_validation->set_rules('product', 'Product', 'required');
        $this->form_validation->set_error_delimiters('<p style="color:red">', '</p>');
        if ($this->form_validation->run() === FALSE)
        {
           redirect('Daily_expenses');
        } 
        else

        {	 
        	if(Duplicate_data('tbl_daily_expense','product',$this->input->post('product')))
        	{
        	   $this->session->set_flashdata('msg','<div class="alert alert-danger">Product Already Exists.</div>');
            	redirect('Daily_expenses');
        	}

            else if($this->Expenss_model->add())
            {
            	 $this->session->set_flashdata('msg', '<div class="alert alert-success">Product Added successfully.</div>');

           		 redirect('Daily_expenses');
            }
            else
            {
            	$this->session->set_flashdata('msg', '<div class="alert alert-danger"><strong>Oops!</strong>Something Went Wrong.</div>');
            	redirect('Daily_expenses');
            }
            
        }
    }

    public function Edit()
  {
      
        
        $this->form_validation->set_rules('product', 'Product', 'required');
        $this->form_validation->set_error_delimiters('<p style="color:red">', '</p>');
     
        $this->form_validation->set_error_delimiters('<p style="color:red">', '</p>');
        if ($this->form_validation->run() === FALSE)
        {
           redirect('Daily_expenses');
        } 
        else
        {  
          if(Duplicate_data('tbl_daily_expense','product',$this->input->post('product'),base64_decode($this->input->post('id')),'id'))
          {
            $this->session->set_flashdata('msg','<div class="alert alert-danger">Product Already Exists.</div>');
            redirect('Daily_expenses');
               // $this->load->view('panel/starter',$data);
          }

            else if($this->Expenss_model->edit(base64_decode($this->input->post('id'))))
            {
               $this->session->set_flashdata('msg', '<div class="alert alert-success">Product Updated successfully.</div>');

               redirect('Daily_expenses');
            }
            else
            {
              $this->session->set_flashdata('msg', '<div class="alert alert-danger"><strong>Oops!</strong>Something Went Wrong.</div>');
              redirect('Daily_expenses');
            }
            
        }
    }
    public function delete()
	{
		$id=$this->input->post('id');
		if($this->Expenss_model->delete($id))
		{
			echo "Product Deleted Successfully.";
		}
		else
		{
			echo "Something Went Wrong.";
		}
		
	}
	
}
