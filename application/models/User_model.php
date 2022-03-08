<?php
class User_model extends CI_Model 
{
	
	function saverecords($data)
	{
        $this->db->insert('users',$data);
        return true;
	}
	
}