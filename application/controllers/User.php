<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    // $this->load->database();
    $this->load->model('data');
    $this->load->library('form_validation');
  }


  public function index()
 {
   $data['user'] = $this->db->get_where('user', ['email' =>
   $this->session->userdata('email')])->row_array();
   $this->load->view('template/header', $data);
   $this->load->view('User/index', $data);
   $this->load->view('template/footer');
 }

 public function pesan()
 {
      $data['user'] = $this->db->get_where('user', ['email' =>
      $this->session->userdata('email')])->row_array();
      $this->form_validation->set_rules('Jenis_laundry', 'jenis_laundry', 'required');
      $this->form_validation->set_rules('Pilih_laundry', 'pilih_laundry', 'required');
      // $this->form_validation->set_rules('Nama', 'nama', 'required');
      // $this->form_validation->set_rules('No', 'no', 'required');
      // $this->form_validation->set_rules('Email', 'email', 'required');
      $this->form_validation->set_rules('Waktu_pengambilan', 'waktu_pengambilan', 'required');
      $this->form_validation->set_rules('Pembayaran', 'pembayaran', 'required');
      $this->form_validation->set_rules('Alamat', 'alamat', 'required');
      $this->form_validation->set_rules('Kota', 'kota', 'required');
      $this->form_validation->set_rules('Kel', 'Kel', 'required');
      $this->form_validation->set_rules('Kec', 'Kec', 'required');
      $this->form_validation->set_rules('Catatan', 'catatan', 'required');
      $this->form_validation->set_rules('id_User', 'ID_user', 'required');
      $this->form_validation->set_rules('status_laundry', 'Status_laundry', 'required');

if ($this->form_validation->run() == FALSE) {
  $this->load->view('template/header');
  $this->load->view('user/pesan', $data);
  $this->load->view('template/footer');
}else{
   $this->data->tambah();
   redirect('home');
 }
 }

 public function pesananku()
 {
   $dataa['pesan']= $this->data->pesanan();
   $this->load->view('template/header');
   $this->load->view('User/tracking', $dataa);
   $this->load->view('template/footer');
 }
}


// $data['user'] = $this->db->get_where('user', ['email' =>$this->session->userdata('email')])->row_array();
// $data= $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
// $id = $data['id'];
// $this->db->select("status_laundry");
// $this->db->from(" pesan");
// $this->db->where("pesan.id_user = $id");
// $query = $this->db->get();
