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

            public function add_infografis(){
                if($this->session->userdata('logged_in') == true){
                    $id_provinsi = $this->input->post('idprovinsi');
                    $nama_uojk = $this->input->post('nama');
                    $jumlah_uojk = $this->input->post('jumlah');
                    $kategori = $this->input->post('kategori');;
                    $add = $this->Infografis_model->add_data_chart_infografis($id_provinsi, $nama_uojk, $jumlah_uojk, $kategori, $this->session->userdata('token'));
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

            public function infografis_data_null(){
                $this->load->view('null_file');
            }
}
    

