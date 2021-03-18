<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

   public function __construct()
    {
        parent::__construct();

        $this->load->library('pagination');
     	if(!$this->session->userdata('user_name')) 
     		redirect('Login'); 

     	
    }


	/*-==============================Dashboard========================================================================*/
	public function index()
	{

		$this->load->view('Template2/Header.php');
		$this->load->view('Template2/Sidebar.php');
		$this->load->view('Template2/Dashboard.php');
		$this->load->view('Template2/Footer.php');


	}
	/*======================================================================================================*/

/*==================================================================================================*/

/*=================New customer====================================================================*/
	public function new_customer()
	{

		$this->load->view('Template2/Header.php');
		$this->load->view('Template2/Sidebar.php');
		$this->load->view('New_customer.php');
		$this->load->view('Template2/Footer.php');

	}

	//---Form validation of add new customer---//
	public function new_customer_form_validation()
	{
		//echo 'ok';
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name', 'First Name', 'required|alpha');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required|alpha');
		$this->form_validation->set_rules('dob' ,'Date', 'required');
		$this->form_validation->set_rules('aadhar_no', 'Aadhar number', 'required|numeric');
		$this->form_validation->set_rules('pan_no','Pan number', 'required');
		$this->form_validation->set_rules('address','Address', 'required');
		$this->form_validation->set_rules('state','State', 'required');
		$this->form_validation->set_rules('city','City','required');
		$this->form_validation->set_rules('pincode', 'Pincode' ,'required|numeric');
		$this->form_validation->set_rules('phone_no','Phone Number', 'required|numeric|exact_length[10]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		if($this->form_validation->run())
		{
			//true
			$this->load->model('Main_model');
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
					"email"		 => $this->input->post('email')
				);
			$this->Main_model->insert_data_new_customer($data);
			redirect('Main/new_customer');
		}
		else
		{
			//false
			$this->new_customer();
		}
	}

	//=== inserted function====================//
	/*public function inserted()
	{
		$this->new_customer();
	}*/



	//=========search customer ================================//

/*=========================================================================================*/

/*================View Customer===============================================================*/

	/*public function view_customer()
	{

			$this->load->model('Main_model');
			$customer_id = $this->input->post('customer_id');
			$data['fetch_data_by_customer_id'] = $this->Main_model->fetch_data_by_customer_id($customer_id);
			$this->load->view('Template2/Header.php');
			$this->load->view('Template2/Sidebar.php');
			$this->load->view('View_customer.php',$data);
			$this->load->view('Template2/Footer.php');


	}*/
/*===============================================================================================*/


/*================View Customer===============================================================*/

	public function view_customer()
	{
	
		$this->load->model('Main_model');

		/*$this->load->library('pagination'); 

		 $config=[		
        'base_url' => base_url('index.php/Main/view_customer'),
        'per_page' =>2,
        'total_rows' => $this->Main_model->num_rows(),
        'full_tag_open'=>"<ul class='pagination'>",
        'full_tag_close'=>"</ul>",
        'next_tag_open' =>"<li>",
        'next_tag_close' =>"</li>",
        'prev_tag_open' =>"<li>",
        'prev_tag_close' =>"</li>",
        'num_tag_open' =>"<li>",
        'num_tag_close' =>"<li>",
        'cur_tag_open' =>"<li class='active'><a>",
        'cur_tag_close' =>"</a></li>"

 		];

		$this->pagination->initialize($config);
*/
		//echo $this->pagination->create_links();


		//$data['fetch_new_customer_data'] = $this->Main_model->fetch_new_customer_data($config['per_page'],$this->uri->segment(3));
		$data['fetch_new_customer_data'] = $this->Main_model->fetch_new_customer_data();
		//$data['pagination_links'] = $this->pagination->create_links();

		/*echo"<pre";
		print_r($data);
		exit;*/	

		$this->load->view('Template2/Header.php');
		$this->load->view('Template2/Sidebar.php');
		$this->load->view('View_customer.php', $data);
		// $this->load->view('Template2/Footer.php');

	}
/*===============================================================================================*/

/*=====================Edit/Dlete customer page ============================================================*/

	public function edit_delete_customer()
	{
		$this->load->model('Main_model');
		//$customer_id = $this->input->post('cust_id');
		//$data['fetch_data_by_customer_id'] = $this->Main_model->fetch_data_by_customer_id($customer_id);
		$data['fetch_new_customer_data'] = $this->Main_model->fetch_new_customer_data();
		$this->load->view('Template2/Header.php');
		$this->load->view('Template2/Sidebar.php');
		$this->load->view('Edit_delete_customer.php',$data);
	//	$this->load->view('Template2/Footer.php');

	}
