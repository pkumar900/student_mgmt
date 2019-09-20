<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

function auth($id)
{
    $ci =& get_instance();
	$result=$ci->db->where('id',$id)->get('reg_user');
	$data=$result->result_array();
    return $data[0]['Auth'] ;		
}

?>







