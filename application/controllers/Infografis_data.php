<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Infografis_data extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Infografis_model');
        $this->load->model('Infografis_File_model');
        $this->load->model('User_model');

        if ($this->session->userdata('id_role') == 3) {
            $this->session->set_flashdata('APImessage', "Akses gagal. Hanya administrator yang dapat mengakses website ini");
            redirect('pupr/login');
        }
    }

    public function mitra(){
        if ($this->session->userdata('logged_in') == true) {
            $null = false;

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

            if ($null)
                $this->load->view('error_page');
            else
                $this->load->view('administrator/infografis_data_mitra', $data);
        }  else {
        redirect('pupr/login');
        }
    }

    public function mitra_file(){
        if ($this->session->userdata('logged_in') == true) {
            $null = false;

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

            if ($null)
                $this->load->view('error_page');
            else
                $this->load->view('administrator/infografis_data_mitra_file', $data);
        }  else {
        redirect('pupr/login');
        }
    }

    public function instruktur(){
        if ($this->session->userdata('logged_in') == true) {
            $null = false;

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

            if ($null)
                $this->load->view('error_page');
            else
                $this->load->view('administrator/infografis_data_instruktur', $data);
        }  else {
        redirect('pupr/login');
        }
    }

    public function instruktur_file(){
        if ($this->session->userdata('logged_in') == true) {
            $null = false;

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

            if ($null)
                $this->load->view('error_page');
            else
                $this->load->view('administrator/infografis_data_instruktur_file', $data);
        }  else {
        redirect('pupr/login');
        }
    }

    public function asesor(){
        if ($this->session->userdata('logged_in') == true) {
            $null = false;

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

            if ($null)
                $this->load->view('error_page');
            else
                $this->load->view('administrator/infografis_data_asesor', $data);
        }  else {
        redirect('pupr/login');
        }
    }

    public function asesor_file(){
        if ($this->session->userdata('logged_in') == true) {
            $null = false;

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

            if ($null)
                $this->load->view('error_page');
            else
                $this->load->view('administrator/infografis_data_asesor_file', $data);
        }  else {
        redirect('pupr/login');
        }
    }

    public function se_kepala_daerah(){
        if ($this->session->userdata('logged_in') == true) {
            $null = false;

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

            if ($null)
                $this->load->view('error_page');
            else
                $this->load->view('administrator/infografis_data_se_kepala_daerah', $data);
        }  else {
        redirect('pupr/login');
        }
    }

    public function se_kepala_daerah_file(){
        if ($this->session->userdata('logged_in') == true) {
            $null = false;

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

            if ($null)
                $this->load->view('error_page');
            else
                $this->load->view('administrator/infografis_data_se_kepala_daerah_file', $data);
        }  else {
        redirect('pupr/login');
        }
    }

    public function capaian_output(){
        if ($this->session->userdata('logged_in') == true) {
            $null = false;

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

            if ($null)
                $this->load->view('error_page');
            else
                $this->load->view('administrator/infografis_data_capaian_output', $data);
        }  else {
        redirect('pupr/login');
        }
    }

    public function capaian_output_file(){
        if ($this->session->userdata('logged_in') == true) {
            $null = false;

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

            if ($null)
                $this->load->view('error_page');
            else
                $this->load->view('administrator/infografis_data_capaian_output_file', $data);
        }  else {
        redirect('pupr/login');
        }
    }

    public function infografis_table_mitra()
    {
        if($this->session->userdata('logged_in') == true){
            $data['infografis_table_mitra'] = $this->Infografis_model->data_table_chart_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 1);
            if($data['infografis_table_mitra'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_table_mitra']['status'] == "Success"){
                    if(count($data['infografis_table_mitra']['data']) > 0){
                        $data['infografis_table_mitra'] = $data['infografis_table_mitra']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_table_mitra'] as $val) {
                            $data['infografis_table_mitra'][$index_data_infografis]['no_data_infografis'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_table_mitra']
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

    public function infografis_table_balai()
    {
        if($this->session->userdata('logged_in') == true){
            $data['infografis_table_balai'] = $this->Infografis_model->data_table_chart_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 2);
            if($data['infografis_table_balai'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_table_balai']['status'] == "Success"){
                    if(count($data['infografis_table_balai']['data']) > 0){
                        $data['infografis_table_balai'] = $data['infografis_table_balai']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_table_balai'] as $val) {
                            $data['infografis_table_balai'][$index_data_infografis]['no_data_infografis'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_table_balai']
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

    public function infografis_table_opd()
    {
        if($this->session->userdata('logged_in') == true){
            $data['infografis_table_opd'] = $this->Infografis_model->data_table_chart_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 3);
            if($data['infografis_table_opd'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_table_opd']['status'] == "Success"){
                    if(count($data['infografis_table_opd']['data']) > 0){
                        $data['infografis_table_opd'] = $data['infografis_table_opd']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_table_opd'] as $val) {
                            $data['infografis_table_opd'][$index_data_infografis]['no_data_infografis'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_table_opd']
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

    public function infografis_table_vokasi()
    {
        if($this->session->userdata('logged_in') == true){
            $data['infografis_table_vokasi'] = $this->Infografis_model->data_table_chart_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 4);
            if($data['infografis_table_vokasi'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_table_vokasi']['status'] == "Success"){
                    if(count($data['infografis_table_vokasi']['data']) > 0){
                        $data['infografis_table_vokasi'] = $data['infografis_table_vokasi']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_table_vokasi'] as $val) {
                            $data['infografis_table_vokasi'][$index_data_infografis]['no_data_infografis'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_table_vokasi']
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

    public function infografis_table_asosiasi_profesi()
    {
        if($this->session->userdata('logged_in') == true){
            $data['infografis_table_asosiasi_profesi'] = $this->Infografis_model->data_table_chart_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 5);
            if($data['infografis_table_asosiasi_profesi'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_table_asosiasi_profesi']['status'] == "Success"){
                    if(count($data['infografis_table_asosiasi_profesi']['data']) > 0){
                        $data['infografis_table_asosiasi_profesi'] = $data['infografis_table_asosiasi_profesi']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_table_asosiasi_profesi'] as $val) {
                            $data['infografis_table_asosiasi_profesi'][$index_data_infografis]['no_data_infografis'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_table_asosiasi_profesi']
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

    public function infografis_table_asosiasi_bujk()
    {
        if($this->session->userdata('logged_in') == true){
            $data['infografis_table_asosiasi_bujk'] = $this->Infografis_model->data_table_chart_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 6);
            if($data['infografis_table_asosiasi_bujk'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_table_asosiasi_bujk']['status'] == "Success"){
                    if(count($data['infografis_table_asosiasi_bujk']['data']) > 0){
                        $data['infografis_table_asosiasi_bujk'] = $data['infografis_table_asosiasi_bujk']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_table_asosiasi_bujk'] as $val) {
                            $data['infografis_table_asosiasi_bujk'][$index_data_infografis]['no_data_infografis'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_table_asosiasi_bujk']
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

    public function infografis_table_lapas()
    {
        if($this->session->userdata('logged_in') == true){
            $data['infografis_table_lapas'] = $this->Infografis_model->data_table_chart_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 7);
            if($data['infografis_table_lapas'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_table_lapas']['status'] == "Success"){
                    if(count($data['infografis_table_lapas']['data']) > 0){
                        $data['infografis_table_lapas'] = $data['infografis_table_lapas']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_table_lapas'] as $val) {
                            $data['infografis_table_lapas'][$index_data_infografis]['no_data_infografis'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_table_lapas']
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

    public function infografis_table_instansi_lain()
    {
        if($this->session->userdata('logged_in') == true){
            $data['infografis_table_instansi_lain'] = $this->Infografis_model->data_table_chart_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 8);
            if($data['infografis_table_instansi_lain'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_table_instansi_lain']['status'] == "Success"){
                    if(count($data['infografis_table_instansi_lain']['data']) > 0){
                        $data['infografis_table_instansi_lain'] = $data['infografis_table_instansi_lain']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_table_instansi_lain'] as $val) {
                            $data['infografis_table_instansi_lain'][$index_data_infografis]['no_data_infografis'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_table_instansi_lain']
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

    public function infografis_table_kso()
    {
        if($this->session->userdata('logged_in') == true){
            $data['infografis_table_kso'] = $this->Infografis_model->data_table_chart_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 27);
            if($data['infografis_table_kso'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_table_kso']['status'] == "Success"){
                    if(count($data['infografis_table_kso']['data']) > 0){
                        $data['infografis_table_kso'] = $data['infografis_table_kso']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_table_kso'] as $val) {
                            $data['infografis_table_kso'][$index_data_infografis]['no_data_infografis'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_table_kso']
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

    public function infografis_table_mtu()
    {
        if($this->session->userdata('logged_in') == true){
            $data['infografis_table_mtu'] = $this->Infografis_model->data_table_chart_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 28);
            if($data['infografis_table_mtu'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_table_mtu']['status'] == "Success"){
                    if(count($data['infografis_table_mtu']['data']) > 0){
                        $data['infografis_table_mtu'] = $data['infografis_table_mtu']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_table_mtu'] as $val) {
                            $data['infografis_table_mtu'][$index_data_infografis]['no_data_infografis'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_table_mtu']
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

    public function infografis_table_div()
    {
        if($this->session->userdata('logged_in') == true){
            $data['infografis_table_div'] = $this->Infografis_model->data_table_chart_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 13);
            if($data['infografis_table_div'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_table_div']['status'] == "Success"){
                    if(count($data['infografis_table_div']['data']) > 0){
                        $data['infografis_table_div'] = $data['infografis_table_div']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_table_div'] as $val) {
                            $data['infografis_table_div'][$index_data_infografis]['no_data_infografis'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_table_div']
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

    public function infografis_table_dinv()
    {
        if($this->session->userdata('logged_in') == true){
            $data['infografis_table_dinv'] = $this->Infografis_model->data_table_chart_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 12);
            if($data['infografis_table_dinv'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_table_dinv']['status'] == "Success"){
                    if(count($data['infografis_table_dinv']['data']) > 0){
                        $data['infografis_table_dinv'] = $data['infografis_table_dinv']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_table_dinv'] as $val) {
                            $data['infografis_table_dinv'][$index_data_infografis]['no_data_infografis'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_table_dinv']
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

    public function infografis_table_aktk()
    {
        if($this->session->userdata('logged_in') == true){
            $data['infografis_table_aktk'] = $this->Infografis_model->data_table_chart_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 10);
            if($data['infografis_table_aktk'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_table_aktk']['status'] == "Success"){
                    if(count($data['infografis_table_aktk']['data']) > 0){
                        $data['infografis_table_aktk'] = $data['infografis_table_aktk']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_table_aktk'] as $val) {
                            $data['infografis_table_aktk'][$index_data_infografis]['no_data_infografis'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_table_aktk']
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

    public function infografis_table_abu()
    {
        if($this->session->userdata('logged_in') == true){
            $data['infografis_table_abu'] = $this->Infografis_model->data_table_chart_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 11);
            if($data['infografis_table_abu'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_table_abu']['status'] == "Success"){
                    if(count($data['infografis_table_abu']['data']) > 0){
                        $data['infografis_table_abu'] = $data['infografis_table_abu']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_table_abu'] as $val) {
                            $data['infografis_table_abu'][$index_data_infografis]['no_data_infografis'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_table_abu']
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

    public function infografis_table_se_kepala_daerah()
    {
        if($this->session->userdata('logged_in') == true){
            $data['infografis_table_se_kepala_daerah'] = $this->Infografis_model->data_table_chart_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 9);
            if($data['infografis_table_se_kepala_daerah'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_table_se_kepala_daerah']['status'] == "Success"){
                    if(count($data['infografis_table_se_kepala_daerah']['data']) > 0){
                        $data['infografis_table_se_kepala_daerah'] = $data['infografis_table_se_kepala_daerah']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_table_se_kepala_daerah'] as $val) {
                            $data['infografis_table_se_kepala_daerah'][$index_data_infografis]['no_data_infografis'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_table_se_kepala_daerah']
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

    public function infografis_table_RPK()
    {
        if($this->session->userdata('logged_in') == true){
            $data['infografis_table_RPK'] = $this->Infografis_model->data_table_chart_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 16);
            if($data['infografis_table_RPK'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_table_RPK']['status'] == "Success"){
                    if(count($data['infografis_table_RPK']['data']) > 0){
                        $data['infografis_table_RPK'] = $data['infografis_table_RPK']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_table_RPK'] as $val) {
                            $data['infografis_table_RPK'][$index_data_infografis]['no_data_infografis'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_table_RPK']
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

    public function infografis_table_RPBS()
    {
        if($this->session->userdata('logged_in') == true){
            $data['infografis_table_RPBS'] = $this->Infografis_model->data_table_chart_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 20);
            if($data['infografis_table_RPBS'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_table_RPBS']['status'] == "Success"){
                    if(count($data['infografis_table_RPBS']['data']) > 0){
                        $data['infografis_table_RPBS'] = $data['infografis_table_RPBS']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_table_RPBS'] as $val) {
                            $data['infografis_table_RPBS'][$index_data_infografis]['no_data_infografis'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_table_RPBS']
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

    public function infografis_table_PPK()
    {
        if($this->session->userdata('logged_in') == true){
            $data['infografis_table_PPK'] = $this->Infografis_model->data_table_chart_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 14);
            if($data['infografis_table_PPK'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_table_PPK']['status'] == "Success"){
                    if(count($data['infografis_table_PPK']['data']) > 0){
                        $data['infografis_table_PPK'] = $data['infografis_table_PPK']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_table_PPK'] as $val) {
                            $data['infografis_table_PPK'][$index_data_infografis]['no_data_infografis'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_table_PPK']
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

    public function infografis_table_RPBWP()
    {
        if($this->session->userdata('logged_in') == true){
            $data['infografis_table_RPBWP'] = $this->Infografis_model->data_table_chart_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 18);
            if($data['infografis_table_RPBWP'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_table_RPBWP']['status'] == "Success"){
                    if(count($data['infografis_table_RPBWP']['data']) > 0){
                        $data['infografis_table_RPBWP'] = $data['infografis_table_RPBWP']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_table_RPBWP'] as $val) {
                            $data['infografis_table_RPBWP'][$index_data_infografis]['no_data_infografis'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_table_RPBWP']
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

    public function infografis_table_RPKBMK()
    {
        if($this->session->userdata('logged_in') == true){
            $data['infografis_table_RPKBMK'] = $this->Infografis_model->data_table_chart_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 21);
            if($data['infografis_table_RPKBMK'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_table_RPKBMK']['status'] == "Success"){
                    if(count($data['infografis_table_RPKBMK']['data']) > 0){
                        $data['infografis_table_RPKBMK'] = $data['infografis_table_RPKBMK']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_table_RPKBMK'] as $val) {
                            $data['infografis_table_RPKBMK'][$index_data_infografis]['no_data_infografis'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_table_RPKBMK']
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

    public function infografis_table_RPKBJK()
    {
        if($this->session->userdata('logged_in') == true){
            $data['infografis_table_RPKBJK'] = $this->Infografis_model->data_table_chart_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 17);
            if($data['infografis_table_RPKBJK'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_table_RPKBJK']['status'] == "Success"){
                    if(count($data['infografis_table_RPKBJK']['data']) > 0){
                        $data['infografis_table_RPKBJK'] = $data['infografis_table_RPKBJK']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_table_RPKBJK'] as $val) {
                            $data['infografis_table_RPKBJK'][$index_data_infografis]['no_data_infografis'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_table_RPKBJK']
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

    public function infografis_table_TKK_AHLI()
    {
        if($this->session->userdata('logged_in') == true){
            $data['infografis_table_TKK_AHLI'] = $this->Infografis_model->data_table_chart_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 25);
            if($data['infografis_table_TKK_AHLI'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_table_TKK_AHLI']['status'] == "Success"){
                    if(count($data['infografis_table_TKK_AHLI']['data']) > 0){
                        $data['infografis_table_TKK_AHLI'] = $data['infografis_table_TKK_AHLI']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_table_TKK_AHLI'] as $val) {
                            $data['infografis_table_TKK_AHLI'][$index_data_infografis]['no_data_infografis'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_table_TKK_AHLI']
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

    public function infografis_table_TKK_TERAMPIL()
    {
        if($this->session->userdata('logged_in') == true){
            $data['infografis_table_TKK_TERAMPIL'] = $this->Infografis_model->data_table_chart_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 26);
            if($data['infografis_table_TKK_TERAMPIL'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_table_TKK_TERAMPIL']['status'] == "Success"){
                    if(count($data['infografis_table_TKK_TERAMPIL']['data']) > 0){
                        $data['infografis_table_TKK_TERAMPIL'] = $data['infografis_table_TKK_TERAMPIL']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_table_TKK_TERAMPIL'] as $val) {
                            $data['infografis_table_TKK_TERAMPIL'][$index_data_infografis]['no_data_infografis'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_table_TKK_TERAMPIL']
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

    public function infografis_file_mitra(){
        if($this->session->userdata('logged_in') == true){
            $data['infografis_file_mitra_table'] = $this->Infografis_File_model->data_table_file_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 1);
     
            if($data['infografis_file_mitra_table'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_file_mitra_table']['status'] == "Success"){
                    if(count($data['infografis_file_mitra_table']['data']) > 0){
                        $data['infografis_file_mitra_table'] = $data['infografis_file_mitra_table']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_file_mitra_table'] as $val) {
                            $data['infografis_file_mitra_table'][$index_data_infografis]['no_infografis_file'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_file_mitra_table']
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

    public function infografis_file_balai(){
        if($this->session->userdata('logged_in') == true){
            $data['infografis_file_balai_table'] = $this->Infografis_File_model->data_table_file_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 2);
     
            if($data['infografis_file_balai_table'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_file_balai_table']['status'] == "Success"){
                    if(count($data['infografis_file_balai_table']['data']) > 0){
                        $data['infografis_file_balai_table'] = $data['infografis_file_balai_table']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_file_balai_table'] as $val) {
                            $data['infografis_file_balai_table'][$index_data_infografis]['no_infografis_file'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_file_balai_table']
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

    public function infografis_file_opd(){
        if($this->session->userdata('logged_in') == true){
            $data['infografis_file_opd_table'] = $this->Infografis_File_model->data_table_file_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 3);
     
            if($data['infografis_file_opd_table'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_file_opd_table']['status'] == "Success"){
                    if(count($data['infografis_file_opd_table']['data']) > 0){
                        $data['infografis_file_opd_table'] = $data['infografis_file_opd_table']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_file_opd_table'] as $val) {
                            $data['infografis_file_opd_table'][$index_data_infografis]['no_infografis_file'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_file_opd_table']
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

    public function infografis_file_vokasi(){
        if($this->session->userdata('logged_in') == true){
            $data['infografis_file_vokasi_table'] = $this->Infografis_File_model->data_table_file_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 4);
     
            if($data['infografis_file_vokasi_table'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_file_vokasi_table']['status'] == "Success"){
                    if(count($data['infografis_file_vokasi_table']['data']) > 0){
                        $data['infografis_file_vokasi_table'] = $data['infografis_file_vokasi_table']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_file_vokasi_table'] as $val) {
                            $data['infografis_file_vokasi_table'][$index_data_infografis]['no_infografis_file'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_file_vokasi_table']
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

    public function infografis_file_asosiasi_profesi(){
        if($this->session->userdata('logged_in') == true){
            $data['infografis_file_asosiasi_profesi_table'] = $this->Infografis_File_model->data_table_file_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 5);
     
            if($data['infografis_file_asosiasi_profesi_table'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_file_asosiasi_profesi_table']['status'] == "Success"){
                    if(count($data['infografis_file_asosiasi_profesi_table']['data']) > 0){
                        $data['infografis_file_asosiasi_profesi_table'] = $data['infografis_file_asosiasi_profesi_table']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_file_asosiasi_profesi_table'] as $val) {
                            $data['infografis_file_asosiasi_profesi_table'][$index_data_infografis]['no_infografis_file'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_file_asosiasi_profesi_table']
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

    public function infografis_file_asosiasi_bujk(){
        if($this->session->userdata('logged_in') == true){
            $data['infografis_file_asosiasi_bujk_table'] = $this->Infografis_File_model->data_table_file_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 6);
     
            if($data['infografis_file_asosiasi_bujk_table'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_file_asosiasi_bujk_table']['status'] == "Success"){
                    if(count($data['infografis_file_asosiasi_bujk_table']['data']) > 0){
                        $data['infografis_file_asosiasi_bujk_table'] = $data['infografis_file_asosiasi_bujk_table']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_file_asosiasi_bujk_table'] as $val) {
                            $data['infografis_file_asosiasi_bujk_table'][$index_data_infografis]['no_infografis_file'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_file_asosiasi_bujk_table']
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

    public function infografis_file_lapas(){
        if($this->session->userdata('logged_in') == true){
            $data['infografis_file_lapas_table'] = $this->Infografis_File_model->data_table_file_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 7);
     
            if($data['infografis_file_lapas_table'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_file_lapas_table']['status'] == "Success"){
                    if(count($data['infografis_file_lapas_table']['data']) > 0){
                        $data['infografis_file_lapas_table'] = $data['infografis_file_lapas_table']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_file_lapas_table'] as $val) {
                            $data['infografis_file_lapas_table'][$index_data_infografis]['no_infografis_file'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_file_lapas_table']
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
    
    public function infografis_file_instansi_lain(){
        if($this->session->userdata('logged_in') == true){
            $data['infografis_file_instansi_lain_table'] = $this->Infografis_File_model->data_table_file_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 8);
     
            if($data['infografis_file_instansi_lain_table'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_file_instansi_lain_table']['status'] == "Success"){
                    if(count($data['infografis_file_instansi_lain_table']['data']) > 0){
                        $data['infografis_file_instansi_lain_table'] = $data['infografis_file_instansi_lain_table']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_file_instansi_lain_table'] as $val) {
                            $data['infografis_file_instansi_lain_table'][$index_data_infografis]['no_infografis_file'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_file_instansi_lain_table']
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

    public function infografis_file_kso(){
        if($this->session->userdata('logged_in') == true){
            $data['infografis_file_kso_table'] = $this->Infografis_File_model->data_table_file_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 27);
     
            if($data['infografis_file_kso_table'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_file_kso_table']['status'] == "Success"){
                    if(count($data['infografis_file_kso_table']['data']) > 0){
                        $data['infografis_file_kso_table'] = $data['infografis_file_kso_table']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_file_kso_table'] as $val) {
                            $data['infografis_file_kso_table'][$index_data_infografis]['no_infografis_file'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_file_kso_table']
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
    
    public function infografis_file_mtu(){
        if($this->session->userdata('logged_in') == true){
            $data['infografis_file_mtu_table'] = $this->Infografis_File_model->data_table_file_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 28);
     
            if($data['infografis_file_mtu_table'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_file_mtu_table']['status'] == "Success"){
                    if(count($data['infografis_file_mtu_table']['data']) > 0){
                        $data['infografis_file_mtu_table'] = $data['infografis_file_mtu_table']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_file_mtu_table'] as $val) {
                            $data['infografis_file_mtu_table'][$index_data_infografis]['no_infografis_file'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_file_mtu_table']
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

    public function infografis_file_div(){
        if($this->session->userdata('logged_in') == true){
            $data['infografis_file_div_table'] = $this->Infografis_File_model->data_table_file_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 13);
     
            if($data['infografis_file_div_table'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_file_div_table']['status'] == "Success"){
                    if(count($data['infografis_file_div_table']['data']) > 0){
                        $data['infografis_file_div_table'] = $data['infografis_file_div_table']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_file_div_table'] as $val) {
                            $data['infografis_file_div_table'][$index_data_infografis]['no_infografis_file'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_file_div_table']
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

    public function infografis_file_dinv(){
        if($this->session->userdata('logged_in') == true){
            $data['infografis_file_dinv_table'] = $this->Infografis_File_model->data_table_file_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 12);
     
            if($data['infografis_file_dinv_table'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_file_dinv_table']['status'] == "Success"){
                    if(count($data['infografis_file_dinv_table']['data']) > 0){
                        $data['infografis_file_dinv_table'] = $data['infografis_file_dinv_table']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_file_dinv_table'] as $val) {
                            $data['infografis_file_dinv_table'][$index_data_infografis]['no_infografis_file'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_file_dinv_table']
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
    
    public function infografis_file_aktk(){
        if($this->session->userdata('logged_in') == true){
            $data['infografis_file_aktk_table'] = $this->Infografis_File_model->data_table_file_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 10);
     
            if($data['infografis_file_aktk_table'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_file_aktk_table']['status'] == "Success"){
                    if(count($data['infografis_file_aktk_table']['data']) > 0){
                        $data['infografis_file_aktk_table'] = $data['infografis_file_aktk_table']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_file_aktk_table'] as $val) {
                            $data['infografis_file_aktk_table'][$index_data_infografis]['no_infografis_file'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_file_aktk_table']
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

    public function infografis_file_abu(){
        if($this->session->userdata('logged_in') == true){
            $data['infografis_file_abu_table'] = $this->Infografis_File_model->data_table_file_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 11);
     
            if($data['infografis_file_abu_table'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_file_abu_table']['status'] == "Success"){
                    if(count($data['infografis_file_abu_table']['data']) > 0){
                        $data['infografis_file_abu_table'] = $data['infografis_file_abu_table']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_file_abu_table'] as $val) {
                            $data['infografis_file_abu_table'][$index_data_infografis]['no_infografis_file'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_file_abu_table']
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

    public function infografis_file_se_kepala_daerah(){
        if($this->session->userdata('logged_in') == true){
            $data['infografis_file_se_kepala_daerah_table'] = $this->Infografis_File_model->data_table_file_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 9);
     
            if($data['infografis_file_se_kepala_daerah_table'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_file_se_kepala_daerah_table']['status'] == "Success"){
                    if(count($data['infografis_file_se_kepala_daerah_table']['data']) > 0){
                        $data['infografis_file_se_kepala_daerah_table'] = $data['infografis_file_se_kepala_daerah_table']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_file_se_kepala_daerah_table'] as $val) {
                            $data['infografis_file_se_kepala_daerah_table'][$index_data_infografis]['no_infografis_file'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_file_se_kepala_daerah_table']
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

    public function infografis_file_RPK(){
        if($this->session->userdata('logged_in') == true){
            $data['infografis_file_RPK_table'] = $this->Infografis_File_model->data_table_file_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 16);
     
            if($data['infografis_file_RPK_table'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_file_RPK_table']['status'] == "Success"){
                    if(count($data['infografis_file_RPK_table']['data']) > 0){
                        $data['infografis_file_RPK_table'] = $data['infografis_file_RPK_table']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_file_RPK_table'] as $val) {
                            $data['infografis_file_RPK_table'][$index_data_infografis]['no_infografis_file'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_file_RPK_table']
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

    public function infografis_file_RPBS(){
        if($this->session->userdata('logged_in') == true){
            $data['infografis_file_RPBS_table'] = $this->Infografis_File_model->data_table_file_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 20);
     
            if($data['infografis_file_RPBS_table'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_file_RPBS_table']['status'] == "Success"){
                    if(count($data['infografis_file_RPBS_table']['data']) > 0){
                        $data['infografis_file_RPBS_table'] = $data['infografis_file_RPBS_table']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_file_RPBS_table'] as $val) {
                            $data['infografis_file_RPBS_table'][$index_data_infografis]['no_infografis_file'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_file_RPBS_table']
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

    public function infografis_file_PPK(){
        if($this->session->userdata('logged_in') == true){
            $data['infografis_file_PPK_table'] = $this->Infografis_File_model->data_table_file_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 14    );
     
            if($data['infografis_file_PPK_table'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_file_PPK_table']['status'] == "Success"){
                    if(count($data['infografis_file_PPK_table']['data']) > 0){
                        $data['infografis_file_PPK_table'] = $data['infografis_file_PPK_table']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_file_PPK_table'] as $val) {
                            $data['infografis_file_PPK_table'][$index_data_infografis]['no_infografis_file'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_file_PPK_table']
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

    public function infografis_file_RPBWP(){
        if($this->session->userdata('logged_in') == true){
            $data['infografis_file_RPBWP_table'] = $this->Infografis_File_model->data_table_file_infografis($this->session->userdata('token'), $this->session->userdata('id_provinsi'), 18);
     
            if($data['infografis_file_RPBWP_table'] == null){
                $callback = array(
                    'data' => []
                );
            }else{
                if($data['infografis_file_RPBWP_table']['status'] == "Success"){
                    if(count($data['infografis_file_RPBWP_table']['data']) > 0){
                        $data['infografis_file_RPBWP_table'] = $data['infografis_file_RPBWP_table']['data'];
                        $index_data_infografis = 0;
                        $no_data_infografis = 1;
                        foreach ($data['infografis_file_RPBWP_table'] as $val) {
                            $data['infografis_file_RPBWP_table'][$index_data_infografis]['no_infografis_file'] = $no_data_infografis;

                            $index_data_infografis++;
                            $no_data_infografis++;
                        }
                        $callback = array(
                            'data' => $data['infografis_file_RPBWP_table']
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

    public function add_infografis_mitra(){
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
                    redirect('pupr/mitra');
                } else if($add['status'] == "Error"){
                    $this->session->set_flashdata('gagal', $add['message']);
                    redirect('pupr/mitra');
                }
            }
        } else{
            redirect('pupr/login');  
        }
    }

    public function add_infografis_instruktur(){
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
                    redirect('pupr/instruktur');
                } else if($add['status'] == "Error"){
                    $this->session->set_flashdata('gagal', $add['message']);
                    redirect('pupr/instruktur');
                }
            }
        } else{
            redirect('pupr/login');  
        }
    }

    public function add_infografis_asesor(){
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
                    redirect('pupr/asesor');
                } else if($add['status'] == "Error"){
                    $this->session->set_flashdata('gagal', $add['message']);
                    redirect('pupr/asesor');
                }
            }
        } else{
            redirect('pupr/login');  
        }
    }

    public function add_infografis_se_kepala_daerah(){
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
                    redirect('pupr/se_kepala_daerah');
                } else if($add['status'] == "Error"){
                    $this->session->set_flashdata('gagal', $add['message']);
                    redirect('pupr/se_kepala_daerah');
                }
            }
        } else{
            redirect('pupr/login');  
        }
    }

    public function add_infografis_capaian_output(){
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
                    redirect('pupr/capaian_output');
                } else if($add['status'] == "Error"){
                    $this->session->set_flashdata('gagal', $add['message']);
                    redirect('pupr/capaian_output');
                }
            }
        } else{
            redirect('pupr/login');  
        }
    }

    public function add_infografis_file_mitra(){
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
                redirect("pupr/mitra_file");
            } else {
                $this->session->set_flashdata('APImessage', $tambah_infografis_file['message']);
                redirect("pupr/mitra_file");
            }

        }else{
            redirect("pupr/login");
        }
    }

    public function add_infografis_file_instruktur(){
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
                redirect("pupr/instruktur_file");
            } else {
                $this->session->set_flashdata('APImessage', $tambah_infografis_file['message']);
                redirect("pupr/instruktur_file");
            }

        }else{
            redirect("pupr/login");
        }
    }

    public function add_infografis_file_asesor(){
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
                redirect("pupr/asesor_file");
            } else {
                $this->session->set_flashdata('APImessage', $tambah_infografis_file['message']);
                redirect("pupr/asesor_file");
            }

        }else{
            redirect("pupr/login");
        }
    }

    public function add_infografis_file_se_kepala_daerah(){
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
                redirect("pupr/se_kepala_daerah_file");
            } else {
                $this->session->set_flashdata('APImessage', $tambah_infografis_file['message']);
                redirect("pupr/se_kepala_daerah_file");
            }

        }else{
            redirect("pupr/login");
        }
    }
    
    public function add_infografis_file_capaian_output(){
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
                redirect("pupr/capaian_output_file");
            } else {
                $this->session->set_flashdata('APImessage', $tambah_infografis_file['message']);
                redirect("pupr/capaian_output_file");
            }

        }else{
            redirect("pupr/login");
        }
    }

    public function edit_infografis_mitra($id){
        if($this->session->userdata('logged_in') == true){
            $nama_infografis = $this->input->post('edit_nama_infografis');
            $jumlah = $this->input->post('edit_jumlah_infografis');
            $add = $this->Infografis_model->edit_data_chart_infografis($nama_infografis, $jumlah, $id, $this->session->userdata('token'));
            if ($add == null)
                $this->load->view('error_page');
            else {
                if ($add['status'] == "Success") {
                    $this->session->set_flashdata('success', $add['message']);
                    redirect('pupr/mitra');
                } else if($add['status'] == "Error"){
                    $this->session->set_flashdata('gagal', $add['message']);
                    redirect('pupr/mitra');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function edit_infografis_instruktur($id){
        if($this->session->userdata('logged_in') == true){
            $nama_infografis = $this->input->post('edit_nama_infografis');
            $jumlah = $this->input->post('edit_jumlah_infografis');
            $add = $this->Infografis_model->edit_data_chart_infografis($nama_infografis, $jumlah, $id, $this->session->userdata('token'));
            if ($add == null)
                $this->load->view('error_page');
            else {
                if ($add['status'] == "Success") {
                    $this->session->set_flashdata('success', $add['message']);
                    redirect('pupr/instruktur');
                } else if($add['status'] == "Error"){
                    $this->session->set_flashdata('gagal', $add['message']);
                    redirect('pupr/instruktur');
                }
            }
        } else
            redirect('pupr/login');
    }

   
    public function edit_infografis_asesor($id){
        if($this->session->userdata('logged_in') == true){
            $nama_infografis = $this->input->post('edit_nama_infografis');
            $jumlah = $this->input->post('edit_jumlah_infografis');
            $add = $this->Infografis_model->edit_data_chart_infografis($nama_infografis, $jumlah, $id, $this->session->userdata('token'));
            if ($add == null)
                $this->load->view('error_page');
            else {
                if ($add['status'] == "Success") {
                    $this->session->set_flashdata('success', $add['message']);
                    redirect('pupr/asesor');
                } else if($add['status'] == "Error"){
                    $this->session->set_flashdata('gagal', $add['message']);
                    redirect('pupr/asesor');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function edit_infografis_se_kepala_daerah($id){
        if($this->session->userdata('logged_in') == true){
            $nama_infografis = $this->input->post('edit_nama_infografis');
            $jumlah = $this->input->post('edit_jumlah_infografis');
            $add = $this->Infografis_model->edit_data_chart_infografis($nama_infografis, $jumlah, $id, $this->session->userdata('token'));
            if ($add == null)
                $this->load->view('error_page');
            else {
                if ($add['status'] == "Success") {
                    $this->session->set_flashdata('success', $add['message']);
                    redirect('pupr/se_kepala_daerah');
                } else if($add['status'] == "Error"){
                    $this->session->set_flashdata('gagal', $add['message']);
                    redirect('pupr/se_kepala_daerah');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function edit_infografis_capaian_output($id){
        if($this->session->userdata('logged_in') == true){
            $nama_infografis = $this->input->post('edit_nama_infografis');
            $jumlah = $this->input->post('edit_jumlah_infografis');
            $add = $this->Infografis_model->edit_data_chart_infografis($nama_infografis, $jumlah, $id, $this->session->userdata('token'));
            if ($add == null)
                $this->load->view('error_page');
            else {
                if ($add['status'] == "Success") {
                    $this->session->set_flashdata('success', $add['message']);
                    redirect('pupr/capaian_output');
                } else if($add['status'] == "Error"){
                    $this->session->set_flashdata('gagal', $add['message']);
                    redirect('pupr/capaian_output');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function edit_infografis_file($id_infografis_file){
        if ($this->session->userdata('logged_in') == true) {
            $file_kategori_infografis = $this->input->post('edit_file_kategori_infografis');
            $file_provinsi_infografis = $this->input->post('edit_file_provinsi_infografis');
            if ($_FILES['edit_file_infografis']['size'] > 0)
                $file_infografis = new \CurlFile($_FILES['edit_file_infografis']['tmp_name'], $_FILES['edit_file_infografis']['type'], $_FILES['edit_file_infografis']['name']);
            else
                $file_infografis = null;
                $edit_file_infografis = $this->Infografis_File_model->edit_infografis_file(
                $file_infografis,
                $file_provinsi_infografis,
                $file_kategori_infografis,
                $id_infografis_file,
                $this->session->userdata('token')
            );

            if ($edit_file_infografis == null) {
                $this->load->view('error_page');
            }
            if ($edit_file_infografis['status'] == "Success") {
                $this->session->set_flashdata('success', $edit_file_infografis['message']);
                redirect("pupr/mitra_file");
            } else {
                $this->session->set_flashdata('APImessage', $edit_file_infografis['message']);
                redirect("pupr/mitra_file");
            }
        } else {
            redirect("pupr/login");
        }
    }


    public function edit_infografis_file_mitra($id_infografis_file){
        if ($this->session->userdata('logged_in') == true) {
            if ($_FILES['edit_file_infografis_mitra']['size'] > 0)
                $file_infografis = new \CurlFile($_FILES['edit_file_infografis_mitra']['tmp_name'], $_FILES['edit_file_infografis_mitra']['type'], $_FILES['edit_file_infografis_mitra']['name']);
            else
                $file_infografis = null;
                $edit_file_infografis = $this->Infografis_File_model->edit_infografis_file(
                $file_infografis,
                $id_infografis_file,
                $this->session->userdata('token')
            );

            if ($edit_file_infografis == null) {
                $this->load->view('error_page');
            }
            if ($edit_file_infografis['status'] == "Success") {
                $this->session->set_flashdata('success', $edit_file_infografis['message']);
                redirect("pupr/mitra_file");
            } else {
                $this->session->set_flashdata('APImessage', $edit_file_infografis['message']);
                redirect("pupr/mitra_file");
            }
        } else {
            redirect("pupr/login");
        }
    }

    public function edit_infografis_file_instruktur($id_infografis_file){
        if ($this->session->userdata('logged_in') == true) {
            if ($_FILES['edit_file_infografis_instruktur']['size'] > 0)
                $file_infografis = new \CurlFile($_FILES['edit_file_infografis_instruktur']['tmp_name'], $_FILES['edit_file_infografis_instruktur']['type'], $_FILES['edit_file_infografis_instruktur']['name']);
            else
                $file_infografis = null;
                $edit_file_infografis = $this->Infografis_File_model->edit_infografis_file(
                $file_infografis,
                $id_infografis_file,
                $this->session->userdata('token')
            );

            if ($edit_file_infografis == null) {
                $this->load->view('error_page');
            }
            if ($edit_file_infografis['status'] == "Success") {
                $this->session->set_flashdata('success', $edit_file_infografis['message']);
                redirect("pupr/instruktur_file");
            } else {
                $this->session->set_flashdata('APImessage', $edit_file_infografis['message']);
                redirect("pupr/instruktur_file");
            }
        } else {
            redirect("pupr/login");
        }
    }

    public function edit_infografis_file_asesor($id_infografis_file){
        if ($this->session->userdata('logged_in') == true) {
            if ($_FILES['edit_file_infografis_asesor']['size'] > 0)
                $file_infografis = new \CurlFile($_FILES['edit_file_infografis_asesor']['tmp_name'], $_FILES['edit_file_infografis_asesor']['type'], $_FILES['edit_file_infografis_asesor']['name']);
            else
                $file_infografis = null;
                $edit_file_infografis = $this->Infografis_File_model->edit_infografis_file(
                $file_infografis,
                $id_infografis_file,
                $this->session->userdata('token')
            );

            if ($edit_file_infografis == null) {
                $this->load->view('error_page');
            }
            if ($edit_file_infografis['status'] == "Success") {
                $this->session->set_flashdata('success', $edit_file_infografis['message']);
                redirect("pupr/asesor_file");
            } else {
                $this->session->set_flashdata('APImessage', $edit_file_infografis['message']);
                redirect("pupr/asesor_file");
            }
        } else {
            redirect("pupr/login");
        }
    }

    public function edit_infografis_file_se_kepala_daerah($id_infografis_file){
        if ($this->session->userdata('logged_in') == true) {
            if ($_FILES['edit_file_infografis_se_kepala_daerah']['size'] > 0)
                $file_infografis = new \CurlFile($_FILES['edit_file_infografis_se_kepala_daerah']['tmp_name'], $_FILES['edit_file_infografis_se_kepala_daerah']['type'], $_FILES['edit_file_infografis_se_kepala_daerah']['name']);
            else
                $file_infografis = null;
                $edit_file_infografis = $this->Infografis_File_model->edit_infografis_file(
                $file_infografis,
                $id_infografis_file,
                $this->session->userdata('token')
            );

            if ($edit_file_infografis == null) {
                $this->load->view('error_page');
            }
            if ($edit_file_infografis['status'] == "Success") {
                $this->session->set_flashdata('success', $edit_file_infografis['message']);
                redirect("pupr/se_kepala_daerah_file");
            } else {
                $this->session->set_flashdata('APImessage', $edit_file_infografis['message']);
                redirect("pupr/se_kepala_daerah_file");
            }
        } else {
            redirect("pupr/login");
        }
    }

    public function delete_infografis_mitra($id_infografis){
        if($this->session->userdata('logged_in') == true){
            $delete_infografis = $this->Infografis_model->delete_data_chart_infografis($id_infografis, $this->session->userdata('token'));
            echo var_dump($delete_infografis);
            if ($delete_infografis == null) {
                $this->load->view('error_page');
            } else {
                if ($delete_infografis['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete_infografis['message']);
                    redirect("pupr/mitra");
                } else {
                    $this->session->set_flashdata('APImessage', $delete_infografis['message']);
                    redirect("pupr/mitra");
                }
            }
        }else{
            redirect('pupr/login');
        }
    }

    public function delete_infografis_instruktur($id_infografis){
        if($this->session->userdata('logged_in') == true){
            $delete_infografis = $this->Infografis_model->delete_data_chart_infografis($id_infografis, $this->session->userdata('token'));
            echo var_dump($delete_infografis);
            if ($delete_infografis == null) {
                $this->load->view('error_page');
            } else {
                if ($delete_infografis['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete_infografis['message']);
                    redirect("pupr/instruktur");
                } else {
                    $this->session->set_flashdata('APImessage', $delete_infografis['message']);
                    redirect("pupr/instruktur");
                }
            }
        }else{
            redirect('pupr/login');
        }
    }

    public function delete_infografis_asesor($id_infografis){
        if($this->session->userdata('logged_in') == true){
            $delete_infografis = $this->Infografis_model->delete_data_chart_infografis($id_infografis, $this->session->userdata('token'));
            echo var_dump($delete_infografis);
            if ($delete_infografis == null) {
                $this->load->view('error_page');
            } else {
                if ($delete_infografis['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete_infografis['message']);
                    redirect("pupr/asesor");
                } else {
                    $this->session->set_flashdata('APImessage', $delete_infografis['message']);
                    redirect("pupr/asesor");
                }
            }
        }else{
            redirect('pupr/login');
        }
    }

    public function delete_infografis_se_kepala_daerah($id_infografis){
        if($this->session->userdata('logged_in') == true){
            $delete_infografis = $this->Infografis_model->delete_data_chart_infografis($id_infografis, $this->session->userdata('token'));
            echo var_dump($delete_infografis);
            if ($delete_infografis == null) {
                $this->load->view('error_page');
            } else {
                if ($delete_infografis['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete_infografis['message']);
                    redirect("pupr/se_kepala_daerah");
                } else {
                    $this->session->set_flashdata('APImessage', $delete_infografis['message']);
                    redirect("pupr/se_kepala_daerah");
                }
            }
        }else{
            redirect('pupr/login');
        }
    }

    public function delete_infografis_capaian_output($id_infografis){
        if($this->session->userdata('logged_in') == true){
            $delete_infografis = $this->Infografis_model->delete_data_chart_infografis($id_infografis, $this->session->userdata('token'));
            echo var_dump($delete_infografis);
            if ($delete_infografis == null) {
                $this->load->view('error_page');
            } else {
                if ($delete_infografis['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete_infografis['message']);
                    redirect("pupr/capaian_output");
                } else {
                    $this->session->set_flashdata('APImessage', $delete_infografis['message']);
                    redirect("pupr/capaian_output");
                }
            }
        }else{
            redirect('pupr/login');
        }
    }

    public function delete_file_infografis($id_file_infografis){
        if($this->session->userdata('logged_in') == true){
            $delete_file_infografis = $this->Infografis_File_model->delete_infografis_file($id_file_infografis, $this->session->userdata('token'));
            echo var_dump($delete_infografis);
            if ($delete_file_infografis == null) {
                $this->load->view('error_page');
            } else {
                if ($delete_file_infografis['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete_file_infografis['message']);
                    redirect("pupr/mitra");
                } else {
                    $this->session->set_flashdata('APImessage', $delete_file_infografis['message']);
                    redirect("pupr/mitra");
                }
            }
        }else{
            redirect('pupr/login');
        }
    }

    public function delete_file_infografis_mitra($id_file_infografis){
        if($this->session->userdata('logged_in') == true){
            $delete_file_infografis = $this->Infografis_File_model->delete_infografis_file($id_file_infografis, $this->session->userdata('token'));
            echo var_dump($delete_infografis);
            if ($delete_file_infografis == null) {
                $this->load->view('error_page');
            } else {
                if ($delete_file_infografis['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete_file_infografis['message']);
                    redirect("pupr/mitra_file");
                } else {
                    $this->session->set_flashdata('APImessage', $delete_file_infografis['message']);
                    redirect("pupr/mitra_file");
                }
            }
        }else{
            redirect('pupr/login');
        }
    }

    public function delete_file_infografis_instruktur($id_file_infografis){
        if($this->session->userdata('logged_in') == true){
            $delete_file_infografis = $this->Infografis_File_model->delete_infografis_file($id_file_infografis, $this->session->userdata('token'));
            echo var_dump($delete_infografis);
            if ($delete_file_infografis == null) {
                $this->load->view('error_page');
            } else {
                if ($delete_file_infografis['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete_file_infografis['message']);
                    redirect("pupr/instruktur_file");
                } else {
                    $this->session->set_flashdata('APImessage', $delete_file_infografis['message']);
                    redirect("pupr/instruktur_file");
                }
            }
        }else{
            redirect('pupr/login');
        }
    }

    public function delete_file_infografis_asesor($id_file_infografis){
        if($this->session->userdata('logged_in') == true){
            $delete_file_infografis = $this->Infografis_File_model->delete_infografis_file($id_file_infografis, $this->session->userdata('token'));
            echo var_dump($delete_infografis);
            if ($delete_file_infografis == null) {
                $this->load->view('error_page');
            } else {
                if ($delete_file_infografis['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete_file_infografis['message']);
                    redirect("pupr/asesor_file");
                } else {
                    $this->session->set_flashdata('APImessage', $delete_file_infografis['message']);
                    redirect("pupr/asesor_file");
                }
            }
        }else{
            redirect('pupr/login');
        }
    }

    public function delete_file_infografis_se_kepala_daerah($id_file_infografis){
        if($this->session->userdata('logged_in') == true){
            $delete_file_infografis = $this->Infografis_File_model->delete_infografis_file($id_file_infografis, $this->session->userdata('token'));
            echo var_dump($delete_infografis);
            if ($delete_file_infografis == null) {
                $this->load->view('error_page');
            } else {
                if ($delete_file_infografis['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete_file_infografis['message']);
                    redirect("pupr/se_kepala_daerah_file");
                } else {
                    $this->session->set_flashdata('APImessage', $delete_file_infografis['message']);
                    redirect("pupr/se_kepala_daerah_file");
                }
            }
        }else{
            redirect('pupr/login');
        }
    }
}