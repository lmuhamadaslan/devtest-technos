<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProdukController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ProdukModel');
    }

    public function index()
    {
        $model = new ProdukModel();
        $data['produk'] = $model->getProduk();
        $this->load->view('produk', $data);
    }
}