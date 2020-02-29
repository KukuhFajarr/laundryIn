<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
  {
    parent::__construct();
    // $this->load->database();
    $this->load->model('data');
  }

	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['email' =>
    $this->session->userdata('email')])->row_array();
		$dat['pesan'] = $this->data->getAllUser();
    $this->load->view('template/header', $data);
		$this->load->view('admin/input_tracking', $dat);
    $this->load->view('template/footer');
  }

	public function edit($id)
	{
		$where = array('id_laundry'=>$id);
	 $data['status'] = $this->data->edit($where, 'pesan')->result();
	 $this->load->view('admin/edit', $data);
	}

	public function update(){
	$id = $this->input->post('id');
	$status_laundry = $this->input->post('status_laundry');

	$data = array(
		'status_laundry' => $status_laundry
	);

	$where = array(
		'id_laundry' => $id
	);

	$this->data->update_data($where,$data,'pesan');
	redirect('admin');
}


}
