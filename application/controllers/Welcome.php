<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->view('blank');
	}
	public function lihat_info()
	{
		echo "<head><title>PELATIHAN CODEIGNITER 2020</title></head>";
		echo "<h1>INI ADALAH PELATIHAN CODEIGNITER 2020</h1>";
		echo "<h3>Presented by Fasilkom Unsub</h3>";
		echo "<h3>Ini adalah pelatihan codeigniter versi 3.1.11</h3>";
		echo "Fasilkom UNSUB 2020";
	}
	public function lihat_biodata()
	{
		$this->load->view('biodata');
	}
}
