<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_Change_pwd_model extends CI_Model 
{


	function change_pass($username,$new_pass)
	{
		$update_pass=$this->db->query("UPDATE customer_details set password='$new_pass'  where user_name='$username'");
	}
}
?>