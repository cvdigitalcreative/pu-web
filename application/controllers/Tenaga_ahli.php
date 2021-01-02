<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tenaga_ahli extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tenaga_Ahli_model');
        $this->load->model('Common_model');
    }

    public function seluruh($id_kategori_tenaga_ahli)
    {
        if ($this->session->userdata('logged_in') == true) {
            $null = false;
            $data['tenaga_ahli'] = $this->Tenaga_Ahli_model->view_seluruh_tenaga_ahli($id_kategori_tenaga_ahli, $this->session->userdata('token'));
            if ($data['tenaga_ahli'] == null)
                $null = true;
            else {
                if ($data['tenaga_ahli']['status'] == "Success") {
                    $data['tenaga_ahli'] = $data['tenaga_ahli']['data'];
                } else {
                    $data['tenaga_ahli'] = null;
                    $this->session->set_flashdata('APImessage', $data['tenaga_ahli']['message']);
                }
            }


            if ($null)
                redirect();
        } else
            redirect();
    }

    public function daerah($id_provinsi, $id_kategori_tenaga_ahli)
    {
        if ($this->session->userdata('logged_in') == true) {
            $null = false;
            $data['tenaga_ahli'] = $this->Tenaga_Ahli_model->view_tenaga_ahli_by_provinsi($id_provinsi, $id_kategori_tenaga_ahli, $this->session->userdata('token'));
            if ($data['tenaga_ahli'] == null)
                $null = true;
            else {
                if ($data['tenaga_ahli']['status'] == "Success") {
                    $data['tenaga_ahli'] = $data['tenaga_ahli']['data'];
                } else {
                    $data['tenaga_ahli'] = null;
                    $this->session->set_flashdata('APImessage', $data['tenaga_ahli']['message']);
                }
            }

            if ($null)
                redirect();
        } else
            redirect();
    }

    public function detail($id_tenaga_ahli)
    {
        if ($this->session->userdata('logged_in') == true) {
            $null = false;
            $data['tenaga_ahli'] = $this->Tenaga_Ahli_model->view_detail_tenaga_ahli($id_tenaga_ahli, $this->session->userdata('token'));
            if ($data['tenaga_ahli'] == null)
                $null = true;
            else {
                if ($data['tenaga_ahli']['status'] == "Success") {
                    $data['tenaga_ahli'] = $data['tenaga_ahli']['data'];
                } else {
                    $data['tenaga_ahli'] = null;
                    $this->session->set_flashdata('APImessage', $data['tenaga_ahli']['message']);
                }
            }

            if ($null)
                redirect();
        } else
            redirect();
    }

    //blm done
    public function tambah()
    {
        if ($this->session->userdata('logged_in') == true) {
            $null = false;

            $data['kategori_tenaga_ahli'] = $this->Common_model->view_kategori_tenaga_ahli($this->session->userdata('token'));
            if ($data['kategori_tenaga_ahli'] == null)
                $null = true;
            else {
                if ($data['kategori_tenaga_ahli']['status'] == "Success") {
                    $data['kategori_tenaga_ahli'] = $data['kategori_tenaga_ahli']['data'];
                } else {
                    $data['kategori_tenaga_ahli'] = null;
                    $this->session->set_flashdata('APImessage', $data['kategori_tenaga_ahli']['message']);
                }
            }

            if ($null)
                redirect();
        } else
            redirect();
    }

    public function tambah_tenaga_ahli_action()
    {
        if ($this->session->userdata('logged_in') == true) {
            $nama_lengkap = $this->input->post('nama_lengkap');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $tanggal_lahir = $this->input->post('tanggal_lahir');
            $temparr = explode('-', $tanggal_lahir);
            $indextglreverse = 0;
            for ($j = count($temparr) - 1; $j >= 0; $j--) {
                $arrtemptanggal[$indextglreverse] = $temparr[$j];
                $indextglreverse++;
            }
            $tanggal_lahir = implode('-', $arrtemptanggal);
            $id_jenis_kelamin = $this->input->post('id_jenis_kelamin');
            $nik = $this->input->post('nik');
            $email = $this->input->post('email');
            $alamat_rumah = $this->input->post('alamat_rumah');
            $id_provinsi = $this->input->post('id_provinsi');
            $id_kabupaten_kota = $this->input->post('id_kabupaten_kota');
            $no_telepon_rumah = $this->input->post('no_telepon_rumah');
            $no_handphone = $this->input->post('no_handphone');
            $id_jabker = $this->input->post('id_jabker');
            if (count($id_jabker) == 1)
                $id_jabker = $id_jabker['0'];
            else
                $id_jabker = '[' . implode(',', $id_jabker) . ']';
            $id_kategori_tenaga_ahli = $this->input->post('id_kategori_tenaga_ahli');
            $is_instruktur = $this->input->post('is_instruktur');
            if($is_instruktur == 1)
            $is_instruktur = true;
            else
            $is_instruktur = false;
            $is_asesor = $this->input->post('is_asesor');
            if($is_asesor == 1)
            $is_asesor = true;
            else
            $is_asesor = false;

            $tambah_tenaga_ahli = $this->Tenaga_Ahli_model->add_tenaga_ahli(
                $nama_lengkap,
                $tempat_lahir,
                $tanggal_lahir,
                $id_jenis_kelamin,
                $nik,
                $email,
                $alamat_rumah,
                $id_provinsi,
                $id_kabupaten_kota,
                $no_telepon_rumah,
                $no_handphone,
                $id_jabker,
                $id_kategori_tenaga_ahli,
                $is_instruktur,
                $is_asesor,
                $this->session->userdata('token')
            );

            if ($tambah_tenaga_ahli == null) {
                redirect();
            }
            if ($tambah_tenaga_ahli['status'] == "Success") {
                $this->session->set_flashdata('success', $tambah_tenaga_ahli['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $tambah_tenaga_ahli['message']);
                redirect();
            }
        } else {
            redirect();
        }
    }

        //blm done
        public function edit()
        {
            if ($this->session->userdata('logged_in') == true) {
                $null = false;
    
                $data['kategori_tenaga_ahli'] = $this->Common_model->view_kategori_tenaga_ahli($this->session->userdata('token'));
                if ($data['kategori_tenaga_ahli'] == null)
                    $null = true;
                else {
                    if ($data['kategori_tenaga_ahli']['status'] == "Success") {
                        $data['kategori_tenaga_ahli'] = $data['kategori_tenaga_ahli']['data'];
                    } else {
                        $data['kategori_tenaga_ahli'] = null;
                        $this->session->set_flashdata('APImessage', $data['kategori_tenaga_ahli']['message']);
                    }
                }
    
                if ($null)
                    redirect();
            } else
                redirect();
        }

    public function edit_tenaga_ahli_action($id_tenaga_ahli)
    {
        if ($this->session->userdata('logged_in') == true) {
            $nama_lengkap = $this->input->post('nama_lengkap');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $tanggal_lahir = $this->input->post('tanggal_lahir');
            $temparr = explode('-', $tanggal_lahir);
            $indextglreverse = 0;
            for ($j = count($temparr) - 1; $j >= 0; $j--) {
                $arrtemptanggal[$indextglreverse] = $temparr[$j];
                $indextglreverse++;
            }
            $tanggal_lahir = implode('-', $arrtemptanggal);
            $id_jenis_kelamin = $this->input->post('id_jenis_kelamin');
            $nik = $this->input->post('nik');
            $email = $this->input->post('email');
            $alamat_rumah = $this->input->post('alamat_rumah');
            $id_provinsi = $this->input->post('id_provinsi');
            $id_kabupaten_kota = $this->input->post('id_kabupaten_kota');
            $no_telepon_rumah = $this->input->post('no_telepon_rumah');
            $no_handphone = $this->input->post('no_handphone');
            $id_jabker = $this->input->post('id_jabker');
            if (count($id_jabker) == 1)
                $id_jabker = $id_jabker['0'];
            else
                $id_jabker = '[' . implode(',', $id_jabker) . ']';
            $id_kategori_tenaga_ahli = $this->input->post('id_kategori_tenaga_ahli');
            $is_instruktur = $this->input->post('is_instruktur');
            if($is_instruktur == 1)
            $is_instruktur = true;
            else
            $is_instruktur = false;
            $is_asesor = $this->input->post('is_asesor');
            if($is_asesor == 1)
            $is_asesor = true;
            else
            $is_asesor = false;

            $edit_tenaga_ahli = $this->Tenaga_Ahli_model->edit_tenaga_ahli(
                $nama_lengkap,
                $tempat_lahir,
                $tanggal_lahir,
                $id_jenis_kelamin,
                $nik,
                $email,
                $alamat_rumah,
                $id_provinsi,
                $id_kabupaten_kota,
                $no_telepon_rumah,
                $no_handphone,
                $id_jabker,
                $id_kategori_tenaga_ahli,
                $is_instruktur,
                $is_asesor,
                $id_tenaga_ahli,
                $this->session->userdata('token')
            );

            if ($edit_tenaga_ahli == null) {
                redirect();
            }
            if ($edit_tenaga_ahli['status'] == "Success") {
                $this->session->set_flashdata('success', $edit_tenaga_ahli['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $edit_tenaga_ahli['message']);
                redirect();
            }
        } else {
            redirect();
        }
    }

    public function delete_tenaga_ahli($id_tenaga_ahli)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete_tenaga_ahli = $this->Tenaga_Ahli_model->delete_tenaga_ahli($id_tenaga_ahli, $this->session->userdata('token'));
            if ($delete_tenaga_ahli == null) {
                redirect();
            } else {
                if ($delete_tenaga_ahli['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete_tenaga_ahli['message']);
                    redirect();
                } else {
                    $this->session->set_flashdata('APImessage', $delete_tenaga_ahli['message']);
                    redirect();
                }
            }
        } else
            redirect();
    }

    public function delete_jabatan_kerja($id_jabker)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete_jabatan_kerja = $this->Tenaga_Ahli_model->delete_jabatan_kerja($id_jabker, $this->session->userdata('token'));
            if ($delete_jabatan_kerja == null) {
                redirect();
            } else {
                if ($delete_jabatan_kerja['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete_jabatan_kerja['message']);
                    redirect();
                } else {
                    $this->session->set_flashdata('APImessage', $delete_jabatan_kerja['message']);
                    redirect();
                }
            }
        } else
            redirect();
    }
}
