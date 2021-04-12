<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_customer extends CI_Controller {


	/*-==============================Dashboard========================================================================*/
	public function index()
	{
		$this->load->model('Main_customer_model');
		$customer_id = $this->session->userdata('customer_id');
		$data['customer_dashboard_details'] = $this->Main_customer_model->customer_dashboard_details($customer_id);
		$data['beneficiary'] = $this->Main_customer_model->beneficiary($customer_id);

		$this->load->view('Template2/Header.php');
		$this->load->view('Template2/Customer_sidebar.php');
		$this->load->view('Template2/Customer_dashboard.php',$data);
		$this->load->view('Template2/Footer.php');


	}
	/*=====================================================================================*/


/*============View Customer =========================================*/

	public function view_customer()
	{

			$this->load->model('Main_customer_model');
			$customer_id = $this->session->userdata('customer_id');
			$data['fetch_data_by_customer_id'] = $this->Main_customer_model->fetch_data_by_customer_id($customer_id);
			$this->load->view('Template2/Header.php');
			$this->load->view('Template2/Customer_sidebar.php');
			$this->load->view('Customer_pages/View_customer.php',$data);
			$this->load->view('Template2/Footer.php');


	}
/*=========================================================================*/


/*=============View Account===================================================================================*/

	public function view_account()
	{
		$this->load->model('Main_customer_model');
		$account_number = $this->session->userdata('account_number');
		$data['fetch_data_by_account_no'] = $this->Main_customer_model->fetch_data_by_account_no($account_number);
		$this->load->view('Template2/Header.php');
		$this->load->view('Template2/Customer_sidebar.php');
		$this->load->view('Customer_pages/View_account.php', $data);
		$this->load->view('Template2/Footer.php');

	}

/*================================================================================================================*/


/*=================Transaction====================================================*/

	public function customer_transaction()
	{
		$this->load->model('Main_model');
		$customer_id = $this->session->userdata('customer_id');
		$data['fetch_view_transaction'] = $this->Main_model->fetch_view_transaction($customer_id);

		$this->load->view('Template2/Header.php');
		$this->load->view('Template2/Customer_sidebar.php');
		$this->load->view('Customer_pages/Customer_transaction.php',$data);
		

	}

/*=============Balance ================================================================================*/

	public function balance()
	{
		$this->load->model('Main_customer_model');
		$account_number = $this->session->userdata('account_number');
		$data['fetch_balance'] = $this->Main_customer_model->fetch_balance($account_number);
		$this->load->view('Template2/Header.php');
		$this->load->view('Template2/Customer_sidebar.php');
		$this->load->view('Customer_pages/Balance.php',$data);
		$this->load->view('Template2/Footer.php');

	}

/*======================================================================================================*/



/*============= add Beneficiary ========================================================================================================*/

	public function Beneficiary()
	{
		$this->load->model('Main_customer_model');
		$customer_id = $this->session->userdata('customer_id');
		$data['fetch_beneficiary_data'] = $this->Main_customer_model->fetch_beneficiary_data($customer_id);
		$this->load->view('Template2/Header.php');
		$this->load->view('Template2/Customer_sidebar.php');
		$this->load->view('Customer_pages/Beneficiary.php',$data);
		//$this->load->view('Template2/Footer.php');

	}

/*================================================================================================================*/



/*=============Fund Transfer ========================================================================*/

	public function add_beneficiary()
	{
	
		$this->load->view('Template2/Header.php');
		$this->load->view('Template2/Customer_sidebar.php');
		$this->load->view('Customer_pages/Add_beneficiary.php');
		$this->load->view('Template2/Footer.php');

	}

/*========Beneficiary Validation =========================================================*/

	public function beneficiary_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name', 'First Name', 'required|alpha');
		$this->form_validation->set_rules('last_name', 'Last Name' , 'required|alpha');
		$this->form_validation->set_rules('account_no' , 'Account Number', 'required');
		$this->form_validation->set_rules('email', 'Email' , 'required');
		$this->form_validation->set_rules('phone_no' , 'Phone Number', 'required|numeric|exact_length[10]');

		if($this->form_validation->run())
		{
			$this->load->model('Main_customer_model');
			$customer_id  = $this->session->userdata('customer_id');
			$first_name   = $this->input->post('first_name');
			$last_name    = $this->input->post('last_name');
			$account_no   = $this->input->post('account_no');
			$email	      = $this->input->post('email');
			$phone_no     = $this->input->post('phone_no');
					
			$data = array (
			'first_name' => $first_name,
			'last_name'  => $last_name,
			'account_no' => $account_no,
			'email'		=> $email,
			'phone_no' 	=> $phone_no
			);

			$this->db->select('customer_id',$customer_id);
			$this->db->where($data);
			$query = $this->db->get('customer_details');

		
			if($query->num_rows() > 0)
			{
				$beneficiary_id = $query->row()->customer_id;
				if( $customer_id != $beneficiary_id)
				{
						$data = array(
							"benef_cust_id" => $beneficiary_id,
							"email"    		=> $email,
							"phone_no"		=> $phone_no,
							"account_no"    => $account_no
					
				);

				$this->Main_customer_model->insert_data_into_beneficiary($data, $customer_id);
			

				}
				
			else {
           			$this->add_beneficiary();
           			$this->session->set_flashdata('error','Please Try again!! , Invalid data Enter');
        		}
			}
				
				$this->session->set_flashdata('success_message', "Beneficiary Added Successfully");
			
			redirect('Main_customer/add_beneficiary');

		
		}
		else
		{
			$this->add_beneficiary();
			$this->session->set_flashdata('error_message', "Invalid Data Enter");
		}

	}

