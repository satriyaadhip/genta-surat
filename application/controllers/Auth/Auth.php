<?php
class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = array(
			'title' => 'GENTA | Gentan Administrasi Terpadu'
		);

		$this->load->view('auth/layout/header', $data);
		$this->load->view('auth/index', $data);
		$this->load->view('auth/layout/footer', $data);
	}
}
