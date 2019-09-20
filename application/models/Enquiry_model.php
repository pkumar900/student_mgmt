<?php

class Enquiry_model extends CI_Model {

 
    public function view_employee() {

        $result=false;

       
        $array=array('e.isDeleted' => '0');
    
        $this->db->select('e.*,a.name as  branch');
        $this->db->from('tbl_employee e');
        $this->db->join('tbl_admin a', 'a.id = e.branch_id','left');
        $this->db->where($array);
        $this->db->order_by('e.id','DESC');
        $query = $this->db->get();

        return $query->result();
       
    }

    public function view_enquiry() {

        $result=false;
        $query = $this->db->get_where('tbl_enquiry', array('isDeleted' => '0'));
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
            return $this->db->update('tbl_enquiry',$data);
    }

}