/*===================================================================================================================*/

	public function delete_customer()
	{
		$this->load->model('Main_model');
		$customer_id=$this->uri->segment(3);
		$this->Main_model->delete_customer_data($customer_id);
		redirect('Main/edit_delete_account');
	}

//====================================================================================//
/*================search delete Customer===============================================================*/

	/*	public function search_delete_customer()
	{

			$this->load->model('Main_model');
			$customer_id = $this->input->post('cust_id');
			$data['fetch_data_by_customer_id'] = $this->Main_model->fetch_data_by_customer_id($customer_id);
			$this->load->view('Template2/Header.php');
			$this->load->view('Template2/Sidebar.php');
			$this->load->view('Edit_delete_customer.php',$data);
			$this->load->view('Template2/Footer.php');


	}
*/
/*===========New Account ======================================================================================*/
	public function new_account()
	{
		$this->load->view('Template2/Header.php');
		$this->load->view('Template2/Sidebar.php');
		$this->load->view('New_account.php');
		$this->load->view('Template2/Footer.php');
	}

	//====new Account form validation====================//
	public function new_account_form_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('customer_id', 'Customer Id', 'required');
		$this->form_validation->set_rules('account_type', 'Account Type', 'required');
		$this->form_validation->set_rules('branch', 'Branch' , 'required');
		$this->form_validation->set_rules('ifsc_code' , 'IFSC Code' , 'required');
		$this->form_validation->set_rules('phone_no' ,' Phone number' , 'required|numeric|exact_length[10]');
		$this->form_validation->set_rules('email' , 'Email', 'required|valid_email');
		$this->form_validation->set_rules('opening_balance' , 'Opening Balance' , 'required');

		if($this->form_validation->run())
		{
			//true
			$this->load->model('Main_model');

			$this->load->helper('date');
			$now = date("Y-m-d H:i:s");

			$data = array(
					"customer_id" 	  => $this->input->post('customer_id'),
					"date" 			  => $now,
					"account_type" 	  => $this->input->post('account_type'),
					"bank_branch"  	  => $this->input->post('branch'),
					"ifsc_code"	      => $this->input->post('ifsc_code'),
					"phone_no"		  => $this->input->post('phone_no'),
					"email"           => $this->input->post('email'),
					"opening_balance" => $this->input->post('opening_balance'),
					"pin"			  => rand(999,9999),
					"account_number"  =>rand(0,1000000000000)	
					);

				$this->Main_model->insert_data_new_account($data);
				redirect('Main/new_account');
		}
		else
		{
			$this->new_account();
		}
	}

/*====================================================================================================*/


/*=============View Account===================================================================================*/

	/*public function view_account()
	{
		$this->load->model('Main_model');
		$account_number = $this->input->post('account_no');
		$data['fetch_data_by_account_no'] = $this->Main_model->fetch_data_by_account_no($account_number);
		$this->load->view('Template2/Header.php');
		$this->load->view('Template2/Sidebar.php');
		$this->load->view('View_account.php', $data);
		$this->load->view('Template2/Footer.php');

	}*/

/*================================================================================================================*/

/*=============View Account===================================================================================*/

	public function view_account()
	{
		$this->load->model('Main_model');
		
	/*	$this->load->library('pagination'); 

		 $config=[		
        'base_url' => base_url('index.php/Main/view_account'),
        'per_page' =>2,
        'total_rows' => $this->Main_model->num_rows(),
        'full_tag_open'=>"<ul class='pagination'>",
        'full_tag_close'=>"</ul>",
        'next_tag_open' =>"<li>",
        'next_tag_close' =>"</li>",
        'prev_tag_open' =>"<li>",
        'prev_tag_close' =>"</li>",
        'num_tag_open' =>"<li>",
        'num_tag_close' =>"<li>",
        'cur_tag_open' =>"<li class='active'><a>",
        'cur_tag_close' =>"</a></li>"

 		];


		$this->pagination->initialize($config);*/

		//echo $this->pagination->create_links();


		//$data['fetch_new_account_data'] = $this->Main_model->fetch_new_account_data($config['per_page'],$this->uri->segment(3));
		//$data['pagination_links'] = $this->pagination->create_links();

		$data['fetch_new_account_data'] = $this->Main_model->fetch_new_account_data();

		$this->load->view('Template2/Header.php');
		$this->load->view('Template2/Sidebar.php');
		$this->load->view('View_account.php', $data);
		//$this->load->view('Template2/Footer.php');

	}

/*================================================================================================================*/

