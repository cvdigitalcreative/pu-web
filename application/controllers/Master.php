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

            if ($null)
                $this->load->view('error_page');
            else
                $this->load->view('administrator/master_data', $data);
        } else
            redirect('pupr/login');
    }

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

    public function dataKotaKegiatan()
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

                        $no_kota = 1;
                        $index_kota = 0;
                        foreach ($data['provinsi'] as $val) {
                            foreach ($this->Common_model->view_kabupaten_kota($val['id_provinsi'], $this->session->userdata('token'))['data'] as $val2) {
                                $data['kota'][$index_kota] = $val2;
                                $data['kota'][$index_kota]['no_kota'] = $no_kota;
                                $index_kota++;
                                $no_kota++;
                            }
                        }
                        $callback = array(
                            'data' => $data['kota']
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
}
