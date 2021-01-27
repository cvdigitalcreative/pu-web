<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Common_model');
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

            // $data['provinsi'] = $this->Common_model->view_provinsi($this->session->userdata('token'));
            // if ($data['provinsi'] == null)
            //     $null = true;
            // else {
            //     if ($data['provinsi']['status'] = "Success") {
            //         $data['provinsi'] = $data['provinsi']['data'];

            //         $indexTempKota = 0;
            //         $indexKota = 0;
            //         $indexTempKecamatan = 0;
            //         $indexKecamatan = 0;
            //         $indexTempKelurahan = 0;
            //         $indexKelurahan = 0;
            //         foreach ($data['provinsi'] as $val) {
            //             $dataKotaTemp[$indexTempKota] = $this->Common_model->view_kabupaten_kota($val['id_provinsi'], $this->session->userdata('token'));
            //             if ($dataKotaTemp[$indexTempKota] == null)
            //                 $null = true;
            //             else {
            //                 if ($dataKotaTemp[$indexTempKota]['status'] == "Success") {
            //                     $dataKotaTemp[$indexTempKota] = $dataKotaTemp[$indexTempKota]['data'];
            //                     foreach ($dataKotaTemp[$indexTempKota] as $val2) {
            //                         $data['kota'][$indexKota] = $val2;
            //                         $indexKota++;
            //                     }
            //                     foreach ($data['kota'] as $val2) {
            //                         $dataKecamatanTemp[$indexTempKecamatan] = $this->Common_model->view_kecamatan($val2['id_kabupaten_kota'], $this->session->userdata('token'));
            //                         if ($dataKecamatanTemp[$indexTempKecamatan] == null)
            //                             $null = true;
            //                         else {
            //                             if ($dataKecamatanTemp[$indexTempKecamatan]['status'] == "Success") {
            //                                 $dataKecamatanTemp[$indexTempKecamatan] = $dataKecamatanTemp[$indexTempKecamatan]['data'];
            //                                 foreach ($dataKecamatanTemp[$indexTempKecamatan] as $val3) {
            //                                     $data['kecamatan'][$indexKecamatan] = $val3;
            //                                     $indexKecamatan++;
            //                                 }
            //                                 foreach ($data['kota'] as $val2) {
            //                                 }
            //                             } else {
            //                                 $dataKecamatanTemp[$indexTempKecamatan] = null;
            //                             }
            //                         }
            //                         $indexTempKecamatan++;
            //                     }
            //                 } else {
            //                     $dataKotaTemp[$indexTempKota] = null;
            //                 }
            //             }
            //             $indexTempKota++;
            //         }
            //     } else {
            //     }
            // }

            if ($null)
                $this->load->view('error_page');
            else
                $this->load->view('administrator/master_data', $data);
        } else
            redirect('pupr/login');
    }

    // =========================== Status Perkawinan ============================
    public function dataStatusPerkawinan()
    {
        if ($this->session->userdata('logged_in') == true) {
            $data['status_perkawinan'] = $this->Common_model->view_status_perkawinan($this->session->userdata('token'));
            if ($data['status_perkawinan'] == null) {
                $callback = array(
                    'data' => []
                );
            } else {
                if ($data['status_perkawinan']['status'] == "Success") {
                    if (count($data['status_perkawinan']['data']) > 0) {
                        $data['status_perkawinan'] = $data['status_perkawinan']['data'];

                        $indexStatusPerkawinan = 0;
                        $noStatusPerkawinan = 1;
                        foreach ($data['status_perkawinan'] as $val) {
                            $data['status_perkawinan'][$indexStatusPerkawinan]['no_status_perkawinan'] = $noStatusPerkawinan;

                            $indexStatusPerkawinan++;
                            $noStatusPerkawinan++;
                        }
                        $callback = array(
                            'data' => $data['status_perkawinan']
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

    public function tambah_status_perkawinan_action()
    {
        if ($this->session->userdata('logged_in') == true) {
            $status_perkawinan = $this->input->post('nama_status_perkawinan');
            $add = $this->Common_model->add_status_perkawinan($status_perkawinan, $this->session->userdata('token'));
            if ($add == null)
                $this->load->view('error_page');
            else {
                if ($add['status'] == "Success") {
                    $this->session->set_flashdata('success', $add['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $add['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function edit_status_perkawinan_action($id_status_perkawinan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $status_perkawinan = $this->input->post('edit_status_perkawinan');
            $edit = $this->Common_model->edit_status_perkawinan($status_perkawinan, $id_status_perkawinan, $this->session->userdata('token'));
            if ($edit == null)
                $this->load->view('error_page');
            else {
                if ($edit['status'] == "Success") {
                    $this->session->set_flashdata('success', $edit['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $edit['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function delete_status_perkawinan_action($id_status_perkawinan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete = $this->Common_model->delete_status_perkawinan($id_status_perkawinan, $this->session->userdata('token'));
            if ($delete == null)
                $this->load->view('error_page');
            else {
                if ($delete['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $delete['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    // =========================== Status Rumah ============================
    public function dataStatusRumah()
    {
        if ($this->session->userdata('logged_in') == true) {
            $data['status_rumah'] = $this->Common_model->view_status_rumah($this->session->userdata('token'));
            if ($data['status_rumah'] == null) {
                $callback = array(
                    'data' => []
                );
            } else {
                if ($data['status_rumah']['status'] == "Success") {
                    if (count($data['status_rumah']['data']) > 0) {
                        $data['status_rumah'] = $data['status_rumah']['data'];

                        $indexStatusRumah = 0;
                        $noStatusRumah = 1;
                        foreach ($data['status_rumah'] as $val) {
                            $data['status_rumah'][$indexStatusRumah]['no_status_rumah'] = $noStatusRumah;

                            $indexStatusRumah++;
                            $noStatusRumah++;
                        }
                        $callback = array(
                            'data' => $data['status_rumah']
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

    public function tambah_status_rumah_action()
    {
        if ($this->session->userdata('logged_in') == true) {
            $status_rumah = $this->input->post('nama_status_rumah');
            $add = $this->Common_model->add_status_rumah($status_rumah, $this->session->userdata('token'));
            if ($add == null)
                $this->load->view('error_page');
            else {
                if ($add['status'] == "Success") {
                    $this->session->set_flashdata('success', $add['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $add['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function edit_status_rumah_action($id_status_rumah)
    {
        if ($this->session->userdata('logged_in') == true) {
            $status_rumah = $this->input->post('edit_status_rumah');
            $edit = $this->Common_model->edit_status_rumah($status_rumah, $id_status_rumah, $this->session->userdata('token'));
            if ($edit == null)
                $this->load->view('error_page');
            else {
                if ($edit['status'] == "Success") {
                    $this->session->set_flashdata('success', $edit['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $edit['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function delete_status_rumah_action($id_status_rumah)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete = $this->Common_model->delete_status_rumah($id_status_rumah, $this->session->userdata('token'));
            if ($delete == null)
                $this->load->view('error_page');
            else {
                if ($delete['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $delete['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    // =========================== Status Perkawinan ============================
    public function dataPendidikan()
    {
        if ($this->session->userdata('logged_in') == true) {
            $data['pendidikan'] = $this->Common_model->view_pendidikan($this->session->userdata('token'));
            if ($data['pendidikan'] == null) {
                $callback = array(
                    'data' => []
                );
            } else {
                if ($data['pendidikan']['status'] == "Success") {
                    if (count($data['pendidikan']['data']) > 0) {
                        $data['pendidikan'] = $data['pendidikan']['data'];

                        $indexStatusPendidikan = 0;
                        $noStatusPendidikan = 1;
                        foreach ($data['pendidikan'] as $val) {
                            $data['pendidikan'][$indexStatusPendidikan]['no_pendidikan'] = $noStatusPendidikan;

                            $indexStatusPendidikan++;
                            $noStatusPendidikan++;
                        }
                        $callback = array(
                            'data' => $data['pendidikan']
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

    public function tambah_pendidikan_action()
    {
        if ($this->session->userdata('logged_in') == true) {
            $pendidikan = $this->input->post('nama_pendidikan');
            $add = $this->Common_model->add_pendidikan($pendidikan, $this->session->userdata('token'));
            if ($add == null)
                $this->load->view('error_page');
            else {
                if ($add['status'] == "Success") {
                    $this->session->set_flashdata('success', $add['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $add['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function edit_pendidikan_action($id_pendidikan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $pendidikan = $this->input->post('edit_pendidikan');
            $edit = $this->Common_model->edit_pendidikan($pendidikan, $id_pendidikan, $this->session->userdata('token'));
            if ($edit == null)
                $this->load->view('error_page');
            else {
                if ($edit['status'] == "Success") {
                    $this->session->set_flashdata('success', $edit['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $edit['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function delete_pendidikan_action($id_pendidikan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete = $this->Common_model->delete_pendidikan($id_pendidikan, $this->session->userdata('token'));
            if ($delete == null)
                $this->load->view('error_page');
            else {
                if ($delete['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $delete['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    // =========================== Jabker ============================
    public function dataJabker()
    {
        if ($this->session->userdata('logged_in') == true) {
            $data['jabker'] = $this->Common_model->view_jabker($this->session->userdata('token'));
            if ($data['jabker'] == null) {
                $callback = array(
                    'data' => []
                );
            } else {
                if ($data['jabker']['status'] == "Success") {
                    if (count($data['jabker']['data']) > 0) {
                        $data['jabker'] = $data['jabker']['data'];

                        $indexjabker = 0;
                        $nojabker = 1;
                        foreach ($data['jabker'] as $val) {
                            $data['jabker'][$indexjabker]['no_jabker'] = $nojabker;

                            $indexjabker++;
                            $nojabker++;
                        }
                        $callback = array(
                            'data' => $data['jabker']
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

    public function tambah_jabker_action()
    {
        if ($this->session->userdata('logged_in') == true) {
            $jabker = $this->input->post('nama_jabatan_kerja');
            $add = $this->Common_model->add_jabker($jabker, $this->session->userdata('token'));
            if ($add == null)
                $this->load->view('error_page');
            else {
                if ($add['status'] == "Success") {
                    $this->session->set_flashdata('success', $add['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $add['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function edit_jabker_action($id_jabker)
    {
        if ($this->session->userdata('logged_in') == true) {
            $jabker = $this->input->post('edit_jabatan_kerja');
            $edit = $this->Common_model->edit_jabker($jabker, $id_jabker, $this->session->userdata('token'));
            if ($edit == null)
                $this->load->view('error_page');
            else {
                if ($edit['status'] == "Success") {
                    $this->session->set_flashdata('success', $edit['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $edit['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function delete_jabker_action($id_jabker)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete = $this->Common_model->delete_jabker($id_jabker, $this->session->userdata('token'));
            if ($delete == null)
                $this->load->view('error_page');
            else {
                if ($delete['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $delete['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    // =========================== Provinsi ============================
    public function dataProvinsiKegiatan()
    {
        if ($this->session->userdata('logged_in') == true) {
            $data['provinsi'] = $this->Common_model->view_provinsi($this->session->userdata('token'));
            if ($data['provinsi'] == null) {
                $callback = array(
                    'data' => []
                );
            } else {
                if ($data['provinsi']['status'] == "Success") {
                    if (count($data['provinsi']['data']) > 0) {
                        $data['provinsi'] = $data['provinsi']['data'];

                        $indexjenis = 0;
                        $nojenis = 1;
                        foreach ($data['provinsi'] as $val) {
                            $data['provinsi'][$indexjenis]['no_provinsi'] = $nojenis;

                            $indexjenis++;
                            $nojenis++;
                        }
                        $callback = array(
                            'data' => $data['provinsi']
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

    public function tambah_provinsi_action()
    {
        if ($this->session->userdata('logged_in') == true) {
            $provinsi = $this->input->post('nama_provinsi');
            $add = $this->Common_model->add_provinsi($provinsi, $this->session->userdata('token'));
            if ($add == null)
                $this->load->view('error_page');
            else {
                if ($add['status'] == "Success") {
                    $this->session->set_flashdata('success', $add['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $add['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function edit_provinsi_action($id_provinsi)
    {
        if ($this->session->userdata('logged_in') == true) {
            $provinsi = $this->input->post('edit_nama_provinsi');
            $edit = $this->Common_model->edit_provinsi($provinsi, $id_provinsi, $this->session->userdata('token'));
            if ($edit == null)
                $this->load->view('error_page');
            else {
                if ($edit['status'] == "Success") {
                    $this->session->set_flashdata('success', $edit['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $edit['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function delete_provinsi_action($id_provinsi)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete = $this->Common_model->delete_provinsi($id_provinsi, $this->session->userdata('token'));
            if ($delete == null)
                $this->load->view('error_page');
            else {
                if ($delete['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $delete['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    // ======================================= Kota Kegiatan ===============================
    public function dataKotaKegiatan()
    {
        if ($this->session->userdata('logged_in') == true) {
            $data['kabupaten_kota'] = $this->Common_model->view_kabupaten_kota_all($this->session->userdata('token'));
            if ($data['kabupaten_kota'] == null) {
                $callback = array(
                    'data' => []
                );
            } else {
                if ($data['kabupaten_kota']['status'] == "Success") {
                    if (count($data['kabupaten_kota']['data']) > 0) {
                        $data['kabupaten_kota'] = $data['kabupaten_kota']['data'];

                        $indexjenis = 0;
                        $nojenis = 1;
                        foreach ($data['kabupaten_kota'] as $val) {
                            $data['kabupaten_kota'][$indexjenis]['no_kabupaten_kota'] = $nojenis;

                            $indexjenis++;
                            $nojenis++;
                        }
                        $callback = array(
                            'data' => $data['kabupaten_kota']
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

    public function tambah_kabupaten_kota_action()
    {
        if ($this->session->userdata('logged_in') == true) {
            $id_provinsi = $this->input->post('id_provinsi');
            $kabupaten_kota = $this->input->post('nama_kabupaten_kota');
            $add = $this->Common_model->add_kabupaten_kota($kabupaten_kota, $id_provinsi, $this->session->userdata('token'));
            if ($add == null)
                $this->load->view('error_page');
            else {
                if ($add['status'] == "Success") {
                    $this->session->set_flashdata('success', $add['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $add['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function edit_kabupaten_kota_action($id_kabupaten_kota)
    {
        if ($this->session->userdata('logged_in') == true) {
            $kabupaten_kota = $this->input->post('nama_kabupaten_kota');
            $edit = $this->Common_model->edit_kabupaten_kota($kabupaten_kota, $id_kabupaten_kota, $this->session->userdata('token'));
            if ($edit == null)
                $this->load->view('error_page');
            else {
                if ($edit['status'] == "Success") {
                    $this->session->set_flashdata('success', $edit['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $edit['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function delete_kabupaten_kota_action($id_kabupaten_kota)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete = $this->Common_model->delete_kabupaten_kota($id_kabupaten_kota, $this->session->userdata('token'));
            if ($delete == null)
                $this->load->view('error_page');
            else {
                if ($delete['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $delete['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    // ======================================= Kecamatan ===============================
    public function dataKecamatan()
    {
        if ($this->session->userdata('logged_in') == true) {
            $data['provinsi'] = $this->Common_model->view_provinsi($this->session->userdata('token'));
            if ($data['provinsi'] == null) {
                $callback = array(
                    'data' => []
                );
            } else {
                if ($data['provinsi']['status'] == "Success") {
                    if (count($data['provinsi']['data']) > 0) {
                        $data['provinsi'] = $data['provinsi']['data'];

                        $no_kecamatan = 1;
                        $index_kecamatan = 0;
                        foreach ($data['provinsi'] as $val) {
                            foreach ($this->Common_model->view_kabupaten_kota($val['id_provinsi'], $this->session->userdata('token'))['data'] as $val2) {
                                foreach ($this->Common_model->view_kecamatan($val2['id_kabupaten_kota'], $this->session->userdata('token'))['data'] as $val3) {
                                    $data['kecamatan'][$index_kecamatan] = $val3;
                                    $data['kecamatan'][$index_kecamatan]['no_kecamatan'] = $no_kecamatan;
                                }
                                $index_kecamatan++;
                                $no_kecamatan++;
                            }
                        }

                        $callback = array(
                            'data' => $data['kecamatan']
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

    public function tambah_kecamatan_action()
    {
        if ($this->session->userdata('logged_in') == true) {
            $id_kabupaten_kota = $this->input->post('id_kabupaten_kota');
            $kecamatan = $this->input->post('nama_kecamatan');
            $add = $this->Common_model->add_kecamatan($kecamatan, $id_kabupaten_kota, $this->session->userdata('token'));
            if ($add == null)
                $this->load->view('error_page');
            else {
                if ($add['status'] == "Success") {
                    $this->session->set_flashdata('success', $add['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $add['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function edit_kecamatan_action($id_kecamatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $kecamatan = $this->input->post('nama_kecamatan');
            $edit = $this->Common_model->edit_kecamatan($kecamatan, $id_kecamatan, $this->session->userdata('token'));
            if ($edit == null)
                $this->load->view('error_page');
            else {
                if ($edit['status'] == "Success") {
                    $this->session->set_flashdata('success', $edit['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $edit['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function delete_kecamatan_action($id_kecamatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete = $this->Common_model->delete_kecamatan($id_kecamatan, $this->session->userdata('token'));
            if ($delete == null)
                $this->load->view('error_page');
            else {
                if ($delete['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $delete['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    // ======================================= Kelurahan Desa ===============================
    public function dataKelurahanDesa()
    {
        if ($this->session->userdata('logged_in') == true) {
            $data['provinsi'] = $this->Common_model->view_provinsi($this->session->userdata('token'));
            if ($data['provinsi'] == null) {
                $callback = array(
                    'data' => []
                );
            } else {
                if ($data['provinsi']['status'] == "Success") {
                    if (count($data['provinsi']['data']) > 0) {
                        $data['provinsi'] = $data['provinsi']['data'];

                        $no_kelurahan_desa = 1;
                        $index_kelurahan_desa = 0;
                        foreach ($data['provinsi'] as $val) {
                            foreach ($this->Common_model->view_kabupaten_kota($val['id_provinsi'], $this->session->userdata('token'))['data'] as $val2) {
                                foreach ($this->Common_model->view_kecamatan($val2['id_kabupaten_kota'], $this->session->userdata('token'))['data'] as $val3) {
                                    foreach ($this->Common_model->view_kelurahan_desa($val3['id_kecamatan'], $this->session->userdata('token'))['data'] as $val4) {
                                        $data['kelurahan_desa'][$index_kelurahan_desa] = $val4;
                                        $data['kelurahan_desa'][$index_kelurahan_desa]['no_kelurahan_desa'] = $no_kelurahan_desa;
                                    }
                                    $index_kelurahan_desa++;
                                    $no_kelurahan_desa++;
                                }
                            }
                        }

                        $callback = array(
                            'data' => $data['kelurahan_desa']
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

    public function tambah_kelurahan_desa_action()
    {
        if ($this->session->userdata('logged_in') == true) {
            $id_kecamatan = $this->input->post('id_kecamatan');
            $kelurahan_desa = $this->input->post('nama_kelurahan_desa');
            $add = $this->Common_model->add_kelurahan_desa($kelurahan_desa, $id_kecamatan, $this->session->userdata('token'));
            if ($add == null)
                $this->load->view('error_page');
            else {
                if ($add['status'] == "Success") {
                    $this->session->set_flashdata('success', $add['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $add['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function edit_kelurahan_desa_action($id_kelurahan_desa)
    {
        if ($this->session->userdata('logged_in') == true) {
            $kelurahan_desa = $this->input->post('nama_kelurahan_desa');
            $edit = $this->Common_model->edit_kelurahan_desa($kelurahan_desa, $id_kelurahan_desa, $this->session->userdata('token'));
            if ($edit == null)
                $this->load->view('error_page');
            else {
                if ($edit['status'] == "Success") {
                    $this->session->set_flashdata('success', $edit['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $edit['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function delete_kelurahan_desa_action($id_kelurahan_desa)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete = $this->Common_model->delete_kelurahan_desa($id_kelurahan_desa, $this->session->userdata('token'));
            if ($delete == null)
                $this->load->view('error_page');
            else {
                if ($delete['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $delete['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    // =========================== SKKNI SKA ============================
    public function dataSKKNISKA()
    {
        if ($this->session->userdata('logged_in') == true) {
            $data['skkni_ska'] = $this->Common_model->view_skkni_ska($this->session->userdata('token'));
            if ($data['skkni_ska'] == null) {
                $callback = array(
                    'data' => []
                );
            } else {
                if ($data['skkni_ska']['status'] == "Success") {
                    if (count($data['skkni_ska']['data']) > 0) {
                        $data['skkni_ska'] = $data['skkni_ska']['data'];

                        $indexskkni_ska = 0;
                        $noskkni_ska = 1;
                        foreach ($data['skkni_ska'] as $val) {
                            $data['skkni_ska'][$indexskkni_ska]['no_skkni_ska'] = $noskkni_ska;

                            $indexskkni_ska++;
                            $noskkni_ska++;
                        }
                        $callback = array(
                            'data' => $data['skkni_ska']
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

    public function tambah_skkni_ska_action()
    {
        if ($this->session->userdata('logged_in') == true) {
            $skkni_ska = $this->input->post('nama_skkni');
            $add = $this->Common_model->add_skkni_ska($skkni_ska, $this->session->userdata('token'));
            if ($add == null)
                $this->load->view('error_page');
            else {
                if ($add['status'] == "Success") {
                    $this->session->set_flashdata('success', $add['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $add['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function edit_skkni_ska_action($id_skkni_ska)
    {
        if ($this->session->userdata('logged_in') == true) {
            $skkni_ska = $this->input->post('edit_skkni');
            $edit = $this->Common_model->edit_skkni_ska($skkni_ska, $id_skkni_ska, $this->session->userdata('token'));
            if ($edit == null)
                $this->load->view('error_page');
            else {
                if ($edit['status'] == "Success") {
                    $this->session->set_flashdata('success', $edit['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $edit['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function delete_skkni_ska_action($id_skkni_ska)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete = $this->Common_model->delete_skkni_ska($id_skkni_ska, $this->session->userdata('token'));
            if ($delete == null)
                $this->load->view('error_page');
            else {
                if ($delete['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $delete['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    // =========================== Kategori Modul ============================
    public function dataKategoriModul()
    {
        if ($this->session->userdata('logged_in') == true) {
            $data['kategori_modul'] = $this->Common_model->view_kategori_modul($this->session->userdata('token'));
            if ($data['kategori_modul'] == null) {
                $callback = array(
                    'data' => []
                );
            } else {
                if ($data['kategori_modul']['status'] == "Success") {
                    if (count($data['kategori_modul']['data']) > 0) {
                        $data['kategori_modul'] = $data['kategori_modul']['data'];

                        $indexkategori_modul = 0;
                        $nokategori_modul = 1;
                        foreach ($data['kategori_modul'] as $val) {
                            $data['kategori_modul'][$indexkategori_modul]['no_kategori_modul'] = $nokategori_modul;

                            $indexkategori_modul++;
                            $nokategori_modul++;
                        }
                        $callback = array(
                            'data' => $data['kategori_modul']
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

    public function tambah_kategori_modul_action()
    {
        if ($this->session->userdata('logged_in') == true) {
            $kategori_modul = $this->input->post('nama_modul');
            $add = $this->Common_model->add_kategori_modul($kategori_modul, $this->session->userdata('token'));
            if ($add == null)
                $this->load->view('error_page');
            else {
                if ($add['status'] == "Success") {
                    $this->session->set_flashdata('success', $add['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $add['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function edit_kategori_modul_action($id_kategori_modul)
    {
        if ($this->session->userdata('logged_in') == true) {
            $kategori_modul = $this->input->post('edit_modul');
            $edit = $this->Common_model->edit_kategori_modul($kategori_modul, $id_kategori_modul, $this->session->userdata('token'));
            if ($edit == null)
                $this->load->view('error_page');
            else {
                if ($edit['status'] == "Success") {
                    $this->session->set_flashdata('success', $edit['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $edit['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function delete_kategori_modul_action($id_kategori_modul)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete = $this->Common_model->delete_kategori_modul($id_kategori_modul, $this->session->userdata('token'));
            if ($delete == null)
                $this->load->view('error_page');
            else {
                if ($delete['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $delete['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    // =========================== Kategori Tenaga Ahli ============================
    public function dataKategoriTenagaAhli()
    {
        if ($this->session->userdata('logged_in') == true) {
            $data['kategori_tenaga_ahli'] = $this->Common_model->view_kategori_tenaga_ahli($this->session->userdata('token'));
            if ($data['kategori_tenaga_ahli'] == null) {
                $callback = array(
                    'data' => []
                );
            } else {
                if ($data['kategori_tenaga_ahli']['status'] == "Success") {
                    if (count($data['kategori_tenaga_ahli']['data']) > 0) {
                        $data['kategori_tenaga_ahli'] = $data['kategori_tenaga_ahli']['data'];

                        $indexkategori_tenaga_ahli = 0;
                        $nokategori_tenaga_ahli = 1;
                        foreach ($data['kategori_tenaga_ahli'] as $val) {
                            $data['kategori_tenaga_ahli'][$indexkategori_tenaga_ahli]['no_kategori_tenaga_ahli'] = $nokategori_tenaga_ahli;

                            $indexkategori_tenaga_ahli++;
                            $nokategori_tenaga_ahli++;
                        }
                        $callback = array(
                            'data' => $data['kategori_tenaga_ahli']
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

    public function tambah_kategori_tenaga_ahli_action()
    {
        if ($this->session->userdata('logged_in') == true) {
            $kategori_tenaga_ahli = $this->input->post('nama_kategori_ahli');
            $add = $this->Common_model->add_kategori_tenaga_ahli($kategori_tenaga_ahli, $this->session->userdata('token'));
            if ($add == null)
                $this->load->view('error_page');
            else {
                if ($add['status'] == "Success") {
                    $this->session->set_flashdata('success', $add['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $add['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function edit_kategori_tenaga_ahli_action($id_kategori_tenaga_ahli)
    {
        if ($this->session->userdata('logged_in') == true) {
            $kategori_tenaga_ahli = $this->input->post('edit_kategori_ahli');
            $edit = $this->Common_model->edit_kategori_tenaga_ahli($kategori_tenaga_ahli, $id_kategori_tenaga_ahli, $this->session->userdata('token'));
            if ($edit == null)
                $this->load->view('error_page');
            else {
                if ($edit['status'] == "Success") {
                    $this->session->set_flashdata('success', $edit['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $edit['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function delete_kategori_tenaga_ahli_action($id_kategori_tenaga_ahli)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete = $this->Common_model->delete_kategori_tenaga_ahli($id_kategori_tenaga_ahli, $this->session->userdata('token'));
            if ($delete == null)
                $this->load->view('error_page');
            else {
                if ($delete['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $delete['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    // =========================== Status Peserta ============================
    public function dataStatusPeserta()
    {
        if ($this->session->userdata('logged_in') == true) {
            $data['status_peserta'] = $this->Common_model->view_status_peserta($this->session->userdata('token'));
            if ($data['status_peserta'] == null) {
                $callback = array(
                    'data' => []
                );
            } else {
                if ($data['status_peserta']['status'] == "Success") {
                    if (count($data['status_peserta']['data']) > 0) {
                        $data['status_peserta'] = $data['status_peserta']['data'];

                        $indexStatusPerkawinan = 0;
                        $noStatusPerkawinan = 1;
                        foreach ($data['status_peserta'] as $val) {
                            $data['status_peserta'][$indexStatusPerkawinan]['no_status_peserta'] = $noStatusPerkawinan;

                            $indexStatusPerkawinan++;
                            $noStatusPerkawinan++;
                        }
                        $callback = array(
                            'data' => $data['status_peserta']
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


    public function tambah_status_peserta_action()
    {
        if ($this->session->userdata('logged_in') == true) {
            $status_peserta = $this->input->post('nama_status_peserta');
            $add = $this->Common_model->add_status_peserta_kegiatan($status_peserta, $this->session->userdata('token'));
            if ($add == null)
                $this->load->view('error_page');
            else {
                if ($add['status'] == "Success") {
                    $this->session->set_flashdata('success', $add['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $add['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function edit_status_peserta_action($id_status_peserta)
    {
        if ($this->session->userdata('logged_in') == true) {
            $status_peserta = $this->input->post('edit_status_peserta');
            $edit = $this->Common_model->edit_status_peserta_kegiatan($status_peserta, $id_status_peserta, $this->session->userdata('token'));
            if ($edit == null)
                $this->load->view('error_page');
            else {
                if ($edit['status'] == "Success") {
                    $this->session->set_flashdata('success', $edit['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $edit['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function delete_status_peserta_action($id_status_peserta)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete = $this->Common_model->delete_status_peserta_kegiatan($id_status_peserta, $this->session->userdata('token'));
            if ($delete == null)
                $this->load->view('error_page');
            else {
                if ($delete['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $delete['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    // =========================== Status Kegiatan ============================
    public function dataStatusKegiatan()
    {
        if ($this->session->userdata('logged_in') == true) {
            $data['status_kegiatan'] = $this->Common_model->view_status_kegiatan($this->session->userdata('token'));
            if ($data['status_kegiatan'] == null) {
                $callback = array(
                    'data' => []
                );
            } else {
                if ($data['status_kegiatan']['status'] == "Success") {
                    if (count($data['status_kegiatan']['data']) > 0) {
                        $data['status_kegiatan'] = $data['status_kegiatan']['data'];

                        $indexstatus = 0;
                        $nostatus = 1;
                        foreach ($data['status_kegiatan'] as $val) {
                            $data['status_kegiatan'][$indexstatus]['no_status_kegiatan'] = $nostatus;

                            $indexstatus++;
                            $nostatus++;
                        }
                        $callback = array(
                            'data' => $data['status_kegiatan']
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

    public function tambah_status_kegiatan_action()
    {
        if ($this->session->userdata('logged_in') == true) {
            $status_kegiatan = $this->input->post('nama_status_kegiatan');
            $add = $this->Common_model->add_status_kegiatan($status_kegiatan, $this->session->userdata('token'));
            if ($add == null)
                $this->load->view('error_page');
            else {
                if ($add['status'] == "Success") {
                    $this->session->set_flashdata('success', $add['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $add['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function edit_status_kegiatan_action($id_status_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $status_kegiatan = $this->input->post('edit_status_kegiatan');
            $edit = $this->Common_model->edit_status_kegiatan($status_kegiatan, $id_status_kegiatan, $this->session->userdata('token'));
            if ($edit == null)
                $this->load->view('error_page');
            else {
                if ($edit['status'] == "Success") {
                    $this->session->set_flashdata('success', $edit['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $edit['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function delete_status_kegiatan_action($id_status_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete = $this->Common_model->delete_status_kegiatan($id_status_kegiatan, $this->session->userdata('token'));
            if ($delete == null)
                $this->load->view('error_page');
            else {
                if ($delete['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $delete['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    // =========================== Akun Kegiatan ============================
    public function dataAkunKegiatan()
    {
        if ($this->session->userdata('logged_in') == true) {
            $data['akun_kegiatan'] = $this->Common_model->view_akun_kegiatan($this->session->userdata('token'));
            if ($data['akun_kegiatan'] == null) {
                $callback = array(
                    'data' => []
                );
            } else {
                if ($data['akun_kegiatan']['status'] == "Success") {
                    if (count($data['akun_kegiatan']['data']) > 0) {
                        $data['akun_kegiatan'] = $data['akun_kegiatan']['data'];

                        $indexAkun = 0;
                        $noAkun = 1;
                        foreach ($data['akun_kegiatan'] as $val) {
                            $data['akun_kegiatan'][$indexAkun]['no_akun_kegiatan'] = $noAkun;

                            $indexAkun++;
                            $noAkun++;
                        }
                        $callback = array(
                            'data' => $data['akun_kegiatan']
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

    public function tambah_akun_kegiatan_action()
    {
        if ($this->session->userdata('logged_in') == true) {
            $akun_kegiatan = $this->input->post('nama_akun_kegiatan');
            $add = $this->Common_model->add_akun_kegiatan($akun_kegiatan, $this->session->userdata('token'));
            if ($add == null)
                $this->load->view('error_page');
            else {
                if ($add['status'] == "Success") {
                    $this->session->set_flashdata('success', $add['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $add['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function edit_akun_kegiatan_action($id_akun_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $akun_kegiatan = $this->input->post('edit_nama_akun_kegiatan');
            $edit = $this->Common_model->edit_akun_kegiatan($akun_kegiatan, $id_akun_kegiatan, $this->session->userdata('token'));
            if ($edit == null)
                $this->load->view('error_page');
            else {
                if ($edit['status'] == "Success") {
                    $this->session->set_flashdata('success', $edit['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $edit['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function delete_akun_kegiatan_action($id_akun_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete = $this->Common_model->delete_akun_kegiatan($id_akun_kegiatan, $this->session->userdata('token'));
            if ($delete == null)
                $this->load->view('error_page');
            else {
                if ($delete['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $delete['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    // =========================== Jenis Kegiatan ============================
    public function dataJenisKegiatan()
    {
        if ($this->session->userdata('logged_in') == true) {
            $data['jenis_kegiatan'] = $this->Common_model->view_jenis_kegiatan($this->session->userdata('token'));
            if ($data['jenis_kegiatan'] == null) {
                $callback = array(
                    'data' => []
                );
            } else {
                if ($data['jenis_kegiatan']['status'] == "Success") {
                    if (count($data['jenis_kegiatan']['data']) > 0) {
                        $data['jenis_kegiatan'] = $data['jenis_kegiatan']['data'];

                        $indexjenis = 0;
                        $nojenis = 1;
                        foreach ($data['jenis_kegiatan'] as $val) {
                            $data['jenis_kegiatan'][$indexjenis]['no_jenis_kegiatan'] = $nojenis;

                            $indexjenis++;
                            $nojenis++;
                        }
                        $callback = array(
                            'data' => $data['jenis_kegiatan']
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

    public function tambah_jenis_kegiatan_action()
    {
        if ($this->session->userdata('logged_in') == true) {
            $jenis_kegiatan = $this->input->post('nama_jenis_kegiatan');
            $add = $this->Common_model->add_jenis_kegiatan($jenis_kegiatan, $this->session->userdata('token'));
            if ($add == null)
                $this->load->view('error_page');
            else {
                if ($add['status'] == "Success") {
                    $this->session->set_flashdata('success', $add['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $add['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function edit_jenis_kegiatan_action($id_jenis_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $jenis_kegiatan = $this->input->post('edit_nama_jenis_kegiatan');
            $edit = $this->Common_model->edit_jenis_kegiatan($jenis_kegiatan, $id_jenis_kegiatan, $this->session->userdata('token'));
            if ($edit == null)
                $this->load->view('error_page');
            else {
                if ($edit['status'] == "Success") {
                    $this->session->set_flashdata('success', $edit['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $edit['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function delete_jenis_kegiatan_action($id_jenis_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete = $this->Common_model->delete_jenis_kegiatan($id_jenis_kegiatan, $this->session->userdata('token'));
            if ($delete == null)
                $this->load->view('error_page');
            else {
                if ($delete['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $delete['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    // =========================== status PNS ============================
    public function dataStatusPNS()
    {
        if ($this->session->userdata('logged_in') == true) {
            $data['status_pns'] = $this->Common_model->view_status_pns($this->session->userdata('token'));
            if ($data['status_pns'] == null) {
                $callback = array(
                    'data' => []
                );
            } else {
                if ($data['status_pns']['status'] == "Success") {
                    if (count($data['status_pns']['data']) > 0) {
                        $data['status_pns'] = $data['status_pns']['data'];

                        $indexstatus_pns = 0;
                        $nostatus_pns = 1;
                        foreach ($data['status_pns'] as $val) {
                            $data['status_pns'][$indexstatus_pns]['no_status_pns'] = $nostatus_pns;

                            $indexstatus_pns++;
                            $nostatus_pns++;
                        }
                        $callback = array(
                            'data' => $data['status_pns']
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

    public function tambah_status_pns_action()
    {
        if ($this->session->userdata('logged_in') == true) {
            $status_pns = $this->input->post('nama_pns');
            $add = $this->Common_model->add_status_pns($status_pns, $this->session->userdata('token'));
            if ($add == null)
                $this->load->view('error_page');
            else {
                if ($add['status'] == "Success") {
                    $this->session->set_flashdata('success', $add['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $add['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function edit_status_pns_action($id_status_pns)
    {
        if ($this->session->userdata('logged_in') == true) {
            $status_pns = $this->input->post('edit_pns');
            $edit = $this->Common_model->edit_status_pns($status_pns, $id_status_pns, $this->session->userdata('token'));
            if ($edit == null)
                $this->load->view('error_page');
            else {
                if ($edit['status'] == "Success") {
                    $this->session->set_flashdata('success', $edit['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $edit['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function delete_status_pns_action($id_status_pns)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete = $this->Common_model->delete_status_pns($id_status_pns, $this->session->userdata('token'));
            if ($delete == null)
                $this->load->view('error_page');
            else {
                if ($delete['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete['message']);
                    redirect('pupr/master');
                } else {
                    $this->session->set_flashdata('APImessage', $delete['message']);
                    redirect('pupr/master');
                }
            }
        } else
            redirect('pupr/login');
    }
}
