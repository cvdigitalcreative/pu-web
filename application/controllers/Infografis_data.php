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
                redirect("pupr/mitra");
            } else {
                $this->session->set_flashdata('APImessage', $tambah_infografis_file['message']);
                redirect("pupr/mitra");
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
                    redirect('pupr/mitra');
                } else if($add['status'] == "Error"){
                    $this->session->set_flashdata('gagal', $add['message']);
                    redirect('pupr/mitra');
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
                redirect("pupr/mitra");
            } else {
                $this->session->set_flashdata('APImessage', $edit_file_infografis['message']);
                redirect("pupr/mitra");
            }
        } else {
            redirect("pupr/login");
        }
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

}