<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function profile()
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

            $data['user'] = $this->User_model->view_user_detail($this->session->userdata('token'));
            if ($data['user'] == null)
                $null = true;
            else {
                if ($data['user']['status'] == "Success")
                    $data['user'] = $data['user']['data'];
                else {
                    $data['user'] = null;
                    $this->session->set_flashdata("APImessage", $data['user']['message']);
                }
            }

            if ($null) {
                redirect();
            }
        } else
            redirect("pupr/login");
    }

    public function edit_profile_action()
    {
        if ($this->session->userdata('logged_in') == true) {
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $no_telpon = $this->input->post('no_telpon');
            $id_provinsi = $this->input->post('id_provinsi');
            $id_kota_kabupaten = $this->input->post('id_kota_kabupaten');
            $id_kecamatan = $this->input->post('id_kecamatan');
            $id_kelurahan = $this->input->post('id_kelurahan');
            $id_jenis_kelamin = $this->input->post('id_jenis_kelamin');
            $id_status_perkawinan = $this->input->post('id_status_perkawinan');
            $nama_perusahaan = $this->input->post('nama_perusahaan');
            $jabatan = $this->input->post('jabatan');
            $utusan = $this->input->post('utusan');
            $alamat_rumah = $this->input->post('alamat_rumah');
            $nik = $this->input->post('nik');
            $rt = $this->input->post('rt');
            $rw = $this->input->post('rw');
            $kode_pos = $this->input->post('kode_pos');
            $kode_area = $this->input->post('kode_area');
            $no_handphone = $this->input->post('no_handphone');
            $id_status_rumah = $this->input->post('id_status_rumah');
            $id_pendidikan = $this->input->post('id_pendidikan');
            $id_jabker = $this->input->post('id_jabker');
            $id_kompetensi = $this->input->post('id_kompetensi');
            // $no_sertifikat = $this->input->post('no_sertifikat');
            $file_foto_profil = new \CurlFile($_FILES['file_foto_profil']['tmp_name'], $_FILES['file_foto_profil']['type'], $_FILES['file_foto_profil']['name']);

            $edit_profile = $this->User_model->edit_user_detail(
                $nama,
                $email,
                $no_telpon,
                $id_provinsi,
                $id_kota_kabupaten,
                $id_kecamatan,
                $id_kelurahan,
                $id_jenis_kelamin,
                $id_status_perkawinan,
                $nama_perusahaan,
                $jabatan,
                $utusan,
                $alamat_rumah,
                $nik,
                $rt,
                $rw,
                $kode_pos,
                $kode_area,
                $no_handphone,
                $id_status_rumah,
                $id_pendidikan,
                $id_jabker,
                $id_kompetensi,
                // $no_sertifikat,
                $file_foto_profil,
                $this->session->userdata('token')
            );

            if ($edit_profile == null) {
                redirect();
            }
            if ($edit_profile['status'] == "Success") {
                $this->session->set_flashdata('success', $edit_profile['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $edit_profile['message']);
                redirect();
            }
        } else {
            redirect("pupr/login");
        }
    }
}
