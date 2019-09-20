<?php

class Dashboard_model extends CI_Model {



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

       public function view_employee() {

        $result=false;
        if($this->session->userdata('role')==ADMIN)
        {
            $array=array('isDeleted' => '0','role'=>2);
        }
        else
        {
            $array=array('isDeleted' => '0','role'=>2,'id'=>$this->session->userdata('admin_id'));
        }

        $query = $this->db->get_where('tbl_admin',$array);
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

  public function punchin() {
        // User data array
        $data = array(
            'employee_id' => $this->session->userdata('admin_id'),
            'entry_time' => date('Y-m-d H:i:s'),
            'month'=>date('m'),
            'added_date'=>date('Y-m-d H:i:s')
        );

         $this->db->insert('tbl_attendance', $data);
         
}

}