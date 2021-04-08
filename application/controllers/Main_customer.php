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


/*==========Delete Beneficiary =======================================*/
 	public function delete_beneficiary()
 	{
 		$this->load->model('Main_customer_model');
 		$id = $this->uri->segment(3);	
 		$data['delete_beneficiary_data'] = $this->Main_customer_model->delete_beneficiary_data($id);
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
		$this->load->model('Main_customer_model');
		//$account_number = $this->input->post('account_number');
		$data['fetch_mini_statement'] = $this->Main_customer_model->fetch_mini_statement();
		$this->load->view('Template2/Header.php');
		$this->load->view('Template2/Customer_sidebar.php');
		$this->load->view('Customer_pages/Mini_statement.php',$data);
		$this->load->view('Template2/Footer.php');

	}


/*==========================================================================================================================*/


/*=============Customized statement==============================================================================*/

	public function customized_statement()
	{
		$from_date = $this->input->post('from_date');
		$to_date = $this->input->post('to_date');

		$this->load->model('Main_customer_model');
		$data['balance_in_range'] = $this->Main_customer_model->fetch_balance_by_range($from_date,$to_date);

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
		$this->load->view('Template2/Footer.php');

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
