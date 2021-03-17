<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('Template1/Header.php');
		$this->load->view('Template1/Body.php');
		$this->load->view('Template1/Footer.php');
	}
}
