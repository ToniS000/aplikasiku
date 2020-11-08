<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Mahasiswa extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('mahasiswa_model');
  }
  public function index()
  {
    $data['daftar_mahasiswa'] = $this->mahasiswa_model->select_all()->result();
    $this->load->view('mahasiswa/daftar_mahasiswa', $data);
  }
  public function tambah()
  {
    $this->load->view('mahasiswa/tambah_mahasiswa');
  }
  public function proses_simpan()
  {
    $data['npm'] = $this->input->post('npm');
    $data['nama'] = $this->input->post('nama');
    $data['alamat'] = $this->input->post('alamat');
    $data['telepon'] = $this->input->post('telepon');
    $this->mahasiswa_model->insert($data);
    redirect(base_url() . 'mahasiswa');
  }
  public function edit($id)
  {
    $data['mahasiswa'] = $this->mahasiswa_model->select_by_id($id)->row();
    $this->load->view('mahasiswa/edit_mahasiswa', $data);
  }
  public function proses_update()
  {
    $id = $this->input->post('id');
    $data['npm'] = $this->input->post('npm');
    $data['nama'] = $this->input->post('nama');
    $data['alamat'] = $this->input->post('alamat');
    $data['telepon'] = $this->input->post('telepon');
    $this->mahasiswa_model->update($id, $data);
    redirect(base_url() . 'mahasiswa');
  }
  public function delete($id)
  {
    $data['mahasiswa'] = $this->mahasiswa_model->select_by_id($id)->row();
    $this->load->view('mahasiswa/delete_mahasiswa', $data);
  }
  public function proses_hapus()
  {
    $id = $this->input->post('id');

    $this->mahasiswa_model->delete($id);
    redirect(base_url() . 'mahasiswa');
  }
}
