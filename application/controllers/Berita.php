<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Berita_model');
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

            $data['berita'] = $this->Berita_model->view_berita($this->session->userdata('token'));
            if ($data['berita'] == null)
                $null = true;
            else {
                if ($data['berita']['status'] == "Success") {
                    $data['total_berita'] = count($data['berita']['data']);
                } else {
                    $data['total_berita'] = 0;
                    $this->session->set_flashdata('APImessage', $data['berita']['message']);
                }
            }

            if ($null)
                $this->load->view('error_page');
            else
                $this->load->view('administrator/news', $data);
        } else
            redirect("pupr/login");
    }

    public function dataSeluruh()
    {
        if ($this->session->userdata('logged_in') == true) {
            $data['berita'] = $this->Berita_model->view_berita($this->session->userdata('token'));
            if ($data['berita'] == null) {
                $callback = array(
                    'data' => []
                );
            } else {
                if ($data['berita']['status'] == "Success") {
                    if (count($data['berita']['data']) > 0) {
                        $data['berita'] = $data['berita']['data'];

                        $indexBerita = 0;
                        $noBerita = 1;
                        foreach ($data['berita'] as $val) {
                            $data['berita'][$indexBerita]['no_berita'] = $noBerita;

                            $data['berita'][$indexBerita]['created_date_text'] = date('d M Y', strtotime($val['created_date']));
                            $data['berita'][$indexBerita]['updated_date_text'] = date('d M Y', strtotime($val['updated_date']));

                            $indexBerita++;
                            $noBerita++;
                        }
                        $callback = array(
                            'data' => $data['berita']
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

    public function tambah_berita_action()
    {
        if ($this->session->userdata('logged_in') == true) {
            $judul_berita = $this->input->post('judul_berita');
            $deskripsi_berita = $this->input->post('deskripsi_berita');
            $file_berita = new \CurlFile($_FILES['file_gambar_berita']['tmp_name'], $_FILES['file_gambar_berita']['type'], $_FILES['file_gambar_berita']['name']);

            $tambah_berita = $this->Berita_model->add_berita(
                $judul_berita,
                $deskripsi_berita,
                $file_berita,
                $this->session->userdata('token')
            );

            if ($tambah_berita == null) {
                $this->load->view('error_page');
            }
            if ($tambah_berita['status'] == "Success") {
                $this->session->set_flashdata('success', $tambah_berita['message']);
                redirect("pupr/news");
            } else {
                $this->session->set_flashdata('APImessage', $tambah_berita['message']);
                redirect("pupr/news");
            }
        } else {
            redirect("pupr/login");
        }
    }

    public function edit_berita_action($id_berita)
    {
        if ($this->session->userdata('logged_in') == true) {
            $judul_berita = $this->input->post('judul_berita');
            $deskripsi_berita = $this->input->post('deskripsi_berita');
            if ($_FILES['file_gambar_berita']['size'] == 0)
                $file_berita = null;
            else
                $file_berita = new \CurlFile($_FILES['file_gambar_berita']['tmp_name'], $_FILES['file_gambar_berita']['type'], $_FILES['file_gambar_berita']['name']);

            $edit_berita = $this->Berita_model->edit_berita(
                $judul_berita,
                $deskripsi_berita,
                $file_berita,
                $id_berita,
                $this->session->userdata('token')
            );

            if ($edit_berita == null) {
                $this->load->view('error_page');
            }
            if ($edit_berita['status'] == "Success") {
                $this->session->set_flashdata('success', $edit_berita['message']);
                redirect('pupr/news');
            } else {
                $this->session->set_flashdata('APImessage', $edit_berita['message']);
                redirect('pupr/news');
            }
        } else {
            redirect("pupr/login");
        }
    }

    public function delete_berita($id_berita)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete_berita = $this->Berita_model->delete_berita($id_berita, $this->session->userdata('token'));

            if ($delete_berita == null) {
                $this->load->view('error_page');
            } else {
                if ($delete_berita['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete_berita['message']);
                    redirect('pupr/news');
                } else {
                    $this->session->set_flashdata('APImessage', $delete_berita['message']);
                    redirect('pupr/news');
                }
            }
        } else
            redirect("pupr/login");
    }
}
