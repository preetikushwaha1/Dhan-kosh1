<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot_password extends CI_Controller {

	public function index()
	{
		
		$this->load->view('Forgot_password.php');
		$this->load->view('Template2/Footer.php');
	}

	public function Sign_up()
	{
		
		$this->load->view('Sign_up.php');
		$this->load->view('Template2/Footer.php');
	}
}
