<?php

class Branch_model extends CI_Model {

    public function add() {
        // User data array
        $data = array(
            'name' => $this->input->post('name'),
            'branch_code' => $this->input->post('branch_code'),
            'address' => $this->input->post('address'),
          
            'added_date'=>date('Y-m-d H:i:s')
        );

        // Insert user
        return $this->db->insert('tbl_branch', $data);
    }
    public function edit($id) {
 
        $data = array(
            'name' => $this->input->post('name'),
            'branch_code' => $this->input->post('branch_code'),
            'address' => $this->input->post('address'),
          
            'updated_date'=>date('Y-m-d H:i:s')
        );

        // Insert user
        $this->db->where('id',$id);
        return $this->db->update('tbl_branch', $data);
    }

    // Check username exists
  

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

    public function view_user($user_id = '', $date = '') {
        if (!empty($user_id)) {

            $this->db->where('tbl_user', array('id' => $user_id, 'isDeleted' => '0'));
            $this->db->order_by('id', 'DESC');
        } elseif (!empty($date)) {
            $this->db->select('tbl_user.*,tbl_group.name as  group_name ');
            $this->db->from('tbl_user');
            $this->db->join('tbl_group', 'tbl_user.grp_id = tbl_group.id','left');
            $this->db->where('DATE(tbl_user.added_date)', date('Y-m-d', strtotime($date)));
            $this->db->order_by('tbl_user.id','DESC');
            $query = $this->db->get();
            
        } else {
            $this->db->select('tbl_user.*,tbl_group.name as  group_name ');
            $this->db->from('tbl_user');
            $this->db->join('tbl_group', 'tbl_user.grp_id = tbl_group.id','left');
            $this->db->where('DATE(tbl_user.added_date)',date('Y-m-d'));
            $this->db->order_by('tbl_user.id','DESC');
            $query = $this->db->get();
            
 
        }
        return $query->result();
    }

}