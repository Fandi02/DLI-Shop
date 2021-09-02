<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	

	public function index()
	{
		$this->load->view('components/headerUser');
		$this->load->view('myAccount/user');
		$this->load->view('components/footerUser');
	}
}
