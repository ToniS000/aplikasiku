<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
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
