<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

class Login_model extends CI_Model
{
	/*======admin Login ==================================*/

	public function admin_login_correctly($admin_username,$password)
	{
		$this->db->where('user_name',$admin_username);
		$this->db->where('password', $password);
		$query = $this->db->get('login');

		/*==used for debugging==*/
		/*echo "<pre>";
		print_r($query);*/

		/*echo "<pre>";
		print_r($query->row()->user_name);
		exit;*/

		if($query->num_rows() > 0)
		{
			$row = $query->row();
			return $row;
		}
		else
		{
			return false;
		}
	}

/*========User Login ============================================*/
 	public function user_login_correctly($account_num,$password)
 	{
 		$this->db->where('account_number',$account_num);
 		$this->db->where('password',$password);
 		$query = $this->db->get('account_details');

 		/*echo "<pre>";
 		print_r($query->row());*/

 		if($query->num_rows() > 0)
 		{
 			$row = $query->row();
 			return $row;
 		}
 		else
 		{
 			return false;
 		}
 	}

}

