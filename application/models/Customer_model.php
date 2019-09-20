<?php

class Customer_model extends CI_Model {

    public function add() {
        // User data array
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'mobile' => !empty($this->input->post('mobile'))?$this->input->post('mobile'):'',
            'city' => !empty($this->input->post('city'))?$this->input->post('city'):0,
            'branch_id' =>!empty($this->input->post('branch_id'))?$this->input->post('branch_id'):$this->session->userdata('branch_id'),
            'added_date'=>date('Y-m-d H:i:s')
        );

         return $this->db->insert('tbl_customer', $data);
        
    }
     public function token_add() {
        // User data array
        if($this->session->userdata('role')==1)
        {
            $query = $this->db->get_where('tbl_branch', array('isDeleted' => '0','id'=>$this->session->userdata('branch_id')));
            $count=$query->row();
            if(count($count)>0)
            {
                $branch_code=$query->row()->branch_code;
            }
             $token=$branch_code.'-'.rand(999999,10000);
        }
        else
        {
             $token='AD-'.rand(999999,10000);
        }
      

       
        $data = array(

            'admin_id'=>$this->session->userdata('admin_id'),
            'customer_id'=>base64_decode($this->input->post('customer_id')),
            'price' => $this->input->post('price'),
            'timing' => $this->input->post('timing'),
            'description' => !empty($this->input->post('desc'))?$this->input->post('desc'):'',
            'token' => $token,
            'added_date'=>date('Y-m-d H:i:s')
        );

         return $this->db->insert('tbl_tokens', $data);
        
    }
    public function edit($id) {
 
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'mobile' => !empty($this->input->post('mobile'))?$this->input->post('mobile'):'',
            'city' => !empty($this->input->post('city'))?$this->input->post('city'):0,
            'branch_id' =>!empty($this->input->post('branch_id'))?$this->input->post('branch_id'):$this->session->userdata('branch_id'),
            'updated_date'=>date('Y-m-d H:i:s')
        );

        $this->db->where('id',$id);
        return $this->db->update('tbl_customer', $data);
    }

    public function token_edit($id) {
 
             $data = array(
            'price'=>$this->input->post('price'),
            'timing' => $this->input->post('timing'),
            'description' => $this->input->post('desc'),
            'updated_date'=>date('Y-m-d H:i:s')
            );
            $this->db->where('id',$id);
            return $this->db->update('tbl_tokens',$data);
    }

     public function seen_status($id) {
 
        $data = array(
            'seen_status' =>1
            // 'updated_date'=>date('Y-m-d H:i:s')
        );
         $this->db->where('id',$id);
        return $this->db->update('tbl_customer', $data);
    }
    public function view_customer() {

        $result=false;

        if($this->session->userdata('role')==ADMIN)
        {
            $array=array('c.isDeleted' => '0');
        }
        else
        {
            $array=array('c.isDeleted' => '0','c.branch_id'=>$this->session->userdata('branch_id'));
        }

        $this->db->select('c.*,b.name as  branch');
        $this->db->from('tbl_customer c');
        $this->db->join('tbl_branch b', 'b.id = c.branch_id','left');
        $this->db->where($array);
        $this->db->order_by('c.id','DESC');
        $query = $this->db->get();

        return $query->result();
       
    }

    public function view_customer_noti() {

        $result=false;

        if($this->session->userdata('role')==ADMIN)
        {
            $array=array('c.isDeleted' => '0','c.seen_status'=>0);
        }
        else
        {
            $array=array('c.isDeleted' => '0','c.branch_id'=>$this->session->userdata('branch_id'),'c.seen_status'=>0);
        }

        $this->db->select('c.*,b.name as  branch');
        $this->db->from('tbl_customer c');
        $this->db->join('tbl_branch b', 'b.id = c.branch_id','left');
        $this->db->where($array);
        $this->db->order_by('c.id','DESC');
        $query = $this->db->get();

        return $query->result();
       
    }
    public function view_branch() {

        $result=false;
        $query = $this->db->get_where('tbl_branch', array('isDeleted' => '0'));
        $count=$query->row();
        if(count($count)>0)
        {
            $result=$query->result();
        }
        return $result;
    }

    public function view_customerby_id($id) {

        $result=false;
        $query = $this->db->get_where('tbl_customer', array('isDeleted' => '0','id'=>$id));
        $count=$query->row();
        if(count($count)>0)
        {
            $result=$query->result();
        }
        return $result;
    }

    public function handel_customer() {

        $result=false;
        $array=array('c.isDeleted' => '0','t.isDeleted' => '0','t.assign_to'=>$this->session->userdata('admin_id'));
        $this->db->select('t.*,c.name,c.email,c.mobile');
        $this->db->from('tbl_tokens t');
        $this->db->join('tbl_customer c', 'c.id = t.customer_id','left');
        $this->db->where($array);
        $this->db->order_by('t.id','DESC');
        $query = $this->db->get();
        // echo $this->db->last_query();
        // exit;
        return $query->result();

    }
        public function view_employee() {

        $result=false;

       
        $array=array('e.isDeleted' => '0','b.isDeleted' => '0','e.role' => '2','e.branch_id'=>$this->session->userdata('branch_id'));
        $this->db->select('e.*,b.name as  branch');
        $this->db->from('tbl_employee e');
        $this->db->join('tbl_branch b', 'b.id = e.branch_id','left');
        $this->db->where($array);
        $this->db->order_by('e.id','DESC');
        $query = $this->db->get();

        return $query->result();
       
    }
     public function view_tokens($id) {

        $result=false;
        if($this->session->userdata('role')==ADMIN)
        {
            $array=array('isDeleted' => '0','customer_id'=>$id);
        }
        else
        {
            $array=array('isDeleted' => '0','customer_id'=>$id,'admin_id'=>$this->session->userdata('branch_id'));
        }
        $query = $this->db->get_where('tbl_tokens',$array);
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
        if($this->db->update('tbl_customer',$data))
        {
            return true;
        }
        else
        {
            return false;
        }
       
    }

      public function assign_employee($employee,$token_id) {
        
        $data = array(
            'assign_to' =>$employee,
            'assign_date'=>date('Y-m-d H:i:s')
        );

        $this->db->where('id',$token_id);
        if($this->db->update('tbl_tokens',$data))
        {

            return true;
        }
        else
        {
            return false;
        }
       
    }
}