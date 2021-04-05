<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

class Main_model extends CI_Model
{

//=====add new Customer ============================================//
	public function insert_data_new_customer($data)
	{
		 $this->db->insert('customer_details',$data);
	
	}

//=====insert into passbook ============================================//
	public function insert_data_into_passwork($data,$id)
	{
		 $this->db->insert('passbook'.$id ,$data);
	
	}




	//==fetch new customer data=====================================//
	public function fetch_new_customer_data()
	{
		//$this->db->limit($limit,$offset);
		$this->db->order_by("date",'desc');
		$query = $this->db->get('customer_details');

		//echo $this->db->last_query();


		//select * from customer_details
		return $query;
	}


	///=====fetch view Edit customer data==================//
	public function fetch_customer_view_edit_data($id)
	{
		//$this->db->limit($limit,$offset);
		$this->db->where('customer_id',$id);
		$query = $this->db->get('customer_details');

		//echo $this->db->last_query();


		//select * from customer_details
		return $query;
	}
//============================================================//

//=====update customer data==========================//
	

	public function customer_update($id)
	{
		
		$this->load->helper('date');
		$now = date("Y-m-d H:i:s");
		$data = array(
					"first_name" => $this->input->post('first_name'),
					"last_name"	 => $this->input->post('last_name'),
					'date' 		=> $now,
					"gender"	 => $this->input->post('gender'),
					"dob"		 => $this->input->post('dob'),
					"aadhar_card"=> $this->input->post('aadhar_no'),
					"pan_card"	 => $this->input->post('pan_no'),
					"address"	 => $this->input->post('address'),
					"state"		 => $this->input->post('state'),
					"city"		 => $this->input->post('city'),
					"pincode"	 => $this->input->post('pincode'),
					"phone_no" 	 => $this->input->post('phone_no'),
					"email"		 => $this->input->post('email'),
					"account_no" => $this->input->post('account_no'),
					"opening_balance"	 => $this->input->post('opening_balance'),
					"password"			 => $this->input->post('pwd'),
					"confirm_password"	 => $this->input->post('confirm_pwd')
				);	

			$this->db->where('customer_id',$id);
			$this->db->update('customer_details',$data);

			redirect('Main/view_customer');

	}

//===========================================

//===============================================================//

	public function num_rows()
	{
		$query = $this->db->get('customer_details');
		//select * from customer_details
		return $query->num_rows();

	}

	//==fetch data By customer id=====================================//
	public function fetch_data_by_customer_id($customer_id)
	{
		
		$this->db->where('customer_id',$customer_id);
		$query = $this->db->get('customer_details');
		return $query;

	}



	//=========Delete customer data===================================//
	public function delete_customer_data($customer_id)
	{
		//delete from customer_details where customer_id=$customer_id
		$this->db->where('customer_id',$customer_id);
		$this->db->delete('customer_details');
	}
//========================================================================//


//===========add new account ============================================//

	public function insert_data_new_account($data)
	{
		$this->db->insert('account_details',$data);
		
	}
	//=== fetch new account data==========================================//
	public function fetch_new_account_data()
	{
		//$this->db->limit($limit,$offset);
		$this->db->order_by('date','desc');
		$query = $this->db->get('account_details');
		return $query;


	}

//======acccount num rows===============================================//
	public function account_num_rows()
	{
		$query = $this->db->get('account_details');
		return $query;
	}


	//==fetch data By Account Number=====================================//
	public function fetch_data_by_account_no($account_number)
	{
		
		$this->db->where('account_number',$account_number);
		$query = $this->db->get('account_details');
		return $query;

	}



	//=======delete account data=============================//
	public function delete_account_data($customer_id)
	{
		//delete from customer_details where customer_id=$customer_id
		$this->db->where('customer_id',$customer_id);
		$this->db->delete('account_details');
	}
//====
//=========================================================================//


//======= insert news ====================================================//
	public function insert_data_news_management($data)
	{
		$this->db->insert('news_management',$data);
		
	}

	//======fetch news ================================================//
	public function fetch_news()
	{
		$query =$this->db->query('select * from news_management ORDER BY sr_no DESC'); //select * from news_management;

		return $query;
	}


	//====delete news=============================================//
	public function delete_news($sr_no)
	{
		//DELETE FROM news_management where sr_no= '$sr_no' 
		$this->db->where("sr_no", $sr_no);
		$this->db->delete("news_management");
		$this->session->set_flashdata('message','Successfully Deleted');

	}

//==============================================================================//
	public function fetch_view_edit_news()
	{
		$query =$this->db->query('select * from news_management ORDER BY sr_no DESC'); //select * from news_management;

		return $query;
	}



//==fetch balance by account number=====================================//
	public function fetch_balance($account_number)
	{
		/*$this->db->distinct('acc.customer_id');
		$this->db->select('cust.customer_id, cust.first_name , cust.last_name, acc.account_number, acc.opening_balance');
		$this->db->from('customer_details cust');
		$this->db->join('account_details acc','acc.customer_id = cust.customer_id');
		$query= $this->db->get('account_details');
		//echo $this->db->last_query();
		return $query;
*/	
		$this->db->where('account_number',$account_number);
		$this->db->select('*');
		$query = $this->db->get('account_details');
		return $query;

	}

//============================================================================//

//==========Insert Fund transfer data ====================================//
	public function insert_data_fund_transfer($data)
	{
		$this->db->insert('fund_transfer',$data);
	}
 //==========================================================================//

//========fetch Mini statement =================================================//
	public  function fetch_mini_statement()
	{
		$this->db->select('*');
		$this->db->limit(5);
		$query = $this->db->get('fund_transfer');
		return $query;
	}

//=============Get All Customer Number=====================//
	public function get_all_customer_no()
	{
		$this->db->distinct('customer_id');
		$query = $this->db->get('customer_details');
		return $query->num_rows();
	}

//=============Get All Active Account Number=====================//
	public function get_all_active_account()
	{
		$this->db->distinct('account_no');
		$query = $this->db->get('customer_details');
		return $query->num_rows();
	}
}?>

