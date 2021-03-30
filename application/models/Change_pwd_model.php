<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Change_pwd_model extends CI_Model 
{


	function change_pass($username,$new_pass)
	{
		$update_pass=$this->db->query("UPDATE login set password='$new_pass'  where user_name='$username'");
	}
}
?>