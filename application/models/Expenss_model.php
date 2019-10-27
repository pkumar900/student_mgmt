<?php

class Expenss_model extends CI_Model {

    public function add() {
        // User data array
        $data = array(
            'p_price' => $this->input->post('p_price'),
            'product' => $this->input->post('product'),
            'qty' => $this->input->post('qty'),
            't_price' => $this->input->post('t_price'),
            'qty' => $this->input->post('qty'),
            'added_date'=>date('Y-m-d H:i:s')
        );

        // Insert user
        return $this->db->insert('tbl_daily_expense',$data);
    }
    public function edit($id) {
 
       $data = array(
            'p_price' => $this->input->post('p_price'),
            'product' => $this->input->post('product'),
            'qty' => $this->input->post('qty'),
            't_price' => $this->input->post('t_price'),
            'qty' => $this->input->post('qty'),
            'updated_date'=>date('Y-m-d H:i:s')
        );

        // Insert user
        $this->db->where('id',$id);
        return $this->db->update('tbl_daily_expense', $data);
    }


public function delete($id) {
 
       $data = array(
            'isDeleted' =>1           
        );

        // Insert user
        $this->db->where('id',$id);
        return $this->db->update('tbl_daily_expense', $data);
    }
    // Check username exists
  

    public function view_expenss() {

        $result=false;
        $query = $this->db->get_where('tbl_daily_expense', array('isDeleted' => '0'));
        $count=$query->row();
        if(count($count)>0)
        {
            $result=$query->result();
        }
        return $result;
    }

    public function view_expenssby_filter() {

        $result=false;
        if(!empty($this->input->post('start_date')))
        {
            $array=array('isDeleted' => '0','DATE(added_date)'=>date('Y-m-d',strtotime($this->input->post('start_date'))));
        }

        if(!empty($this->input->post('end_date')))
        {
            $array=array('isDeleted' => '0','DATE(added_date)'=>date('Y-m-d',strtotime($this->input->post('end_date'))));
        }

        if(!empty($this->input->post('start_date')) && !empty($this->input->post('end_date')))
        {
            $array=array('isDeleted' => '0','DATE(added_date)>='=>date('Y-m-d',strtotime($this->input->post('start_date'))),'DATE(added_date)<='=>date('Y-m-d',strtotime($this->input->post('end_date'))));
        }


        $query = $this->db->get_where('tbl_daily_expense',$array);
        // echo $this->db->last_query();
        // exit;
        $count=$query->row();
        if(count($count)>0)
        {
            $result=$query->result();
        }
        return $result;
    }

    public function view_expensslmonth() {

        $result=false;
        $this->db->select('SUM(t_price) as total');
        $this->db->from('tbl_daily_expense');
        $this->db->where('MONTH(added_date)', date('m')-1);
        $this->db->where('isDeleted',0);
        $query = $this->db->get();
        $count=$query->row();
        if(count($count)>0)
        {
            $result=$query->result();
        }
        return $result;
    }

    public function view_expensscmonth() {

        $result=false;
        $this->db->select('SUM(t_price) as total');
        $this->db->from('tbl_daily_expense');
        $this->db->where('MONTH(added_date)', date('m'));
         $this->db->where('isDeleted',0);
        $query = $this->db->get();
        $count=$query->row();
        if(count($count)>0)
        {
            $result=$query->result();
        }
        return $result;
    }
     public function view_expenss_total() {

        $result=false;
        $this->db->select('SUM(t_price) as total');
        $this->db->from('tbl_daily_expense');
        $this->db->where('isDeleted',0);
        $query = $this->db->get();
        $count=$query->row();
        if(count($count)>0)
        {
            $result=$query->result();
        }
        return $result;
    }
    public function view_expenssby_id($id) {

        $result=false;
        $query = $this->db->get_where('tbl_daily_expense', array('isDeleted' => '0','id'=>$id));
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