<?php

defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{

    public function index()
    {
        $this->load->view('admin_template/header');
        $this->load->view('admin_template/sidebar');
        $this->load->view('admin/dashboard');
        $this->load->view('admin_template/footer');
    }
}

/* End of file admin.php */
