<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_logged_in();
	}
	public function index()
	{
		$data['judul'] = 'Profil Saya';
		$data['users'] = $this->ModelUser->getUser()->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/karyawan', $data);
	}

	public function hapusUser()
	{
		$where = ['id_user' => $this->uri->segment(3)];
		$this->ModelUser->hapusUser($where);
		redirect('admin/karyawan');
	}
	public function user()
	{
		$data['judul'] = 'Data user';
		$data['user'] = $this->db->get('users')->result_array();
		$this->load->view('admin/header', $data);
		$this->load->view('admin/menu', $data);
		$this->load->view('admin/karyawan', $data);
		$this->load->view('admin/footer');
	}
	public function ubahUser()
	{
		$data['judul'] = 'Ubah User';
		$data['users'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
		$this->form_validation->set_rules(
			'name',
			'Nama Lengkap',
			'required|trim',
			[
				'required' => 'Nama tidak Boleh Kosong'
			]
		);
		if ($this->form_validation->run() == false) {
			$this->load->view('user/header', $data);
			$this->load->view('user/sidebar', $data);
			$this->load->view('user/topbar', $data);
			$this->load->view('admin/karyawan', $data);
			$this->load->view('user/footer');
		} else {
			$name = $this->input->post('name', true);
			$email = $this->input->post('email', true);			//jika ada gambar yang akan diupload

			$this->db->set('name', $name);
			$this->db->where('email', $email);
			$this->db->update('users');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-message" role="alert">Profil Berhasil diubah </div>');
			redirect('user');
		}
	}
	
}