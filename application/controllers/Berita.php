<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Berita_model');
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

            $data['berita'] = $this->Berita_model->view_berita($this->session->userdata('token'));
            if ($data['berita'] == null)
                $null = true;
            else {
                if ($data['berita']['status'] == "Success") {
                    $data['berita'] = $data['berita']['data'];
                } else {
                    $data['berita'] = null;
                    $this->session->set_flashdata('APImessage', $data['berita']['message']);
                }
            }

            if ($null)
                redirect();
        } else
            redirect("pupr/login");
    }

    public function detail($id_berita)
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

            $data['berita'] = $this->Berita_model->view_berita_detail($id_berita, $this->session->userdata('token'));
            if ($data['berita'] == null)
                $null = true;
            else {
                if ($data['berita']['status'] == "Success") {
                    $data['berita'] = $data['berita']['data'];
                } else {
                    $data['berita'] = null;
                    $this->session->set_flashdata('APImessage', $data['berita']['message']);
                }
            }

            if ($null)
                redirect();
        } else
            redirect("pupr/login");
    }

    public function tambah_berita_action()
    {
        if ($this->session->userdata('logged_in') == true) {
            $judul_berita = $this->input->post('judul_berita');
            $deskripsi_berita = $this->input->post('deskripsi_berita');
            $file_berita = new \CurlFile($_FILES['file_berita']['tmp_name'], $_FILES['file_berita']['type'], $_FILES['file_berita']['name']);

            $tambah_berita = $this->Berita_model->add_berita(
                $judul_berita,
                $deskripsi_berita,
                $file_berita,
                $this->session->userdata('token')
            );

            if ($tambah_berita == null) {
                redirect();
            }
            if ($tambah_berita['status'] == "Success") {
                $this->session->set_flashdata('success', $tambah_berita['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $tambah_berita['message']);
                redirect();
            }
        } else {
            redirect("pupr/login");
        }
    }
    public function edit_berita_action($id_berita)
    {
        if ($this->session->userdata('logged_in') == true) {
            $judul_berita = $this->input->post('judul_berita');
            $deskripsi_berita = $this->input->post('deskripsi_berita');
            $file_berita = new \CurlFile($_FILES['file_berita']['tmp_name'], $_FILES['file_berita']['type'], $_FILES['file_berita']['name']);

            $edit_berita = $this->Berita_model->edit_berita(
                $judul_berita,
                $deskripsi_berita,
                $file_berita,
                $id_berita,
                $this->session->userdata('token')
            );

            if ($edit_berita == null) {
                redirect();
            }
            if ($edit_berita['status'] == "Success") {
                $this->session->set_flashdata('success', $edit_berita['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $edit_berita['message']);
                redirect();
            }
        } else {
            redirect("pupr/login");
        }
    }

    public function delete_berita($id_berita)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete_berita = $this->Berita_model->delete_berita($id_berita, $this->session->userdata('token'));
            if ($delete_berita == null) {
                redirect();
            } else {
                if ($delete_berita['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete_berita['message']);
                    redirect();
                } else {
                    $this->session->set_flashdata('APImessage', $delete_berita['message']);
                    redirect();
                }
            }
        } else
            redirect("pupr/login");
    }
}
