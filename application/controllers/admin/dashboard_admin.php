<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_admin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

	public function index()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/footer');
		$this->load->view('admin/menu');
	}
}