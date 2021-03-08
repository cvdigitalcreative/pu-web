<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dashboard_model');
        $this->load->model('User_model');
        $this->load->model('Kegiatan_model');
        $this->load->model('Common_model');

        if ($this->session->userdata('id_role') == 3) {
            $this->session->set_flashdata('APImessage', "Akses gagal. Hanya administrator yang dapat mengakses website ini");
            redirect('pupr/login');
        }
    }

    //blm done
    public function dashboard()
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

            $data['dashboard'] = $this->Dashboard_model->view_dashboard(2, date('YY'), $this->session->userdata('token'));
            if ($data['dashboard'] == null)
                $null = true;
            else {
                if ($data['dashboard']['status'] == "Success") {
                    $data['dashboard'] = $data['dashboard']['data'];
                } else {
                    $data['dashboard'] = null;
                    $this->session->set_flashdata('APImessage', $data['dashboard']['message']);
                }
            }

            $data['total_peserta'] = 0;
            $data['kegiatan'] = $this->Kegiatan_model->view_kegiatan(null, $this->session->userdata('token'));
            if ($data['kegiatan'] == null)
                $null = true;
            else {
                if ($data['kegiatan']['status'] == 'Success') {
                    $data['jumlah_seluruh_kegiatan'] = count($data['kegiatan']['data']);
                    if (count($data['kegiatan']['data']) != 0) {
                        foreach ($data['kegiatan']['data'] as $val) {
                            $data['total_peserta'] = $data['total_peserta'] + $val['jumlah_peserta'];
                        }
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

            if ($null)
                $this->load->view('error_page');
            else
                $this->load->view('administrator/dashboard', $data);
        } else
            redirect("pupr/login");
    }

    public function dataChart($id_jenis, $tahun)
    {
        if ($this->session->userdata('logged_in') == true) {
            $data['dashboard'] = $this->Dashboard_model->view_dashboard($id_jenis, $tahun, $this->session->userdata('token'));
            if ($data['dashboard'] == null) {
                $callback = array(
                    'data' => []
                );
            } else {
                if ($data['dashboard']['status'] == "Success") {
                    if (count($data['dashboard']['data']['tabel_grafik']['grafik']) > 0) {
                        $data['dashboard'] = $data['dashboard']['data']['tabel_grafik'];

                        $callback = array(
                            'data' => $data['dashboard']
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
            }
            header('Content-Type: application/json');
            echo json_encode($callback);
        } else {
            redirect('pupr/login');
        }
    }

    public function dataKegiatanbyStatus($tahun)
    {
        if ($this->session->userdata('logged_in') == true) {
            $data['status'] = $this->Common_model->view_status_kegiatan($this->session->userdata('token'));
            if ($data['status'] == null) {
                $callback = array(
                    'data' => []
                );
            } else {
                if ($data['status']['status'] == "Success") {
                    if (count($data['status']['data']) > 0) {
                        $data['kegiatan']['tahun'] = $tahun;
                        $index = 0;
                        foreach ($data['status']['data'] as $val) {
                            $tanggal_mulai = $tahun . "-01-01";
                            $tanggal_selesai = $tahun . "-12-31";
                            $temp = $this->Kegiatan_model->view_kegiatan("?tanggal_awal=$tanggal_mulai&tanggal_akhir=$tanggal_selesai&status=" . $val['id_status_kegiatan'], $this->session->userdata('token'));
                            if ($temp == null) {
                                $data['kegiatan']['grafik'][$index]['status_kegiatan'] = $val['status_kegiatan'];
                                $data['kegiatan']['grafik'][$index]['id_status_kegiatan'] = $val['id_status_kegiatan'];
                                $data['kegiatan']['grafik'][$index]['jumlah_kegiatan'] = 0;
                            } else {
                                if ($temp['status'] == "Success") {
                                    if (count($temp['data']) > 0) {
                                        $data['kegiatan']['grafik'][$index]['status_kegiatan'] = $val['status_kegiatan'];
                                        $data['kegiatan']['grafik'][$index]['id_status_kegiatan'] = $val['id_status_kegiatan'];
                                        $data['kegiatan']['grafik'][$index]['jumlah_kegiatan'] = count($temp['data']);
                                    } else {
                                        $data['kegiatan']['grafik'][$index]['status_kegiatan'] = $val['status_kegiatan'];
                                        $data['kegiatan']['grafik'][$index]['id_status_kegiatan'] = $val['id_status_kegiatan'];
                                        $data['kegiatan']['grafik'][$index]['jumlah_kegiatan'] = 0;
                                    }
                                } else {
                                    $data['kegiatan']['grafik'][$index]['status_kegiatan'] = $val['status_kegiatan'];
                                    $data['kegiatan']['grafik'][$index]['id_status_kegiatan'] = $val['id_status_kegiatan'];
                                    $data['kegiatan']['grafik'][$index]['jumlah_kegiatan'] = 0;
                                }
                            }
                            $index++;
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
            }
            header('Content-Type: application/json');
            echo json_encode($callback);
        } else {
            redirect('pupr/login');
        }
    }

    public function dataKegiatanbyStatusprovinsi($tahun, $status)
    {
        set_time_limit(100000);
        if ($this->session->userdata('logged_in') == true) {
            $status = str_replace("%20", " ", $status);
            $arrstts = $this->Common_model->view_status_kegiatan($this->session->userdata('token'));
            $idstts = -1;
            if ($arrstts == null) {
                $callback = array(
                    'data' => []
                );
            } else {
                if ($arrstts['status'] == 'Success') {
                    if (count($arrstts['data']) > 0) {
                        foreach ($arrstts['data'] as $val) {
                            if ($val['status_kegiatan'] == $status) {
                                $idstts = $val['id_status_kegiatan'];
                            }
                        }
                        $data['status'] = $this->Common_model->view_kabupaten_kota_all($this->session->userdata('token'));
                        if ($data['status'] == null) {
                            $callback = array(
                                'data' => []
                            );
                        } else {
                            if ($data['status']['status'] == "Success") {
                                if (count($data['status']['data']) > 0) {
                                    $data['kegiatan']['tahun'] = $tahun;
                                    $index = 0;
                                    foreach ($data['status']['data'] as $val) {
                                        if ($val['kabupaten_kota'] != '-') {
                                            $tanggal_mulai = $tahun . "-01-01";
                                            $tanggal_selesai = $tahun . "-12-31";
                                            $temp = $this->Kegiatan_model->view_kegiatan("?tanggal_awal=$tanggal_mulai&tanggal_akhir=$tanggal_selesai&id_kabupaten_kota=" . $val['id_kabupaten_kota'] . "&status=$idstts", $this->session->userdata('token'));
                                            if ($temp != null) {
                                                if ($temp['status'] == "Success") {
                                                    if (count($temp['data']) > 0) {
                                                        $data['kegiatan']['grafik'][$index]['kabupaten_kota'] = $val['kabupaten_kota'];
                                                        $data['kegiatan']['grafik'][$index]['jumlah_kegiatan'] = count($temp['data']);
                                                        $index++;
                                                    }
                                                }
                                            }
                                        }
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
                        }
                    } else {
                        $callback = array(
                            'data' => []
                        );
                    }
                }
            }
            header('Content-Type: application/json');
            echo json_encode($callback);
        } else {
            redirect('pupr/login');
        }
    }

    public function dataKegiatanbyJenis($tahun)
    {
        if ($this->session->userdata('logged_in') == true) {
            $data['status'] = $this->Common_model->view_jenis_kegiatan($this->session->userdata('token'));
            if ($data['status'] == null) {
                $callback = array(
                    'data' => []
                );
            } else {
                if ($data['status']['status'] == "Success") {
                    if (count($data['status']['data']) > 0) {
                        $data['kegiatan']['tahun'] = $tahun;
                        $index = 0;
                        foreach ($data['status']['data'] as $val) {
                            if ($val['jenis_kegiatan'] != '-') {
                                $tanggal_mulai = $tahun . "-01-01";
                                $tanggal_selesai = $tahun . "-12-31";
                                $temp = $this->Kegiatan_model->view_kegiatan("?tanggal_awal=$tanggal_mulai&tanggal_akhir=$tanggal_selesai&jenis=" . $val['id_jenis_kegiatan'], $this->session->userdata('token'));
                                if ($temp == null) {
                                    $data['kegiatan']['grafik'][$index]['jenis_kegiatan'] = $val['jenis_kegiatan'];
                                    $data['kegiatan']['grafik'][$index]['jumlah_kegiatan'] = 0;
                                } else {
                                    if ($temp['status'] == "Success") {
                                        if (count($temp['data']) > 0) {
                                            $data['kegiatan']['grafik'][$index]['jenis_kegiatan'] = $val['jenis_kegiatan'];
                                            $data['kegiatan']['grafik'][$index]['jumlah_kegiatan'] = count($temp['data']);
                                        } else {
                                            $data['kegiatan']['grafik'][$index]['jenis_kegiatan'] = $val['jenis_kegiatan'];
                                            $data['kegiatan']['grafik'][$index]['jumlah_kegiatan'] = 0;
                                        }
                                    } else {
                                        $data['kegiatan']['grafik'][$index]['jenis_kegiatan'] = $val['jenis_kegiatan'];
                                        $data['kegiatan']['grafik'][$index]['jumlah_kegiatan'] = 0;
                                    }
                                }
                                $index++;
                            }
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
            }
            header('Content-Type: application/json');
            echo json_encode($callback);
        } else {
            redirect('pupr/login');
        }
    }

    public function dataKegiatanbyJenisprovinsi($tahun, $jenis)
    {
        set_time_limit(100000);
        if ($this->session->userdata('logged_in') == true) {
            $jenis = str_replace("%20", " ", $jenis);
            $arrstts = $this->Common_model->view_jenis_kegiatan($this->session->userdata('token'));
            $idstts = -1;
            if ($arrstts == null) {
                $callback = array(
                    'data' => []
                );
            } else {
                if ($arrstts['status'] == 'Success') {
                    if (count($arrstts['data']) > 0) {
                        foreach ($arrstts['data'] as $val) {
                            if ($val['jenis_kegiatan'] == $jenis) {
                                $idstts = $val['id_jenis_kegiatan'];
                            }
                        }
                        $data['status'] = $this->Common_model->view_kabupaten_kota_all($this->session->userdata('token'));
                        if ($data['status'] == null) {
                            $callback = array(
                                'data' => []
                            );
                        } else {
                            if ($data['status']['status'] == "Success") {
                                if (count($data['status']['data']) > 0) {
                                    $data['kegiatan']['tahun'] = $tahun;
                                    $index = 0;
                                    foreach ($data['status']['data'] as $val) {
                                        if ($val['kabupaten_kota'] != '-') {
                                            $tanggal_mulai = $tahun . "-01-01";
                                            $tanggal_selesai = $tahun . "-12-31";
                                            $temp = $this->Kegiatan_model->view_kegiatan("?tanggal_awal=$tanggal_mulai&tanggal_akhir=$tanggal_selesai&id_kabupaten_kota=" . $val['id_kabupaten_kota'] . "&jenis=$idstts", $this->session->userdata('token'));
                                            if ($temp != null) {
                                                if ($temp['status'] == "Success") {
                                                    if (count($temp['data']) > 0) {
                                                        $data['kegiatan']['grafik'][$index]['kabupaten_kota'] = $val['kabupaten_kota'];
                                                        $data['kegiatan']['grafik'][$index]['jumlah_kegiatan'] = count($temp['data']);
                                                        $index++;
                                                    }
                                                }
                                            }
                                        }
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
                        }
                    } else {
                        $callback = array(
                            'data' => []
                        );
                    }
                }
            }
            header('Content-Type: application/json');
            echo json_encode($callback);
        } else {
            redirect('pupr/login');
        }
    }

    public function dataKegiatanbyProvinsi($tahun)
    {
        if ($this->session->userdata('logged_in') == true) {
            $data['status'] = $this->Common_model->view_provinsi($this->session->userdata('token'));
            if ($data['status'] == null) {
                $callback = array(
                    'data' => []
                );
            } else {
                if ($data['status']['status'] == "Success") {
                    if (count($data['status']['data']) > 0) {
                        $data['kegiatan']['tahun'] = $tahun;
                        $index = 0;
                        foreach ($data['status']['data'] as $val) {
                            if ($val['provinsi'] != '-') {
                                $tanggal_mulai = $tahun . "-01-01";
                                $tanggal_selesai = $tahun . "-12-31";
                                $temp = $this->Kegiatan_model->view_kegiatan("?tanggal_awal=$tanggal_mulai&tanggal_akhir=$tanggal_selesai&id_provinsi=" . $val['id_provinsi'], $this->session->userdata('token'));
                                if ($temp != null) {
                                    if ($temp['status'] == "Success") {
                                        if (count($temp['data']) > 0) {
                                            $totalPeserta = 0;
                                            $data['kegiatan']['grafik'][$index]['provinsi'] = $val['provinsi'];
                                            $data['kegiatan']['grafik'][$index]['jumlah_kegiatan'] = count($temp['data']);
                                            foreach ($temp['data'] as $val2) {
                                                $totalPeserta = $totalPeserta + $val2['jumlah_peserta'];
                                            }
                                            $data['kegiatan']['grafik'][$index]['total_peserta'] = $totalPeserta;
                                            $index++;
                                        }
                                    }
                                }
                            }
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
            }
            header('Content-Type: application/json');
            echo json_encode($callback);
        } else {
            redirect('pupr/login');
        }
    }

    public function dataKegiatanbyProvinsiKota($tahun, $provinsi)
    {
        ini_set('max_execution_time', '100000');
        if ($this->session->userdata('logged_in') == true) {
            $provinsi = str_replace("%20", " ", $provinsi);
            $arrprov = $this->Common_model->view_provinsi($this->session->userdata('token'));
            $idprov = -1;
            if ($arrprov == null) {
                $callback = array(
                    'data' => []
                );
            } else {
                if ($arrprov['status'] == 'Success') {
                    if (count($arrprov['data']) > 0) {
                        foreach ($arrprov['data'] as $val) {
                            if ($val['provinsi'] == $provinsi) {
                                $idprov = $val['id_provinsi'];
                            }
                        }
                        $data['status'] = $this->Common_model->view_kabupaten_kota($idprov, $this->session->userdata('token'));
                        if ($data['status'] == null) {
                            $callback = array(
                                'data' => []
                            );
                        } else {
                            if ($data['status']['status'] == "Success") {
                                if (count($data['status']['data']) > 0) {
                                    $data['kegiatan']['tahun'] = $tahun;
                                    $index = 0;
                                    foreach ($data['status']['data'] as $val) {
                                        if ($val['kabupaten_kota'] != '-') {
                                            $tanggal_mulai = $tahun . "-01-01";
                                            $tanggal_selesai = $tahun . "-12-31";
                                            $temp = $this->Kegiatan_model->view_kegiatan("?tanggal_awal=$tanggal_mulai&tanggal_akhir=$tanggal_selesai&id_kabupaten_kota=" . $val['id_kabupaten_kota'], $this->session->userdata('token'));
                                            if ($temp != null) {
                                                if ($temp['status'] == "Success") {
                                                    if (count($temp['data']) > 0) {
                                                        $totalPeserta = 0;
                                                        foreach ($temp['data'] as $val2) {
                                                            $totalPeserta = $totalPeserta + $val2['jumlah_peserta'];
                                                        }
                                                        $data['kegiatan']['grafik'][$index]['total_peserta'] = $totalPeserta;
                                                        $data['kegiatan']['grafik'][$index]['kabupaten_kota'] = $val['kabupaten_kota'];
                                                        $data['kegiatan']['grafik'][$index]['jumlah_kegiatan'] = count($temp['data']);
                                                        $index++;
                                                    }
                                                }
                                            }
                                        }
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
                        }
                    } else {
                        $callback = array(
                            'data' => []
                        );
                    }
                }
            }
            header('Content-Type: application/json');
            echo json_encode($callback);
        } else {
            redirect('pupr/login');
        }
    }
}
