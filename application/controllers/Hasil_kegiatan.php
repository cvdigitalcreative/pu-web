<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hasil_kegiatan extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Hasil_Kegiatan_model');
        $this->load->model('Common_model');
    }

    public function tambah()
    {
        if ($this->session->userdata('logged_in') == true) {
            $null = false;

            $data['jabker'] = $this->Common_model->view_jabker($this->session->userdata('token'));
            if ($data['jabker'] == null)
                $null = true;
            else {
                if ($data['jabker']['status'] == "Success") {
                    $data['jabker'] = $data['jabker']['data'];
                } else {
                    $data['jabker'] = null;
                    $this->session->set_flashdata('APImessage', $data['jabker']['message']);
                }
            }

            if ($null)
                redirect();
        } else
            redirect();
    }

    //blm done
    public function tambah_hasil_kegiatan_action($id_jadwal_kegiatan, $id_peserta)
    {
        if ($this->session->userdata('logged_in') == true) {
            $nomor_sertifikat = $this->input->post('nomor_sertifikat');
            $file_sertifikat = new \CurlFile($_FILES['file_sertifikat']['tmp_name'], $_FILES['file_sertifikat']['type'], $_FILES['file_sertifikat']['name']);
            $id_jabker = $this->input->post('id_jabker');

            $tambah_hasil_kegiatan = $this->Hasil_Kegiatan_model->add_hasil_kegiatan(
                $id_peserta,
                $id_jadwal_kegiatan,
                $nomor_sertifikat,
                $file_sertifikat,
                $id_jabker,
                $this->session->userdata('token')
            );

            var_dump($tambah_hasil_kegiatan); die;

            if ($tambah_hasil_kegiatan == null) {
                redirect();
            }
            if ($tambah_hasil_kegiatan['status'] == "Success") {
                $this->session->set_flashdata('success', $tambah_hasil_kegiatan['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $tambah_hasil_kegiatan['message']);
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

            $data['jabker'] = $this->Common_model->view_jabker($this->session->userdata('token'));
            if ($data['jabker'] == null)
                $null = true;
            else {
                if ($data['jabker']['status'] == "Success") {
                    $data['jabker'] = $data['jabker']['data'];
                } else {
                    $data['jabker'] = null;
                    $this->session->set_flashdata('APImessage', $data['jabker']['message']);
                }
            }

            if ($null)
                redirect();
        } else
            redirect();
    }

    //blm done
    public function edit_hasil_kegiatan_action($id_jadwal_kegiatan, $id_peserta, $id_hasil_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $nomor_sertifikat = $this->input->post('nomor_sertifikat');
            $file_sertifikat = new \CurlFile($_FILES['file_sertifikat']['tmp_name'], $_FILES['file_sertifikat']['type'], $_FILES['file_sertifikat']['name']);
            $id_jabker = $this->input->post('id_jabker');

            $edit_hasil_kegiatan = $this->Hasil_Kegiatan_model->edit_hasil_kegiatan(
                $id_peserta,
                $id_jadwal_kegiatan,
                $nomor_sertifikat,
                $file_sertifikat,
                $id_jabker,
                $id_hasil_kegiatan,
                $this->session->userdata('token')
            );

            var_dump($edit_hasil_kegiatan); die;

            if ($edit_hasil_kegiatan == null) {
                redirect();
            }
            if ($edit_hasil_kegiatan['status'] == "Success") {
                $this->session->set_flashdata('success', $edit_hasil_kegiatan['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $edit_hasil_kegiatan['message']);
                redirect();
            }
        } else {
            redirect();
        }
    }

    //blm done
    public function delete_hasil_kegiatan($id_hasil_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete_hasil_kegiatan = $this->Hasil_Kegiatan_model->delete_hasil_kegiatan($id_hasil_kegiatan, $this->session->userdata('token'));
            var_dump($delete_hasil_kegiatan); die;
            if ($delete_hasil_kegiatan == null) {
                redirect();
            } else {
                if ($delete_hasil_kegiatan['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete_hasil_kegiatan['message']);
                    redirect();
                } else {
                    $this->session->set_flashdata('APImessage', $delete_hasil_kegiatan['message']);
                    redirect();
                }
            }
        } else
            redirect();
    }
}