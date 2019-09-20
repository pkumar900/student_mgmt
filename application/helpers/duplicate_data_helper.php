<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

function Duplicate_data($table,$column,$data,$id='',$escape_column='')
{
	$ci =& get_instance();
	if(!empty($id))
	{
		$result=$ci->db->where(array($column=>$data,$escape_column.'!='=>$id))->get($table);
		$data=$result->row();
		if(count($data)>0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	else
	{
		$result=$ci->db->where($column,$data)->get($table);
		$data=$result->row();
		if(count($data)>0)
		{
			return true;
		}
		else
		{
			return false;
		}
	    
	}
    
		
}

?>







