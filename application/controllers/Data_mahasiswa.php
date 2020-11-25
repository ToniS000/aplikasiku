<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Data_mahasiswa extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->model('data_mahasiswa_model');
  }
  function _template($data)
  {
    $this->load->view('template/main', $data);
  }
  public function index()
  {
    $data['daftar_mahasiswa'] = $this->data_mahasiswa_model->select_all()->result();
    $data['konten'] = 'data_mahasiswa/list_data';
    $this->_template($data);
  }
}
