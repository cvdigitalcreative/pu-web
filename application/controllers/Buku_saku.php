<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku_saku extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Buku_Saku_model');
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

            $data['buku_saku'] = $this->Buku_Saku_model->view_buku_saku($this->session->userdata('token'));
            if ($data['buku_saku'] == null)
                $null = true;
            else {
                if ($data['buku_saku']['status'] == "Success") {
                    $data['total_buku_saku'] = count($data['buku_saku']['data']);
                } else {
                    $data['total_buku_saku'] = 0;
                    $this->session->set_flashdata('APImessage', $data['buku_saku']['message']);
                }
            }

            if ($null)
                $this->load->view('error_page');
            else
                $this->load->view('administrator/pocketbook', $data);
        } else
            redirect("pupr/login");
    }

    public function dataSeluruh()
    {
        if ($this->session->userdata('logged_in') == true) {
            $data['buku_saku'] = $this->Buku_Saku_model->view_buku_saku($this->session->userdata('token'));
            if ($data['buku_saku'] == null) {
                $callback = array(
                    'data' => []
                );
            } else {
                if ($data['buku_saku']['status'] == "Success") {
                    if (count($data['buku_saku']['data']) > 0) {
                        $data['buku_saku'] = $data['buku_saku']['data'];

                        $indexBukuSaku = 0;
                        $noBukuSaku = 1;
                        foreach ($data['buku_saku'] as $val) {
                            $data['buku_saku'][$indexBukuSaku]['no_buku_saku'] = $noBukuSaku;

                            $indexBukuSaku++;
                            $noBukuSaku++;
                        }
                        $callback = array(
                            'data' => $data['buku_saku']
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
                redirect("pupr/pocketbook");
            } else {
                $this->session->set_flashdata('APImessage', $tambah_buku_saku['message']);
                redirect("pupr/pocketbook");
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
            if ($_FILES['file_buku_saku']['size'] > 0)
                $file_buku_saku = new \CurlFile($_FILES['file_buku_saku']['tmp_name'], $_FILES['file_buku_saku']['type'], $_FILES['file_buku_saku']['name']);
            else
                $file_buku_saku = null;

            $edit_buku_saku = $this->Buku_Saku_model->edit_buku_saku(
                $judul_buku_saku,
                $deskripsi_buku_saku,
                $file_buku_saku,
                $id_buku_saku,
                $this->session->userdata('token')
            );

            if ($edit_buku_saku == null) {
                $this->load->view('error_page');
            }
            if ($edit_buku_saku['status'] == "Success") {
                $this->session->set_flashdata('success', $edit_buku_saku['message']);
                redirect("pupr/pocketbook");
            } else {
                $this->session->set_flashdata('APImessage', $edit_buku_saku['message']);
                redirect("pupr/pocketbook");
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
                    redirect("pupr/pocketbook");
                } else {
                    $this->session->set_flashdata('APImessage', $delete_buku_saku['message']);
                    redirect("pupr/pocketbook");
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

    public function download($id_buku_saku)
    {
        if ($this->session->userdata('logged_in') == true) {
            $this->load->helper('download');
            $buku_saku = $this->Buku_Saku_model->view_buku_saku_detail($id_buku_saku, $this->session->userdata('token'));
            if ($buku_saku == null)
                $this->download_response(false);
            else {
                if ($buku_saku['status'] == "Success") {

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

                    if (strtolower(curl($buku_saku['data']['file_buku_saku'], $this->session->userdata('token'))['message']) == "not found") {
                        $this->download_response(false);
                    } else {
                        $data = file_get_contents($buku_saku['data']['file_buku_saku']);
                        force_download($buku_saku['data']['file_buku_saku'], $data);
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
