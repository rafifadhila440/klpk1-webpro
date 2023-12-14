<?php
defined('BASEPATH') or exit('No direct script access allowed');
class daftar_pesanan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = "Daftar Pesanan";
        $data['pesanan'] = $this->ModelPaket->getPesanan()->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/daftar_pesanan', $data);
    }

    public function hapusPesanan()
    {
        $where = ['id_pesanan' => $this->uri->segment(3)];
        $this->ModelPaket->hapusPesanan($where);
        redirect('admin/daftar_pesanan');
    }
}
