<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrasi_kegiatan extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Administrasi_Kegiatan_model');
    }

    public function index()
    {
        if ($this->session->userdata('logged_in') == true) {
            $null = false;
            $data['administrasi_kegiatan'] = $this->Administrasi_Kegiatan_model->view_administrasi_kegiatan($this->session->userdata('token'));
            if ($data['administrasi_kegiatan'] == null)
            $null = true;
            else {
                if ($data['administrasi_kegiatan']['status'] == "Success") {
                    $data['administrasi_kegiatan'] = $data['administrasi_kegiatan']['data'];
                } else {
                    $data['administrasi_kegiatan'] = null;
                    $this->session->set_flashdata('APImessage', $data['administrasi_kegiatan']['message']);
                }
            }
            
            if ($null)
                redirect();
        } else
            redirect();
    }

    public function detail($id_administrasi_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $null = false;
            $data['administrasi_kegiatan'] = $this->Administrasi_Kegiatan_model->view_administrasi_kegiatan_detail($id_administrasi_kegiatan, $this->session->userdata('token'));
            if ($data['administrasi_kegiatan'] == null)
                $null = true;
            else {
                if ($data['administrasi_kegiatan']['status'] == "Success") {
                    $data['administrasi_kegiatan'] = $data['administrasi_kegiatan']['data'];
                } else {
                    $data['administrasi_kegiatan'] = null;
                    $this->session->set_flashdata('APImessage', $data['administrasi_kegiatan']['message']);
                }
            }

            if ($null)
                redirect();
        } else
            redirect();
    }

    public function tambah_administrasi_kegiatan_action()
    {
        if ($this->session->userdata('logged_in') == true) {
            $judul_administrasi_kegiatan = $this->input->post('judul_administrasi_kegiatan');
            $deskripsi_administrasi_kegiatan = $this->input->post('deskripsi_administrasi_kegiatan');
            $file_administrasi_kegiatan = new \CurlFile($_FILES['file_administrasi_kegiatan']['tmp_name'], $_FILES['file_administrasi_kegiatan']['type'], $_FILES['file_administrasi_kegiatan']['name']);

            $tambah_administrasi_kegiatan = $this->Administrasi_Kegiatan_model->add_administrasi_kegiatan(
                $judul_administrasi_kegiatan,
                $deskripsi_administrasi_kegiatan,
                $file_administrasi_kegiatan,
                $this->session->userdata('token')
            );

            if ($tambah_administrasi_kegiatan == null) {
                redirect();
            }
            if ($tambah_administrasi_kegiatan['status'] == "Success") {
                $this->session->set_flashdata('success', $tambah_administrasi_kegiatan['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $tambah_administrasi_kegiatan['message']);
                redirect();
            }
        } else {
            redirect();
        }
    }

    public function edit_administrasi_kegiatan_action($id_administrasi_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $judul_administrasi_kegiatan = $this->input->post('judul_administrasi_kegiatan');
            $deskripsi_administrasi_kegiatan = $this->input->post('deskripsi_administrasi_kegiatan');
            $file_administrasi_kegiatan = new \CurlFile($_FILES['file_administrasi_kegiatan']['tmp_name'], $_FILES['file_administrasi_kegiatan']['type'], $_FILES['file_administrasi_kegiatan']['name']);

            $edit_administrasi_kegiatan = $this->Administrasi_Kegiatan_model->edit_administrasi_kegiatan(
                $judul_administrasi_kegiatan,
                $deskripsi_administrasi_kegiatan,
                $file_administrasi_kegiatan,
                $id_administrasi_kegiatan,
                $this->session->userdata('token')
            );

            if ($edit_administrasi_kegiatan == null) {
                redirect();
            }
            if ($edit_administrasi_kegiatan['status'] == "Success") {
                $this->session->set_flashdata('success', $edit_administrasi_kegiatan['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $edit_administrasi_kegiatan['message']);
                redirect();
            }
        } else {
            redirect();
        }
    }

    public function delete_administrasi_kegiatan($id_administrasi_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete_administrasi_kegiatan = $this->Administrasi_Kegiatan_model->delete_administrasi_kegiatan($id_administrasi_kegiatan, $this->session->userdata('token'));
            if ($delete_administrasi_kegiatan == null) {
                redirect();
            } else {
                if ($delete_administrasi_kegiatan['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete_administrasi_kegiatan['message']);
                    redirect();
                } else {
                    $this->session->set_flashdata('APImessage', $delete_administrasi_kegiatan['message']);
                    redirect();
                }
            }
        } else
            redirect();
    }
}
