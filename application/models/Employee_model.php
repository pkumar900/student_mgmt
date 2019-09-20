<?php

class Employee_model extends CI_Model {

    public function add() {
        // User data array
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'branch_id'=>$this->input->post('branch_id'),
            'mobile' => !empty($this->input->post('mobile'))?$this->input->post('mobile'):'',
            'address' => $this->input->post('address'),
            'password' => md5($this->input->post('password')),
            'role'=>$this->input->post('role'),
            'added_date'=>date('Y-m-d H:i:s')
        );

         if($this->db->insert('tbl_admin', $data))
         {
            $data1 = array(
            'role'=>$this->input->post('role'),
            'admin_id'=>$this->db->insert_id(),
            'branch_id'=>$this->input->post('branch_id'),
            'name' => $this->input->post('name'),
            'last_name' => $this->input->post('last_name'),
            'father_name' => $this->input->post('father_name'),
            'email' => $this->input->post('email'),
            'salary' => $this->input->post('salary'),
            'mobile' => !empty($this->input->post('mobile'))?$this->input->post('mobile'):'',
            'address' => $this->input->post('address'),
            'string_password' =>$this->input->post('password'),
            'added_date'=>date('Y-m-d H:i:s')
        );
            return $this->db->insert('tbl_employee', $data1);
         }
    }
    public function edit($id) {
 
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'mobile' => $this->input->post('mobile'),
            'address' => $this->input->post('address'),
            'branch_id'=>$this->input->post('branch_id'),
            'role'=>$this->input->post('role'),
            'password' => md5($this->input->post('password')),
            'string_password' =>$this->input->post('password'),
            'updated_date'=>date('Y-m-d H:i:s')
        );

        // Insert user
        $this->db->where('id',$id);
        if($this->db->update('tbl_admin', $data))
        {
             $data1 = array(
            'role'=>$this->input->post('role'),
            'branch_id'=>$this->input->post('branch_id'),
            'name' => $this->input->post('name'),
            'last_name' => $this->input->post('last_name'),
            'father_name' => $this->input->post('father_name'),
            'email' => $this->input->post('email'),
            'salary' => $this->input->post('salary'),
            'mobile' => !empty($this->input->post('mobile'))?$this->input->post('mobile'):'',
            'address' => $this->input->post('address'),
            'string_password' =>$this->input->post('password'),
            'updated_date'=>date('Y-m-d H:i:s')
            );
            $this->db->where('admin_id',$id);
            return $this->db->update('tbl_employee',$data1);
        }
    }


    public function view_employee() {

        $result=false;

        if($this->session->userdata('role')==ADMIN)
        {
            $array=array('e.isDeleted' => '0');
        }
        else
        {
            $array=array('e.isDeleted' => '0','e.branch_id'=>$this->session->userdata('branch_id'));
        }

        $this->db->select('e.*,b.name as  branch');
        $this->db->from('tbl_employee e');
        $this->db->join('tbl_admin a', 'a.id = e.branch_id','left');
        $this->db->join('tbl_branch b', 'b.id = e.branch_id','left');
        $this->db->where($array);
        $this->db->order_by('e.id','DESC');
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

    public function view_employeeby_id($id) {

        $result=false;
        $query = $this->db->get_where('tbl_employee', array('isDeleted' => '0','admin_id'=>$id));
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