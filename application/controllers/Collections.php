<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Collections extends CI_Controller {

	public function index()
	{
		$this->load->view('components/header');
		$this->load->view('collections');
		$this->load->view('components/footer');
	}
}
