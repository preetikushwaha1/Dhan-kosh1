<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

     	/*if($this->session->userdata('user_name')) 
     		redirect('Login');  */
    }





	public function index()
	{
		
		$this->load->view('Login.php');
		$this->load->view('Template2/Footer.php');
	}

	public function admin_login_validation()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('admin_username', 'Username' , 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run())
		{
			$this->load->model('Login_model');

			$admin_username = $this->input->post('admin_username');
			$password = $this->input->post('password');
			$admin_data_row = $this->Login_model->admin_login_correctly($admin_username, $password); 

			/*echo"<pre>";
			print_r($user_name);
			exit;*/


			if($admin_data_row)
			{
				//echo "Details macthed";
				$this->load->library('session');
				$this->session->set_userdata('user_name',$admin_data_row->user_name);
				//$this->session->set_userdata('password',$admin_data_row->password);
				$this->session->set_userdata('id',$admin_data_row->id);
				redirect('Main');

			}
			else
			{
				//echo "Details not matched";
				$this->session->set_flashdata('error','Invalid Username and Password');
				redirect('Login');


			}
				
		}
		else
		{
			$this->index();
		}

	}


/*=================admin Logout============================================================================*/
	public function logout()
	{
		$this->session->unset_userdata('user_name');
		redirect('Login');
	} 




/*===========User Login Validation ==============================================================*/
 	public function user_login_validation()
 	{
 		$this->load->library('form_validation');
 		$this->form_validation->set_rules('account_num','Account Number','required');
 		$this->form_validation->set_rules('pass','Password','required');

 		if($this->form_validation->run())
 		{
 			$this->load->model('Login_model');

 			$account_num = $this->input->post('account_num');
 			$password = $this->input->post('pass');

 			$user_data_row = $this->Login_model->user_login_correctly($account_num,$password);

 			/*echo "<pre>";
 			print_r($user_data_row);
 			exit;*/

 			if($user_data_row)
 			{
 				$this->load->library('session');

 				$this->session->set_userdata('customer_id',$user_data_row->customer_id);
 				$this->session->set_userdata('account_number',$user_data_row->account_no);
 				$this->session->set_userdata('first_name',$user_data_row->first_name);
 				$this->session->set_userdata('last_name',$user_data_row->last_name);
 				redirect('Main_customer');
 			}
 			else
 			{
 				$this->session->set_flashdata('user_error','Invalid Account Number and Password');
 				redirect('Login');
 			}

 		}
 		else
 		{	
 			$this->index();
 		}
 		
 	}


 



}
