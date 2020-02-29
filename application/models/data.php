<?php

/**
 *
 */
class data extends CI_Model
{

  public function getAllUser()
  {
    return $this->db->get('pesan')->result_array();
  }

  public function tambah()
    {
      $data =[
        "jenis_laundry" => $this->input->post('Jenis_laundry'),
        "pilih_laundry" => $this->input->post('Pilih_laundry'),
        "waktu_pengambilan" => $this->input->post('Waktu_pengambilan'),
        "methode_bayar" => $this->input->post('Pembayaran'),
        "alamat" => $this->input->post('Alamat'),
        "kab/kot" => $this->input->post('Kota'),
        "kec" => $this->input->post('Kec'),
        "kel" => $this->input->post('Kel'),
        "catatan" => $this->input->post('Catatan'),
        "id_user" =>$this->input->post('id_User'),
        "status_laundry" =>$this->input->post('status_laundry')
      ];
      $this->db->insert('pesan', $data);
    }

  public function pesanan()
  {
    $data = $this->session->userdata('id');
    $this->db->select('status_laundry');
    $this->db->from('pesan');
    $this->db->where("pesan.id_user = $data");
    $query = $this->db->get();
      return $query->result();
  }

  public function edit($where, $table)
  {
    return $this->db->get_where($table, $where);
  }

  function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

}

// $data= $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
// $id = $data['id'];
// $value = $this->db->query("SELECT status_laundry FROM pesan where pesan.id_user = $id");
// return $value;
