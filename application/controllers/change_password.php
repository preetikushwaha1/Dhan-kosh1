<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Change_password extends CI_Controller {

	public function index()
	{
		
		$this->load->view('Template2/Header.php');
		$this->load->view('Template2/sidebar.php');
		$this->load->view('Change_password.php');
		$this->load->view('Template2/Footer.php');
	}

	public function Change_pwd()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('old_pwd','Old Password', 'required');
		$this->form_validation->set_rules('new_pwd','New Password', 'required');
		$this->form_validation->set_rules('confirm_pwd','New Password', 'required|matches[new_pwd]');

		if($this->form_validation->run())
		{
			echo "true";
		}
		else
		{
			echo "false";
		}

		
	
	}

	
}
