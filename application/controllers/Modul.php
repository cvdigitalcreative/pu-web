<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modul extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Modul_model');
        $this->load->model('Common_model');
    }

    public function index()
    {
        if ($this->session->userdata('logged_in') == true) {
            $null = false;
            $data['modul'] = $this->Modul_model->view_modul($this->session->userdata('token'));
            if ($data['modul'] == null)
                $null = true;
            else {
                if ($data['modul']['status'] == "Success") {
                    $data['modul'] = $data['modul']['data'];
                } else {
                    $data['modul'] = null;
                    $this->session->set_flashdata('APImessage', $data['modul']['message']);
                }
            }

            if ($null)
                redirect();
                
            $this->load->view("administrator/modul", $data);
        } else
            redirect();
    }

    public function detail($id_modul)
    {
        if ($this->session->userdata('logged_in') == true) {
            $null = false;
            $data['modul'] = $this->Modul_model->view_modul_detail($id_modul, $this->session->userdata('token'));
            if ($data['modul'] == null)
                $null = true;
            else {
                if ($data['modul']['status'] == "Success") {
                    $data['modul'] = $data['modul']['data'];
                } else {
                    $data['modul'] = null;
                    $this->session->set_flashdata('APImessage', $data['modul']['message']);
                }
            }

            if ($null)
                redirect();
        } else
            redirect();
    }

    public function tambah()
    {
        if ($this->session->userdata('logged_in') == true) {
            $null = false;

            $data['kategori_modul'] = $this->Common_model->view_kategori_modul($this->session->userdata('token'));
            if ($data['kategori_modul'] == null)
                $null = true;
            else {
                if ($data['kategori_modul']['status'] == "Success") {
                    $data['kategori_modul'] = $data['kategori_modul']['data'];
                } else {
                    $data['kategori_modul'] = null;
                    $this->session->set_flashdata('APImessage', $data['kategori_modul']['message']);
                }
            }

            if ($null)
                redirect();
        } else
            redirect();
    }

    public function tambah_modul_action()
    {
        if ($this->session->userdata('logged_in') == true) {
            $judul_modul = $this->input->post('judul_modul');
            $deskripsi_modul = $this->input->post('deskripsi_modul');
            $id_kategori_modul = $this->input->post('id_kategori_modul');
            $file_modul = new \CurlFile($_FILES['file_modul']['tmp_name'], $_FILES['file_modul']['type'], $_FILES['file_modul']['name']);

            $tambah_modul = $this->Modul_model->add_modul(
                $judul_modul,
                $deskripsi_modul,
                $id_kategori_modul,
                $file_modul,
                $this->session->userdata('token')
            );

            if ($tambah_modul == null) {
                redirect();
            }
            if ($tambah_modul['status'] == "Success") {
                $this->session->set_flashdata('success', $tambah_modul['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $tambah_modul['message']);
                redirect();
            }
        } else {
            redirect();
        }
    }

    public function edit()
    {
        if ($this->session->userdata('logged_in') == true) {
            $null = false;

            $data['kategori_modul'] = $this->Common_model->view_kategori_modul($this->session->userdata('token'));
            if ($data['kategori_modul'] == null)
                $null = true;
            else {
                if ($data['kategori_modul']['status'] == "Success") {
                    $data['kategori_modul'] = $data['kategori_modul']['data'];
                } else {
                    $data['kategori_modul'] = null;
                    $this->session->set_flashdata('APImessage', $data['kategori_modul']['message']);
                }
            }

            if ($null)
                redirect();
        } else
            redirect();
    }

    public function edit_modul_action($id_modul)
    {
        if ($this->session->userdata('logged_in') == true) {
            $judul_modul = $this->input->post('judul_modul');
            $deskripsi_modul = $this->input->post('deskripsi_modul');
            $id_kategori_modul = $this->input->post('id_kategori_modul');
            $file_modul = new \CurlFile($_FILES['file_modul']['tmp_name'], $_FILES['file_modul']['type'], $_FILES['file_modul']['name']);

            $edit_modul = $this->Modul_model->edit_modul(
                $judul_modul,
                $deskripsi_modul,
                $id_kategori_modul,
                $file_modul,
                $id_modul,
                $this->session->userdata('token')
            );

            if ($edit_modul == null) {
                redirect();
            }
            if ($edit_modul['status'] == "Success") {
                $this->session->set_flashdata('success', $edit_modul['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $edit_modul['message']);
                redirect();
            }
        } else {
            redirect();
        }
    }

    public function delete_modul($id_modul)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete_modul = $this->Modul_model->delete_modul($id_modul, $this->session->userdata('token'));
            if ($delete_modul == null) {
                redirect();
            } else {
                if ($delete_modul['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete_modul['message']);
                    redirect();
                } else {
                    $this->session->set_flashdata('APImessage', $delete_modul['message']);
                    redirect();
                }
            }
        } else
            redirect();
    }
}
