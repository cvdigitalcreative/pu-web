<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('dashboard_model');
    }

    //blm done
    public function index()
    {
        if ($this->session->userdata('logged_in') == true) {
            $null = false;
            $data['dashboard'] = $this->dashboard_model->view_dashboard($this->session->userdata('token'));
            var_dump($data['dashboard']); die;
            if ($data['dashboard'] == null)
                $null = true;
            else {
                if ($data['dashboard']['status'] == "Success") {
                    $data['dashboard'] = $data['dashboard']['data'];
                } else {
                    $data['dashboard'] = null;
                    $this->session->set_flashdata('APImessage', $data['dashboard']['message']);
                }
            }

            if ($null)
                redirect();
        } else
            redirect();
    }
}