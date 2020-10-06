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
}
