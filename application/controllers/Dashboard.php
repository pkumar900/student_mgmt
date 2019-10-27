<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends AUTH_Controller {

	 function __construct() { 
         parent::__construct(); 
         $this->load->model('Dashboard_model'); 
 
      }
 
	public function index()
	{
      if(!empty($this->input->post()))
      {
        $data['all_stuednt']=$this->Dashboard_model->view_studentby_filter();
      }
      else
      {
        $data['all_stuednt']=$this->Dashboard_model->view_student();
      }
		  
      $data['tw']=$this->Dashboard_model->view_studentby_class('12');
      $data['el']=$this->Dashboard_model->view_studentby_class('11');
      $data['total_coll']=$this->Dashboard_model->total_coll();
      // print_r($data['total_coll']);
      // exit;
		$this->load->view('panel/starter',$data);
	}

  public function add_payment()
  {
    // $data['all_branch']=$this->Dashboard_model->view_branch();
     $data=$this->Dashboard_model->add_payment();
      // $this->student_details();
    // $this->load->view('panel/starter',$data);
  }

	public function Add()
 	{
      
        $data['title'] = 'Add Employee';
        $this->form_validation->set_rules('student', 'Name', 'required');
        $this->form_validation->set_rules('aadhar', 'Aadhar', 'required');
     
        $this->form_validation->set_error_delimiters('<p style="color:red">', '</p>');
        if ($this->form_validation->run() === FALSE)
        {
           $this->load->view('panel/starter',$data);
        } 
        else
        {	 
        	if(Duplicate_data('tbl_student','aadhar',$this->input->post('aadhar')))
        	{
        		$data['msg']='<div class="alert alert-danger">Student Already Exists.</div>';
            	 $this->load->view('panel/starter',$data);
        	}

            else if($this->Dashboard_model->add())
            {
            	 $this->session->set_flashdata('msg', '<div class="alert alert-success">Student Added successfully.</div>');

           		 redirect('Dashboard');
            }
            else
            {
            	$this->session->set_flashdata('msg', '<div class="alert alert-danger"><strong>Oops!</strong>Something Went Wrong.</div>');
            	$this->load->view('panel/starter',$data);
            }
            
        }
    }
    public function Edit()
  {
      
        
        $this->form_validation->set_rules('student', 'Name', 'required');
        $this->form_validation->set_rules('aadhar', 'Aadhar', 'required');
     
        $this->form_validation->set_error_delimiters('<p style="color:red">', '</p>');
        if ($this->form_validation->run() === FALSE)
        {
           $this->load->view('panel/starter',$data);
        } 
        else
        {  
          if(Duplicate_data('tbl_student','aadhar',$this->input->post('aadhar'),base64_decode($this->input->post('id')),'id'))
          {
            $this->session->set_flashdata('msg','<div class="alert alert-danger">Student Already Exists.</div>');
            redirect('Dashboard');
               // $this->load->view('panel/starter',$data);
          }

            else if($this->Dashboard_model->edit(base64_decode($this->input->post('id'))))
            {
               $this->session->set_flashdata('msg', '<div class="alert alert-success">Student Updated successfully.</div>');

               redirect('Dashboard');
            }
            else
            {
              $this->session->set_flashdata('msg', '<div class="alert alert-danger"><strong>Oops!</strong>Something Went Wrong.</div>');
              $this->load->view('panel/starter',$data);
            }
            
        }
    }

    public function student_details()
    {

    	 $id=$this->input->post('id');
    	 $data=$this->Dashboard_model->view_studentby_id($id);
       $payments_array=$this->Dashboard_model->view_payment($id);
       $hindi=!empty($data[0]->hindi)?'checked':'';
       $eng=!empty($data[0]->eng)?'checked':'';
       $marathi=!empty($data[0]->marathi)?'checked':'';
       $physics=!empty($data[0]->physics)?'checked':'';
       $math=!empty($data[0]->math)?'checked':'';
       $chemistry=!empty($data[0]->chemistry)?'checked':'';
       $bio=!empty($data[0]->bio)?'checked':'';
       $geaomatry=!empty($data[0]->geaomatry)?'checked':'';
       $History=!empty($data[0]->History)?'checked':'';
       $p_science=!empty($data[0]->p_science)?'checked':'';
       $e_science=!empty($data[0]->e_science)?'checked':'';
       $as_shikshan=!empty($data[0]->as_shikshan)?'checked':'';
       if($data[0]->gender==1)
       {
        $gender='Male';
       }
       else if($data[0]->gender==2)
       {
        $gender='Female';
       }
       else
       {
        $gender='Other';
       }
       $payment='';
       foreach ($payments_array as $key => $value) {
          $t_payed=$t_payed+$value->amount;
         $payment.=' <tr>
                      <td style="cursor: no-drop;">'.($key+1).'</td>
                      <td style="cursor: no-drop;">'.$value->student_name.'</td>
                      <td style="cursor: no-drop;">'.$value->payment_mode.'</td>
                      <td>'.$value->paid_by.'</td>
                      <td>'.$value->added_date.'</td>
                      <td>'.$value->amount.'</td>
                    </tr>';
       }
                   $due=$data[0]->fees-$t_payed;
                   $payment.='<tr>
                      <td colspan="2"></td>
                      <td><b>Total Balance: </b> '.$data[0]->fees.'/-</td>
                      <td><b>Total Paid:</b> '.$t_payed.'/-</td>
                      <td><b>Remaning Balance:</b> '.$due.'/-</td>
                    </tr>';

    	$html='<div>
          <form action="/action_page.php">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name" name="p_colleg_name" id="p_colleg_name">Privious College Name:</label> &nbsp;&nbsp;<span>'.$data[0]->p_college_name.'</span>
              </div>
              <div class="form-group col-md-6">
                <label for="email" name="p_year_class" id="p_year_class">Privious Year & Class:</label>&nbsp;&nbsp;<span>'.$data[0]->p_college_name.'</span>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name" name="p">Privious Admission Year:</label>&nbsp;&nbsp;<span>'.$data[0]->p_college_name.'</span>
              </div>
              <div class="form-group col-md-6">
                <label for="name">Current Admission Year:</label>&nbsp;&nbsp;<span>'.$data[0]->p_college_name.'</span>
              </div> 
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Father Full Name:</label>&nbsp;&nbsp;<span>'.$data[0]->father.'</span>
              </div>
              <div class="form-group col-md-6">
                <label for="email">Mother Full Name</label>&nbsp;&nbsp;<span>'.$data[0]->mother.'</span>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Student Full Name:</label>&nbsp;&nbsp;<span>'.$data[0]->student_name.'</span>
              </div>
              <div class="form-group col-md-6">
                <label for="email">Student Class:</label>&nbsp;&nbsp;<span>'.$data[0]->class.'th'.'</span>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Date of Birth:</label>&nbsp;&nbsp;<span>'.$data[0]->dob.'</span>
              </div>
              <div class="form-group col-md-6">
                <label for="email">Permanent Address:</label>&nbsp;&nbsp;<span>'.$data[0]->p_address.'</span>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Religion & Cast:</label>&nbsp;&nbsp;<span>'.$data[0]->religion.'</span>
              </div>
              <div class="form-group col-md-6">
                <label for="email">Student Gender:</label>&nbsp;&nbsp;<span>'.$gender.'</span>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Contact Number:</label>&nbsp;&nbsp;<span>'.$data[0]->contact_number.'</span>
              </div>
              <div class="form-group col-md-6">
                <label for="email">Parent Contact Number:</label>&nbsp;&nbsp;<span>'.$data[0]->p_contact_number.'</span>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Parent Occupation:</label>&nbsp;&nbsp;<span>'.$data[0]->p_occupation.'</span>
              </div>
              <div class="form-group col-md-6">
                <label for="email">Aadhar  Number:</label>&nbsp;&nbsp;<span>'.$data[0]->aadhar.'</span>
              </div>
            </div>
             <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Student Fees:</label>&nbsp;&nbsp;<span>'.$data[0]->fees.'</span>
              </div>
              
            </div>
            <div class="row">
              <div class="col-md-12">
                <label for="name">Select Subject</label><br>
                <form>
                  <label class="checkbox-inline">
                    <input type="checkbox" disabled '.$marathi.'  value="">Marathi
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" disabled '.$hindi.' value="">Hindi
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox"  disabled '.$eng.' value="">English
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" disabled '.$physics.' value="">Phiysics
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" disabled '.$chemistry.' value="">Chemistry
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" disabled '.$bio.' value="">Biology
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" disabled '.$math.' value="">Math
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" disabled '.$geaomatry.' value="">Geaomatry
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" disabled '.$History.' value="">History
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" disabled '.$p_science.' value="">Political Science
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" disabled '.$e_science.' value="">Environmental Science
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" disabled '.$as_shikshan.' value="">Arogya Sharirik Shikshan
                  </label>
                </form>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-6">
                <h4>Payment Detail</h4>
              </div>
              <div class="col-md-6">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#payment_modal">Add Payment</button>
                <!-- <button type="submit" class="btn btn-primary">Add Payment</button> -->
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 table-responsive">          
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Sr. No.</th>
                      <th>Student Name</th>
                      <th>Payment Mode</th>
                      <th>Paid By</th>
                      <th>Payment Date</th>
                      <th>Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                  
                   '.$payment.'
                  </tbody>
                </table>
              </div>
            </div>
            <!-- <button type="submit" class="btn btn-primary">Save Changes</button>
            <button type="submit" class="btn btn-primary pull-right">Close</button>
          </form>-->
        </div>';
        echo $html;	
    }

    public function view_studentby_id()
    {

       $id=$this->input->post('id');
       $data=$this->Dashboard_model->view_studentby_id($id);
       $payments_array=$this->Dashboard_model->view_payment($id);
       $hindi=!empty($data[0]->hindi)?'checked':'';
       $eng=!empty($data[0]->eng)?'checked':'';
       $marathi=!empty($data[0]->marathi)?'checked':'';
       $physics=!empty($data[0]->physics)?'checked':'';
       $math=!empty($data[0]->math)?'checked':'';
       $chemistry=!empty($data[0]->chemistry)?'checked':'';
       $bio=!empty($data[0]->bio)?'checked':'';
       $geaomatry=!empty($data[0]->geaomatry)?'checked':'';
       $History=!empty($data[0]->History)?'checked':'';
       $p_science=!empty($data[0]->p_science)?'checked':'';
       $e_science=!empty($data[0]->e_science)?'checked':'';
       $as_shikshan=!empty($data[0]->as_shikshan)?'checked':'';
       $class=!empty($data[0]->class==11)?'selected':'';
       $class1=!empty($data[0]->class1==12)?'selected':'';
       if($data[0]->gender==1)
       {
        $gender='selected';
       }
       else if($data[0]->gender==2)
       {
        $gender1='selected';
       }
       else
       {
        $gender2='selected';
       }
      
      $html=' <div>'.form_open('Dashboard/Edit').'
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Privious College Name</label>
                <input type="text" class="form-control" name="p_college_name" id="p_colleg_name" value="'.$data[0]->p_college_name.'" required="" placeholder="Enter Privious College Name">
              </div>
              <div class="form-group col-md-6">
                <label for="name">Privious Year & Class</label>
                <input type="text" class="form-control" name="p_year_class" id="p_year_class" value="'.$data[0]->p_year_class.'" required="" placeholder="Enter Privious Year & Class">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Privious Admission Year</label>
                <input type="text" required="" class="form-control" name="p_adm_year" id="p_adm_year" value="'.$data[0]->p_adm_year.'" placeholder="Enter Privious Admission Year">
              </div>
              <div class="form-group col-md-6">
                <label for="name">Current Admission Year</label>
                <input type="text" class="form-control" name="c_adm_year" id="c_adm_year" value="'.$data[0]->c_adm_year.'" required="" placeholder="Enter Current Admission Year">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Father Full Name</label>
                <input type="text" class="form-control" required="" name="father" id="father" value="'.$data[0]->father.'" placeholder="Father Full Name">
              </div>
              <div class="form-group col-md-6">
                <label for="name">Mother Full Name</label>
                <input type="text" required="" class="form-control" name="mother" id="mother" value="'.$data[0]->mother.'" placeholder="Mother Full Name">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Student Full Name (Sirname First)</label>
                <input type="text" class="form-control" required="" name="student" id="student" value="'.$data[0]->student_name.'" placeholder="Enter Student Full Name">
              </div>
              <div class="form-group col-md-6">
                <label for="sel1">Student Class</label>
                <select class="form-control" name="class" id="class">
                  <option>Select Class</option>
                  <option value="11" '.$class.'>11th (Sci)</option>
                  <option value="12" '.$class.'>12th (Sci)</option>
                  <!-- <option>11th & 12th (Sci)</option> -->
                </select>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Date of Birth</label>
                <input type="text" class="form-control" required="" name="dob" id="dob" value="'.$data[0]->dob.'" placeholder="Date of Birth">
              </div>
              <div class="form-group col-md-6">
                <label for="p_address">Permanent Address</label>
                <input type="text" class="form-control" required="" name="p_address" id="p_address" value="'.$data[0]->p_address.'" placeholder="Permonth Address">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Religion & Cast</label>
                <input type="text" class="form-control" name="religion" id="religion" value="'.$data[0]->religion.'" placeholder="Relision & Cast">
              </div>
              <div class="form-group col-md-6">
                <label for="sel1">Student Gender</label>
                <select class="form-control" name="gender" required="" id="gender">
                  <option>Select Gender</option>
                  <option value="1" '.$gender.'>Female</option>
                  <option value="2" '.$gender1.'>Male</option>
                  <option value="3" '.$gender2.'>Other</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Contact Number</label>
                <input type="text" class="form-control" name="contact" id="contact" value="'.$data[0]->contact.'" placeholder="Student Contact Number">
              </div>
              <div class="form-group col-md-6">
                <label for="p_contact_number">Parent Contact Number</label>
                <input type="text" class="form-control" name="p_contact_number" id="p_contact_number" value="'.$data[0]->p_contact_number.'" placeholder="Parent Contact Number">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="p_occuaption">Parent Occupation</label>
                <input type="text" class="form-control" name="p_occuaption" id="p_occuaption" value="'.$data[0]->p_occuaption.'" placeholder="Parent Occupation">
              </div>
              <div class="form-group col-md-6">
                <label for="name">Aadhar Number</label>
                <input type="text" class="form-control" name="aadhar" required="" id="aadhar" value="'.$data[0]->aadhar.'" placeholder="Aadhar Number">
              </div>
            </div>
            <div class="form-group col-md-6">
                <label for="fees">Student Fess</label>
                <input type="Number" class="form-control" value="'.$data[0]->fees.'" name="fees" id="fees" placeholder="Fees" required="">
              </div>
             <div class="row">
              <div class="col-md-12">
                <label for="name">Select Subject</label><br>
                
                  <label class="checkbox-inline">
                    <input type="checkbox"  '.$marathi.' name="marathi"  value="1">Marathi
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox"  '.$hindi.' name="hindi"  value="1">Hindi
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox"  '.$eng.' name="eng" value="1">English
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox"  '.$physics.' name="physics" value="1">Phiysics
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox"  '.$chemistry.' name="chemistry" value="1">Chemistry
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox"  '.$bio.' name="bio" value="1">Biology
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox"  '.$math.' name="math"  value="1">Math
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox"  '.$geaomatry.' name="geaomatry" value="1">Geaomatry
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox"  '.$History.' name="History" value="1">History
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox"  '.$p_science.' name="p_science" value="1">Political Science
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" '.$e_science.' name="e_science" value="1">Environmental Science
                  </label>
                  <label class="checkbox-inline">
                    <input type="checkbox" name="as_shikshan" '.$as_shikshan.' value="1">Arogya Sharirik Shikshan
                  </label>
              </div>
            </div>
            <input type="hidden" name="id" value="'.base64_encode($id).'">
            <button type="submit"  class="btn btn-primary">Submit</button>
          </form>
        </div>';
        echo $html; 
    }
}
