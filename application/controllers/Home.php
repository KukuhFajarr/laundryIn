<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
    $this->load->view('template/header');
		$this->load->view('index');
    $this->load->view('template/footer');
	}

	public function list_harga()
	{
    $this->load->view('template/header');
		$this->load->view('listHarga');
    $this->load->view('template/footer');
	}

	public function FAQ()
	{
    $this->load->view('template/header');
		$this->load->view('faq');
    $this->load->view('template/footer');
	}

	public function kontak()
	{
    $this->load->view('template/header');
		$this->load->view('kontak');
    $this->load->view('template/footer');
	}

	public function layanan()
	{
    $this->load->view('template/header');
		$this->load->view('layanan');
    $this->load->view('template/footer');
	}
}