/*==================================================================================*/


/*========Send Transfer=========================================*/

	public function send_fund()
	{
		$this->load->model('Main_customer_model');
		$id = $this->uri->segment(3);
		$data['fetch_data'] = $this->Main_customer_model->fetch_data($id);
		$this->load->view('Template2/Header.php');
		$this->load->view('Template2/Customer_sidebar.php');
		$this->load->view('Customer_pages/Send_fund.php',$data);
		$this->load->view('Template2/Footer.php');
	
	}

/*================Send Fund Transaction==============================*/

	public function send_fund_validation()
	{

		$this->session->set_flashdata('connection_error',"Connection error! Please Try Again");

		$this->load->model('Main_model');
		$this->load->helper('date');
		$now = date("Y-m-d H:i:s");	


		$this->load->library('form_validation');
		$this->form_validation->set_rules('amount','Amount ','required|numeric');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run())
		{
			$this->load->model('Main_customer_model');
			$sender_id = $this->session->userdata('customer_id');
			$receiver_id =$this->uri->segment(3);

			$amount = $this->input->post('amount');
			$password = $this->input->post('password');
			//$this->Main_customer_model->send_fund_action($sender_id,$receiver_id,$amount,$password);

			$query1= $this->db->query("SELECT * FROM customer_details WHERE customer_id=$sender_id  AND password = $password");
			$query2= $this->db->query("SELECT * FROM customer_details WHERE customer_id=$receiver_id");
	
			if($query1->num_rows()> 0)
			{
				$query3= $this->db->query("SELECT balance FROM passbook".$sender_id. " ORDER BY trans_id DESC LIMIT 1");
				$sender_balance = $query3->row()->balance;
				$updated_sender_balance = $sender_balance - $amount;
				if($updated_sender_balance >= 0)
				{

					$query4= $this->db->query('SELECT balance FROM passbook'.$receiver_id.' ORDER BY trans_id DESC LIMIT 1');
					$receiver_balance = $query4->row()->balance;
					$updated_receiver_balance = $receiver_balance + $amount;


					$data1 = array(
							"trans_date" => $now,
							"remarks"    => "Sent to : ".$query2->row()->first_name." ". $query2->row()->last_name.", AC/no :  ".$query2->row()->account_no,
							"debit"		=>	$amount,
							"credit"   => 0,
							"balance"  => $updated_sender_balance,
						);

					$query5 =$this->Main_model->insert_data_into_passwork($data1,$sender_id);


					$data2 = array(
							"trans_date" => $now,
							"remarks"    => "Received From : ". $query1->row()->first_name." ". $query1->row()->last_name.", AC/no :  ".$query1->row()->account_no,
							"debit"		=>	0,
							"credit"   => $amount,
							"balance"  => $updated_receiver_balance,
					);

					$query6= $this->Main_model->insert_data_into_passwork($data2,$receiver_id);

					if(($query5 === TRUE) && ($query6 === TRUE) )
					{
						$this->session->set_flashdata('success',"<b>Transfer Successful</b>");
					}
				 }
				 else
				 {
				 		$this->session->set_flashdata('Insufficient_balance', "<b>Insufficient Balance</b>");
				 }
			}
			else
			{
					$this->session->set_flashdata('wrong',"<b>Wrong Password Enter</b>");
			}
			redirect('Main_customer/mini_statement');
		}
			else
			{
				$this->send_fund();
			}
		
	}
	


