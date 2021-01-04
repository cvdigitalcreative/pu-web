<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peserta extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Peserta_model');
        $this->load->model('Peserta_Kegiatan_model');
        $this->load->model('Common_model');
        $this->load->model('User_model');
    }

    public function seluruh($id_jadwal_kegiatan)
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

            $data['peserta'] = $this->Peserta_model->view_seluruh_peserta($id_jadwal_kegiatan, $this->session->userdata('token'));
            if ($data['peserta'] == null)
                $null = true;
            else {
                if ($data['peserta']['status'] == "Success") {
                    $data['peserta'] = $data['peserta']['data'];
                    redirect();
                } else {
                    $data['peserta'] = null;
                    $this->session->set_flashdata('APImessage', $data['peserta']['message']);
                    redirect();
                }
            }
            if ($null)
                redirect();

            $this->load->view("administrator/participant", $data);
        } else
            redirect("pupr/login");
    }

    public function daerah($id_provinsi)
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

            $data['peserta'] = $this->Peserta_model->view_peserta_daerah($id_provinsi, $this->session->userdata('token'));
            if ($data['peserta'] == null)
                $null = true;
            else {
                if ($data['peserta']['status'] == "Success") {
                    $data['peserta'] = $data['peserta']['data'];
                    redirect();
                } else {
                    $data['peserta'] = null;
                    $this->session->set_flashdata('APImessage', $data['peserta']['message']);
                    redirect();
                }
            }

            if ($null)
                redirect();

            $this->load->view("", $data);
        } else
            redirect("pupr/login");
    }

    public function detail($id_user)
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

            $data['peserta'] = $this->Peserta_model->view_detail_peserta($id_user, $this->session->userdata('token'));
            if ($data['peserta'] == null)
                $null = true;
            else {
                if ($data['peserta']['status'] == "Success") {
                    $data['peserta'] = $data['peserta']['data'];
                    redirect();
                } else {
                    $data['peserta'] = null;
                    $this->session->set_flashdata('APImessage', $data['peserta']['message']);
                    redirect();
                }
            }

            if ($null)
                redirect();

            $this->load->view("");
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

            $data['provinsi'] = $this->Common_model->view_provinsi($this->session->userdata('token'));
            if ($data['provinsi'] == null)
                $null = true;
            else {
                if ($data['provinsi']['status'] == "Success") {
                    $data['provinsi'] = $data['provinsi']['data'];

                    $index_provinsi = 0;
                    foreach ($data['provinsi'] as $val) {
                        $data['provinsi'][$index_provinsi]['kota_kabupaten'] = $this->Common_model->view_kabupaten_kota($val['id_provinsi'], $this->session->userdata('token'));
                        if ($data['provinsi'][$index_provinsi]['kota_kabupaten'] == null)
                            $null = true;
                        else {
                            if ($data['provinsi'][$index_provinsi]['kota_kabupaten']['status'] == "Success") {
                                $data['provinsi'][$index_provinsi]['kota_kabupaten'] = $data['provinsi'][$index_provinsi]['kota_kabupaten']['data'];

                                $index_kota_kabupaten = 0;
                                foreach ($data['provinsi'][$index_provinsi]['kota_kabupaten'] as $val) {
                                    $data['provinsi'][$index_provinsi]['kota_kabupaten'][$index_kota_kabupaten]['kecamatan'] = $this->Common_model->view_kecamatan($val['id_kabupaten_kota'], $this->session->userdata('token'));
                                    if ($data['provinsi'][$index_provinsi]['kota_kabupaten'][$index_kota_kabupaten]['kecamatan'] == null)
                                        $null = true;
                                    else {
                                        if ($data['provinsi'][$index_provinsi]['kota_kabupaten'][$index_kota_kabupaten]['kecamatan']['status'] == "Success") {
                                            $data['provinsi'][$index_provinsi]['kota_kabupaten'][$index_kota_kabupaten]['kecamatan'] = $data['provinsi'][$index_provinsi]['kota_kabupaten'][$index_kota_kabupaten]['kecamatan']['data'];

                                            $index_kecamatan = 0;
                                            foreach ($data['provinsi'][$index_provinsi]['kota_kabupaten'][$index_kota_kabupaten]['kecamatan'] as $val) {
                                                $data['provinsi'][$index_provinsi]['kota_kabupaten'][$index_kota_kabupaten]['kecamatan'][$index_kecamatan]['kelurahan'] = $this->Common_model->view_kelurahan_desa($val['id_kecamatan'], $this->session->userdata('token'));
                                                if ($data['provinsi'][$index_provinsi]['kota_kabupaten'][$index_kota_kabupaten]['kecamatan'][$index_kecamatan]['kelurahan'] == null)
                                                    $null = true;
                                                else {
                                                    if ($data['provinsi'][$index_provinsi]['kota_kabupaten'][$index_kota_kabupaten]['kecamatan'][$index_kecamatan]['kelurahan']['status'] == "Success") {
                                                        $data['provinsi'][$index_provinsi]['kota_kabupaten'][$index_kota_kabupaten]['kecamatan'][$index_kecamatan]['kelurahan'] = $data['provinsi'][$index_provinsi]['kota_kabupaten'][$index_kota_kabupaten]['kecamatan'][$index_kecamatan]['kelurahan']['data'];

                                                        $index_kecamatan = 0;
                                                    } else {
                                                        $data['provinsi'][$index_provinsi]['kota_kabupaten'][$index_kota_kabupaten]['kecamatan'][$index_kecamatan]['kelurahan'] = null;
                                                        $this->session->set_flashdata('APImessage', $data['provinsi'][$index_provinsi]['kota_kabupaten'][$index_kota_kabupaten]['kecamatan'][$index_kecamatan]['kelurahan']['message']);
                                                    }
                                                }
                                                $index_kecamatan++;
                                            }
                                        } else {
                                            $data['provinsi'][$index_provinsi]['kota_kabupaten'][$index_kota_kabupaten]['kecamatan'] = null;
                                            $this->session->set_flashdata('APImessage', $data['provinsi'][$index_provinsi]['kota_kabupaten'][$index_kota_kabupaten]['kecamatan']['message']);
                                        }
                                    }
                                    $index_kota_kabupaten++;
                                }
                            } else {
                                $data['provinsi'][$index_provinsi]['kota_kabupaten'] = null;
                                $this->session->set_flashdata('APImessage', $data['provinsi'][$index_provinsi]['kota_kabupaten']['message']);
                            }
                        }
                        $index_provinsi++;
                    }
                } else {
                    $data['provinsi'] = null;
                    $this->session->set_flashdata('APImessage', $data['provinsi']['message']);
                }
            }

            $data['jenis_kelamin'] = $this->Common_model->view_jenis_kelamin($this->session->userdata('token'));
            if ($data['jenis_kelamin'] == null)
                $null = true;
            else {
                if ($data['jenis_kelamin']['status'] == "Success") {
                    $data['jenis_kelamin'] = $data['jenis_kelamin']['data'];
                } else {
                    $data['jenis_kelamin'] = null;
                    $this->session->set_flashdata("APImessage", $data['jenis_kelamin']['message']);
                }
            }

            $data['status_perkawinan'] = $this->Common_model->view_status_perkawinan($this->session->userdata('token'));
            if ($data['status_perkawinan'] == null)
                $null = true;
            else {
                if ($data['status_perkawinan']['status'] == "Success") {
                    $data['status_perkawinan'] = $data['status_perkawinan']['data'];
                } else {
                    $data['status_perkawinan'] = null;
                    $this->session->set_flashdata("APImessage", $data['status_perkawinan']['message']);
                }
            }

            $data['status_rumah'] = $this->Common_model->view_status_rumah($this->session->userdata('token'));
            if ($data['status_rumah'] == null)
                $null = true;
            else {
                if ($data['status_rumah']['status'] == "Success") {
                    $data['status_rumah'] = $data['status_rumah']['data'];
                } else {
                    $data['status_rumah'] = null;
                    $this->session->set_flashdata("APImessage", $data['status_rumah']['message']);
                }
            }

            $data['pendidikan'] = $this->Common_model->view_pendidikan($this->session->userdata('token'));
            if ($data['pendidikan'] == null)
                $null = true;
            else {
                if ($data['pendidikan']['status'] == "Success") {
                    $data['pendidikan'] = $data['pendidikan']['data'];
                } else {
                    $data['pendidikan'] = null;
                    $this->session->set_flashdata("APImessage", $data['pendidikan']['message']);
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
                    $this->session->set_flashdata("APImessage", $data['jabker']['message']);
                }
            }

            // $data['kompetensi'] = $this->Common_model->view_($this->session->userdata('token'));
            // if ($data['kompetensi'] == null)
            //     $null = true;
            // else {
            //     if ($data['kompetensi']['status'] == "Success") {
            //         $data['kompetensi'] = $data['kompetensi']['data'];
            //     } else {
            //         $data['kompetensi'] = null;
            //         $this->session->set_flashdata("APImessage", $data['kompetensi']['message']);
            //     }
            // }

            if ($null)
                redirect();

            $this->load->view("", $data);
        } else {
            redirect("pupr/login");
        }
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

            if ($tambah_peserta == null) {
                redirect();
            }
            if ($tambah_peserta['status'] == "Success") {
                $this->session->set_flashdata('success', $tambah_peserta['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $tambah_peserta['message']);
                redirect();
            }
        } else {
            redirect("pupr/login");
        }
    }

    public function edit($id_user_peserta)
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

            $data['peserta'] = $this->Peserta_model->view_detail_peserta($id_user_peserta, $this->session->userdata('token'));
            if ($data['peserta'] == null)
                $null = true;
            else {
                if ($data['peserta']['status'] == "Success") {
                    $data['peserta'] = $data['peserta']['data'];
                } else {
                    $data['peserta'] = null;
                    $this->session->set_flashdata('APImessage', $data['peserta']['message']);
                }
            }

            $data['provinsi'] = $this->Common_model->view_provinsi($this->session->userdata('token'));
            if ($data['provinsi'] == null)
                $null = true;
            else {
                if ($data['provinsi']['status'] == "Success") {
                    $data['provinsi'] = $data['provinsi']['data'];

                    $index_provinsi = 0;
                    foreach ($data['provinsi'] as $val) {
                        $data['provinsi'][$index_provinsi]['kota_kabupaten'] = $this->Common_model->view_kabupaten_kota($val['id_provinsi'], $this->session->userdata('token'));
                        if ($data['provinsi'][$index_provinsi]['kota_kabupaten'] == null)
                            $null = true;
                        else {
                            if ($data['provinsi'][$index_provinsi]['kota_kabupaten']['status'] == "Success") {
                                $data['provinsi'][$index_provinsi]['kota_kabupaten'] = $data['provinsi'][$index_provinsi]['kota_kabupaten']['data'];

                                $index_kota_kabupaten = 0;
                                foreach ($data['provinsi'][$index_provinsi]['kota_kabupaten'] as $val) {
                                    $data['provinsi'][$index_provinsi]['kota_kabupaten'][$index_kota_kabupaten]['kecamatan'] = $this->Common_model->view_kecamatan($val['id_kabupaten_kota'], $this->session->userdata('token'));
                                    if ($data['provinsi'][$index_provinsi]['kota_kabupaten'][$index_kota_kabupaten]['kecamatan'] == null)
                                        $null = true;
                                    else {
                                        if ($data['provinsi'][$index_provinsi]['kota_kabupaten'][$index_kota_kabupaten]['kecamatan']['status'] == "Success") {
                                            $data['provinsi'][$index_provinsi]['kota_kabupaten'][$index_kota_kabupaten]['kecamatan'] = $data['provinsi'][$index_provinsi]['kota_kabupaten'][$index_kota_kabupaten]['kecamatan']['data'];

                                            $index_kecamatan = 0;
                                            foreach ($data['provinsi'][$index_provinsi]['kota_kabupaten'][$index_kota_kabupaten]['kecamatan'] as $val) {
                                                $data['provinsi'][$index_provinsi]['kota_kabupaten'][$index_kota_kabupaten]['kecamatan'][$index_kecamatan]['kelurahan'] = $this->Common_model->view_kelurahan_desa($val['id_kecamatan'], $this->session->userdata('token'));
                                                if ($data['provinsi'][$index_provinsi]['kota_kabupaten'][$index_kota_kabupaten]['kecamatan'][$index_kecamatan]['kelurahan'] == null)
                                                    $null = true;
                                                else {
                                                    if ($data['provinsi'][$index_provinsi]['kota_kabupaten'][$index_kota_kabupaten]['kecamatan'][$index_kecamatan]['kelurahan']['status'] == "Success") {
                                                        $data['provinsi'][$index_provinsi]['kota_kabupaten'][$index_kota_kabupaten]['kecamatan'][$index_kecamatan]['kelurahan'] = $data['provinsi'][$index_provinsi]['kota_kabupaten'][$index_kota_kabupaten]['kecamatan'][$index_kecamatan]['kelurahan']['data'];

                                                        $index_kecamatan = 0;
                                                    } else {
                                                        $data['provinsi'][$index_provinsi]['kota_kabupaten'][$index_kota_kabupaten]['kecamatan'][$index_kecamatan]['kelurahan'] = null;
                                                        $this->session->set_flashdata('APImessage', $data['provinsi'][$index_provinsi]['kota_kabupaten'][$index_kota_kabupaten]['kecamatan'][$index_kecamatan]['kelurahan']['message']);
                                                    }
                                                }
                                                $index_kecamatan++;
                                            }
                                        } else {
                                            $data['provinsi'][$index_provinsi]['kota_kabupaten'][$index_kota_kabupaten]['kecamatan'] = null;
                                            $this->session->set_flashdata('APImessage', $data['provinsi'][$index_provinsi]['kota_kabupaten'][$index_kota_kabupaten]['kecamatan']['message']);
                                        }
                                    }
                                    $index_kota_kabupaten++;
                                }
                            } else {
                                $data['provinsi'][$index_provinsi]['kota_kabupaten'] = null;
                                $this->session->set_flashdata('APImessage', $data['provinsi'][$index_provinsi]['kota_kabupaten']['message']);
                            }
                        }
                        $index_provinsi++;
                    }
                } else {
                    $data['provinsi'] = null;
                    $this->session->set_flashdata('APImessage', $data['provinsi']['message']);
                }
            }

            $data['jenis_kelamin'] = $this->Common_model->view_jenis_kelamin($this->session->userdata('token'));
            if ($data['jenis_kelamin'] == null)
                $null = true;
            else {
                if ($data['jenis_kelamin']['status'] == "Success") {
                    $data['jenis_kelamin'] = $data['jenis_kelamin']['data'];
                } else {
                    $data['jenis_kelamin'] = null;
                    $this->session->set_flashdata("APImessage", $data['jenis_kelamin']['message']);
                }
            }

            $data['status_perkawinan'] = $this->Common_model->view_status_perkawinan($this->session->userdata('token'));
            if ($data['status_perkawinan'] == null)
                $null = true;
            else {
                if ($data['status_perkawinan']['status'] == "Success") {
                    $data['status_perkawinan'] = $data['status_perkawinan']['data'];
                } else {
                    $data['status_perkawinan'] = null;
                    $this->session->set_flashdata("APImessage", $data['status_perkawinan']['message']);
                }
            }

            $data['status_rumah'] = $this->Common_model->view_status_rumah($this->session->userdata('token'));
            if ($data['status_rumah'] == null)
                $null = true;
            else {
                if ($data['status_rumah']['status'] == "Success") {
                    $data['status_rumah'] = $data['status_rumah']['data'];
                } else {
                    $data['status_rumah'] = null;
                    $this->session->set_flashdata("APImessage", $data['status_rumah']['message']);
                }
            }

            $data['pendidikan'] = $this->Common_model->view_pendidikan($this->session->userdata('token'));
            if ($data['pendidikan'] == null)
                $null = true;
            else {
                if ($data['pendidikan']['status'] == "Success") {
                    $data['pendidikan'] = $data['pendidikan']['data'];
                } else {
                    $data['pendidikan'] = null;
                    $this->session->set_flashdata("APImessage", $data['pendidikan']['message']);
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
                    $this->session->set_flashdata("APImessage", $data['jabker']['message']);
                }
            }

            // $data['kompetensi'] = $this->Common_model->view_($this->session->userdata('token'));
            // if ($data['kompetensi'] == null)
            //     $null = true;
            // else {
            //     if ($data['kompetensi']['status'] == "Success") {
            //         $data['kompetensi'] = $data['kompetensi']['data'];
            //     } else {
            //         $data['kompetensi'] = null;
            //         $this->session->set_flashdata("APImessage", $data['kompetensi']['message']);
            //     }
            // }

            if ($null)
                redirect();

            $this->load->view("", $data);
        } else {
            redirect("pupr/login");
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

            if ($edit_peserta == null) {
                redirect();
            }
            if ($edit_peserta['status'] == "Success") {
                $this->session->set_flashdata('success', $edit_peserta['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $edit_peserta['message']);
                redirect();
            }
        } else {
            redirect("pupr/login");
        }
    }

    public function edit_peserta_kegiatan_action($id_jadwal_kegiatan, $id_peserta)
    {
        if ($this->session->userdata('logged_in') == true) {
            $id_status_peserta_kegiatan = $this->input->post('id_status_peserta_kegiatan');
            $id_status_peserta_kegiatan = 1;
            $edit_peserta = $this->Peserta_Kegiatan_model->update_peserta_kegiatan(
                $id_peserta,
                $id_status_peserta_kegiatan,
                $id_jadwal_kegiatan,
                $this->session->userdata('token')
            );

            if ($edit_peserta == null) {
                redirect();
            }
            if ($edit_peserta['status'] == "Success") {
                $this->session->set_flashdata('success', $edit_peserta['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $edit_peserta['message']);
                redirect();
            }
        } else {
            redirect("pupr/login");
        }
    }


    public function delete_peserta($id_user_peserta)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete_peserta = $this->Peserta_model->delete_peserta($id_user_peserta, $this->session->userdata('token'));
            if ($delete_peserta == null) {
                redirect();
            } else {
                if ($delete_peserta['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete_peserta['message']);
                    redirect();
                } else {
                    $this->session->set_flashdata('APImessage', $delete_peserta['message']);
                    redirect();
                }
            }
        } else
            redirect("pupr/login");
    }
}
