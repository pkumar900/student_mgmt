<?php

class Website_model extends CI_Model {

    public function add_appoinment() {
        // User data array
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'mobile' => $this->input->post('mobile'),
            'city' => $this->input->post('city'),
            'timing' => $this->input->post('timing'),
            'branch_id' => $this->input->post('branch_id'),
            'added_date'=>date('Y-m-d H:i:s')
        );

        // Insert user
        return $this->db->insert('tbl_customer', $data);
    }
     public function add_enquiry() {
        // User data array
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'mobile' => $this->input->post('mobile'),
            'city' => $this->input->post('city'),
          
            'added_date'=>date('Y-m-d H:i:s')
        );

        // Insert user
        return $this->db->insert('tbl_enquiry', $data);
    }
    public function edit($id) {
 
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'mobile' => $this->input->post('mobile'),
            'address' => $this->input->post('address'),
            'password' => md5($this->input->post('password')),
            'string_password' =>$this->input->post('password'),
            'updated_date'=>date('Y-m-d H:i:s')
        );

        // Insert user
        $this->db->where('id',$id);
        return $this->db->update('tbl_admin', $data);
    }

    // Check username exists
    public function check_username_exists($username) {
        $query = $this->db->get_where('tbl_admin', array('email' => $username));
        if (empty($query->row_array())) {
            return true;
        } else {
            return false;
        }
    }

    // Check email exists
    public function check_email_exists($email) {
        $query = $this->db->get_where('tbl_admin', array('email' => $email));
        if (empty($query->row_array())) {
            return true;
        } else {
            return false;
        }
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

    public function view_branchby_id($id) {

        $result=false;
        $query = $this->db->get_where('tbl_branch', array('isDeleted' => '0','id'=>$id));
        $count=$query->row();
        if(count($count)>0)
        {
            $result=$query->result();
        }
        return $result;
    }


}