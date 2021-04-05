<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot_password extends CI_Controller 
{

	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username', 'required');
		$this->form_validation->set_rules('new_password','New Password', 'required');
		$this->form_validation->set_rules('confirm_password','Confirm Password', 'required|matches[new_password]');

		if($this->form_validation->run())
		{

			$this->load->model('Forgot_pwd_model');

			$username = $this->input->post('username');
            $new_password = $this->input->post('new_password');
            $confirm_password = $this->input->post('confirm_password');

            $query=$this->db->query("select password from login where user_name='$username' ");

           	$row=$query->row();

            if((!strcmp($new_password, $confirm_password)))
            {
                $this->Forgot_pwd_model->change_pass($username,$new_password);

                $this->session->set_flashdata('success', "Password changed successfully");
            }
            else
            {
                   $this->session->set_flashdata('eror', "Invalid");
            }

		}
	

		$this->load->view('Template2/Header.php');
		$this->load->view('Forgot_password.php');
		$this->load->view('Template2/Footer.php');
	}








	public function user_forgot_password()
	{
		
		$this->load->view('Template2/Header.php');
		$this->load->view('Customer_pages/Customer_forgot_pwd.php');
		$this->load->view('Template2/Footer.php');
	}



	public function user_forgot_password_change()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('acc_no','Account Number', 'required');
		$this->form_validation->set_rules('new_password','New Password', 'required');
		$this->form_validation->set_rules('confirm_password','Confirm Password', 'required|matches[new_password]');

		if($this->form_validation->run())
		{

			$this->load->model('Forgot_pwd_model');

			$account_no = $this->input->post('acc_no');
            $new_password = $this->input->post('new_password');
            $confirm_password = $this->input->post('confirm_password');

            $query=$this->db->query("select password,confirm_password from customer_details where account_no='$account_no' ");

            if((!strcmp($new_password, $confirm_password)))
            {
                $this->Forgot_pwd_model->change_customer_pass($account_no,$new_password,$confirm_password);

                $this->session->set_flashdata('success', "Password changed successfully");
            }
           	else
            {
                   $this->session->set_flashdata('eror', "Invalid");
            }
		
	}
		$this->load->view('Template2/Header.php');
		$this->load->view('Customer_pages/Customer_forgot_pwd.php');
		$this->load->view('Template2/Footer.php');
	}
}
