<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Authentication extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Peserta_model');
        $this->load->model('User_model');
        $this->load->model('Kegiatan_model');
    }

    public function register()
    {
        if (!$this->session->userdata('logged_in')) {
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $no_telpon = $this->input->post('no_telpon');
            $password = $this->input->post('password');

            $register = $this->User_model->register($nama, $email, $no_telpon, $password);

            if ($register['status'] == "Success") {
                $this->session->set_flashdata('success', $register['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $register['message']);
                redirect();
            }
        } else {
            redirect();
        }
    }

    public function login()
    {
        if (!$this->session->userdata('logged_in')) {
            $email_no_telepon = $this->input->post('email_no_telepon');
            $password = $this->input->post('password');

            $login = $this->User_model->login($email_no_telepon, $password);

            if ($login['status'] == "Success") {
                $this->session->set_flashdata('success', $login['message']);

                // ============ set userdata =============
                $this->session->set_userdata('logged_in', true);
                $this->session->set_userdata('token', $login['data']['id_token']);
                $this->session->set_userdata('nama', $login['data']['nama']);
                $this->session->set_userdata('role', $login['data']['id_role']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $login['message']);
                redirect();
            }
        } else {
            redirect();
        }
    }

    public function email_verification($id_user)
    {
        $verification = $this->User_model->email_verification($id_user);
        if ($verification['status'] == "Success") {
            $this->session->set_flashdata('success', $verification['message']);
            redirect();
        } else {
            $this->session->set_flashdata('APImessage', $verification['message']);
            redirect();
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('token');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('role');
        $this->session->sess_destroy();

        $this->session->set_flashdata('APImessage', "Logout berhasil");
    }

    public function forgot_password()
    {
        $email_no_telepon = $this->input->post('email_no_telepon');

        $forgot_password = $this->User_model->forgot_password($email_no_telepon);

        if ($forgot_password['status'] == "Success") {
            $this->session->set_flashdata('success', $forgot_password['message']);
            redirect();
        } else {
            $this->session->set_flashdata('APImessage', $forgot_password['message']);
            redirect();
        }
    }

    public function change_password()
    {
        $id_forgot_password = $this->input->post('id_forgot_password');
        $new_password = $this->input->post('new_password');

        $change_password = $this->User_model->change_password($id_forgot_password, $new_password);

        if ($change_password['status'] == "Success") {
            $this->session->set_flashdata('success', $change_password['message']);
            redirect();
        } else {
            $this->session->set_flashdata('APImessage', $change_password['message']);
            redirect();
        }
    }
}
