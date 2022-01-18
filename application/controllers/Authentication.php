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

    public function login()
    {
        if ($this->session->userdata("logged_in") == true)
            redirect("pupr/dashboard");
        else
            $this->load->view("administrator/login");
    }

    public function login_action()
    {
        if (!$this->session->userdata('logged_in')) {
            $email_no_telepon = $this->input->post('email_no_telepon');
            $password = hash("sha256", $this->input->post('password'));

            $login = $this->User_model->login($email_no_telepon, $password);
            if ($login == null)
                $this->load->view('error_page');
            else {
                if ($login['status'] == "Success") {
                    if ($login['data']['id_role'] != 3) {
                        $this->session->set_flashdata('success', $login['message']);
                        
                        // ============ set userdata =============
                        $this->session->set_userdata('logged_in', true);
                        $this->session->set_userdata('token', $login['data']['id_token']);
                        $this->session->set_userdata('id_user', $login['data']['id_user']);
                        $this->session->set_userdata('nama', $login['data']['nama']);
                        $this->session->set_userdata('role', $login['data']['id_role']);
                        $this->session->set_userdata('id_provinsi', $login['data']['id_provinsi']);
                        redirect("pupr/dashboard");
                    }
                    else{
                        $this->session->set_flashdata('APImessage', "Akses gagal. Hanya administrator yang dapat mengakses website ini");
                        redirect('pupr/login');

                    }
                } else {
                    $this->session->set_flashdata('APImessage', $login['message']);
                    redirect('pupr/login');
                }
            }
        } else {
            redirect("pupr/dashboard");
        }
    }

    public function register()
    {
        if ($this->session->userdata("logged_in") == true)
            redirect("pupr/dashboard");
        else
            $this->load->view("administrator/register");
    }

    public function register_action()
    {
        if (!$this->session->userdata('logged_in')) {
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $no_telpon = $this->input->post('no_telpon');
            $password = hash("sha256", $this->input->post('password'));

            $register = $this->User_model->register($nama, $email, $no_telpon, $password);

            if ($register == null)
                $this->load->view('error_page');
            else {
                if ($register['status'] == "Success") {
                    $this->session->set_flashdata('success', $register['message']);
                    redirect("pupr/login");
                } else {
                    $this->session->set_flashdata('APImessage', $register['message']);
                    redirect("pupr/register");
                }
            }
        } else {
            redirect("pupr/dashboard");
        }
    }

    public function email_verification($id_user)
    {
        $verification = $this->User_model->email_verification($id_user);

        if ($verification == null)
            $this->load->view('error_page');
        else {
            if ($verification['status'] == "Success") {
                $this->session->set_flashdata('success', $verification['message']);
                redirect('pupr/login');
            } else {
                $this->session->set_flashdata('APImessage', $verification['message']);
                redirect('pupr/register');
            }
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
        redirect("pupr/login");
    }

    public function forgot_password()
    {
        if (!$this->session->userdata('logged_in')) {
            $this->load->view('administrator/request_forgot_password');
        } else
            redirect("pupr/dashboard");
    }

    public function forgot_password_action()
    {
        $email_no_telepon = $this->input->post('email_no_telepon');

        $forgot_password = $this->User_model->forgot_password($email_no_telepon);

        if ($forgot_password == null)
            $this->load->view('error_page');
        else {
            if ($forgot_password['status'] == "Success") {
                $this->session->set_flashdata('success', $forgot_password['message']);
                redirect("pupr/login");
            } else {
                $this->session->set_flashdata('APImessage', $forgot_password['message']);
                redirect("pupr/password/forgot");
            }
        }
    }

    public function change_password($id_forgot_password)
    {
        if (!$this->session->userdata('logged_in')) {
            $data['id_forgot_password'] = $id_forgot_password;
            $this->load->view('administrator/setting_new_password', $data);
        } else
            redirect("pupr/dashboard");
    }

    public function change_password_action($id_forgot_password)
    {
        $new_password = hash('sha256', $this->input->post('new_password'));

        $change_password = $this->User_model->change_password($id_forgot_password, $new_password);

        if ($change_password == null)
            $this->load->view('error_page');
        else {
            if ($change_password['status'] == "Success") {
                $this->session->set_flashdata('success', $change_password['message']);
                redirect("pupr/login");
            } else {
                $this->session->set_flashdata('APImessage', $change_password['message']);
                redirect("pupr/password/forgot");
            }
        }
    }

    public function request_token($id_user)
    {
        $request = $this->User_model->request_token($id_user);

        if ($request == null)
            $this->load->view('error_page');
        else {
            if ($request['status'] == "Success") {
                $this->session->set_flashdata('success', $request['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $request['message']);
                redirect();
            }
        }
    }
}
