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

            

            public function infografis_data_null(){
                $this->load->view('null_file');
            }
}
    