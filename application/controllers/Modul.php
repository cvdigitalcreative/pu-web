<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modul extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Modul_model');
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

            $data['modul'] = $this->Modul_model->view_modul($this->session->userdata('token'));
            if ($data['modul'] == null)
                $null = true;
            else {
                if ($data['modul']['status'] == "Success") {
                    $data['total_modul'] = count($data['modul']['data']);
                } else {
                    $data['total_modul'] = 0;
                    $this->session->set_flashdata('APImessage', $data['modul']['message']);
                }
            }

            // ===================== data for form ===================================
            $data['kategori_modul'] = $this->Common_model->view_kategori_modul($this->session->userdata('token'));
            if ($data['kategori_modul'] == null)
                $null = true;
            else {
                if ($data['kategori_modul']['status'] == "Success") {
                    $data['kategori_modul'] = $data['kategori_modul']['data'];
                } else {
                    $data['kategori_modul'] = null;
                    $this->session->set_flashdata('APImessage', $data['kategori_modul']['message']);
                }
            }


            if ($null)
                $this->load->view('error_page');
            else
                $this->load->view("administrator/modul", $data);
        } else
            redirect("pupr/login");
    }

    public function dataSeluruh()
    {
        if ($this->session->userdata('logged_in') == true) {
            $data['modul'] = $this->Modul_model->view_modul($this->session->userdata('token'));
            if ($data['modul'] == null) {
                $callback = array(
                    'data' => []
                );
            } else {
                if ($data['modul']['status'] == "Success") {
                    if (count($data['modul']['data']) > 0) {
                        $data['modul'] = $data['modul']['data'];

                        $indexBukuSaku = 0;
                        $noBukuSaku = 1;
                        foreach ($data['modul'] as $val) {
                            $data['modul'][$indexBukuSaku]['no_modul'] = $noBukuSaku;

                            $indexBukuSaku++;
                            $noBukuSaku++;
                        }
                        $callback = array(
                            'data' => $data['modul']
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

    public function detail($id_modul)
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

            $data['modul'] = $this->Modul_model->view_modul_detail($id_modul, $this->session->userdata('token'));
            if ($data['modul'] == null)
                $null = true;
            else {
                if ($data['modul']['status'] == "Success") {
                    $data['modul'] = $data['modul']['data'];
                } else {
                    $data['modul'] = null;
                    $this->session->set_flashdata('APImessage', $data['modul']['message']);
                }
            }

            if ($null)
                $this->load->view('error_page');
        } else
            redirect("pupr/login");
    }

    public function tambah_modul_action()
    {
        if ($this->session->userdata('logged_in') == true) {
            $judul_modul = $this->input->post('judul_modul');
            $deskripsi_modul = $this->input->post('deskripsi_modul');
            $id_kategori_modul = $this->input->post('id_kategori_modul');
            $file_modul = new \CurlFile($_FILES['file_modul']['tmp_name'], $_FILES['file_modul']['type'], $_FILES['file_modul']['name']);

            $tambah_modul = $this->Modul_model->add_modul(
                $judul_modul,
                $deskripsi_modul,
                $id_kategori_modul,
                $file_modul,
                $this->session->userdata('token')
            );

            if ($tambah_modul == null) {
                $this->load->view('error_page');
            }
            if ($tambah_modul['status'] == "Success") {
                $this->session->set_flashdata('success', $tambah_modul['message']);
                redirect("pupr/modul");
            } else {
                $this->session->set_flashdata('APImessage', $tambah_modul['message']);
                redirect("pupr/modul");
            }
        } else {
            redirect("pupr/login");
        }
    }

    public function edit_modul_action($id_modul)
    {
        if ($this->session->userdata('logged_in') == true) {
            $judul_modul = $this->input->post('judul_modul');
            $deskripsi_modul = $this->input->post('deskripsi_modul');
            $id_kategori_modul = $this->input->post('id_kategori_modul');
            if ($_FILES['file_modul']['size'] > 0)
                $file_modul = new \CurlFile($_FILES['file_modul']['tmp_name'], $_FILES['file_modul']['type'], $_FILES['file_modul']['name']);
            else
                $file_modul = null;

            $edit_modul = $this->Modul_model->edit_modul(
                $judul_modul,
                $deskripsi_modul,
                $id_kategori_modul,
                $file_modul,
                $id_modul,
                $this->session->userdata('token')
            );

            if ($edit_modul == null) {
                $this->load->view('error_page');
            }
            if ($edit_modul['status'] == "Success") {
                $this->session->set_flashdata('success', $edit_modul['message']);
                redirect("pupr/modul");
            } else {
                $this->session->set_flashdata('APImessage', $edit_modul['message']);
                redirect("pupr/modul");
            }
        } else {
            redirect("pupr/login");
        }
    }

    public function delete_modul($id_modul)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete_modul = $this->Modul_model->delete_modul($id_modul, $this->session->userdata('token'));
            if ($delete_modul == null) {
                $this->load->view('error_page');
            } else {
                if ($delete_modul['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete_modul['message']);
                    redirect("pupr/modul");
                } else {
                    $this->session->set_flashdata('APImessage', $delete_modul['message']);
                    redirect("pupr/modul");
                }
            }
        } else
            redirect("pupr/login");
    }

    public function download($id_modul)
    {
        if ($this->session->userdata('logged_in') == true) {
            $this->load->helper('download');
            $modul = $this->Modul_model->view_modul_detail($id_modul, $this->session->userdata('token'));
            if ($modul == null)
                $this->load->view('error_page');
            else {
                if ($modul['status'] == "Success") {
                    $data = file_get_contents($modul['data']['file_modul']);
                    force_download($modul['data']['file_modul'], $data);
                } else {
                    $this->session->flashdata('APImessage', $modul['message']);
                    redirect('pupr/skkni');
                }
            }
        } else
            redirect('pupr/login');
    }
}
