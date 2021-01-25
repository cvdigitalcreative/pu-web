<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function seluruh()
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

            if ($null)
                $this->load->view('error_page');
            else
                $this->load->view('administrator/master_data', $data);
        } else
            redirect('pupr/login');
    }
}
