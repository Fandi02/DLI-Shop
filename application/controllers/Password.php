<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Password extends CI_Controller {

	

	public function index()
	{
		$this->load->view('components/headerUser');
		$this->load->view('myAccount/password');
		$this->load->view('components/footerUser');
	}
}