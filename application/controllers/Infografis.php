<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Infografis extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Infografis_model');


        if ($this->session->userdata('id_role') == 3) {
            $this->session->set_flashdata('APImessage', "Akses gagal. Hanya administrator yang dapat mengakses website ini");
            redirect('pupr/login');
        }
    }
    public function infografis($id_provini, $kategori)
        {
            if($this->session->userdata('logged_in') == true){
                $data['infografis'] = $this->Infografis_model->data_chart_balai($id_provini, $kategori, $this->session->userdata('token'));
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
                }else{
                    redirect('pupr/login');
                }
            }
}
    

