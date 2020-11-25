<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
  }
  function _template($data)
  {
    $this->load->view('template/main', $data);
  }
  public function index()
  {
    $data['konten'] = 'dashboard';
    $this->_template($data);
  }
}
