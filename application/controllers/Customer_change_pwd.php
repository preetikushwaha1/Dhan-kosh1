<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_change_pwd extends CI_Controller {

	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('old_pwd','Old Password', 'required');
		$this->form_validation->set_rules('new_pwd','New Password', 'required');
		$this->form_validation->set_rules('confirm_pwd','Confirm Password', 'required|matches[new_pwd]');

		if($this->form_validation->run())
		{

			$this->load->model('Customer_Change_pwd_model');

			$old_pwd=$this->input->post('old_pwd');
            $new_pwd=$this->input->post('new_pwd');
            $confirm_pwd=$this->input->post('confirm_pwd');

            $username=$this->session->userdata('user_name');

            $query=$this->db->query("select password from login where user_name='$username' ");

           	$row=$query->row();

            if((!strcmp($old_pwd, $old_pwd))&& (!strcmp($new_pwd, $confirm_pwd)))
            {
                $this->Customer_Change_pwd_model->change_pass($username,$new_pwd);

                $this->session->set_flashdata('success', "Password changed successfully");
            }
            else
            {
                   $this->session->set_flashdata('eror', "Invalid");
            }

		}
	

		$this->load->view('Template2/Header.php');
		$this->load->view('Template2/Customer_sidebar.php');
		$this->load->view('Customer_pages/Customer_change_password.php');
		$this->load->view('Template2/Footer.php');
	}



	
}
