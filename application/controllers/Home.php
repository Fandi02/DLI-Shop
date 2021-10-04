<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{



	public function index()
	{
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view('components/header');
		$this->load->view('home', $data);
		$this->load->view('components/footer');
	}
}
