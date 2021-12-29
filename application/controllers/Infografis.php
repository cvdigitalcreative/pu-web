<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Infografis extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Infografis_model');
        $this->load->model('Infografis_File_model');

        if ($this->session->userdata('id_role') == 3) {
            $this->session->set_flashdata('APImessage', "Akses gagal. Hanya administrator yang dapat mengakses website ini");
            redirect('pupr/login');
        }
    }
    public function infografis_file($id_provini, $kategori)
        {
            
                $data['infografis_file'] = $this->Infografis_File_model->data_file_infografis($id_provini, $kategori);
                
                if ($data['infografis_file'] == null) {
                    $callback = array(
                        'data' => []
                    );
                }else{
                    if($data['infografis_file']['status'] == "Success"){
                        if (count($data['infografis_file']['data']) > 0) {
                            $data['infografis_file'] = $data['infografis_file']['data'];
    
                            $callback = array(
                                'data' => $data['infografis_file']
                            );
                        } else {
                            $callback = array(
                                'data' => []
                            );
                        }
                    }else{
                            $callback = array(
                                'data' => []
                            );
                        }

                    }
                    header('Content-Type: application/json');
                    echo json_encode($callback);
               
            }

            public function infografis($id_provini, $kategori)
            {
                
                    $data['infografis'] = $this->Infografis_model->data_chart_infografis($id_provini, $kategori);
                    if ($data['infografis'] == null) {
                        $callback = array(
                            'data' => []
                        );
                    }else{
                        if($data['infografis']['status'] == "Success"){
                            if (count($data['infografis']['data']) > 0) {
                                $data['infografis'] = $data['infografis']['data'];
        
                                $callback = array(
                                    'data' => $data['infografis']
                                );
                            } else {
                                $callback = array(
                                    'data' => []
                                );
                            }
                        }else{
                                $callback = array(
                                    'data' => []
                                );
                            }
    
                        }
                        header('Content-Type: application/json');
                        echo json_encode($callback);
                   
                }

                public function infografis_table()
                {
                    if($this->session->userdata('logged_in') == true){
                        $data['infografis_table'] = $this->Infografis_model->data_table_chart_infografis($this->session->userdata('token'));
                        if($data['infografis_table'] == null){
                            $callback = array(
                                'data' => []
                            );
                        }else{
                            if($data['infografis_table']['status'] == "Success"){
                                if(count($data['infografis_table']['data']) > 0){
                                    $data['infografis_table'] = $data['infografis_table']['data'];
                                    $index_data_infografis = 0;
                                    $no_data_infografis = 1;
                                    foreach ($data['infografis_table'] as $val) {
                                        $data['infografis_table'][$index_data_infografis]['no_data_infografis'] = $no_data_infografis;
            
                                        $index_data_infografis++;
                                        $no_data_infografis++;
                                    }
                                    $callback = array(
                                        'data' => $data['infografis_table']
                                    );
                                }else{
                                    $callback = array(
                                        'data' => []
                                    );
                                }
                            }else{
                                $callback = array(
                                    'data' => []
                                );
                            }
                            header('Content-Type: application/json');
                            echo json_encode($callback);  
                        }
                    }else{
                        redirect('pupr/login');
                    }
                   
                    
                }

            public function add_infografis(){
                if($this->session->userdata('logged_in') == true){
                    $id_provinsi = $this->input->post('idprovinsi');
                    $nama_infografis = $this->input->post('nama');
                    $jumlah = $this->input->post('jumlah');
                    $kategori = $this->input->post('kategori');
                    // echo $id_provinsi;
                    // echo "<br>";
                    // echo $jumlah;
                    // echo "<br>";
                    // echo $id_provinsi;
                    // echo "<br>";
                    // echo $$katefori;
                    // echo "<br>";
                    $add = $this->Infografis_model->add_data_chart_infografis($id_provinsi, $nama_infografis, $jumlah, $kategori, $this->session->userdata('token'));
                    if ($add == null)
                        $this->load->view('error_page');
                    else {
                        if ($add['status'] == "Success") {
                            $this->session->set_flashdata('success', $add['message']);
                            redirect('pupr/master');
                        } else if($add['status'] == "Error"){
                            $this->session->set_flashdata('gagal', $add['message']);
                            redirect('pupr/master');
                        }
                    }
                } else{
                    redirect('pupr/login');  
                }
            }

            public function add_infografis_file(){
                if($this->session->userdata('logged_in') == true){
                    $file_infografis = new \CurlFile($_FILES['file_infografis']['tmp_name'], $_FILES['file_infografis']['type'], $_FILES['file_infografis']['name']);
                    $id_provinsi = $this->input->post('idprovinsi');
                    $kategori = $this->input->post('kategori');
                    $tambah_infografis_file = $this->Infografis_File_model->add_data_file_infografis(
                        $file_infografis,
                        $id_provinsi,
                        $kategori,
                        $this->session->userdata('token')
                    );
        
                    if ($tambah_infografis_file == null) {
                        $this->load->view('error_page');
                    }
                    if ($tambah_infografis_file['status'] == "Success") {
                        $this->session->set_flashdata('success', $tambah_infografis_file['message']);
                        redirect("pupr/master");
                    } else {
                        $this->session->set_flashdata('APImessage', $tambah_infografis_file['message']);
                        redirect("pupr/master");
                    }

                }else{
                    redirect("pupr/login");
                }
            }

            public function edit_infografis($id){
                if($this->session->userdata('logged_in') == true){
                    $id_provinsi = $this->input->post('edit_provinsi_infografis');
                    $nama_infografis = $this->input->post('edit_nama_infografis');
                    $jumlah = $this->input->post('edit_jumlah_infografis');
                    $kategori = $this->input->post('edit_kategori_infografis');;
                    $add = $this->Infografis_model->edit_data_chart_infografis($nama_infografis, $jumlah, $id_provinsi, $kategori, $id, $this->session->userdata('token'));
                    if ($add == null)
                        $this->load->view('error_page');
                    else {
                        if ($add['status'] == "Success") {
                            $this->session->set_flashdata('success', $add['message']);
                            redirect('pupr/master');
                        } else if($add['status'] == "Error"){
                            $this->session->set_flashdata('gagal', $add['message']);
                            redirect('pupr/master');
                        }
                    }
                } else
                    redirect('pupr/login');
            }

            public function delete_infografis($id_infografis){
                if($this->session->userdata('logged_in') == true){
                    $delete_infografis = $this->Infografis_model->delete_data_chart_infografis($id_infografis, $this->session->userdata('token'));
                    echo var_dump($delete_infografis);
                    if ($delete_infografis == null) {
                        $this->load->view('error_page');
                    } else {
                        if ($delete_infografis['status'] == "Success") {
                            $this->session->set_flashdata('success', $delete_infografis['message']);
                            redirect("pupr/master");
                        } else {
                            $this->session->set_flashdata('APImessage', $delete_infografis['message']);
                            redirect("pupr/master");
                        }
                    }
                }else{
                    redirect('pupr/login');
                }
            }

            public function infografis_data_null(){
                $this->load->view('null_file');
            }
}
    