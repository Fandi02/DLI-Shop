<?php

defined('BASEPATH') or exit('No direct script access allowed');

class produk extends CI_Controller
{

    public function index()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('admin_template/header');
        $this->load->view('admin_template/sidebar');
        $this->load->view('admin/produk', $data);
        $this->load->view('admin_template/footer');
    }
}

/* End of file Produk.php */
