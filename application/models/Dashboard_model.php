<?php

class Dashboard_model extends CI_Model {

    public function add() {
        // User data array
        $data = array(
            'p_college_name' => $this->input->post('p_college_name'),
            'p_year_class' => $this->input->post('p_year_class'),
            'p_adm_year'=>$this->input->post('p_adm_year'),
            'c_adm_year' => !empty($this->input->post('c_adm_year'))?$this->input->post('c_adm_year'):'',
            'mother' => $this->input->post('mother'),
            'father' => $this->input->post('father'),
            'student_name'=>$this->input->post('student'),
            'class' => $this->input->post('class'),
            'dob' =>$this->input->post('dob'),
            'p_address'=>$this->input->post('p_address'),
            'religion' => $this->input->post('religion'),
            'gender' => $this->input->post('gender'),
            'contact_number'=>$this->input->post('contact_number'),
            'p_contact_number' => $this->input->post('p_contact_number'),
            'p_occupation' => $this->input->post('p_occupation'),
            'aadhar'=>$this->input->post('aadhar'),
            'marathi' => $this->input->post('marathi'),
            'hindi' => $this->input->post('hindi'),
            'physics'=>$this->input->post('physics'),
            'eng' => $this->input->post('eng'),
            'chemistry' =>$this->input->post('chemistry'),
            'math'=>$this->input->post('math'),
            'bio' => $this->input->post('bio'),
            'geaomatry' => $this->input->post('geaomatry'),
            'History'=>$this->input->post('History'),
            'p_science' => $this->input->post('p_science'),
            'e_science' =>$this->input->post('e_science'),
            'as_shikshan'=>$this->input->post('as_shikshan'),
            'fees'=>$this->input->post('fees'),
            'added_date'=>date('Y-m-d H:i:s')
        );

         return $this->db->insert('tbl_student',$data);
        
    }

      public function edit($id) {
        // User data array
        $data = array(
            'p_college_name' => $this->input->post('p_college_name'),
            'p_year_class' => $this->input->post('p_year_class'),
            'p_adm_year'=>$this->input->post('p_adm_year'),
            'c_adm_year' => !empty($this->input->post('c_adm_year'))?$this->input->post('c_adm_year'):'',
            'mother' => $this->input->post('mother'),
            'father' => $this->input->post('father'),
            'student_name'=>$this->input->post('student'),
            'class' => $this->input->post('class'),
            'dob' =>$this->input->post('dob'),
            'p_address'=>$this->input->post('p_address'),
            'religion' => $this->input->post('religion'),
            'gender' => $this->input->post('gender'),
            'contact_number'=>$this->input->post('contact_number'),
            'p_contact_number' => $this->input->post('p_contact_number'),
            'p_occupation' => $this->input->post('p_occupation'),
            'aadhar'=>$this->input->post('aadhar'),
            'marathi' => $this->input->post('marathi'),
            'hindi' => $this->input->post('hindi'),
            'physics'=>$this->input->post('physics'),
            'eng' => $this->input->post('eng'),
            'chemistry' =>$this->input->post('chemistry'),
            'math'=>$this->input->post('math'),
            'bio' => $this->input->post('bio'),
            'geaomatry' => $this->input->post('geaomatry'),
            'History'=>$this->input->post('History'),
            'p_science' => $this->input->post('p_science'),
            'e_science' =>$this->input->post('e_science'),
            'as_shikshan'=>$this->input->post('as_shikshan'),
            'fees'=>$this->input->post('fees'),
            'updated_date'=>date('Y-m-d H:i:s')
        );

           $this->db->where('id',$id);
           return $this->db->update('tbl_student',$data);
        
    }

        public function add_payment() {
        // User data array
        $data = array(
           
            'student_id' => $this->input->post('id'),
            'paid_by' =>$this->input->post('paid_by'),
            'payment_mode'=>$this->input->post('payment_mode'),
            'amount' => $this->input->post('amount'),
            'added_date'=>date('Y-m-d H:i:s')
        );

         return $this->db->insert('tbl_payment',$data);
        
    }


    public function view_payment($id) {

        $result=false;
        $array=array('p.isDeleted' => '0','p.student_id'=>$id);
        $this->db->select('p.*,s.student_name');
        $this->db->from('tbl_student s');
        $this->db->join('tbl_payment p', 's.id = p.student_id','left');
        $this->db->where($array);
        $this->db->order_by('p.id','DESC');
        $query = $this->db->get();

        return $query->result();
       
    }

    public function total_coll() {

        $result=false;
        $array=array('isDeleted' => '0');
        $this->db->select('SUM(amount) as total');
        $this->db->from('tbl_payment');
        $this->db->where($array);
        $query = $this->db->get();

        return $query->result();
       
    }
    public function view_student() {

        $result=false;
        $query = $this->db->get_where('tbl_student', array('isDeleted' => '0'));
        $count=$query->row();
        if(count($count)>0)
        {
            $result=$query->result();
        }
        return $result;
    }

    public function view_studentby_id($id) {

        $result=false;
        $query = $this->db->get_where('tbl_student', array('isDeleted' => '0','id'=>$id));
        $count=$query->row();
        if(count($count)>0)
        {
            $result=$query->result();
        }
        return $result;
    }

     public function view_studentby_filter() {

        $result=false;
        if(!empty($this->input->post('start_date')))
        {
            $array=array('isDeleted' => '0','DATE(added_date)'=>date('Y-m-d',strtotime($this->input->post('start_date'))));
        }

        if(!empty($this->input->post('end_date')))
        {
            $array=array('isDeleted' => '0','DATE(added_date)'=>date('Y-m-d',strtotime($this->input->post('end_date'))));
        }

        if(!empty($this->input->post('class')))
        {
            $array=array('isDeleted' => '0','class'=>$this->input->post('class'));
        }
        if(!empty($this->input->post('start_date')) && !empty($this->input->post('end_date')))
        {
            $array=array('isDeleted' => '0','DATE(added_date)>='=>date('Y-m-d',strtotime($this->input->post('start_date'))),'DATE(added_date)<='=>date('Y-m-d',strtotime($this->input->post('end_date'))));
        }


        $query = $this->db->get_where('tbl_student',$array);
        // echo $this->db->last_query();
        // exit;
        $count=$query->row();
        if(count($count)>0)
        {
            $result=$query->result();
        }
        return $result;
    }


      public function view_studentby_class($type) {

        $result=false;
        if($type=='12')
        {
            $query = $this->db->get_where('tbl_student', array('isDeleted' => '0','class'=>'12'));
        }
        else if($type=='11')
        {
            $query = $this->db->get_where('tbl_student', array('isDeleted' => '0','class'=>'11'));
        }
        else
        {
            $query = $this->db->get_where('tbl_student', array('isDeleted' => '0'));
        }
        
        $count=$query->row();
        if(count($count)>0)
        {
            $result=$query->result();
        }
        return $result;
    }

     public function delete($id) {
 
        $data = array(
            'isDeleted' =>1,
            'updated_date'=>date('Y-m-d H:i:s')
        );

        $this->db->where('id',$id);
        if($this->db->update('tbl_admin', $data))
        {
            $this->db->where('admin_id',$id);
            return $this->db->update('tbl_employee',$data);
        }
    }

}