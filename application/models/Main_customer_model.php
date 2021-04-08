<?php
defined('BASEPATH') OR exit('NO direct script access allowed');

class Main_customer_model extends CI_Model
{


//==fetch data By customer id=====================================//

	public function fetch_data_by_customer_id($customer_id)
	{
		
		$this->db->where('customer_id',$customer_id);
		$query = $this->db->get('customer_details');
		return $query;

	}

//====customer dashboard Details====================================//
	public function customer_dashboard_details($customer_id)
	{
		$query = $this->db->query('select * from passbook'.$customer_id. ' where trans_id=(select Max(trans_id) from passbook'.$customer_id.")");
		return $query;
		//echo $this->db->last_query();				
		
		/*echo "<pre>";
		print_r($query->row());
		exit;*/
	}

//====customer beneficiary details =======================================//
	public function beneficiary($customer_id)
	{
		$query = $this->db->query('select count(*) from beneficiary'.$customer_id);
		/*echo $this->db->last_query();
		exit;*/

		//$result=$query->row_array();
		return $query;
	} 


//======Insert Beneficiary Details =========================================//

	public function insert_data_into_beneficiary($data,$beneficiary_id)
	{
		$this->db->insert('beneficiary'.$beneficiary_id,$data);
	}

//=======Fetch Benwficiary Details ==================================//
	public function fetch_beneficiary_data($customer_id)
	{
		
		$query= $this->db->query("SELECT DISTINCT customer_id , cust.first_name, cust.last_name, cust.account_no 
									from customer_details as cust join beneficiary$customer_id as benef on benef.benef_cust_id=cust.customer_id");

		
		return $query;
		//echo $this->db->last_query();
		//exit;
		/*echo "<pre>";
		print_r($query->row());
		exit;*/
	}


//=====Delete Beneficiary Data============================//
	public function delete_beneficiary_data($id)
	{
		$this->db->where('customer_id',$id);
		$query= $this->db->delete('customer_details');
		return $query;

	}

//===================================================================//


//=====Fetch Send Transfer  data============================================//

	public function fetch_data($customer_id)
	{
		$this->db->where('customer_id',$customer_id);
		$query = $this->db->get('customer_details');
		return $query;
		/*echo "<pre>";
		print_r($query->row()->customer_id);
		exit;*/
	}

//==fetch Transaction by customer id=====================================//
	public function fetch_view_transaction($customer_id)
	{
		
		$query=$this->db->get('passbook'.$customer_id);
		return $query;


	}
//=========================================================//

//==fetch data By Account Number=====================================//
	public function fetch_data_by_account_no($account_number)
	{
		
		$this->db->where('account_number',$account_number);
		$query = $this->db->get('account_details');
		return $query;

	}


//==fetch balance by account number=====================================//
	/*public function fetch_balance($account_number)
	{
		$this->db->distinct('acc.customer_id');
		$this->db->select('cust.customer_id, cust.first_name , cust.last_name, acc.account_number, acc.opening_balance');
		$this->db->from('customer_details cust');
		$this->db->join('account_details acc','acc.customer_id = cust.customer_id');
		$query= $this->db->get('account_details');
		//echo $this->db->last_query();
		return $query;

	}*/

	public function fetch_balance($account_number)
	{
		$this->db->where('account_number',$account_number);
		$query = $this->db->get('account_details');
		return $query;

	}


//=======Fetch Balance by range =======================================================//
	public function fetch_balance_by_range($from_date,$to_date)
	{
		$this->db->select('*');
		$this->db->where('DATE(date) BETWEEN "'.$from_date.'" AND "'.$to_date.'"', ' ',false);
		$query = $this->db->get('fund_transfer');
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



	//======fetch news ================================================//
	public function fetch_news()
	{
		$query =$this->db->query('select * from news_management ORDER BY sr_no DESC'); //select * from news_management;

		return $query;
	}



}
?>