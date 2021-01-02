<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Peserta_model');
		$this->load->model('User_model');
		$this->load->model('Kegiatan_model');
	}
	
	public function index(){
		$this->load->view('administrator/dashboard');
	}
}
