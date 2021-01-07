<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SKA extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('SKA_model');
        $this->load->model('Common_model');
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

            $data['ska'] = $this->SKA_model->view_ska($this->session->userdata('token'));
            if ($data['ska'] == null)
                $null = true;
            else {
                if ($data['ska']['status'] == "Success") {
                    $data['ska'] = $data['ska']['data'];
                } else {
                    $data['ska'] = null;
                    $this->session->set_flashdata('APImessage', $data['ska']['message']);
                }
            }

            if ($null)
                $this->load->view('error_page');
            // $this->load->view("administrator/", $data);
        } else
            redirect("pupr/login");
    }

    public function detail($id_ska)
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

            $data['ska'] = $this->SKA_model->view_ska_detail($id_ska, $this->session->userdata('token'));
            if ($data['ska'] == null)
                $null = true;
            else {
                if ($data['ska']['status'] == "Success") {
                    $data['ska'] = $data['ska']['data'];
                } else {
                    $data['ska'] = null;
                    $this->session->set_flashdata('APImessage', $data['ska']['message']);
                }
            }

            if ($null)
                $this->load->view('error_page');
        } else
            redirect("pupr/login");
    }

    public function tambah()
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

            $data['kategori_ska'] = $this->Common_model->view_skkni_ska($this->session->userdata('token'));
            if ($data['kategori_ska'] == null)
                $null = true;
            else {
                if ($data['kategori_ska']['status'] == "Success") {
                    $data['kategori_ska'] = $data['kategori_ska']['data'];
                } else {
                    $data['kategori_ska'] = null;
                    $this->session->set_flashdata('APImessage', $data['kategori_ska']['message']);
                }
            }

            if ($null)
                $this->load->view('error_page');
        } else
            redirect("pupr/login");
    }

    public function tambah_ska_action()
    {
        if ($this->session->userdata('logged_in') == true) {
            $judul_ska = $this->input->post('judul_ska');
            $deskripsi_ska = $this->input->post('deskripsi_ska');
            $id_kategori_ska = $this->input->post('id_kategori_ska');
            $file_ska = new \CurlFile($_FILES['file_ska']['tmp_name'], $_FILES['file_ska']['type'], $_FILES['file_ska']['name']);

            $tambah_ska = $this->SKA_model->add_ska(
                $judul_ska,
                $deskripsi_ska,
                $id_kategori_ska,
                $file_ska,
                $this->session->userdata('token')
            );

            if ($tambah_ska == null) {
                $this->load->view('error_page');
            }
            if ($tambah_ska['status'] == "Success") {
                $this->session->set_flashdata('success', $tambah_ska['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $tambah_ska['message']);
                redirect();
            }
        } else {
            redirect("pupr/login");
        }
    }

    public function edit()
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

            $data['kategori_ska'] = $this->Common_model->view_skkni_ska($this->session->userdata('token'));
            if ($data['kategori_ska'] == null)
                $null = true;
            else {
                if ($data['kategori_ska']['status'] == "Success") {
                    $data['kategori_ska'] = $data['kategori_ska']['data'];
                } else {
                    $data['kategori_ska'] = null;
                    $this->session->set_flashdata('APImessage', $data['kategori_ska']['message']);
                }
            }

            if ($null)
                $this->load->view('error_page');
        } else
            redirect("pupr/login");
    }

    //blm done
    public function edit_ska_action($id_ska)
    {
        if ($this->session->userdata('logged_in') == true) {
            $judul_ska = $this->input->post('judul_ska');
            $deskripsi_ska = $this->input->post('deskripsi_ska');
            $id_kategori_ska = $this->input->post('id_kategori_ska');
            $file_ska = new \CurlFile($_FILES['file_ska']['tmp_name'], $_FILES['file_ska']['type'], $_FILES['file_ska']['name']);

            $edit_ska = $this->SKA_model->edit_ska(
                $judul_ska,
                $deskripsi_ska,
                $id_kategori_ska,
                $file_ska,
                $id_ska,
                $this->session->userdata('token')
            );

            var_dump($edit_ska);
            die;
            if ($edit_ska == null) {
                $this->load->view('error_page');
            }
            if ($edit_ska['status'] == "Success") {
                $this->session->set_flashdata('success', $edit_ska['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $edit_ska['message']);
                redirect();
            }
        } else {
            redirect("pupr/login");
        }
    }

    public function delete_ska($id_ska)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete_ska = $this->SKA_model->delete_ska($id_ska, $this->session->userdata('token'));
            if ($delete_ska == null) {
                $this->load->view('error_page');
            } else {
                if ($delete_ska['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete_ska['message']);
                    redirect();
                } else {
                    $this->session->set_flashdata('APImessage', $delete_ska['message']);
                    redirect();
                }
            }
        } else
            redirect("pupr/login");
    }
}
