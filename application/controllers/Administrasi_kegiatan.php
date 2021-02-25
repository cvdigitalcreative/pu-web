<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrasi_kegiatan extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Administrasi_Kegiatan_model');
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

            $data['administrasi_kegiatan'] = $this->Administrasi_Kegiatan_model->view_administrasi_kegiatan($this->session->userdata('token'));
            if ($data['administrasi_kegiatan'] == null)
                $null = true;
            else {
                if ($data['administrasi_kegiatan']['status'] == "Success") {
                    $data['total_administrasi_kegiatan'] = count($data['administrasi_kegiatan']['data']);
                } else {
                    $data['total_administrasi_kegiatan'] = 0;
                    $this->session->set_flashdata('APImessage', $data['administrasi_kegiatan']['message']);
                }
            }

            if ($null)
                $this->load->view('error_page');
            else
                $this->load->view("administrator/administration", $data);
        } else
            redirect("pupr/login");
    }

    public function dataSeluruh()
    {
        if ($this->session->userdata('logged_in') == true) {
            $data['administrasi_kegiatan'] = $this->Administrasi_Kegiatan_model->view_administrasi_kegiatan($this->session->userdata('token'));
            if ($data['administrasi_kegiatan'] == null) {
                $callback = array(
                    'data' => []
                );
            } else {
                if ($data['administrasi_kegiatan']['status'] == "Success") {
                    if (count($data['administrasi_kegiatan']['data']) > 0) {
                        $data['administrasi_kegiatan'] = $data['administrasi_kegiatan']['data'];

                        $indexAdministrasiKegiatan = 0;
                        $noAdministrasiKegiatan = 1;
                        foreach ($data['administrasi_kegiatan'] as $val) {
                            $data['administrasi_kegiatan'][$indexAdministrasiKegiatan]['no_administrasi_kegiatan'] = $noAdministrasiKegiatan;

                            $indexAdministrasiKegiatan++;
                            $noAdministrasiKegiatan++;
                        }
                        $callback = array(
                            'data' => $data['administrasi_kegiatan']
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

    public function tambah_administrasi_kegiatan_action()
    {
        if ($this->session->userdata('logged_in') == true) {
            $judul_administrasi_kegiatan = $this->input->post('judul_administrasi_kegiatan');
            $deskripsi_administrasi_kegiatan = $this->input->post('deskripsi_administrasi_kegiatan');
            $file_administrasi_kegiatan = new \CurlFile($_FILES['file_administrasi_kegiatan']['tmp_name'], $_FILES['file_administrasi_kegiatan']['type'], $_FILES['file_administrasi_kegiatan']['name']);

            $tambah_administrasi_kegiatan = $this->Administrasi_Kegiatan_model->add_administrasi_kegiatan(
                $judul_administrasi_kegiatan,
                $deskripsi_administrasi_kegiatan,
                $file_administrasi_kegiatan,
                $this->session->userdata('token')
            );

            if ($tambah_administrasi_kegiatan == null) {
                $this->load->view('error_page');
            }
            if ($tambah_administrasi_kegiatan['status'] == "Success") {
                $this->session->set_flashdata('success', $tambah_administrasi_kegiatan['message']);
                redirect("pupr/administration");
            } else {
                $this->session->set_flashdata('APImessage', $tambah_administrasi_kegiatan['message']);
                redirect("pupr/administration");
            }
        } else {
            redirect("pupr/login");
        }
    }

    public function edit_administrasi_kegiatan_action($id_administrasi_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $judul_administrasi_kegiatan = $this->input->post('judul_administrasi_kegiatan');
            $deskripsi_administrasi_kegiatan = $this->input->post('deskripsi_administrasi_kegiatan');
            if ($_FILES['file_administrasi_kegiatan']['size'] > 0)
                $file_administrasi_kegiatan = new \CurlFile($_FILES['file_administrasi_kegiatan']['tmp_name'], $_FILES['file_administrasi_kegiatan']['type'], $_FILES['file_administrasi_kegiatan']['name']);
            else
                $file_administrasi_kegiatan = null;

            $edit_administrasi_kegiatan = $this->Administrasi_Kegiatan_model->edit_administrasi_kegiatan(
                $judul_administrasi_kegiatan,
                $deskripsi_administrasi_kegiatan,
                $file_administrasi_kegiatan,
                $id_administrasi_kegiatan,
                $this->session->userdata('token')
            );

            if ($edit_administrasi_kegiatan == null) {
                $this->load->view('error_page');
            }
            if ($edit_administrasi_kegiatan['status'] == "Success") {
                $this->session->set_flashdata('success', $edit_administrasi_kegiatan['message']);
                redirect("pupr/administration");
            } else {
                $this->session->set_flashdata('APImessage', $edit_administrasi_kegiatan['message']);
                redirect("pupr/administration");
            }
        } else {
            redirect("pupr/login");
        }
    }

    public function delete_administrasi_kegiatan($id_administrasi_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete_administrasi_kegiatan = $this->Administrasi_Kegiatan_model->delete_administrasi_kegiatan($id_administrasi_kegiatan, $this->session->userdata('token'));
            if ($delete_administrasi_kegiatan == null) {
                $this->load->view('error_page');
            } else {
                if ($delete_administrasi_kegiatan['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete_administrasi_kegiatan['message']);
                    redirect("pupr/administration");
                } else {
                    $this->session->set_flashdata('APImessage', $delete_administrasi_kegiatan['message']);
                    redirect("pupr/administration");
                }
            }
        } else
            redirect("pupr/login");
    }

    public function download_response($response)
    {
        header('Content-Type: application/json');
        $myArray = ['response' => $response];
        echo json_encode($myArray);
    }

    public function download($id_administrasi_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $this->load->helper('download');
            $administrasi_kegiatan = $this->Administrasi_Kegiatan_model->view_administrasi_kegiatan_detail($id_administrasi_kegiatan, $this->session->userdata('token'));
            if ($administrasi_kegiatan == null)
                $this->download_response(false);
            else {
                if ($administrasi_kegiatan['status'] == "Success") {

                    function curl($url_file, $token)
                    {
                        $dataHeader = ['Authorization: Bearer ' . $token];
                        $curl = curl_init();
                        $url = $url_file;
                        curl_setopt($curl, CURLOPT_URL, $url);
                        curl_setopt($curl, CURLOPT_HTTPHEADER, $dataHeader);
                        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
                        $result = curl_exec($curl);
                        curl_close($curl);

                        return json_decode($result, TRUE);
                    }

                    if (strtolower(curl($administrasi_kegiatan['data']['file_administrasi_kegiatan'], $this->session->userdata('token'))['message']) == "not found") {
                        $this->download_response(false);
                    } else {
                        $data = file_get_contents($administrasi_kegiatan['data']['file_administrasi_kegiatan']);
                        force_download($administrasi_kegiatan['data']['file_administrasi_kegiatan'], $data);
                        $this->download_response(true);
                    }
                } else {
                    $this->download_response(false);
                }
            }
        } else
            redirect('pupr/login');
    }
}