/*==========Delete Beneficiary =======================================*/
 	public function delete_beneficiary()
 	{
 		$this->load->model('Main_customer_model');
 		$customer_id= $this->session->userdata('customer_id');
 		$id = $this->uri->segment(3);	
 		$data['delete_beneficiary_data'] = $this->Main_customer_model->delete_beneficiary_data($customer_id, $id);
 		redirect('Main_customer/send_fund');


 	} 
/*=======funf Form Validation===========================================================*/
	
	public function fund_form_validation()
	{
		$this->load->library('form_validation');
		$this->load->helper('date');
		$now = date("Y-m-d H:i:s");

		$this->form_validation->set_rules('account_number','Account Number','required');
		$this->form_validation->set_rules('re_enter_account_no', 'Re-enter Account Number' , 'required|matches[account_number]');
		$this->form_validation->set_rules('ifsc_code', 'IFSC code', 'required');
		$this->form_validation->set_rules('amount','Amount', 'required');
		$this->form_validation->set_rules('recipient_name','Recipient Name', 'required');

		if($this->form_validation->run())
		{	
			$this->load->model('Main_customer_model');
			$data = array(
						'account_number' => $this->input->post('account_number'),
						're_enter_account_number' => $this->input->post('re_enter_account_no'),
						'ifsc_code' => $this->input->post('ifsc_code'),
						'date' => $now,
						'amount' => $this->input->post('amount'),
						'recipient_name' => $this->input->post('recipient_name')

			);	
			$this->Main_customer_model->insert_data_fund_transfer($data);
			redirect('Main_customer/fund_transfer');	
		}
		else
		{
			$this->fund_transfer();
		}
	}

/*=============================================================================================*/


/*=============Mini statement=================================================================================*/

	public function mini_statement()
	{
		$this->load->model('Main_model');
		//$account_number = $this->input->post('account_number');
		$customer_id= $this->session->userdata('customer_id');
		$data['fetch_view_transaction'] = $this->Main_model->fetch_view_transaction($customer_id);
		$this->load->view('Template2/Header.php');
		$this->load->view('Template2/Customer_sidebar.php');
		$this->load->view('Customer_pages/Mini_statement.php',$data);
		//$this->load->view('Template2/Footer.php');

	}

/*==========================================================================================================================*/


/*=============Customized statement==============================================================================*/

	public function customized_statement()
	{
		$passbook_id = $this->session->userdata('customer_id');
		$from_date = $this->input->post('from_date');
		$to_date = $this->input->post('to_date');

		$this->load->model('Main_customer_model');
		$data['balance_in_range'] = $this->Main_customer_model->fetch_balance_by_range($from_date,$to_date,$passbook_id);

		/*echo "<pre>";
		print_r($data);
		exit;*/

		$this->load->view('Template2/Header.php');
		$this->load->view('Template2/Customer_sidebar.php');
		$this->load->view('Customer_pages/Customized_statement.php',$data);
		$this->load->view('Template2/Footer.php');

	}

/*===========================================================================================*/



//====View News ====================================================//
	public function view_news()
	{
		$this->load->model('Main_customer_model');
		$data['fetch_news'] = $this->Main_customer_model->fetch_news();		//fetch data
		$this->load->view('Template2/Header.php');
		$this->load->view('Template2/Customer_sidebar.php');
		$this->load->view('Customer_pages/View_news.php', $data);
		//$this->load->view('Template2/Footer.php');

	}
/*=================================================================*/



/*=============Faq ========================================================================================================*/

	public function faq()
	{
		$this->load->view('Template2/Header.php');
		$this->load->view('Template2/Customer_sidebar.php');
		$this->load->view('Customer_pages/Faq.php');
		$this->load->view('Template2/Footer.php');

	}

/*================================================================================================================*/




}
