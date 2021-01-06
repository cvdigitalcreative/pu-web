<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku_saku extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Buku_Saku_model');
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

            $data['buku_saku'] = $this->Buku_Saku_model->view_buku_saku($this->session->userdata('token'));
            if ($data['buku_saku'] == null)
                $null = true;
            else {
                if ($data['buku_saku']['status'] == "Success") {
                    $data['buku_saku'] = $data['buku_saku']['data'];
                } else {
                    $data['buku_saku'] = null;
                    $this->session->set_flashdata('APImessage', $data['buku_saku']['message']);
                }
            }

            if ($null)
                $this->load->view('error_page');

            $this->load->view('administrator/pocketbook', $data);
        } else
            redirect("pupr/login");
    }

    public function detail($id_buku_saku)
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

            $data['buku_saku'] = $this->Buku_Saku_model->view_buku_saku_detail($id_buku_saku, $this->session->userdata('token'));
            if ($data['buku_saku'] == null)
                $null = true;
            else {
                if ($data['buku_saku']['status'] == "Success") {
                    $data['buku_saku'] = $data['buku_saku']['data'];
                } else {
                    $data['buku_saku'] = null;
                    $this->session->set_flashdata('APImessage', $data['buku_saku']['message']);
                }
            }

            if ($null)
                $this->load->view('error_page');
        } else
            redirect("pupr/login");
    }

    public function tambah_buku_saku_action()
    {
        if ($this->session->userdata('logged_in') == true) {
            $judul_buku_saku = $this->input->post('judul_buku_saku');
            $deskripsi_buku_saku = $this->input->post('deskripsi_buku_saku');
            $file_buku_saku = new \CurlFile($_FILES['file_buku_saku']['tmp_name'], $_FILES['file_buku_saku']['type'], $_FILES['file_buku_saku']['name']);

            $tambah_buku_saku = $this->Buku_Saku_model->add_buku_saku(
                $judul_buku_saku,
                $deskripsi_buku_saku,
                $file_buku_saku,
                $this->session->userdata('token')
            );

            if ($tambah_buku_saku == null) {
                $this->load->view('error_page');
            }
            if ($tambah_buku_saku['status'] == "Success") {
                $this->session->set_flashdata('success', $tambah_buku_saku['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $tambah_buku_saku['message']);
                redirect();
            }
        } else {
            redirect("pupr/login");
        }
    }

    //blm done
    public function edit_buku_saku_action($id_buku_saku)
    {
        if ($this->session->userdata('logged_in') == true) {
            $judul_buku_saku = $this->input->post('judul_buku_saku');
            $deskripsi_buku_saku = $this->input->post('deskripsi_buku_saku');
            $file_buku_saku = new \CurlFile($_FILES['file_buku_saku']['tmp_name'], $_FILES['file_buku_saku']['type'], $_FILES['file_buku_saku']['name']);

            $edit_buku_saku = $this->Buku_Saku_model->edit_buku_saku(
                $judul_buku_saku,
                $deskripsi_buku_saku,
                $file_buku_saku,
                $id_buku_saku,
                $this->session->userdata('token')
            );
            var_dump($edit_buku_saku);
            die;
            if ($edit_buku_saku == null) {
                $this->load->view('error_page');
            }
            if ($edit_buku_saku['status'] == "Success") {
                $this->session->set_flashdata('success', $edit_buku_saku['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $edit_buku_saku['message']);
                redirect();
            }
        } else {
            redirect("pupr/login");
        }
    }

    public function delete_buku_saku($id_buku_saku)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete_buku_saku = $this->Buku_Saku_model->delete_buku_saku($id_buku_saku, $this->session->userdata('token'));
            if ($delete_buku_saku == null) {
                $this->load->view('error_page');
            } else {
                if ($delete_buku_saku['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete_buku_saku['message']);
                    redirect();
                } else {
                    $this->session->set_flashdata('APImessage', $delete_buku_saku['message']);
                    redirect();
                }
            }
        } else
            redirect("pupr/login");
    }
}
