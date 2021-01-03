<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('dashboard_model');
        $this->load->model('User_model');
    }

    //blm done
    public function dashboard()
    {
        if ($this->session->userdata('logged_in') == true) {
            $null = false;
            //================= User detail for navbar =======================
            $data['header']['detail_user'] = $this->User_model->view_user_detail($this->session->userdata('token'));
            if ($data['header']['detail_user'] == null)
                $null = true;
            else {
                if ($data['header']['detail_user']['status'] == "Success") {
                    $data['header']['detail_user'] = $data['header']['detail_user']['data'];
                } else {
                    $data['header']['detail_user'] = null;
                    $this->session->set_flashdata('APImessage', $data['header']['detail_user']['message']);
                }
            }

            $data['dashboard'] = $this->dashboard_model->view_dashboard($this->session->userdata('token'));
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

            $this->load->view('administrator/dashboard', $data);
        } else
            redirect();
    }
}