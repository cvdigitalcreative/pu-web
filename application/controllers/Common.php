<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Common extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
    }

    public function privacy(){
        $this->load->view('privacy_policy.html');
    }
    public function terms(){
        $this->load->view('terms_and_conditions.html');
    }
}