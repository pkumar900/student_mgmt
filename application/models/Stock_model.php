<?php

class Stock_model extends CI_Model {

    public function add() {
        // User data array
        $data = array(
            'admin_id'=>$this->session->userdata('admin_id'),
            'name' => $this->input->post('name'),
            'price' => $this->input->post('price'),
            'weight' => !empty($this->input->post('weight'))?$this->input->post('weight'):'',
            'description' => !empty($this->input->post('description'))?$this->input->post('description'):'',
            'branch_id' =>!empty($this->input->post('branch_id'))?$this->input->post('branch_id'):$this->session->userdata('branch_id'),
            'quantity' =>$this->input->post('quantity'),
            'added_date'=>date('Y-m-d H:i:s')
        );

         return $this->db->insert('tbl_stock', $data);
        
    }
    public function edit($id) {
 
        $data = array(
            'name' => $this->input->post('name'),
            'price' => $this->input->post('price'),
            'weight' => !empty($this->input->post('weight'))?$this->input->post('weight'):'',
            'description' => !empty($this->input->post('description'))?$this->input->post('description'):'',
            'branch_id' =>!empty($this->input->post('branch_id'))?$this->input->post('branch_id'):$this->session->userdata('branch_id'),
            'quantity' =>$this->input->post('quantity'),
            'updated_date'=>date('Y-m-d H:i:s')
        );

       
        // Insert user
        $this->db->where('id',$id);
        return $this->db->update('tbl_stock', $data);
    }

     public function seen_status($id) {
 
        $data = array(
            'seen_status' =>1
            // 'updated_date'=>date('Y-m-d H:i:s')
        );
         $this->db->where('id',$id);
        return $this->db->update('tbl_customer', $data);
    }
    public function view_stock() {

        $result=false;

        if($this->session->userdata('role')==ADMIN)
        {
            $array=array('s.isDeleted' => '0');
        }
        else
        {
            $array=array('s.isDeleted' => '0','s.branch_id'=>$this->session->userdata('branch_id'));
        }

        $this->db->select('s.*,b.name as  branch');
        $this->db->from('tbl_stock s');
        $this->db->join('tbl_branch b', 'b.id = s.branch_id','left');
        $this->db->where($array);
        $this->db->order_by('s.id','DESC');
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

    public function view_stockby_id($id) {

        $result=false;
        $query = $this->db->get_where('tbl_stock', array('isDeleted' => '0','id'=>$id));
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
        if($this->db->update('tbl_stock',$data))
        {
            return true;
        }
        else
        {
            return false;
        }
       
    }

}