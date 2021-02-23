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

    public function dataTenagaAhli($tahun)
    {
        if ($this->session->userdata('logged_in') == true) {
            $data['dashboard'] = $this->Dashboard_model->view_dashboard(2, $tahun, $this->session->userdata('token'));
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

                header('Content-Type: application/json');
                echo json_encode($callback);
            }
        } else {
            redirect('pupr/login');
        }
    }

    public function dataPeserta($tahun)
    {
        if ($this->session->userdata('logged_in') == true) {
            $data['dashboard'] = $this->Dashboard_model->view_dashboard(1, $tahun, $this->session->userdata('token'));
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

                header('Content-Type: application/json');
                echo json_encode($callback);
            }
        } else {
            redirect('pupr/login');
        }
    }

    public function dataTenagaTerampil($tahun)
    {
        if ($this->session->userdata('logged_in') == true) {
            $data['dashboard'] = $this->Dashboard_model->view_dashboard(3, $tahun, $this->session->userdata('token'));
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

                header('Content-Type: application/json');
                echo json_encode($callback);
            }
        } else {
            redirect('pupr/login');
        }
    }

    public function dataKegiatan($tahun)
    {
        if ($this->session->userdata('logged_in') == true) {
            $data['dashboard'] = $this->Dashboard_model->view_dashboard(4, $tahun, $this->session->userdata('token'));
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

                header('Content-Type: application/json');
                echo json_encode($callback);
            }
        } else {
            redirect('pupr/login');
        }
    }

    public function dataKegiatanSelesai($tahun)
    {
        if ($this->session->userdata('logged_in') == true) {
            $data['dashboard'] = $this->Dashboard_model->view_dashboard(5, $tahun, $this->session->userdata('token'));
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

                header('Content-Type: application/json');
                echo json_encode($callback);
            }
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
                            $temp = $this->Kegiatan_model->view_kegiatan("?tanggal_awal=$tanggal_mulai&tanggal_akhir=$tanggal_selesai&status=" . $val['id_status_kegiatan'], $tahun, $this->session->userdata('token'));
                            if ($temp == null) {
                                $data['kegiatan']['grafik'][$index]['status_kegiatan'] = $val['status_kegiatan'];
                                $data['kegiatan']['grafik'][$index]['jumlah_kegiatan'] = 0;
                            } else {
                                if ($temp['status'] == "Success") {
                                    if (count($temp['data']) > 0) {
                                        $data['kegiatan']['grafik'][$index]['status_kegiatan'] = $val['status_kegiatan'];
                                        $data['kegiatan']['grafik'][$index]['jumlah_kegiatan'] = count($temp['data']);
                                    } else {
                                        $data['kegiatan']['grafik'][$index]['status_kegiatan'] = $val['status_kegiatan'];
                                        $data['kegiatan']['grafik'][$index]['jumlah_kegiatan'] = 0;
                                    }
                                } else {
                                    $data['kegiatan']['grafik'][$index]['status_kegiatan'] = $val['status_kegiatan'];
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
                header('Content-Type: application/json');
                echo json_encode($callback);
            }
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
                                $temp = $this->Kegiatan_model->view_kegiatan("?tanggal_awal=$tanggal_mulai&tanggal_akhir=$tanggal_selesai&jenis=" . $val['id_jenis_kegiatan'], $tahun, $this->session->userdata('token'));
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
                header('Content-Type: application/json');
                echo json_encode($callback);
            }
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
                                $temp = $this->Kegiatan_model->view_kegiatan("?tanggal_awal=$tanggal_mulai&tanggal_akhir=$tanggal_selesai&id_provinsi=" . $val['id_provinsi'], $tahun, $this->session->userdata('token'));
                                if ($temp == null) {
                                    $data['kegiatan']['grafik'][$index]['provinsi'] = $val['provinsi'];
                                    $data['kegiatan']['grafik'][$index]['jumlah_kegiatan'] = 0;
                                } else {
                                    if ($temp['status'] == "Success") {
                                        if (count($temp['data']) > 0) {
                                            $data['kegiatan']['grafik'][$index]['provinsi'] = $val['provinsi'];
                                            $data['kegiatan']['grafik'][$index]['jumlah_kegiatan'] = count($temp['data']);
                                        } else {
                                            $data['kegiatan']['grafik'][$index]['provinsi'] = $val['provinsi'];
                                            $data['kegiatan']['grafik'][$index]['jumlah_kegiatan'] = 0;
                                        }
                                    } else {
                                        $data['kegiatan']['grafik'][$index]['provinsi'] = $val['provinsi'];
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
                header('Content-Type: application/json');
                echo json_encode($callback);
            }
        } else {
            redirect('pupr/login');
        }
    }
}
