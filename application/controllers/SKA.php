<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SKA extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('SKA_model');
        $this->load->model('Common_model');
        $this->load->model('User_model');

        if ($this->session->userdata('id_role') == 3) {
            $this->session->set_flashdata('APImessage', "Akses gagal. Hanya administrator yang dapat mengakses website ini");
            redirect('pupr/login');
        }
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

            $data['ska'] = $this->SKA_model->view_ska($this->session->userdata('token'));
            if ($data['ska'] == null)
                $null = true;
            else {
                if ($data['ska']['status'] == "Success") {
                    $data['total_ska'] = count($data['ska']['data']);
                } else {
                    $data['total_ska'] = 0;
                    $this->session->set_flashdata('APImessage', $data['ska']['message']);
                }
            }

            // ===================== data for form =========================
            $data['kategori_ska'] = $this->Common_model->view_skkni_ska($this->session->userdata('token'));
            if ($data['kategori_ska'] == null)
                $null = true;
            else {
                if ($data['kategori_ska']['status'] == "Success") {
                    $data['kategori_ska'] = $data['kategori_ska']['data'];
                } else {
                    $data['kategori_ska'] = null;
                    $this->session->set_flashdata('APImessage', $data['kategori_ska']['message']);
                }
            }

            if ($null)
                $this->load->view('error_page');
            else {
                $this->load->view("administrator/skkni", $data);
            }
        } else
            redirect("pupr/login");
    }

    public function dataSeluruh()
    {
        if ($this->session->userdata('logged_in') == true) {
            $data['ska'] = $this->SKA_model->view_ska($this->session->userdata('token'));
            if ($data['ska'] == null) {
                $callback = array(
                    'data' => []
                );
            } else {
                if ($data['ska']['status'] == "Success") {
                    if (count($data['ska']['data']) > 0) {
                        $data['ska'] = $data['ska']['data'];

                        $indexska = 0;
                        $noska = 1;
                        foreach ($data['ska'] as $val) {
                            $data['ska'][$indexska]['no_ska'] = $noska;

                            $indexska++;
                            $noska++;
                        }
                        $callback = array(
                            'data' => $data['ska']
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

    public function detail($id_ska)
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

            $data['ska'] = $this->SKA_model->view_ska_detail($id_ska, $this->session->userdata('token'));
            if ($data['ska'] == null)
                $null = true;
            else {
                if ($data['ska']['status'] == "Success") {
                    $data['ska'] = $data['ska']['data'];
                } else {
                    $data['ska'] = null;
                    $this->session->set_flashdata('APImessage', $data['ska']['message']);
                }
            }

            if ($null)
                $this->load->view('error_page');
        } else
            redirect("pupr/login");
    }

    public function tambah_ska_action()
    {
        if ($this->session->userdata('logged_in') == true) {
            $judul_ska = $this->input->post('judul_skkni');
            $deskripsi_ska = $this->input->post('deskripsi_skkni');
            $id_kategori_ska = $this->input->post('id_kategori_skkni');
            $file_ska = new \CurlFile($_FILES['file_skkni']['tmp_name'], $_FILES['file_skkni']['type'], $_FILES['file_skkni']['name']);

            $tambah_ska = $this->SKA_model->add_ska(
                $judul_ska,
                $deskripsi_ska,
                $id_kategori_ska,
                $file_ska,
                $this->session->userdata('token')
            );

            if ($tambah_ska == null) {
                $this->load->view('error_page');
            }
            if ($tambah_ska['status'] == "Success") {
                $this->session->set_flashdata('success', $tambah_ska['message']);
                redirect("pupr/skkni");
            } else {
                $this->session->set_flashdata('APImessage', $tambah_ska['message']);
                redirect("pupr/skkni");
            }
        } else {
            redirect("pupr/login");
        }
    }

    //blm done
    public function edit_ska_action($id_ska)
    {
        if ($this->session->userdata('logged_in') == true) {
            $judul_ska = $this->input->post('judul_skkni');
            $deskripsi_ska = $this->input->post('deskripsi_skkni');
            if ($_FILES['file_skkni']['size'] != null)
                $file_ska = new \CurlFile($_FILES['file_skkni']['tmp_name'], $_FILES['file_skkni']['type'], $_FILES['file_skkni']['name']);
            else
                $file_ska = null;

            if ($this->input->post('id_kategori_skkni') != null)
                $id_kategori_ska = $this->input->post('id_kategori_skkni');
            else {
                $id_kategori_ska = $this->input->post('id_kategori_skkni_old');
                $kategoritemp = $this->Common_model->view_skkni_ska($this->session->userdata('token'));
                foreach ($kategoritemp['data'] as $val) {
                    if ($val['kategori_skkni'] == $id_kategori_ska)
                        $id_kategori_ska = $val['id_kategori_skkni'];
                }
            }

            $edit_ska = $this->SKA_model->edit_ska(
                $judul_ska,
                $deskripsi_ska,
                $id_kategori_ska,
                $file_ska,
                $id_ska,
                $this->session->userdata('token')
            );

            if ($edit_ska == null) {
                $this->load->view('error_page');
            }
            if ($edit_ska['status'] == "Success") {
                $this->session->set_flashdata('success', $edit_ska['message']);
                redirect("pupr/skkni");
            } else {
                $this->session->set_flashdata('APImessage', $edit_ska['message']);
                redirect("pupr/skkni");
            }
        } else {
            redirect("pupr/login");
        }
    }

    public function delete_ska($id_ska)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete_ska = $this->SKA_model->delete_ska($id_ska, $this->session->userdata('token'));
            if ($delete_ska == null) {
                $this->load->view('error_page');
            } else {
                if ($delete_ska['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete_ska['message']);
                    redirect("pupr/skkni");
                } else {
                    $this->session->set_flashdata('APImessage', $delete_ska['message']);
                    redirect("pupr/skkni");
                }
            }
        } else
            redirect("pupr/login");
    }

    public function download($id_ska)
    {
        if ($this->session->userdata('logged_in') == true) {
            $this->load->helper('download');
            $SKA = $this->SKA_model->view_ska_detail($id_ska, $this->session->userdata('token'));
            if ($SKA == null)
                $this->load->view('error_page');
            else {
                if ($SKA['status'] == "Success") {
                    $data = file_get_contents($SKA['data']['file_ska']);
                    force_download($SKA['data']['file_ska'], $data);
                } else {
                    $this->session->flashdata('APImessage', $SKA['message']);
                    redirect('pupr/skkni');
                }
            }
        } else
            redirect('pupr/login');
    }
}
