<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Public_page extends CI_Controller
{
    public function index(){
        $this->load->view('public');
    }
}