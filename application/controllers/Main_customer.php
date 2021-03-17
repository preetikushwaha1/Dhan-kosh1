<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_customer extends CI_Controller {


	/*-==============================Dashboard========================================================================*/
	public function index()
	{

		$this->load->view('Template2/Header.php');
		$this->load->view('Template2/Customer_sidebar.php');
		$this->load->view('Template2/Customer_dashboard.php');
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


/*=============Fund Transfer ========================================================================*/

	public function fund_transfer()
	{
	
		$this->load->view('Template2/Header.php');
		$this->load->view('Template2/Customer_sidebar.php');
		$this->load->view('Customer_pages/Fund_transfer.php');
		$this->load->view('Template2/Footer.php');

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