/*=============Edit/Delete Account ===================================================================================*/

	public function edit_delete_account()
	{
		$this->load->model('Main_model');
		$data['fetch_new_account_data'] = $this->Main_model->fetch_new_account_data();
		$this->load->view('Template2/Header.php');
		$this->load->view('Template2/Sidebar.php');
		$this->load->view('Edit_delete_account.php', $data);
		//$this->load->view('Template2/Footer.php');

	}

/*========================================================================================================================*/


/*=============Delete Account Data===============================================*/
	public function delete_account()
	{
		$this->load->model('Main_model');
		$customer_id=$this->uri->segment(3);
		$this->Main_model->delete_account_data($customer_id);
		redirect('Main/edit_delete_account');
	}


/*=============Balance ================================================================================*/

	public function balance()
	{
		$this->load->model('Main_model');
		$account_number = $this->input->post('account_no');
		$data['fetch_balance'] = $this->Main_model->fetch_balance($account_number);
		$this->load->view('Template2/Header.php');
		$this->load->view('Template2/Sidebar.php');
		$this->load->view('Balance.php',$data);
		$this->load->view('Template2/Footer.php');

	}

/*======================================================================================================*/

/*=============Fund Transfer ========================================================================*/

	public function fund_transfer()
	{
	
		$this->load->view('Template2/Header.php');
		$this->load->view('Template2/Sidebar.php');
		$this->load->view('Fund_transfer.php');
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
			$this->load->model('Main_model');
			$data = array(
						'account_number' => $this->input->post('account_number'),
						're_enter_account_number' => $this->input->post('re_enter_account_no'),
						'ifsc_code' => $this->input->post('ifsc_code'),
						'date' => $now,
						'amount' => $this->input->post('amount'),
						'recipient_name' => $this->input->post('recipient_name')

			);	
			$this->Main_model->insert_data_fund_transfer($data);
			redirect('Main/fund_transfer');	
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
		$data['fetch_mini_statement'] = $this->Main_model->fetch_mini_statement();
		$this->load->view('Template2/Header.php');
		$this->load->view('Template2/sidebar.php');
		$this->load->view('Mini_statement.php',$data);
		$this->load->view('Template2/Footer.php');

	}


/*==========================================================================================================================*/

/*=============Customized statement==============================================================================*/

	public function customized_statement()
	{
		$this->load->view('Template2/Header.php');
		$this->load->view('Template2/Sidebar.php');
		$this->load->view('Customized_statement.php');
		$this->load->view('Template2/Footer.php');

	}

/*=======================================================================================================================*/

/*=============News management================================================================================*/

	public function news_management()
	{
		$this->load->model('Main_model');
		$data['fetch_news'] = $this->Main_model->fetch_news();		//fetch data
		$this->load->view('Template2/Header.php');
		$this->load->view('Template2/Sidebar.php');
		$this->load->view('News_management.php', $data);
		$this->load->view('Template2/Footer.php');

	}

	//===News management form validation=======================//
	public function news_management_form_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('news_headline' , 'News Headline' , 'required');
		$this->form_validation->set_rules('news', 'News', 'required');

		if($this->form_validation->run())
		{
			
				$this->load->model('Main_model');
				$data = array (
							"news_headline" => $this->input->post('news_headline'),
							"news" 			=> $this->input->post('news'),
							"date" 			=> date('Y-m-d')
						);
				$this->Main_model->insert_data_news_management($data);
				redirect('Main/news_management');
		}
		else
		{
			$this->news_management();

		}

	}

//====View News ====================================================//
	public function news()
	{
		$this->load->model('Main_model');
		$data['fetch_news'] = $this->Main_model->fetch_news();		//fetch data
		$this->load->view('Template2/Header.php');
		$this->load->view('Template2/Sidebar.php');
		$this->load->view('View_news.php', $data);
		$this->load->view('Template2/Footer.php');

	}



	//====delete news management==============================================//
	public function delete_news()
	{
		$this->load->model('Main_model');
		$sr_no = $this->uri->segment(3);
		$this->Main_model->delete_news($sr_no);
		redirect('Main/news_management');


	}




/*=======================================================================================================================*/

/*=============Profile ===================================================================================================*/

	public function profile()
	{
		$this->load->view('Template2/Header.php');
		$this->load->view('Template2/Sidebar.php');
		$this->load->view('Profile.php');
		$this->load->view('Template2/Footer.php');



	}

/*============================================================================================================================*/

/*=============Faq ========================================================================================================*/

	public function faq()
	{
		$this->load->view('Template2/Header.php');
		$this->load->view('Template2/Sidebar.php');
		$this->load->view('Faq.php');
		$this->load->view('Template2/Footer.php');

	}

/*================================================================================================================*/






}
