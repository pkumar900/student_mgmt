<?php

class Login_model extends CI_Model {

    public function register($enc_password) {
        // User data array
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $enc_password,
        );

        // Insert user
        return $this->db->insert('tbl_admin', $data);
    }

    // Log user in
    public function login($username, $password) {
       
        $this->db->where(array('email'=>$username,'password'=>md5($password)));

        $result = $this->db->get('tbl_admin');
        if ($result->num_rows() == 1) {
            return $result->result();
        } else {
            return false;
        }
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

    public function get_user_id_by_mobile($mobile) {
        $query = $this->db->get_where('tbl_user', array('mobile' => $mobile, 'isDeleted' => '0'));
        return $query->row();
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

}