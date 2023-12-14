<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Data_paket extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
	public function index()
	{
		$data['title'] = "Paket";
		$data['paket'] = $this->ModelPaket->getPaket()->result_array();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/data_paket', $data);
	}

	public function ubahPaket()
	{
		$data['judul'] = 'Ubah Data Paket';
		$data['paket'] = $this->Modelpaket->paketWhere(['id_paket' => $this->uri->segment(3)])->result_array();
		$this->form_validation->set_rules('nama_paket', 'Nama Paket', 'required|min_length[3]', [
			'required' => 'Nama paket harus diisi',
			'min_length' => 'Nama paket terlalu pendek'
		]);
		$this->form_validation->set_rules('daya_paket', 'Daya Paket', 'required', [
			'required' => 'Daya paket harus diisi',
		]);
		$this->form_validation->set_rules('spesifikasi', 'Spesifikasi Paket', 'required|min_length[3]', [
			'required' => 'Spesifikasi paket harus diisi',
			'min_length' => 'Spesifikasi paket terlalu pendek'
		]);
		$this->form_validation->set_rules('hrg_sewa', 'Harga Sewa', 'required|min_length[3]|numeric', [
			'required' => 'Harga sewa harus diisi',
			'min_length' => 'Harga sewa terlalu pendek',
			'numeric' => 'Yang anda masukan bukan angka'
		]);
		if ($this->form_validation->run() == false) {
			$this->load->view('admin/header', $data);
			$this->load->view('admin/sidebar', $data);
			$this->load->view('admin/topbar', $data);
			$this->load->view('admin/ubah_paket', $data);
			$this->load->view('admin/footer');
		} else {
			$data = [
				'category' => $this->input->post('category', true)
			];
			$this->ModelPaket->updatePaket(['id' => $this->input->post('id')], $data);
			redirect('admin/data_paket');
		}
	}	

	public function hapusPaket()
	{
		$where = ['id_paket' => $this->uri->segment(3)];
		$this->ModelPaket->hapusPaket($where);
		redirect('admin/data_paket');
	}
}


