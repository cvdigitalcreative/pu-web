<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kegiatan_model');
        $this->load->model('Common_model');
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

            $data['kegiatan'] = $this->Kegiatan_model->view_kegiatan($this->session->userdata('token'));
            if ($data['kegiatan'] == null)
                $null = true;
            else {
                if ($data['kegiatan']['status'] == "Success") {
                    $data['kegiatan'] = $data['kegiatan']['data'];
                    $data['jumlah_seluruh_kegiatan'] = count($data['kegiatan']);

                    $indexKegiatan = 0;
                    foreach ($data['kegiatan'] as $val) {

                        // ====================== provinsi ===============================
                        $provinsitemp = $this->Common_model->view_provinsi($this->session->userdata('token'));
                        if ($provinsitemp == null)
                            $null = true;
                        else {
                            if ($provinsitemp['status'] == 'Success') {
                                foreach ($provinsitemp['data'] as $val2) {
                                    if ($val2['provinsi'] == $val['provinsi'])
                                        $data['kegiatan'][$indexKegiatan]['id_provinsi'] = $val2['id_provinsi'];
                                }
                            } else {
                                $data['kegiatan'][$indexKegiatan]['id_provinsi'] = null;
                            }
                        }

                        // ====================== Akun Kegiatan ===============================
                        $akuntemp = $this->Common_model->view_akun_kegiatan($this->session->userdata('token'));
                        if ($akuntemp == null)
                            $null = true;
                        else {
                            if ($akuntemp['status'] == 'Success') {
                                foreach ($akuntemp['data'] as $val2) {
                                    if ($val2['akun_kegiatan'] == $val['akun_kegiatan'])
                                        $data['kegiatan'][$indexKegiatan]['id_akun_kegiatan'] = $val2['id_akun_kegiatan'];
                                }
                            } else {
                                $data['kegiatan'][$indexKegiatan]['id_provinsi'] = null;
                            }
                        }

                        // ====================== status Kegiatan ===============================
                        $jenistemp = $this->Common_model->view_jenis_kegiatan($this->session->userdata('token'));
                        if ($jenistemp == null)
                            $null = true;
                        else {
                            if ($jenistemp['status'] == 'Success') {
                                foreach ($jenistemp['data'] as $val2) {
                                    if ($val2['jenis_kegiatan'] == $val['jenis_kegiatan'])
                                        $data['kegiatan'][$indexKegiatan]['id_jenis_kegiatan'] = $val2['id_jenis_kegiatan'];
                                }
                            } else {
                                $data['kegiatan'][$indexKegiatan]['id_provinsi'] = null;
                            }
                        }

                        // ======================= tanggal Kegiatan ================================
                        $tanggal_kegiatan = $val['tanggal_kegiatan'];
                        $temparr = explode('-', $tanggal_kegiatan);
                        $indextglreverse = 0;
                        for ($j = count($temparr) - 1; $j >= 0; $j--) {
                            $arrtemptanggal[$indextglreverse] = $temparr[$j];
                            $indextglreverse++;
                        }
                        $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan'] = implode('-', $arrtemptanggal);
                        $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_text'] = strtotime($val['tanggal_kegiatan']);
                        $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_text'] = date("d F Y", $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_text']);

                        // ======================= tanggal Kegiatan Selesai ================================
                        $tanggal_kegiatan_selesai = $val['tanggal_kegiatan_selesai'];
                        $temparrselesai = explode('-', $tanggal_kegiatan_selesai);
                        $indextglselesaireverse = 0;
                        for ($j = count($temparrselesai) - 1; $j >= 0; $j--) {
                            $arrtemptanggalselesai[$indextglselesaireverse] = $temparrselesai[$j];
                            $indextglselesaireverse++;
                        }
                        $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_selesai'] = implode('-', $arrtemptanggalselesai);
                        $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_selesai_text'] = strtotime($val['tanggal_kegiatan_selesai']);
                        $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_selesai_text'] = date("d F Y", $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_selesai_text']);

                        // ==================== Instruktur Kegiatan ===========================
                        $indexInstruktur = 0;
                        foreach ($data['kegiatan'][$indexKegiatan]['instruktur_kegiatan'] as $val2) {
                            if ($indexInstruktur == 0) {
                                $data['kegiatan'][$indexKegiatan]['str_nama_instruktur_kegiatan'] = $val2['nama'];
                            } else
                                $data['kegiatan'][$indexKegiatan]['str_nama_instruktur_kegiatan'] = (string)  $data['kegiatan'][$indexKegiatan]['str_nama_instruktur_kegiatan'] . ", " . $val2['nama'];
                            $indexInstruktur++;
                        }

                        // ==================== Asesor Kegiatan ===========================
                        $indexAsesor = 0;
                        foreach ($data['kegiatan'][$indexKegiatan]['asesor_kegiatan'] as $val2) {
                            if ($indexAsesor == 0) {
                                $data['kegiatan'][$indexKegiatan]['str_nama_asesor_kegiatan'] = $val2['nama'];
                            } else
                                $data['kegiatan'][$indexKegiatan]['str_nama_asesor_kegiatan'] = (string)  $data['kegiatan'][$indexKegiatan]['asesor_kegiatan']['str_nama_asesor_kegiatan'] . ", " . $val2['nama'];
                            $indexAsesor++;
                        }
                        // ==================== pelatih Kegiatan ===========================
                        $indexPelatih = 0;
                        foreach ($data['kegiatan'][$indexKegiatan]['pelatih_kegiatan'] as $val2) {
                            if ($indexPelatih == 0) {
                                $data['kegiatan'][$indexKegiatan]['str_nama_pelatih_kegiatan'] = $val2['nama'];
                            } else
                                $data['kegiatan'][$indexKegiatan]['str_nama_pelatih_kegiatan'] = (string)  $data['kegiatan'][$indexKegiatan]['str_nama_pelatih_kegiatan'] . ", " . $val2['nama'];
                            $indexPelatih++;
                        }

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
                    $data['jumlah_seluruh_kegiatan'] = 0;

                    $this->session->set_flashdata('APImessage', $data['kegiatan']['message']);
                }
            }


            $data['jumlah_kegiatan_selesai'] = $this->Kegiatan_model->view_kegiatan_selesai($this->session->userdata('token'));
            if ($data['jumlah_kegiatan_selesai'] == null)
                $null = true;
            else {
                if ($data['jumlah_kegiatan_selesai']['status'] == "Success") {
                    $data['jumlah_kegiatan_selesai'] = count($data['jumlah_kegiatan_selesai']['data']);
                } else {
                    $data['jumlah_kegiatan_selesai'] = 0;
                    $this->session->set_flashdata('APImessage', $data['jumlah_kegiatan_selesai']['message']);
                }
            }

            $data['jumlah_kegiatan_berjalan'] = $data['jumlah_seluruh_kegiatan'] - $data['jumlah_kegiatan_selesai'];


            // ============================== data for form =================================
            $data['provinsi'] = $this->Common_model->view_provinsi($this->session->userdata('token'));
            if ($data['provinsi'] == null)
                $null = true;
            else {
                if ($data['provinsi']['status'] == "Success") {
                    $data['provinsi'] = $data['provinsi']['data'];
                } else {
                    $data['provinsi'] = null;
                    $this->session->set_flashdata('APImessage', $data['provinsi']['message']);
                }
            }

            $data['status_kegiatan'] = $this->Common_model->view_status_kegiatan($this->session->userdata('token'));
            if ($data['status_kegiatan'] == null)
                $null = true;
            else {
                if ($data['status_kegiatan']['status'] == "Success") {
                    $data['status_kegiatan'] = $data['status_kegiatan']['data'];
                } else {
                    $data['status_kegiatan'] = null;
                    $this->session->set_flashdata('APImessage', $data['status_kegiatan']['message']);
                }
            }
            $data['akun_kegiatan'] = $this->Common_model->view_akun_kegiatan($this->session->userdata('token'));
            if ($data['akun_kegiatan'] == null)
                $null = true;
            else {
                if ($data['akun_kegiatan']['status'] == "Success") {
                    $data['akun_kegiatan'] = $data['akun_kegiatan']['data'];
                } else {
                    $data['akun_kegiatan'] = null;
                    $this->session->set_flashdata('APImessage', $data['akun_kegiatan']['message']);
                }
            }
            $data['jenis_kegiatan'] = $this->Common_model->view_jenis_kegiatan($this->session->userdata('token'));
            if ($data['jenis_kegiatan'] == null)
                $null = true;
            else {
                if ($data['jenis_kegiatan']['status'] == "Success") {
                    $data['jenis_kegiatan'] = $data['jenis_kegiatan']['data'];
                } else {
                    $data['jenis_kegiatan'] = null;
                    $this->session->set_flashdata('APImessage', $data['jenis_kegiatan']['message']);
                }
            }

            $data['asesor'] = $this->Common_model->view_asesor($this->session->userdata('token'));
            if ($data['asesor'] == null)
                $null = true;
            else {
                if ($data['asesor']['status'] == "Success") {
                    $data['asesor'] = $data['asesor']['data'];
                } else {
                    $data['asesor'] = null;
                    $this->session->set_flashdata('APImessage', $data['asesor']['message']);
                }
            }

            $data['instruktur'] = $this->Common_model->view_instruktur($this->session->userdata('token'));
            if ($data['instruktur'] == null)
                $null = true;
            else {
                if ($data['instruktur']['status'] == "Success") {
                    $data['instruktur'] = $data['instruktur']['data'];
                } else {
                    $data['instruktur'] = null;
                    $this->session->set_flashdata('APImessage', $data['instruktur']['message']);
                }
            }

            if ($null)
                $this->load->view('error_page');

            $this->load->view("administrator/events", $data);
        } else
            redirect("pupr/login");
    }

    public function dataSeluruh()
    {
        if ($this->session->userdata('logged_in') == true) {
            $data['kegiatan'] = $this->Kegiatan_model->view_kegiatan($this->session->userdata('token'));
            if ($data['kegiatan'] == null) {
                $callback = array(
                    'data' => []
                );
            } else {
                if ($data['kegiatan']['status'] == "Success") {
                    if (count($data['kegiatan']['data']) > 0) {
                        $data['kegiatan'] = $data['kegiatan']['data'];
                        $indexKegiatan = 0;
                        $noKegiatan = 1;
                        foreach ($data['kegiatan'] as $val) {

                            $data['kegiatan'][$indexKegiatan]['str_nama_instruktur_kegiatan'] = "-";
                            $data['kegiatan'][$indexKegiatan]['str_nama_asesor_kegiatan'] = "-";
                            $data['kegiatan'][$indexKegiatan]['no_kegiatan'] = $noKegiatan;
                            // ======================= tanggal Kegiatan ================================
                            $tanggal_kegiatan = $val['tanggal_kegiatan'];
                            $temparr = explode('-', $tanggal_kegiatan);
                            $indextglreverse = 0;
                            for ($j = count($temparr) - 1; $j >= 0; $j--) {
                                $arrtemptanggal[$indextglreverse] = $temparr[$j];
                                $indextglreverse++;
                            }
                            $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan'] = implode('-', $arrtemptanggal);
                            $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_text'] = strtotime($val['tanggal_kegiatan']);
                            $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_text'] = date("d F Y", $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_text']);

                            // ======================= tanggal Kegiatan Selesai ================================
                            $tanggal_kegiatan_selesai = $val['tanggal_kegiatan_selesai'];
                            $temparrselesai = explode('-', $tanggal_kegiatan_selesai);
                            $indextglselesaireverse = 0;
                            for ($j = count($temparrselesai) - 1; $j >= 0; $j--) {
                                $arrtemptanggalselesai[$indextglselesaireverse] = $temparrselesai[$j];
                                $indextglselesaireverse++;
                            }
                            $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_selesai'] = implode('-', $arrtemptanggalselesai);
                            $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_selesai_text'] = strtotime($val['tanggal_kegiatan_selesai']);
                            $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_selesai_text'] = date("d F Y", $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_selesai_text']);

                            $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_full_text'] = $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_text'] . " - " . $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_selesai_text'];

                            // ==================== Instruktur Kegiatan ===========================
                            $indexInstruktur = 0;
                            foreach ($data['kegiatan'][$indexKegiatan]['instruktur_kegiatan'] as $val2) {
                                if ($indexInstruktur == 0) {
                                    $data['kegiatan'][$indexKegiatan]['str_nama_instruktur_kegiatan'] = $val2['nama'];
                                } else
                                    $data['kegiatan'][$indexKegiatan]['str_nama_instruktur_kegiatan'] = (string)  $data['kegiatan'][$indexKegiatan]['str_nama_instruktur_kegiatan'] . ", " . $val2['nama'];
                                $indexInstruktur++;
                            }

                            // ==================== Asesor Kegiatan ===========================
                            $indexAsesor = 0;
                            foreach ($data['kegiatan'][$indexKegiatan]['asesor_kegiatan'] as $val2) {
                                if ($indexAsesor == 0) {
                                    $data['kegiatan'][$indexKegiatan]['str_nama_asesor_kegiatan'] = $val2['nama'];
                                } else
                                    $data['kegiatan'][$indexKegiatan]['str_nama_asesor_kegiatan'] = (string)  $data['kegiatan'][$indexKegiatan]['asesor_kegiatan']['str_nama_asesor_kegiatan'] . ", " . $val2['nama'];
                                $indexAsesor++;
                            }

                            $indexKegiatan++;
                            $noKegiatan++;
                        }
                        $callback = array(
                            'data' => $data['kegiatan']
                        );
                    } else {
                        $callback = array(
                            'data' => []
                        );
                    }
                } else {
                    $callback = array(
                        'data' => []
                    );
                }

                header('Content-Type: application/json');
                echo json_encode($callback);
            }
        } else {
            redirect('pupr/login');
        }
    }

    public function filter()
    {
        if ($this->session->userdata('logged_in') == true) {
            $tanggal_awal = $this->input->post('filter_tanggal_kegiatan_mulai');
            $tanggal_akhir = $this->input->post('filter_tanggal_kegiatan_selesai');
            $jenis_kegiatan = $this->input->post('filter_jenis_kegiatan');
            $status_kegiatan = $this->input->post('filter_status_kegiatan');

            $filter = "?";
            if ($tanggal_awal != null) {
                $temparr = explode('/', $tanggal_awal);
                $tanggal_awal = implode('-', $temparr);
                if ($filter == "?")
                    $filter = $filter . "tanggal_awal=" . $tanggal_awal;
                else
                    $filter = $filter . "&tanggal_awal=" . $tanggal_awal;
            }
            if ($tanggal_akhir != null) {
                $temparrselesai = explode('/', $tanggal_akhir);
                $tanggal_akhir = implode('-', $temparrselesai);
                if ($filter == "?")
                    $filter = $filter . "tanggal_akhir=" . $tanggal_akhir;
                else
                    $filter = $filter . "&tanggal_akhir=" . $tanggal_akhir;
            }
            if ($jenis_kegiatan != null) {
                if ($filter == "?")
                    $filter = $filter . "jenis_kegiatan=" . $jenis_kegiatan;
                else
                    $filter = $filter . "&jenis_kegiatan=" . $jenis_kegiatan;
            }
            if ($status_kegiatan != null) {
                if ($filter == "?")
                    $filter = $filter . "status_kegiatan=" . $status_kegiatan;
                else
                    $filter = $filter . "&status_kegiatan=" . $status_kegiatan;
            }

            $data['kegiatan'] = $this->Kegiatan_model->view_kegiatan_filter($filter, $this->session->userdata('token'));
            if ($data['kegiatan'] == null) {
                $callback = array(
                    'data' => []
                );
            } else {
                if ($data['kegiatan']['status'] == "Success") {
                    if (count($data['kegiatan']['data']) > 0) {
                        $data['kegiatan'] = $data['kegiatan']['data'];
                        $indexKegiatan = 0;
                        $noKegiatan = 1;
                        foreach ($data['kegiatan'] as $val) {

                            $data['kegiatan'][$indexKegiatan]['str_nama_instruktur_kegiatan'] = "-";
                            $data['kegiatan'][$indexKegiatan]['str_nama_asesor_kegiatan'] = "-";
                            $data['kegiatan'][$indexKegiatan]['no_kegiatan'] = $noKegiatan;
                            // ======================= tanggal Kegiatan ================================
                            $tanggal_kegiatan = $val['tanggal_kegiatan'];
                            $temparr = explode('-', $tanggal_kegiatan);
                            $indextglreverse = 0;
                            for ($j = count($temparr) - 1; $j >= 0; $j--) {
                                $arrtemptanggal[$indextglreverse] = $temparr[$j];
                                $indextglreverse++;
                            }
                            $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan'] = implode('-', $arrtemptanggal);
                            $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_text'] = strtotime($val['tanggal_kegiatan']);
                            $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_text'] = date("d F Y", $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_text']);

                            // ======================= tanggal Kegiatan Selesai ================================
                            $tanggal_kegiatan_selesai = $val['tanggal_kegiatan_selesai'];
                            $temparrselesai = explode('-', $tanggal_kegiatan_selesai);
                            $indextglselesaireverse = 0;
                            for ($j = count($temparrselesai) - 1; $j >= 0; $j--) {
                                $arrtemptanggalselesai[$indextglselesaireverse] = $temparrselesai[$j];
                                $indextglselesaireverse++;
                            }
                            $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_selesai'] = implode('-', $arrtemptanggalselesai);
                            $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_selesai_text'] = strtotime($val['tanggal_kegiatan_selesai']);
                            $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_selesai_text'] = date("d F Y", $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_selesai_text']);

                            $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_full_text'] = $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_text'] . " - " . $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_selesai_text'];

                            // ==================== Instruktur Kegiatan ===========================
                            $indexInstruktur = 0;
                            foreach ($data['kegiatan'][$indexKegiatan]['instruktur_kegiatan'] as $val2) {
                                if ($indexInstruktur == 0) {
                                    $data['kegiatan'][$indexKegiatan]['str_nama_instruktur_kegiatan'] = $val2['nama'];
                                } else
                                    $data['kegiatan'][$indexKegiatan]['str_nama_instruktur_kegiatan'] = (string)  $data['kegiatan'][$indexKegiatan]['str_nama_instruktur_kegiatan'] . ", " . $val2['nama'];
                                $indexInstruktur++;
                            }

                            // ==================== Asesor Kegiatan ===========================
                            $indexAsesor = 0;
                            foreach ($data['kegiatan'][$indexKegiatan]['asesor_kegiatan'] as $val2) {
                                if ($indexAsesor == 0) {
                                    $data['kegiatan'][$indexKegiatan]['str_nama_asesor_kegiatan'] = $val2['nama'];
                                } else
                                    $data['kegiatan'][$indexKegiatan]['str_nama_asesor_kegiatan'] = (string)  $data['kegiatan'][$indexKegiatan]['asesor_kegiatan']['str_nama_asesor_kegiatan'] . ", " . $val2['nama'];
                                $indexAsesor++;
                            }

                            $indexKegiatan++;
                            $noKegiatan++;
                        }
                        $callback = array(
                            'data' => $data['kegiatan']
                        );
                    } else {
                        $callback = array(
                            'data' => []
                        );
                    }
                } else {
                    $callback = array(
                        'data' => []
                    );
                }
                header('Content-Type: application/json');
                echo json_encode($callback);
            }
        } else
            redirect('pupr/login');
    }


    public function my()
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

            $data['kegiatan'] = $this->Kegiatan_model->view_my_kegiatan($this->session->userdata('token'));
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
                $this->load->view('error_page');
        } else
            redirect("pupr/login");
    }

    //blm done
    public function selesai()
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

            $data['kegiatan'] = $this->Kegiatan_model->view_kegiatan_selesai($this->session->userdata('token'));
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
                $this->load->view('error_page');
        } else
            redirect("pupr/login");
    }

    public function detail($id_kegiatan)
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
                $this->load->view('error_page');
        } else
            redirect("pupr/login");
    }

    public function peserta($id_kegiatan, $id_status)
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
                $this->load->view('error_page');
        } else
            redirect("pupr/login");
    }

    public function daftar($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $daftar_kegiatan = $this->Kegiatan_model->daftar_kegiatan($id_kegiatan, $this->session->userdata('token'));
            if ($daftar_kegiatan == null) {
                $this->load->view('error_page');
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

            $data['asesor'] = $this->Common_model->view_asesor($this->session->userdata('token'));
            if ($data['asesor'] == null)
                $null = true;
            else {
                if ($data['asesor']['status'] == "Success") {
                    $data['asesor'] = $data['asesor']['data'];
                } else {
                    $data['asesor'] = null;
                    $this->session->set_flashdata("APImessage", $data['asesor']['message']);
                }
            }
            $data['instruktur'] = $this->Common_model->view_instruktur($this->session->userdata('token'));
            if ($data['instruktur'] == null)
                $null = true;
            else {
                if ($data['instruktur']['status'] == "Success") {
                    $data['instruktur'] = $data['instruktur']['data'];
                } else {
                    $data['instruktur'] = null;
                    $this->session->set_flashdata("APImessage", $data['instruktur']['message']);
                }
            }

            if ($null)
                $this->load->view('error_page');
            $this->load->view('edit_profile');
        } else
            redirect("pupr/login");
    }

    public function view_kota()
    {
        $provinsi = $this->input->post('id_provinsi');
        $data = $this->Common_model->view_kabupaten_kota($provinsi, $this->session->userdata('token'));
        if ($data == null) {
            $this->load->view('error_page');
        } else {
            if ($data['status'] == "Success") {
                $data = $data['data'];
                foreach ($data as $row) {
                    echo '<option value="' . $row['id_kabupaten_kota'] . '">' . $row['kabupaten_kota'] . '</option>';
                }
            } else {
                $data = null;
                echo '<option value="' . '">Gagal mendapatkan kota untuk kabupaten yang dipilih</option>';
            }
        }
    }

    public function view_kota_edit()
    {
        $provinsi = $this->input->post('id_provinsi');
        $data = $this->Common_model->view_kabupaten_kota($provinsi, $this->session->userdata('token'));
        if ($data == null) {
            $this->load->view('error_page');
        } else {
            if ($data['status'] == "Success") {
                $data = $data['data'];
                foreach ($data as $row) {
                    echo '<option value="' . $row['id_kabupaten_kota'] . '">' . $row['kabupaten_kota'] . '</option>';
                }
            } else {
                $data = null;
                echo '<option value="' . '">Gagal mendapatkan kota untuk kabupaten yang dipilih</option>';
            }
        }
    }

    public function tambah_kegiatan_action()
    {
        if ($this->session->userdata('logged_in') == true) {
            $judul_kegiatan = $this->input->post('judul_kegiatan');
            $deskripsi_kegiatan = $this->input->post('deskripsi_kegiatan');
            $tanggal_kegiatan = $this->input->post('tanggal_kegiatan');
            $temparr = explode('/', $tanggal_kegiatan);
            $indextglreverse = 0;
            for ($j = count($temparr) - 1; $j >= 0; $j--) {
                $arrtemptanggal[$indextglreverse] = $temparr[$j];
                $indextglreverse++;
            }
            $tanggal_kegiatan = implode('-', $arrtemptanggal);

            $tanggal_kegiatan_selesai = $this->input->post('tanggal_kegiatan_selesai');
            $temparrselesai = explode('/', $tanggal_kegiatan_selesai);
            $indextglselesaireverse = 0;
            for ($j = count($temparrselesai) - 1; $j >= 0; $j--) {
                $arrtemptanggalselesai[$indextglselesaireverse] = $temparrselesai[$j];
                $indextglselesaireverse++;
            }
            $tanggal_kegiatan_selesai = implode('-', $arrtemptanggalselesai);
            $lokasi_kegiatan = $this->input->post('lokasi_kegiatan');
            $latitude_lokasi = 0;
            $longitude_lokasi = 0;
            $status_kegiatan = $this->input->post('status_kegiatan');
            $foto_banner_kegiatan = new \CurlFile($_FILES['foto_banner_kegiatan']['tmp_name'], $_FILES['foto_banner_kegiatan']['type'], $_FILES['foto_banner_kegiatan']['name']);
            $id_akun_kegiatan = $this->input->post('id_akun_kegiatan');
            $id_jenis_kegiatan = $this->input->post('id_jenis_kegiatan');
            $id_provinsi = $this->input->post('id_provinsi');
            $id_kota_kabupaten = $this->input->post('id_kota_kabupaten');
            $id_asesor_kegiatan = $this->input->post('id_asesor_kegiatan');
            if (count($id_asesor_kegiatan) == 1)
                $id_asesor_kegiatan = $id_asesor_kegiatan[0];
            else {
                $id_asesor_kegiatan = (string)implode(',', $id_asesor_kegiatan);
                $id_asesor_kegiatan = "[" . $id_asesor_kegiatan . "]";
            }
            $id_instruktur_kegiatan = $this->input->post('id_instruktur_kegiatan');
            if (count($id_instruktur_kegiatan) == 1)
                $id_instruktur_kegiatan = $id_instruktur_kegiatan[0];
            else {
                $id_instruktur_kegiatan = (string)implode(',', $id_instruktur_kegiatan);
                $id_instruktur_kegiatan = "[" . $id_instruktur_kegiatan . "]";
            }
            $file_materi_kegiatan = new \CurlFile($_FILES['file_materi_kegiatan']['tmp_name'], $_FILES['file_materi_kegiatan']['type'], $_FILES['file_materi_kegiatan']['name']);

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
                $id_provinsi,
                $id_kota_kabupaten,
                $id_asesor_kegiatan,
                $id_instruktur_kegiatan,
                $file_materi_kegiatan,
                $this->session->userdata('token')
            );

            if ($tambah_kegiatan == null) {
                $this->load->view('error_page');
            }
            if ($tambah_kegiatan['status'] == "Success") {
                $this->session->set_flashdata('success', $tambah_kegiatan['message']);
                redirect("pupr/events");
            } else {
                $this->session->set_flashdata('APImessage', $tambah_kegiatan['message']);
                redirect("pupr/events");
            }
        } else {
            redirect("pupr/login");
        }
    }

    //blm done
    // public function import_kegiatan_action()
    // {
    //     include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

    //     $config['upload_path'] = realpath('assets/docs/');
    //     $config['allowed_types'] = 'xlsx|xls|csv';
    //     $config['max_size'] = '10000';
    //     $config['encrypt_name'] = true;

    //     $this->load->library('upload', $config);

    //     if ($_FILES['userfile']['name'][0] != null) {
    //         $index = count($_FILES['userfile']['name']);
    //         for ($i = 0; $i < $index; $i++) {

    //             $filename = $_FILES['userfile']['name'][$i];
    //             if (move_uploaded_file($_FILES['userfile']['tmp_name'][$i], 'assets/docs/' . $filename)) {

    //                 $excelreader     = new PHPExcel_Reader_Excel2007();
    //                 $loadexcel         = $excelreader->load('assets/docs/' . $filename);
    //                 $sheet             = $loadexcel->getActiveSheet()->toArray(null, true, true, true);
    //                 $data = array();

    //                 $numrow = 1;
    //                 foreach ($sheet as $row) {
    //                     if ($numrow > 1) {
    //                         $tanggal_kegiatan = $row['C'];
    //                         $temparr = explode('/', $tanggal_kegiatan);
    //                         $indextglreverse = 0;
    //                         for ($j = count($temparr) - 1; $j >= 0; $j--) {
    //                             $arrtemptanggal[$indextglreverse] = $temparr[$j];
    //                             $indextglreverse++;
    //                         }
    //                         $tanggal_kegiatan = implode('-', $arrtemptanggal);

    //                         $tanggal_kegiatan_selesai = $row['D'];
    //                         $temparrselesai = explode('/', $tanggal_kegiatan_selesai);
    //                         $indextglreverse = 0;
    //                         for ($j = count($temparrselesai) - 1; $j >= 0; $j--) {
    //                             $arrtemptanggalselesai[$indextglreverse] = $temparrselesai[$j];
    //                             $indextglreverse++;
    //                         }
    //                         $tanggal_kegiatan_selesai = implode('-', $arrtemptanggalselesai);

    //                         $status_kegiatan = $row['F'];
    //                         if($status_kegiatan == "Belum Dilaksanakan")
    //                         $status_kegiatan = 1;
    //                         else if($status_kegiatan == "Telah Dilaksanakan")
    //                         $status_kegiatan = 2;
    //                         $data = [
    //                             "judul_kegiatan" => $row['A'],
    //                             "deskripsi_kegiatan" => $row['B'],
    //                             "tanggal_kegiatan" => $tanggal_kegiatan,
    //                             "tanggal_kegiatan_selesai" => $tanggal_kegiatan_selesai,
    //                             "lokasi_kegiatan" => $row['E'],
    //                             "latitude_kegiatan" => 0,
    //                             "longitude_kegiatan" => 0,
    //                             "id_akun_kegiatan" => 0,
    //                             "id_jenis_kegiatan" => 0,

    //                         ];
    //                     }
    //                     $numrow++;
    //                 }
    //                 $this->db->insert_batch('tbl_dosen', $data);

    //                 unlink(realpath('assets/docs/' . $filename));

    //                 $this->session->set_flashdata('success', 'Data has been imported from excel successfully');
    //             } else {
    //                 $this->session->set_flashdata('failed', 'Import data failed. ' . $this->upload->display_errors());
    //             }
    //         }
    //     } else {
    //         $this->session->set_flashdata('failed', 'You have not choose any file yet');
    //     }
    //     redirect('Import');
    // }

    public function edit_kegiatan_action($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $judul_kegiatan = $this->input->post('edit_judul_kegiatan');
            $deskripsi_kegiatan = $this->input->post('edit_deskripsi_kegiatan');
            $tanggal_kegiatan = $this->input->post('edit_tanggal_kegiatan');
            $temparr = explode('-', $tanggal_kegiatan);
            $indextglreverse = 0;
            for ($j = count($temparr) - 1; $j >= 0; $j--) {
                $arrtemptanggal[$indextglreverse] = $temparr[$j];
                $indextglreverse++;
            }
            $tanggal_kegiatan = implode('-', $arrtemptanggal);

            $tanggal_kegiatan_selesai = $this->input->post('edit_tanggal_kegiatan_selesai');
            $temparrselesai = explode('-', $tanggal_kegiatan_selesai);
            $indextglselesaireverse = 0;
            for ($j = count($temparrselesai) - 1; $j >= 0; $j--) {
                $arrtemptanggalselesai[$indextglselesaireverse] = $temparrselesai[$j];
                $indextglselesaireverse++;
            }
            $tanggal_kegiatan_selesai = implode('-', $arrtemptanggalselesai);
            $lokasi_kegiatan = $this->input->post('edit_lokasi_kegiatan');
            $latitude_lokasi = 0;
            $longitude_lokasi = 0;
            $status_kegiatan = $this->input->post('status_kegiatan');
            $foto_banner_kegiatan = new \CurlFile($_FILES['edit_foto_banner_kegiatan']['tmp_name'], $_FILES['edit_foto_banner_kegiatan']['type'], $_FILES['edit_foto_banner_kegiatan']['name']);
            $id_akun_kegiatan = $this->input->post('id_akun_kegiatan');
            $id_jenis_kegiatan = $this->input->post('id_jenis_kegiatan');
            $id_provinsi = $this->input->post('id_provinsi');
            $id_kota_kabupaten = $this->input->post('id_kota_kabupaten');
            $id_asesor_kegiatan = $this->input->post('id_asesor_kegiatan');
            if (count($id_asesor_kegiatan) == 1)
                $id_asesor_kegiatan = $id_asesor_kegiatan[0];
            else {
                $id_asesor_kegiatan = (string)implode(',', $id_asesor_kegiatan);
                $id_asesor_kegiatan = "[" . $id_asesor_kegiatan . "]";
            }
            $id_instruktur_kegiatan = $this->input->post('id_instruktur_kegiatan');
            if (count($id_instruktur_kegiatan) == 1)
                $id_instruktur_kegiatan = $id_instruktur_kegiatan[0];
            else {
                $id_instruktur_kegiatan = (string)implode(',', $id_instruktur_kegiatan);
                $id_instruktur_kegiatan = "[" . $id_instruktur_kegiatan . "]";
            }
            $file_materi_kegiatan = new \CurlFile($_FILES['file_materi_kegiatan']['tmp_name'], $_FILES['file_materi_kegiatan']['type'], $_FILES['file_materi_kegiatan']['name']);

            $id_provinsi = 0;
            $id_kota_kabupaten = 0;
            $edit_kegiatan = $this->Kegiatan_model->edit_kegiatan(
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
                $id_provinsi,
                $id_kota_kabupaten,
                $id_asesor_kegiatan,
                $id_instruktur_kegiatan,
                $file_materi_kegiatan,
                $id_kegiatan,
                $this->session->userdata('token')
            );

            if ($edit_kegiatan == null) {
                $this->load->view('error_page');
            }
            if ($edit_kegiatan['status'] == "Success") {
                $this->session->set_flashdata('success', $edit_kegiatan['message']);
                redirect("pupr/events");
            } else {
                $this->session->set_flashdata('APImessage', $edit_kegiatan['message']);
                redirect("pupr/events");
            }
        } else {
            redirect("pupr/login");
        }
    }

    public function tambah_peserta_action($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $file_excel = new \CurlFile($_FILES['file_excel']['tmp_name'], $_FILES['file_excel']['type'], $_FILES['file_excel']['name']);
            $tambah_peserta = $this->Kegiatan_model->tambah_peserta(
                $file_excel,
                $id_kegiatan,
                $this->session->userdata('token')
            );

            if ($tambah_peserta == null) {
                $this->load->view('error_page');
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

    public function delete_kegiatan($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete_kegiatan = $this->Kegiatan_model->delete_kegiatan($id_kegiatan, $this->session->userdata('token'));
            if ($delete_kegiatan == null) {
                $this->load->view('error_page');
            } else {
                if ($delete_kegiatan['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete_kegiatan['message']);
                    redirect("pupr/events");
                } else {
                    $this->session->set_flashdata('APImessage', $delete_kegiatan['message']);
                    redirect("pupr/events");
                }
            }
        } else
            redirect("pupr/login");
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
                $this->load->view('error_page');
            }
            if ($tambah_berita_acara['status'] == "Success") {
                $this->session->set_flashdata('success', $tambah_berita_acara['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $tambah_berita_acara['message']);
                redirect();
            }
        } else {
            redirect("pupr/login");
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
                $this->load->view('error_page');
            }
            if ($edit_berita_acara['status'] == "Success") {
                $this->session->set_flashdata('success', $edit_berita_acara['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $edit_berita_acara['message']);
                redirect();
            }
        } else {
            redirect("pupr/login");
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
                $this->load->view('error_page');
            }
            if ($tambah_invoice['status'] == "Success") {
                $this->session->set_flashdata('success', $tambah_invoice['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $tambah_invoice['message']);
                redirect();
            }
        } else {
            redirect("pupr/login");
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
                $this->load->view('error_page');
            }
            if ($edit_invoice['status'] == "Success") {
                $this->session->set_flashdata('success', $edit_invoice['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $edit_invoice['message']);
                redirect();
            }
        } else {
            redirect("pupr/login");
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
                $this->load->view('error_page');
            }
            if ($tambah_bukti_pembayaran['status'] == "Success") {
                $this->session->set_flashdata('success', $tambah_bukti_pembayaran['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $tambah_bukti_pembayaran['message']);
                redirect();
            }
        } else {
            redirect("pupr/login");
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
                $this->load->view('error_page');
            }
            if ($edit_bukti_pembayaran['status'] == "Success") {
                $this->session->set_flashdata('success', $edit_bukti_pembayaran['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $edit_bukti_pembayaran['message']);
                redirect();
            }
        } else {
            redirect("pupr/login");
        }
    }

    // ====================== pelatih kegiatan ==================================

    public function delete_pelatih($id_kegiatan, $id_tenaga_ahli)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete = $this->Kegiatan_model->delete_pelatih_kegiatan($id_kegiatan, $id_tenaga_ahli, $this->session->userdata('token'));
            if ($delete == null) {
                $this->load->view('error_page');
            } else {
                if ($delete['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete['message']);
                    redirect();
                } else {
                    $this->session->set_flashdata('APImessage', $delete['message']);
                    redirect();
                }
            }
        } else
            redirect("pupr/login");
    }

    public function delete_asesor($id_kegiatan, $id_tenaga_ahli)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete = $this->Kegiatan_model->delete_asesor_kegiatan($id_kegiatan, $id_tenaga_ahli, $this->session->userdata('token'));
            if ($delete == null) {
                $this->load->view('error_page');
            } else {
                if ($delete['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete['message']);
                    redirect();
                } else {
                    $this->session->set_flashdata('APImessage', $delete['message']);
                    redirect();
                }
            }
        } else
            redirect("pupr/login");
    }

    public function delete_instruktur($id_kegiatan, $id_tenaga_ahli)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete = $this->Kegiatan_model->delete_instruktur_kegiatan($id_kegiatan, $id_tenaga_ahli, $this->session->userdata('token'));
            if ($delete == null) {
                $this->load->view('error_page');
            } else {
                if ($delete['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete['message']);
                    redirect();
                } else {
                    $this->session->set_flashdata('APImessage', $delete['message']);
                    redirect();
                }
            }
        } else
            redirect("pupr/login");
    }
}
