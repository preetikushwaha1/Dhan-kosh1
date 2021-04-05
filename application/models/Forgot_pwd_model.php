<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot_pwd_model extends CI_Model 
{


	function change_pass($username,$new_password)
	{
		$update_pass=$this->db->query("UPDATE login set password='$new_password'  where user_name='$username'");
	}

	function change_customer_pass($account_no,$new_password,$confirm_password)
	{
		$update_pass=$this->db->query("UPDATE customer_details set password='$new_password' , confirm_password='$confirm_password'  where account_no='$account_no'");
	
	}
}
?>