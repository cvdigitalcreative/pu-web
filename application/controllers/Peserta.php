<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peserta extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Peserta_model');
        $this->load->model('User_model');
        $this->load->model('Kegiatan_model');
        $this->load->model('Common_model');
    }

    public function index(){
        $this->load->view('edit_profile');
    }

    public function tambah_peserta_action()
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
            $no_sertifikat = $this->input->post('no_sertifikat');
            $file_foto_profil = new \CurlFile($_FILES['file_foto_profil']['tmp_name'], $_FILES['file_foto_profil']['type'], $_FILES['file_foto_profil']['name']);

            $tambah_peserta = $this->Peserta_model->add_peserta(
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
                $no_sertifikat,
                $file_foto_profil,
                $this->session->userdata('token')
            );

            if($tambah_peserta == null){
                redirect();
            }
            if ($tambah_peserta['status'] == "Success") {
                $this->session->set_flashdata('success', $tambah_peserta['message']);
                redirect();
            } else {
                $this->session->set_flashdata('failed', $tambah_peserta['message']);
                redirect();
            }
        } else {
            redirect();
        }
    }

    public function edit_peserta_action()
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
            $no_sertifikat = $this->input->post('no_sertifikat');
            $id_user = "";
            $file_foto_profil = new \CurlFile($_FILES['file_foto_profil']['tmp_name'], $_FILES['file_foto_profil']['type'], $_FILES['file_foto_profil']['name']);

            $edit_peserta = $this->Peserta_model->edit_peserta(
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
                $no_sertifikat,
                $file_foto_profil,
                $id_user,
                $this->session->userdata('token')
            );

            if($edit_peserta == null){
                redirect();
            }
            if ($edit_peserta['status'] == "Success") {
                $this->session->set_flashdata('success', $edit_peserta['message']);
                redirect();
            } else {
                $this->session->set_flashdata('failed', $edit_peserta['message']);
                redirect();
            }
        } else {
            redirect();
        }
    }
}
