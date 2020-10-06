<?php
defined('BASEPATH') or exit('No direct script access allowed');

class My_aplikasi extends CI_Controller
{
  public function index()
  {
    $this->load->view('biodata');
  }
}
