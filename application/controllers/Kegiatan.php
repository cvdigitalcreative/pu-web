<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kegiatan_model');
    }

    public function index()
    {
        if ($this->session->userdata('logged_in') == true) {
            $null = false;
            $data['kegiatan'] = $this->Kegiatan_model->view_kegiatan($this->session->userdata('token'));
            if ($data['kegiatan'] == null)
                $null = true;
            else {
                if ($data['kegiatan']['status'] == "Success") {
                    $data['kegiatan'] = $data['kegiatan']['data'];

                    $indexKegiatan = 0;
                    foreach ($data['kegiatan'] as $val) {
                        $data['kegiatan'][$indexKegiatan]['berita_acara'] = $this->Kegiatan_model->view_berita_acara($val['id_kegiatan'], $this->session->userdata('token'));
                        if ($data['kegiatan'][$indexKegiatan]['berita_acara'] == null)
                            $null = true;
                        else {
                            if ($data['kegiatan'][$indexKegiatan]['berita_acara']['status'] == "Success") {
                                $data['kegiatan'][$indexKegiatan]['berita_acara'] = $data['kegiatan'][$indexKegiatan]['berita_acara']['data'];
                            } else {
                                $data['kegiatan'][$indexKegiatan]['berita_acara'] = null;
                                $this->session->set_flashdata('APImessage', $data['kegiatan'][$indexKegiatan]['berita_acara']['message']);
                            }
                        }

                        $data['kegiatan'][$indexKegiatan]['invoice'] = $this->Kegiatan_model->view_invoice($val['id_kegiatan'], $this->session->userdata('token'));
                        if ($data['kegiatan'][$indexKegiatan]['invoice'] == null)
                            $null = true;
                        else {
                            if ($data['kegiatan'][$indexKegiatan]['invoice']['status'] == "Success") {
                                $data['kegiatan'][$indexKegiatan]['invoice'] = $data['kegiatan'][$indexKegiatan]['invoice']['data'];
                            } else {
                                $data['kegiatan'][$indexKegiatan]['invoice'] = null;
                                $this->session->set_flashdata('APImessage', $data['kegiatan'][$indexKegiatan]['invoice']['message']);
                            }
                        }

                        $data['kegiatan'][$indexKegiatan]['bukti_pembayaran'] = $this->Kegiatan_model->view_bukti_pembayaran($val['id_kegiatan'], $this->session->userdata('token'));
                        if ($data['kegiatan'][$indexKegiatan]['bukti_pembayaran'] == null)
                            $null = true;
                        else {
                            if ($data['kegiatan'][$indexKegiatan]['bukti_pembayaran']['status'] == "Success") {
                                $data['kegiatan'][$indexKegiatan]['bukti_pembayaran'] = $data['kegiatan'][$indexKegiatan]['bukti_pembayaran']['data'];
                            } else {
                                $data['kegiatan'][$indexKegiatan]['bukti_pembayaran'] = null;
                                $this->session->set_flashdata('APImessage', $data['kegiatan'][$indexKegiatan]['bukti_pembayaran']['message']);
                            }
                        }
                        $indexKegiatan++;
                    }
                } else {
                    $data['kegiatan'] = null;
                    $this->session->set_flashdata('APImessage', $data['kegiatan']['message']);
                }
            }
            if ($null)
                redirect();
        } else
            redirect();
    }

    //blm done
    public function tanggal()
    {
        $tanggal = $this->input->post('tanggal');
        $tanggal = "2020-11-23";
        if ($this->session->userdata('logged_in') == true) {
            $null = false;
            $data['kegiatan'] = $this->Kegiatan_model->view_kegiatan_berdasarkan_tanggal($tanggal, $this->session->userdata('token'));
            if ($data['kegiatan'] == null)
                $null = true;
            else {
                if ($data['kegiatan']['status'] == "Success") {
                    $data['kegiatan'] = $data['kegiatan']['data'];

                    $indexKegiatan = 0;
                    foreach ($data['kegiatan'] as $val) {
                        $data['kegiatan'][$indexKegiatan]['berita_acara'] = $this->Kegiatan_model->view_berita_acara($val['id_kegiatan'], $this->session->userdata('token'));
                        if ($data['kegiatan'][$indexKegiatan]['berita_acara'] == null)
                            $null = true;
                        else {
                            if ($data['kegiatan'][$indexKegiatan]['berita_acara']['status'] == "Success") {
                                $data['kegiatan'][$indexKegiatan]['berita_acara'] = $data['kegiatan'][$indexKegiatan]['berita_acara']['data'];
                            } else {
                                $data['kegiatan'][$indexKegiatan]['berita_acara'] = null;
                                $this->session->set_flashdata('APImessage', $data['kegiatan'][$indexKegiatan]['berita_acara']['message']);
                            }
                        }

                        $data['kegiatan'][$indexKegiatan]['invoice'] = $this->Kegiatan_model->view_invoice($val['id_kegiatan'], $this->session->userdata('token'));
                        if ($data['kegiatan'][$indexKegiatan]['invoice'] == null)
                            $null = true;
                        else {
                            if ($data['kegiatan'][$indexKegiatan]['invoice']['status'] == "Success") {
                                $data['kegiatan'][$indexKegiatan]['invoice'] = $data['kegiatan'][$indexKegiatan]['invoice']['data'];
                            } else {
                                $data['kegiatan'][$indexKegiatan]['invoice'] = null;
                                $this->session->set_flashdata('APImessage', $data['kegiatan'][$indexKegiatan]['invoice']['message']);
                            }
                        }

                        $data['kegiatan'][$indexKegiatan]['bukti_pembayaran'] = $this->Kegiatan_model->view_bukti_pembayaran($val['id_kegiatan'], $this->session->userdata('token'));
                        if ($data['kegiatan'][$indexKegiatan]['bukti_pembayaran'] == null)
                            $null = true;
                        else {
                            if ($data['kegiatan'][$indexKegiatan]['bukti_pembayaran']['status'] == "Success") {
                                $data['kegiatan'][$indexKegiatan]['bukti_pembayaran'] = $data['kegiatan'][$indexKegiatan]['bukti_pembayaran']['data'];
                            } else {
                                $data['kegiatan'][$indexKegiatan]['bukti_pembayaran'] = null;
                                $this->session->set_flashdata('APImessage', $data['kegiatan'][$indexKegiatan]['bukti_pembayaran']['message']);
                            }
                        }
                        $indexKegiatan++;
                    }
                } else {
                    $data['kegiatan'] = null;
                    $this->session->set_flashdata('APImessage', $data['kegiatan']['message']);
                }
            }
            if ($null)
                redirect();
        } else
            redirect();
    }

    //blm done
    public function bulan()
    {
        $bulan = $this->input->post('bulan');
        if ($this->session->userdata('logged_in') == true) {
            $null = false;
            $data['kegiatan'] = $this->Kegiatan_model->view_kegiatan_perbulan($bulan, $this->session->userdata('token'));
            if ($data['kegiatan'] == null)
                $null = true;
            else {
                if ($data['kegiatan']['status'] == "Success") {
                    $data['kegiatan'] = $data['kegiatan']['data'];

                    $indexKegiatan = 0;
                    foreach ($data['kegiatan'] as $val) {
                        $data['kegiatan'][$indexKegiatan]['berita_acara'] = $this->Kegiatan_model->view_berita_acara($val['id_kegiatan'], $this->session->userdata('token'));
                        if ($data['kegiatan'][$indexKegiatan]['berita_acara'] == null)
                            $null = true;
                        else {
                            if ($data['kegiatan'][$indexKegiatan]['berita_acara']['status'] == "Success") {
                                $data['kegiatan'][$indexKegiatan]['berita_acara'] = $data['kegiatan'][$indexKegiatan]['berita_acara']['data'];
                            } else {
                                $data['kegiatan'][$indexKegiatan]['berita_acara'] = null;
                                $this->session->set_flashdata('APImessage', $data['kegiatan'][$indexKegiatan]['berita_acara']['message']);
                            }
                        }

                        $data['kegiatan'][$indexKegiatan]['invoice'] = $this->Kegiatan_model->view_invoice($val['id_kegiatan'], $this->session->userdata('token'));
                        if ($data['kegiatan'][$indexKegiatan]['invoice'] == null)
                            $null = true;
                        else {
                            if ($data['kegiatan'][$indexKegiatan]['invoice']['status'] == "Success") {
                                $data['kegiatan'][$indexKegiatan]['invoice'] = $data['kegiatan'][$indexKegiatan]['invoice']['data'];
                            } else {
                                $data['kegiatan'][$indexKegiatan]['invoice'] = null;
                                $this->session->set_flashdata('APImessage', $data['kegiatan'][$indexKegiatan]['invoice']['message']);
                            }
                        }

                        $data['kegiatan'][$indexKegiatan]['bukti_pembayaran'] = $this->Kegiatan_model->view_bukti_pembayaran($val['id_kegiatan'], $this->session->userdata('token'));
                        if ($data['kegiatan'][$indexKegiatan]['bukti_pembayaran'] == null)
                            $null = true;
                        else {
                            if ($data['kegiatan'][$indexKegiatan]['bukti_pembayaran']['status'] == "Success") {
                                $data['kegiatan'][$indexKegiatan]['bukti_pembayaran'] = $data['kegiatan'][$indexKegiatan]['bukti_pembayaran']['data'];
                            } else {
                                $data['kegiatan'][$indexKegiatan]['bukti_pembayaran'] = null;
                                $this->session->set_flashdata('APImessage', $data['kegiatan'][$indexKegiatan]['bukti_pembayaran']['message']);
                            }
                        }
                        $indexKegiatan++;
                    }
                } else {
                    $data['kegiatan'] = null;
                    $this->session->set_flashdata('APImessage', $data['kegiatan']['message']);
                }
            }
            if ($null)
                redirect();
        } else
            redirect();
    }

    public function detail($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $null = false;
            $data['kegiatan'] = $this->Kegiatan_model->view_detail_kegiatan($id_kegiatan, $this->session->userdata('token'));
            if ($data['kegiatan'] == null)
                $null = true;
            else {
                if ($data['kegiatan']['status'] == "Success") {
                    $data['kegiatan'] = $data['kegiatan']['data'];

                    $data['kegiatan']['berita_acara'] = $this->Kegiatan_model->view_berita_acara($id_kegiatan, $this->session->userdata('token'));
                    if ($data['kegiatan']['berita_acara'] == null)
                        $null = true;
                    else {
                        if ($data['kegiatan']['berita_acara']['status'] == "Success") {
                            $data['kegiatan']['berita_acara'] = $data['kegiatan']['berita_acara']['data'];
                        } else {
                            $data['kegiatan']['berita_acara'] = null;
                            $this->session->set_flashdata('APImessage', $data['kegiatan']['berita_acara']['message']);
                        }
                    }

                    $data['kegiatan']['invoice'] = $this->Kegiatan_model->view_invoice($id_kegiatan, $this->session->userdata('token'));
                    if ($data['kegiatan']['invoice'] == null)
                        $null = true;
                    else {
                        if ($data['kegiatan']['invoice']['status'] == "Success") {
                            $data['kegiatan']['invoice'] = $data['kegiatan']['invoice']['data'];
                        } else {
                            $data['kegiatan']['invoice'] = null;
                            $this->session->set_flashdata('APImessage', $data['kegiatan']['invoice']['message']);
                        }
                    }
                    $data['kegiatan']['bukti_pembayaran'] = $this->Kegiatan_model->view_bukti_pembayaran($id_kegiatan, $this->session->userdata('token'));
                    if ($data['kegiatan']['bukti_pembayaran'] == null)
                        $null = true;
                    else {
                        if ($data['kegiatan']['bukti_pembayaran']['status'] == "Success") {
                            $data['kegiatan']['bukti_pembayaran'] = $data['kegiatan']['bukti_pembayaran']['data'];
                        } else {
                            $data['kegiatan']['bukti_pembayaran'] = null;
                            $this->session->set_flashdata('APImessage', $data['kegiatan']['bukti_pembayaran']['message']);
                        }
                    }
                } else {
                    $data['kegiatan'] = null;
                    $this->session->set_flashdata('APImessage', $data['kegiatan']['message']);
                }
            }

            if ($null)
                redirect();
        } else
            redirect();
    }

    // blm done
    public function peserta($id_kegiatan, $id_status)
    {
        if ($this->session->userdata('logged_in') == true) {
            $null = false;
            $data['kegiatan'] = $this->Kegiatan_model->view_peserta_by_status($id_kegiatan, $id_status, $this->session->userdata('token'));
            if ($data['kegiatan'] == null)
                $null = true;
            else {
                if ($data['kegiatan']['status'] == "Success") {
                    $data['kegiatan'] = $data['kegiatan']['data'];
                } else {
                    $data['kegiatan'] = null;
                    $this->session->set_flashdata('APImessage', $data['kegiatan']['message']);
                }
            }

            if ($null)
                redirect();
        } else
            redirect();
    }

    public function daftar($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $daftar_kegiatan = $this->Kegiatan_model->daftar_kegiatan($id_kegiatan, $this->session->userdata('token'));
            if ($daftar_kegiatan == null) {
                redirect();
            } else {
                if ($daftar_kegiatan['status'] == "Success") {
                    $this->session->set_flashdata('success', $daftar_kegiatan['message']);
                    redirect();
                } else {
                    $this->session->set_flashdata('APImessage', $daftar_kegiatan['message']);
                    redirect();
                }
            }
        } else
            redirect();
    }

    public function tambah()
    {
        $this->load->view('edit_profile');
    }

    public function tambah_kegiatan_action()
    {
        if ($this->session->userdata('logged_in') == true) {
            $judul_kegiatan = $this->input->post('judul_kegiatan');
            $deskripsi_kegiatan = $this->input->post('deskripsi_kegiatan');
            $tanggal_kegiatan = $this->input->post('tanggal_kegiatan');
            $temparr = explode('-', $tanggal_kegiatan);
            $indextglreverse = 0;
            for ($j = count($temparr) - 1; $j >= 0; $j--) {
                $arrtemptanggal[$indextglreverse] = $temparr[$j];
                $indextglreverse++;
            }
            $tanggal_kegiatan = implode('-', $arrtemptanggal);

            $tanggal_kegiatan_selesai = $this->input->post('tanggal_kegiatan_selesai');
            $temparrselesai = explode('-', $tanggal_kegiatan_selesai);
            $indextglselesaireverse = 0;
            for ($j = count($temparrselesai) - 1; $j >= 0; $j--) {
                $arrtemptanggalselesai[$indextglselesaireverse] = $temparrselesai[$j];
                $indextglselesaireverse++;
            }
            $tanggal_kegiatan_selesai = implode('-', $arrtemptanggalselesai);
            $lokasi_kegiatan = $this->input->post('lokasi_kegiatan');
            $latitude_lokasi = $this->input->post('latitude_lokasi');
            $longitude_lokasi = $this->input->post('longitude_lokasi');
            $status_kegiatan = $this->input->post('status_kegiatan');
            $foto_banner_kegiatan = new \CurlFile($_FILES['foto_banner_kegiatan']['tmp_name'], $_FILES['foto_banner_kegiatan']['type'], $_FILES['foto_banner_kegiatan']['name']);
            $id_akun_kegiatan = $this->input->post('id_akun_kegiatan');
            $id_jenis_kegiatan = $this->input->post('id_jenis_kegiatan');
            $id_pelatih_kegiatan = $this->input->post('id_pelatih_kegiatan');
            $id_asesor_kegiatan = $this->input->post('id_asesor_kegiatan');
            $id_instruktur_kegiatan = $this->input->post('id_instruktur_kegiatan');

            $tambah_kegiatan = $this->Kegiatan_model->add_kegiatan(
                $judul_kegiatan,
                $deskripsi_kegiatan,
                $tanggal_kegiatan,
                $tanggal_kegiatan_selesai,
                $lokasi_kegiatan,
                $latitude_lokasi,
                $longitude_lokasi,
                $status_kegiatan,
                $foto_banner_kegiatan,
                $id_akun_kegiatan,
                $id_jenis_kegiatan,
                $id_pelatih_kegiatan,
                $id_asesor_kegiatan,
                $id_instruktur_kegiatan,
                $this->session->userdata('token')
            );

            if ($tambah_kegiatan == null) {
                redirect();
            }
            if ($tambah_kegiatan['status'] == "Success") {
                $this->session->set_flashdata('success', $tambah_kegiatan['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $tambah_kegiatan['message']);
                redirect();
            }
        } else {
            redirect();
        }
    }

    //blm done
    public function edit_kegiatan_action($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $judul_kegiatan = $this->input->post('judul_kegiatan');
            $deskripsi_kegiatan = $this->input->post('deskripsi_kegiatan');
            $tanggal_kegiatan = $this->input->post('tanggal_kegiatan');
            $temparr = explode('-', $tanggal_kegiatan);
            $indextglreverse = 0;
            for ($j = count($temparr) - 1; $j >= 0; $j--) {
                $arrtemptanggal[$indextglreverse] = $temparr[$j];
                $indextglreverse++;
            }
            $tanggal_kegiatan = implode('-', $arrtemptanggal);

            $tanggal_kegiatan_selesai = $this->input->post('tanggal_kegiatan_selesai');
            $temparrselesai = explode('-', $tanggal_kegiatan_selesai);
            $indextglselesaireverse = 0;
            for ($j = count($temparrselesai) - 1; $j >= 0; $j--) {
                $arrtemptanggalselesai[$indextglselesaireverse] = $temparrselesai[$j];
                $indextglselesaireverse++;
            }
            $tanggal_kegiatan_selesai = implode('-', $arrtemptanggalselesai);
            $lokasi_kegiatan = $this->input->post('lokasi_kegiatan');
            $latitude_lokasi = $this->input->post('latitude_lokasi');
            $longitude_lokasi = $this->input->post('longitude_lokasi');
            $status_kegiatan = $this->input->post('status_kegiatan');
            $foto_banner_kegiatan = new \CurlFile($_FILES['foto_banner_kegiatan']['tmp_name'], $_FILES['foto_banner_kegiatan']['type'], $_FILES['foto_banner_kegiatan']['name']);
            $id_akun_kegiatan = $this->input->post('id_akun_kegiatan');
            $id_jenis_kegiatan = $this->input->post('id_jenis_kegiatan');
            $id_pelatih_kegiatan = $this->input->post('id_pelatih_kegiatan');
            $id_asesor_kegiatan = $this->input->post('id_asesor_kegiatan');
            $id_instruktur_kegiatan = $this->input->post('id_instruktur_kegiatan');

            $tambah_kegiatan = $this->Kegiatan_model->edit_kegiatan(
                $judul_kegiatan,
                $deskripsi_kegiatan,
                $tanggal_kegiatan,
                $tanggal_kegiatan_selesai,
                $lokasi_kegiatan,
                $latitude_lokasi,
                $longitude_lokasi,
                $status_kegiatan,
                $foto_banner_kegiatan,
                $id_akun_kegiatan,
                $id_jenis_kegiatan,
                $id_pelatih_kegiatan,
                $id_asesor_kegiatan,
                $id_instruktur_kegiatan,
                $id_kegiatan,
                $this->session->userdata('token')
            );

            var_dump($tambah_kegiatan); die;
            if ($tambah_kegiatan == null) {
                redirect();
            }
            if ($tambah_kegiatan['status'] == "Success") {
                $this->session->set_flashdata('success', $tambah_kegiatan['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $tambah_kegiatan['message']);
                redirect();
            }
        } else {
            redirect();
        }
    }


    public function delete_kegiatan($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete_kegiatan = $this->Kegiatan_model->delete_kegiatan($id_kegiatan, $this->session->userdata('token'));
            if ($delete_kegiatan == null) {
                redirect();
            } else {
                if ($delete_kegiatan['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete_kegiatan['message']);
                    redirect();
                } else {
                    $this->session->set_flashdata('APImessage', $delete_kegiatan['message']);
                    redirect();
                }
            }
        } else
            redirect();
    }

    // ====================== Berita Acara ==================================

    public function tambah_berita_acara_action($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $deskripsi_berita_acara = $this->input->post('deskripsi_berita_acara');
            $file_berita_acara = new \CurlFile($_FILES['file_berita_acara']['tmp_name'], $_FILES['file_berita_acara']['type'], $_FILES['file_berita_acara']['name']);

            $tambah_berita_acara = $this->Kegiatan_model->add_berita_acara(
                $deskripsi_berita_acara,
                $file_berita_acara,
                $id_kegiatan,
                $this->session->userdata('token')
            );

            if ($tambah_berita_acara == null) {
                redirect();
            }
            if ($tambah_berita_acara['status'] == "Success") {
                $this->session->set_flashdata('success', $tambah_berita_acara['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $tambah_berita_acara['message']);
                redirect();
            }
        } else {
            redirect();
        }
    }

    public function edit_berita_acara_action($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $deskripsi_berita_acara = $this->input->post('deskripsi_berita_acara');
            $file_berita_acara = new \CurlFile($_FILES['file_berita_acara']['tmp_name'], $_FILES['file_berita_acara']['type'], $_FILES['file_berita_acara']['name']);

            $edit_berita_acara = $this->Kegiatan_model->edit_berita_acara(
                $deskripsi_berita_acara,
                $file_berita_acara,
                $id_kegiatan,
                $this->session->userdata('token')
            );

            if ($edit_berita_acara == null) {
                redirect();
            }
            if ($edit_berita_acara['status'] == "Success") {
                $this->session->set_flashdata('success', $edit_berita_acara['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $edit_berita_acara['message']);
                redirect();
            }
        } else {
            redirect();
        }
    }
    // ====================== invoice ==================================


    //blm done
    public function tambah_invoice_action($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $deskripsi_invoice = $this->input->post('deskripsi_invoice');
            $file_invoice = new \CurlFile($_FILES['file_invoice']['tmp_name'], $_FILES['file_invoice']['type'], $_FILES['file_invoice']['name']);

            $tambah_invoice = $this->Kegiatan_model->add_invoice(
                $deskripsi_invoice,
                $file_invoice,
                $id_kegiatan,
                $this->session->userdata('token')
            );
            var_dump($tambah_invoice);
            die;

            if ($tambah_invoice == null) {
                redirect();
            }
            if ($tambah_invoice['status'] == "Success") {
                $this->session->set_flashdata('success', $tambah_invoice['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $tambah_invoice['message']);
                redirect();
            }
        } else {
            redirect();
        }
    }

    //blm done
    public function edit_invoice_action($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $deskripsi_invoice = $this->input->post('deskripsi_invoice');
            $file_invoice = new \CurlFile($_FILES['file_invoice']['tmp_name'], $_FILES['file_invoice']['type'], $_FILES['file_invoice']['name']);

            $edit_invoice = $this->Kegiatan_model->edit_invoice(
                $deskripsi_invoice,
                $file_invoice,
                $id_kegiatan,
                $this->session->userdata('token')
            );

            var_dump($edit_invoice);
            die;

            if ($edit_invoice == null) {
                redirect();
            }
            if ($edit_invoice['status'] == "Success") {
                $this->session->set_flashdata('success', $edit_invoice['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $edit_invoice['message']);
                redirect();
            }
        } else {
            redirect();
        }
    }

    // ====================== bukti_pembayaran ==================================

    public function tambah_bukti_pembayaran_action($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $deskripsi_bukti_pembayaran = $this->input->post('deskripsi_bukti_pembayaran');
            $file_bukti_pembayaran = new \CurlFile($_FILES['file_bukti_pembayaran']['tmp_name'], $_FILES['file_bukti_pembayaran']['type'], $_FILES['file_bukti_pembayaran']['name']);

            $tambah_bukti_pembayaran = $this->Kegiatan_model->add_bukti_pembayaran(
                $deskripsi_bukti_pembayaran,
                $file_bukti_pembayaran,
                $id_kegiatan,
                $this->session->userdata('token')
            );

            if ($tambah_bukti_pembayaran == null) {
                redirect();
            }
            if ($tambah_bukti_pembayaran['status'] == "Success") {
                $this->session->set_flashdata('success', $tambah_bukti_pembayaran['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $tambah_bukti_pembayaran['message']);
                redirect();
            }
        } else {
            redirect();
        }
    }

    public function edit_bukti_pembayaran_action($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $deskripsi_bukti_pembayaran = $this->input->post('deskripsi_bukti_pembayaran');
            $file_bukti_pembayaran = new \CurlFile($_FILES['file_bukti_pembayaran']['tmp_name'], $_FILES['file_bukti_pembayaran']['type'], $_FILES['file_bukti_pembayaran']['name']);

            $edit_bukti_pembayaran = $this->Kegiatan_model->edit_bukti_pembayaran(
                $deskripsi_bukti_pembayaran,
                $file_bukti_pembayaran,
                $id_kegiatan,
                $this->session->userdata('token')
            );

            if ($edit_bukti_pembayaran == null) {
                redirect();
            }
            if ($edit_bukti_pembayaran['status'] == "Success") {
                $this->session->set_flashdata('success', $edit_bukti_pembayaran['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $edit_bukti_pembayaran['message']);
                redirect();
            }
        } else {
            redirect();
        }
    }

    // ====================== pelatih kegiatan ==================================

    //blm done
    public function delete_pelatih($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete_kegiatan = $this->Kegiatan_model->delete_pelatih_kegiatan($id_kegiatan, $this->session->userdata('token'));
            var_dump($delete_kegiatan);
            die;
            if ($delete_kegiatan == null) {
                redirect();
            } else {
                if ($delete_kegiatan['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete_kegiatan['message']);
                    redirect();
                } else {
                    $this->session->set_flashdata('APImessage', $delete_kegiatan['message']);
                    redirect();
                }
            }
        } else
            redirect();
    }

    //blm done
    public function delete_asesor($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete_kegiatan = $this->Kegiatan_model->delete_asesor_kegiatan($id_kegiatan, $this->session->userdata('token'));
            var_dump($delete_kegiatan);
            die;
            if ($delete_kegiatan == null) {
                redirect();
            } else {
                if ($delete_kegiatan['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete_kegiatan['message']);
                    redirect();
                } else {
                    $this->session->set_flashdata('APImessage', $delete_kegiatan['message']);
                    redirect();
                }
            }
        } else
            redirect();
    }

    //blm done
    public function delete_instruktur($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete_kegiatan = $this->Kegiatan_model->delete_instruktur_kegiatan($id_kegiatan, $this->session->userdata('token'));
            var_dump($delete_kegiatan);
            die;
            if ($delete_kegiatan == null) {
                redirect();
            } else {
                if ($delete_kegiatan['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete_kegiatan['message']);
                    redirect();
                } else {
                    $this->session->set_flashdata('APImessage', $delete_kegiatan['message']);
                    redirect();
                }
            }
        } else
            redirect();
    }
}
