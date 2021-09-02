<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	

	public function index()
	{
		$this->load->view('components/headerUser');
		$this->load->view('myAccount/transaksi');
		$this->load->view('components/footerUser');
	}
}