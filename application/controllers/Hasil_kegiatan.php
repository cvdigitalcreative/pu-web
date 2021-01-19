<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hasil_kegiatan extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Hasil_Kegiatan_model');
        $this->load->model('Common_model');
        $this->load->model('User_model');

        if ($this->session->userdata('id_role') == 3) {
            $this->session->set_flashdata('APImessage', "Akses gagal. Hanya administrator yang dapat mengakses website ini");
            redirect('pupr/login');
        }
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
            $this->load->view('error_page');
        } else
            redirect("pupr/login");
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

            var_dump($tambah_hasil_kegiatan);
            die;

            if ($tambah_hasil_kegiatan == null) {
                $this->load->view('error_page');
            }
            if ($tambah_hasil_kegiatan['status'] == "Success") {
                $this->session->set_flashdata('success', $tambah_hasil_kegiatan['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $tambah_hasil_kegiatan['message']);
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
            $this->load->view('error_page');
        } else
            redirect("pupr/login");
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

            var_dump($edit_hasil_kegiatan);
            die;

            if ($edit_hasil_kegiatan == null) {
                $this->load->view('error_page');
            }
            if ($edit_hasil_kegiatan['status'] == "Success") {
                $this->session->set_flashdata('success', $edit_hasil_kegiatan['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $edit_hasil_kegiatan['message']);
                redirect();
            }
        } else {
            redirect("pupr/login");
        }
    }

    //blm done
    public function delete_hasil_kegiatan($id_hasil_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete_hasil_kegiatan = $this->Hasil_Kegiatan_model->delete_hasil_kegiatan($id_hasil_kegiatan, $this->session->userdata('token'));
            var_dump($delete_hasil_kegiatan);
            die;
            if ($delete_hasil_kegiatan == null) {
                $this->load->view('error_page');
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
            redirect("pupr/login");
    }
}
