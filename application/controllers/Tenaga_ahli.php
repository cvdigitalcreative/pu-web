<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tenaga_ahli extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tenaga_Ahli_model');
        $this->load->model('Common_model');
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

            $data['total_tenaga_ahli'] = $this->Tenaga_Ahli_model->view_seluruh_tenaga_ahli(1, $this->session->userdata('token'));
            if ($data['total_tenaga_ahli'] == null)
                $null = true;
            else {
                if ($data['total_tenaga_ahli']['status'] == "Success")
                    $data['total_tenaga_ahli'] = count($data['total_tenaga_ahli']['data']);
                else
                    $data['total_tenaga_ahli'] = 0;
                $this->session->set_flashdata('APImessage', $data['total_tenaga_ahli']['message']);
            }
            $data['total_tenaga_terampil'] = $this->Tenaga_Ahli_model->view_seluruh_tenaga_ahli(2, $this->session->userdata('token'));
            if ($data['total_tenaga_terampil'] == null)
                $null = true;
            else {
                if ($data['total_tenaga_terampil']['status'] == "Success")
                    $data['total_tenaga_terampil'] = count($data['total_tenaga_terampil']['data']);
                else {
                    $data['total_tenaga_terampil'] = 0;
                    $this->session->set_flashdata('APImessage', $data['total_tenaga_terampil']['message']);
                }
            }

            // ====================== data for form =======================
            $data['jenis_kelamin'] = $this->Common_model->view_jenis_kelamin($this->session->userdata('token'));
            if ($data['jenis_kelamin'] == null)
                $null = true;
            else {
                if ($data['jenis_kelamin']['status'] == "Success")
                    $data['jenis_kelamin'] = $data['jenis_kelamin']['data'];
                else {
                    $data['jenis_kelamin'] = null;
                    $this->session->set_flashdata('APImessage', $data['jenis_kelamin']['message']);
                }
            }

            $data['provinsi'] = $this->Common_model->view_provinsi($this->session->userdata('token'));
            if ($data['provinsi'] == null)
                $null = true;
            else {
                if ($data['provinsi']['status'] == "Success")
                    $data['provinsi'] = $data['provinsi']['data'];
                else {
                    $data['provinsi'] = null;
                    $this->session->set_flashdata('APImessage', $data['provinsi']['message']);
                }
            }

            $data['jabker'] = $this->Common_model->view_jabker($this->session->userdata('token'));
            if ($data['jabker'] == null)
                $null = true;
            else {
                if ($data['jabker']['status'] == "Success")
                    $data['jabker'] = $data['jabker']['data'];
                else {
                    $data['jabker'] = null;
                    $this->session->set_flashdata('APImessage', $data['jabker']['message']);
                }
            }

            $data['kategori_tenaga_ahli'] = $this->Common_model->view_kategori_tenaga_ahli($this->session->userdata('token'));
            if ($data['kategori_tenaga_ahli'] == null)
                $null = true;
            else {
                if ($data['kategori_tenaga_ahli']['status'] == "Success")
                    $data['kategori_tenaga_ahli'] = $data['kategori_tenaga_ahli']['data'];
                else {
                    $data['kategori_tenaga_ahli'] = null;
                    $this->session->set_flashdata('APImessage', $data['kategori_tenaga_ahli']['message']);
                }
            }



            $this->load->view("administrator/experts", $data);

            if ($null)
                $this->load->view('error_page');
        } else
            redirect("pupr/login");
    }

    public function dataTenagaAhli()
    {
        if ($this->session->userdata('logged_in') == true) {
            $data['tenaga_ahli'] = $this->Tenaga_Ahli_model->view_seluruh_tenaga_ahli(1, $this->session->userdata('token'));
            if ($data['tenaga_ahli'] == null) {
                $callback = array(
                    'data' => []
                );
            } else {
                if ($data['tenaga_ahli']['status'] == "Success") {
                    if (count($data['tenaga_ahli']['data']) > 0) {
                        $data['tenaga_ahli'] = $data['tenaga_ahli']['data'];

                        $indexTenagaAhli = 0;
                        $noTenagaAhli = 1;

                        foreach ($data['tenaga_ahli'] as $val) {
                            $data['tenaga_ahli'][$indexTenagaAhli]['no_tenaga_ahli'] = $noTenagaAhli;

                            // ======================= tanggal lahir ================================
                            $data['tenaga_ahli'][$indexTenagaAhli]['tanggal_lahir_text'] = strtotime($val['tanggal_lahir']);
                            $data['tenaga_ahli'][$indexTenagaAhli]['tanggal_lahir_text'] = date("d F Y", $data['tenaga_ahli'][$indexTenagaAhli]['tanggal_lahir_text']);

                            if ($val['is_asesor'] == true && $val['is_instruktur'] == true)
                                $data['tenaga_ahli'][$indexTenagaAhli]['ketenagakerjaan'] = "Asesor & Instruktur";
                            else if ($val['is_asesor'] == true)
                                $data['tenaga_ahli'][$indexTenagaAhli]['ketenagakerjaan'] = "Asesor";
                            else if ($val['is_instruktur'] == true)
                                $data['tenaga_ahli'][$indexTenagaAhli]['ketenagakerjaan'] = "Instruktur";
                            else
                                $data['tenaga_ahli'][$indexTenagaAhli]['ketenagakerjaan'] = "-";

                            $data['tenaga_ahli'][$indexTenagaAhli]['keahlian'] = "";
                            $indexjabker = 0;
                            if (count($val['jabker']) != null) {
                                foreach ($val['jabker'] as $val2) {
                                    if ($indexjabker == 0)
                                        $data['tenaga_ahli'][$indexTenagaAhli]['keahlian'] = $val2['nama_jabker'];
                                    else
                                        $data['tenaga_ahli'][$indexTenagaAhli]['keahlian'] = $data['tenaga_ahli'][$indexTenagaAhli]['keahlian'] . ", " . $val2['nama_jabker'];
                                    $indexjabker++;
                                }
                            } else {
                                $data['tenaga_ahli'][$indexTenagaAhli]['keahlian'] = "-";
                            }
                            $indexTenagaAhli++;
                            $noTenagaAhli++;
                        }
                        $callback = array(
                            'data' => $data['tenaga_ahli']
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
    public function dataTenagaTerampil()
    {
        if ($this->session->userdata('logged_in') == true) {
            $data['tenaga_ahli'] = $this->Tenaga_Ahli_model->view_seluruh_tenaga_ahli(2, $this->session->userdata('token'));
            if ($data['tenaga_ahli'] == null) {
                $callback = array(
                    'data' => []
                );
            } else {
                if ($data['tenaga_ahli']['status'] == "Success") {
                    if (count($data['tenaga_ahli']['data']) > 0) {
                        $data['tenaga_ahli'] = $data['tenaga_ahli']['data'];

                        $indexTenagaAhli = 0;
                        $noTenagaAhli = 1;

                        foreach ($data['tenaga_ahli'] as $val) {
                            $data['tenaga_ahli'][$indexTenagaAhli]['no_tenaga_ahli'] = $noTenagaAhli;

                            // ======================= tanggal lahir ================================
                            $data['tenaga_ahli'][$indexTenagaAhli]['tanggal_lahir_text'] = strtotime($val['tanggal_lahir']);
                            $data['tenaga_ahli'][$indexTenagaAhli]['tanggal_lahir_text'] = date("d F Y", $data['tenaga_ahli'][$indexTenagaAhli]['tanggal_lahir_text']);

                            if ($val['is_asesor'] == true && $val['is_instruktur'] == true)
                                $data['tenaga_ahli'][$indexTenagaAhli]['ketenagakerjaan'] = "Asesor & Instruktur";
                            else if ($val['is_asesor'] == true)
                                $data['tenaga_ahli'][$indexTenagaAhli]['ketenagakerjaan'] = "Asesor";
                            else if ($val['is_instruktur'] == true)
                                $data['tenaga_ahli'][$indexTenagaAhli]['ketenagakerjaan'] = "Instruktur";
                            else
                                $data['tenaga_ahli'][$indexTenagaAhli]['ketenagakerjaan'] = "-";


                            $data['tenaga_ahli'][$indexTenagaAhli]['keahlian'] = "";
                            $indexjabker = 0;
                            if (count($val['jabker']) != null) {
                                foreach ($val['jabker'] as $val2) {
                                    if ($indexjabker == 0)
                                        $data['tenaga_ahli'][$indexTenagaAhli]['keahlian'] = $val2['nama_jabker'];
                                    else
                                        $data['tenaga_ahli'][$indexTenagaAhli]['keahlian'] = $data['tenaga_ahli'][$indexTenagaAhli]['keahlian'] . ", " . $val2['nama_jabker'];
                                    $indexjabker++;
                                }
                            } else {
                                $data['tenaga_ahli'][$indexTenagaAhli]['keahlian'] = "-";
                            }

                            $indexTenagaAhli++;
                            $noTenagaAhli++;
                        }
                        $callback = array(
                            'data' => $data['tenaga_ahli']
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

    public function daerah($id_provinsi, $id_kategori_tenaga_ahli)
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

            $data['tenaga_ahli'] = $this->Tenaga_Ahli_model->view_tenaga_ahli_by_provinsi($id_provinsi, $id_kategori_tenaga_ahli, $this->session->userdata('token'));
            if ($data['tenaga_ahli'] == null)
                $null = true;
            else {
                if ($data['tenaga_ahli']['status'] == "Success") {
                    $data['tenaga_ahli'] = $data['tenaga_ahli']['data'];
                } else {
                    $data['tenaga_ahli'] = null;
                    $this->session->set_flashdata('APImessage', $data['tenaga_ahli']['message']);
                }
            }

            if ($null)
                $this->load->view('error_page');
        } else
            redirect("pupr/login");
    }

    public function detail($id_tenaga_ahli)
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

            $data['tenaga_ahli'] = $this->Tenaga_Ahli_model->view_detail_tenaga_ahli($id_tenaga_ahli, $this->session->userdata('token'));
            if ($data['tenaga_ahli'] == null)
                $null = true;
            else {
                if ($data['tenaga_ahli']['status'] == "Success") {
                    $data['tenaga_ahli'] = $data['tenaga_ahli']['data'];
                } else {
                    $data['tenaga_ahli'] = null;
                    $this->session->set_flashdata('APImessage', $data['tenaga_ahli']['message']);
                }
            }

            if ($null)
                $this->load->view('error_page');
        } else
            redirect("pupr/login");
    }

    public function tambah_tenaga_ahli_action()
    {
        if ($this->session->userdata('logged_in') == true) {
            $nama_lengkap = $this->input->post('nama_lengkap_tenaga_ahli');
            $tempat_lahir = $this->input->post('tempat_lahir_tenaga_ahli');
            $tanggal_lahir = $this->input->post('tanggal_lahir_tenaga_ahli');
            $temparr = explode('/', $tanggal_lahir);
            $tempbulan = $temparr[0];
            $temphari = $temparr[1];
            $temptahun = $temparr[2];
            $arrtemptanggal[0] = $temptahun;
            $arrtemptanggal[1] = $tempbulan;
            $arrtemptanggal[2] = $temphari;
            $tanggal_lahir = implode('-', $arrtemptanggal);
            $id_jenis_kelamin = $this->input->post('id_jenis_kelamin_tenaga_ahli');
            $nik = $this->input->post('nik_tenaga_ahli');
            $email = $this->input->post('email_tenaga_ahli');
            $alamat_rumah = $this->input->post('alamat_tenaga_ahli');
            $id_provinsi = $this->input->post('id_provinsi_tenaga_ahli');
            $id_kabupaten_kota = $this->input->post('id_kota_kabupaten_tenaga_ahli');
            $no_telepon_rumah = $this->input->post('nomor_rumah_tenaga_ahli');
            $no_handphone = $this->input->post('nomor_handphone_tenaga_ahli');
            $id_jabker = $this->input->post('id_jabatan_kerja_tenaga_ahli');
            if (count($id_jabker) == 1)
                $id_jabker = $id_jabker[0];
            else
                $id_jabker = '[' . implode(',', $id_jabker) . ']';
            $id_kategori_tenaga_ahli = $this->input->post('kategori_tenaga_ahli');
            $is_instruktur = $this->input->post('is_instruktur');
            if ($is_instruktur == 1)
                $is_instruktur = true;
            else
                $is_instruktur = false;
            $is_asesor = $this->input->post('is_asesor');
            if ($is_asesor == 1)
                $is_asesor = true;
            else
                $is_asesor = false;

            $tambah_tenaga_ahli = $this->Tenaga_Ahli_model->add_tenaga_ahli(
                $nama_lengkap,
                $tempat_lahir,
                $tanggal_lahir,
                $id_jenis_kelamin,
                $nik,
                $email,
                $alamat_rumah,
                $id_provinsi,
                $id_kabupaten_kota,
                $no_telepon_rumah,
                $no_handphone,
                $id_jabker,
                $id_kategori_tenaga_ahli,
                $is_instruktur,
                $is_asesor,
                $this->session->userdata('token')
            );

            if ($tambah_tenaga_ahli == null) {
                $this->load->view('error_page');
            }
            if ($tambah_tenaga_ahli['status'] == "Success") {
                $this->session->set_flashdata('success', $tambah_tenaga_ahli['message']);
                redirect('pupr/experts');
            } else {
                $this->session->set_flashdata('APImessage', $tambah_tenaga_ahli['message']);
                redirect('pupr/experts');
            }
        } else {
            redirect("pupr/login");
        }
    }

    public function edit_tenaga_ahli_action($id_tenaga_ahli)
    {
        if ($this->session->userdata('logged_in') == true) {
            $nama_lengkap = $this->input->post('edit_nama_lengkap_tenaga_ahli');
            $tempat_lahir = $this->input->post('edit_tempat_lahir_tenaga_ahli');
            $tanggal_lahir = $this->input->post('edit_tanggal_lahir_tenaga_ahli');
            $temparr = explode('/', $tanggal_lahir);
            $tempbulan = $temparr[0];
            $temphari = $temparr[1];
            $temptahun = $temparr[2];
            $arrtemptanggal[0] = $temptahun;
            $arrtemptanggal[1] = $tempbulan;
            $arrtemptanggal[2] = $temphari;
            $tanggal_lahir = implode('-', $arrtemptanggal);
            $id_jenis_kelamin = $this->input->post('edit_id_jenis_kelamin_tenaga_ahli');
            $nik = $this->input->post('edit_nik_tenaga_ahli');
            $email = $this->input->post('edit_email_tenaga_ahli');
            $alamat_rumah = $this->input->post('edit_alamat_tenaga_ahli');
            $id_provinsi = $this->input->post('edit_id_provinsi_tenaga_ahli');
            $id_kabupaten_kota = $this->input->post('edit_id_kota_kabupaten_tenaga_ahli');
            $no_telepon_rumah = $this->input->post('edit_nomor_rumah_tenaga_ahli');
            $no_handphone = $this->input->post('edit_nomor_handphone_tenaga_ahli');
            $id_jabker = $this->input->post('edit_id_jabatan_kerja_tenaga_ahli');
            if (count($id_jabker) == 1)
                $id_jabker = $id_jabker[0];
            else
                $id_jabker = '[' . implode(',', $id_jabker) . ']';
            $id_kategori_tenaga_ahli = $this->input->post('edit_kategori_tenaga_ahli');
            $is_instruktur = $this->input->post('edit_is_instruktur');
            if ($is_instruktur == 1)
                $is_instruktur = true;
            else
                $is_instruktur = false;
            $is_asesor = $this->input->post('edit_is_asesor');
            if ($is_asesor == 1)
                $is_asesor = true;
            else
                $is_asesor = false;

            $edit_tenaga_ahli = $this->Tenaga_Ahli_model->edit_tenaga_ahli(
                $nama_lengkap,
                $tempat_lahir,
                $tanggal_lahir,
                $id_jenis_kelamin,
                $nik,
                $email,
                $alamat_rumah,
                $id_provinsi,
                $id_kabupaten_kota,
                $no_telepon_rumah,
                $no_handphone,
                $id_jabker,
                $id_kategori_tenaga_ahli,
                $is_instruktur,
                $is_asesor,
                $id_tenaga_ahli,
                $this->session->userdata('token')
            );

            if ($edit_tenaga_ahli == null) {
                $this->load->view('error_page');
            }
            if ($edit_tenaga_ahli['status'] == "Success") {
                $this->session->set_flashdata('success', $edit_tenaga_ahli['message']);
                redirect('pupr/experts');
            } else {
                $this->session->set_flashdata('APImessage', $edit_tenaga_ahli['message']);
                redirect('pupr/experts');
            }
        } else {
            redirect("pupr/login");
        }
    }

    public function delete_tenaga_ahli($id_tenaga_ahli)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete_tenaga_ahli = $this->Tenaga_Ahli_model->delete_tenaga_ahli($id_tenaga_ahli, $this->session->userdata('token'));
            if ($delete_tenaga_ahli == null) {
                $this->load->view('error_page');
            } else {
                if ($delete_tenaga_ahli['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete_tenaga_ahli['message']);
                    redirect('pupr/experts');
                } else {
                    $this->session->set_flashdata('APImessage', $delete_tenaga_ahli['message']);
                    redirect('pupr/experts');
                }
            }
        } else
            redirect("pupr/login");
    }

    public function delete_jabatan_kerja($id_jabker)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete_jabatan_kerja = $this->Tenaga_Ahli_model->delete_jabatan_kerja($id_jabker, $this->session->userdata('token'));
            if ($delete_jabatan_kerja == null) {
                $this->load->view('error_page');
            } else {
                if ($delete_jabatan_kerja['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete_jabatan_kerja['message']);
                    redirect();
                } else {
                    $this->session->set_flashdata('APImessage', $delete_jabatan_kerja['message']);
                    redirect();
                }
            }
        } else
            redirect("pupr/login");
    }

    public function export_tenaga_ahli_action($kategori)
    {
        if ($this->session->userdata('logged_in') == true) {
            // Load plugin PHPExcel nya
            include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

            // Panggil class PHPExcel nya
            $excel = new PHPExcel();
            // Settingan awal fil excel
            if ($kategori == 0) {
                $excel->getProperties()->setCreator('Administrator')
                    ->setLastModifiedBy('Administrator')
                    ->setTitle("Export Seluruh Tenaga Ahli & Mitra Terampil")
                    ->setSubject("Kegiatan")
                    ->setDescription("Data Seluruh Tenaga Ahli & Mitra Terampil")
                    ->setKeywords("Data Seluruh Tenaga Ahli & Mitra Terampil");
            } else if ($kategori == 1) {
                $excel->getProperties()->setCreator('Administrator')
                    ->setLastModifiedBy('Administrator')
                    ->setTitle("Export Seluruh Tenaga Ahli")
                    ->setSubject("Kegiatan")
                    ->setDescription("Data Seluruh Tenaga Ahli")
                    ->setKeywords("Data Seluruh Tenaga Ahli");
            } else if ($kategori == 2) {
                $excel->getProperties()->setCreator('Administrator')
                    ->setLastModifiedBy('Administrator')
                    ->setTitle("Export Seluruh Mitra Terampil")
                    ->setSubject("Kegiatan")
                    ->setDescription("Data Seluruh Mitra Terampil")
                    ->setKeywords("Data Seluruh Mitra Terampil");
            }

            // Buat sebuah variabel untuk menampung pengaturan style dari header tabel

            $style_header = array(
                'font' => array(
                    'bold' => true,
                    'name'  => 'Times New Roman'
                )
            );
            $style_col = array(
                'font' => array('bold' => true), // Set font nya jadi bold
                'alignment' => array(
                    'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER, // Set text jadi ditengah secara horizontal (center)
                    'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER // Set text jadi di tengah secara vertical (middle)
                ),
                'borders' => array(
                    'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
                    'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
                    'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
                    'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
                ),
                'fill' => array(
                    'type' => PHPExcel_Style_Fill::FILL_SOLID,
                    'color' => array('rgb' => 'FFE033')
                ),
                'font'  => array(
                    'name'  => 'Times New Roman'
                )
            );
            // Buat sebuah variabel untuk menampung pengaturan style dari isi tabel
            $style_row_center_horizontal = array(
                'alignment' => array(
                    'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, // Set text jadi di tengah secara vertical (middle)
                    'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER // Set text jadi di tengah secara Horizontal (middle)
                ),
                'borders' => array(
                    'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
                    'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
                    'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
                    'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
                ),
                'font'  => array(
                    'name'  => 'Times New Roman'
                )
            );

            $style_row_not_center_horizontal = array(
                'alignment' => array(
                    'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER, // Set text jadi di tengah secara vertical (middle)
                ),
                'borders' => array(
                    'top' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border top dengan garis tipis
                    'right' => array('style'  => PHPExcel_Style_Border::BORDER_THIN),  // Set border right dengan garis tipis
                    'bottom' => array('style'  => PHPExcel_Style_Border::BORDER_THIN), // Set border bottom dengan garis tipis
                    'left' => array('style'  => PHPExcel_Style_Border::BORDER_THIN) // Set border left dengan garis tipis
                ),
                'font'  => array(
                    'name'  => 'Times New Roman'
                )
            );

            if ($kategori == 0)
                $excel->setActiveSheetIndex(0)->setCellValue('A1', "Data Seluruh Tenaga Ahli & Mitra Terampil " . date('d M Y')); // Set kolom A1
            else if ($kategori == 1)
                $excel->setActiveSheetIndex(0)->setCellValue('A1', "Data Seluruh Tenaga Ahli " . date('d M Y')); // Set kolom A1
            else if ($kategori == 2)
                $excel->setActiveSheetIndex(0)->setCellValue('A1', "Data Seluruh Mitra Terampil " . date('d M Y')); // Set kolom A1
            $excel->getActiveSheet()->mergeCells('A1:N1'); // Set Merge Cell pada kolom A1 sampai L1
            $excel->getActiveSheet()->getStyle('1')->getFont()->setBold(TRUE); // Set bold kolom A1
            $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
            $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
            $excel->getActiveSheet()->getStyle('A1')->applyFromArray($style_header); //set font face
            // Buat header tabel nya pada baris ke 3
            $excel->setActiveSheetIndex(0)->setCellValue('A3', "NO");
            $excel->setActiveSheetIndex(0)->setCellValue('B3', "NAMA");
            $excel->setActiveSheetIndex(0)->setCellValue('C3', "JENIS KELAMIN");
            $excel->setActiveSheetIndex(0)->setCellValue('D3', "TEMPAT LAHIR");
            $excel->setActiveSheetIndex(0)->setCellValue('E3', "TANGGAL LAHIR");
            $excel->setActiveSheetIndex(0)->setCellValue('F3', "EMAIL");
            $excel->setActiveSheetIndex(0)->setCellValue('G3', "NOMOR HANDPHONE");
            $excel->setActiveSheetIndex(0)->setCellValue('H3', "NOMOR RUMAH");
            $excel->setActiveSheetIndex(0)->setCellValue('I3', "NIK");
            $excel->setActiveSheetIndex(0)->setCellValue('J3', "ALAMAT");
            $excel->setActiveSheetIndex(0)->setCellValue('K3', "PROVINSI");
            $excel->setActiveSheetIndex(0)->setCellValue('L3', "KOTA/KABUPATEN");
            $excel->setActiveSheetIndex(0)->setCellValue('M3', "KETENAGAKERJAAN");
            $excel->setActiveSheetIndex(0)->setCellValue('N3', "KEAHLIAN");
            // Apply style header yang telah kita buat tadi ke masing-masing kolom header
            $excel->getActiveSheet()->getStyle('A3')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('B3')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('C3')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('D3')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('E3')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('F3')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('G3')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('H3')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('I3')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('J3')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('K3')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('L3')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('M3')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('N3')->applyFromArray($style_col);



            //get data
            if ($kategori == 0) {
                $data['tenaga_ahli'] = $this->Tenaga_Ahli_model->view_seluruh_tenaga_ahli(1, $this->session->userdata('token'));
                if ($data['tenaga_ahli']['status'] == "Success") {
                    $indexTambah = count($data['tenaga_ahli']['data']) - 1;
                    $data['tenaga_terampil'] = $this->Tenaga_Ahli_model->view_seluruh_tenaga_ahli(2, $this->session->userdata('token'));
                    if ($data['tenaga_terampil']['status'] == "Success") {
                        if ($data['tenaga_terampil']['data'] != null) {
                            $data['tenaga_ahli']['data'] = array_merge($data['tenaga_ahli']['data'], $data['tenaga_terampil']['data']);
                        }
                    }

                    if (count($data['tenaga_ahli']['data']) > 0) {
                        $data['tenaga_ahli'] = $data['tenaga_ahli']['data'];
                        $indexTenagaAhli = 0;
                        $noTenagaAhli = 1;
                        foreach ($data['tenaga_ahli'] as $val) {
                            $data['tenaga_ahli'][$indexTenagaAhli]['no_tenaga_ahli'] = $noTenagaAhli;

                            // ======================= tanggal lahir ================================
                            $data['tenaga_ahli'][$indexTenagaAhli]['tanggal_lahir_text'] = strtotime($val['tanggal_lahir']);
                            $data['tenaga_ahli'][$indexTenagaAhli]['tanggal_lahir_text'] = date("d F Y", $data['tenaga_ahli'][$indexTenagaAhli]['tanggal_lahir_text']);

                            if ($val['is_asesor'] == true && $val['is_instruktur'] == true)
                                $data['tenaga_ahli'][$indexTenagaAhli]['ketenagakerjaan'] = "Asesor & Instruktur";
                            else if ($val['is_asesor'] == true)
                                $data['tenaga_ahli'][$indexTenagaAhli]['ketenagakerjaan'] = "Asesor";
                            else if ($val['is_instruktur'] == true)
                                $data['tenaga_ahli'][$indexTenagaAhli]['ketenagakerjaan'] = "Instruktur";
                            else
                                $data['tenaga_ahli'][$indexTenagaAhli]['ketenagakerjaan'] = "-";


                            $data['tenaga_ahli'][$indexTenagaAhli]['keahlian'] = "";
                            $indexjabker = 0;
                            if (count($val['jabker']) != null) {
                                foreach ($val['jabker'] as $val2) {
                                    if ($indexjabker == 0)
                                        $data['tenaga_ahli'][$indexTenagaAhli]['keahlian'] = $val2['nama_jabker'];
                                    else
                                        $data['tenaga_ahli'][$indexTenagaAhli]['keahlian'] = $data['tenaga_ahli'][$indexTenagaAhli]['keahlian'] . ", " . $val2['nama_jabker'];
                                    $indexjabker++;
                                }
                            } else {
                                $data['tenaga_ahli'][$indexTenagaAhli]['keahlian'] = "-";
                            }

                            $indexTenagaAhli++;
                            $noTenagaAhli++;
                        }
                    } else {
                        $data['tenaga_ahli'] = null;
                    }
                }
            } else if ($kategori == 1) {
                $data['tenaga_ahli'] = $this->Tenaga_Ahli_model->view_seluruh_tenaga_ahli(1, $this->session->userdata('token'));
                if ($data['tenaga_ahli']['status'] == "Success") {
                    if (count($data['tenaga_ahli']['data']) > 0) {
                        $data['tenaga_ahli'] = $data['tenaga_ahli']['data'];
                        $indexTenagaAhli = 0;
                        $noTenagaAhli = 1;
                        foreach ($data['tenaga_ahli'] as $val) {
                            $data['tenaga_ahli'][$indexTenagaAhli]['no_tenaga_ahli'] = $noTenagaAhli;

                            // ======================= tanggal lahir ================================
                            $data['tenaga_ahli'][$indexTenagaAhli]['tanggal_lahir_text'] = strtotime($val['tanggal_lahir']);
                            $data['tenaga_ahli'][$indexTenagaAhli]['tanggal_lahir_text'] = date("d F Y", $data['tenaga_ahli'][$indexTenagaAhli]['tanggal_lahir_text']);

                            if ($val['is_asesor'] == true && $val['is_instruktur'] == true)
                                $data['tenaga_ahli'][$indexTenagaAhli]['ketenagakerjaan'] = "Asesor & Instruktur";
                            else if ($val['is_asesor'] == true)
                                $data['tenaga_ahli'][$indexTenagaAhli]['ketenagakerjaan'] = "Asesor";
                            else if ($val['is_instruktur'] == true)
                                $data['tenaga_ahli'][$indexTenagaAhli]['ketenagakerjaan'] = "Instruktur";
                            else
                                $data['tenaga_ahli'][$indexTenagaAhli]['ketenagakerjaan'] = "-";


                            $data['tenaga_ahli'][$indexTenagaAhli]['keahlian'] = "";
                            $indexjabker = 0;
                            if (count($val['jabker']) != null) {
                                foreach ($val['jabker'] as $val2) {
                                    if ($indexjabker == 0)
                                        $data['tenaga_ahli'][$indexTenagaAhli]['keahlian'] = $val2['nama_jabker'];
                                    else
                                        $data['tenaga_ahli'][$indexTenagaAhli]['keahlian'] = $data['tenaga_ahli'][$indexTenagaAhli]['keahlian'] . ", " . $val2['nama_jabker'];
                                    $indexjabker++;
                                }
                            } else {
                                $data['tenaga_ahli'][$indexTenagaAhli]['keahlian'] = "-";
                            }

                            $indexTenagaAhli++;
                            $noTenagaAhli++;
                        }
                    } else {
                        $data['tenaga_ahli'] = null;
                    }
                }
            } else if ($kategori == 2) {
                $data['tenaga_ahli'] = $this->Tenaga_Ahli_model->view_seluruh_tenaga_ahli(2, $this->session->userdata('token'));
                if ($data['tenaga_ahli']['status'] == "Success") {
                    if (count($data['tenaga_ahli']['data']) > 0) {
                        $data['tenaga_ahli'] = $data['tenaga_ahli']['data'];
                        $indexTenagaAhli = 0;
                        $noTenagaAhli = 1;
                        foreach ($data['tenaga_ahli'] as $val) {
                            $data['tenaga_ahli'][$indexTenagaAhli]['no_tenaga_ahli'] = $noTenagaAhli;

                            // ======================= tanggal lahir ================================
                            $data['tenaga_ahli'][$indexTenagaAhli]['tanggal_lahir_text'] = strtotime($val['tanggal_lahir']);
                            $data['tenaga_ahli'][$indexTenagaAhli]['tanggal_lahir_text'] = date("d F Y", $data['tenaga_ahli'][$indexTenagaAhli]['tanggal_lahir_text']);

                            if ($val['is_asesor'] == true && $val['is_instruktur'] == true)
                                $data['tenaga_ahli'][$indexTenagaAhli]['ketenagakerjaan'] = "Asesor & Instruktur";
                            else if ($val['is_asesor'] == true)
                                $data['tenaga_ahli'][$indexTenagaAhli]['ketenagakerjaan'] = "Asesor";
                            else if ($val['is_instruktur'] == true)
                                $data['tenaga_ahli'][$indexTenagaAhli]['ketenagakerjaan'] = "Instruktur";
                            else
                                $data['tenaga_ahli'][$indexTenagaAhli]['ketenagakerjaan'] = "-";


                            $data['tenaga_ahli'][$indexTenagaAhli]['keahlian'] = "";
                            $indexjabker = 0;
                            if (count($val['jabker']) != null) {
                                foreach ($val['jabker'] as $val2) {
                                    if ($indexjabker == 0)
                                        $data['tenaga_ahli'][$indexTenagaAhli]['keahlian'] = $val2['nama_jabker'];
                                    else
                                        $data['tenaga_ahli'][$indexTenagaAhli]['keahlian'] = $data['tenaga_ahli'][$indexTenagaAhli]['keahlian'] . ", " . $val2['nama_jabker'];
                                    $indexjabker++;
                                }
                            } else {
                                $data['tenaga_ahli'][$indexTenagaAhli]['keahlian'] = "-";
                            }

                            $indexTenagaAhli++;
                            $noTenagaAhli++;
                        }
                    } else {
                        $data['tenaga_ahli'] = null;
                    }
                }
            }
            
            $no = 1; // Untuk penomoran tabel, di awal set dengan 1
            $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
            if ($data['tenaga_ahli'] != null) {
                foreach ($data['tenaga_ahli'] as $val) { // Lakukan looping
                    $excel->setActiveSheetIndex(0)->setCellValue('A' . $numrow, $no);
                    $excel->setActiveSheetIndex(0)->setCellValue('B' . $numrow, $val['nama_lengkap']);
                    $excel->setActiveSheetIndex(0)->setCellValue('C' . $numrow, $val['jenis_kelamin']);
                    $excel->setActiveSheetIndex(0)->setCellValue('D' . $numrow, $val['tempat_lahir']);
                    $excel->setActiveSheetIndex(0)->setCellValue('E' . $numrow, $val['tanggal_lahir_text']);
                    $excel->setActiveSheetIndex(0)->setCellValue('F' . $numrow, $val['email']);
                    $excel->getActiveSheet()->setCellValueExplicit('G' . $numrow, $val['no_handphone'],  PHPExcel_Cell_DataType::TYPE_STRING);
                    $excel->getActiveSheet()->setCellValueExplicit('H' . $numrow, $val['no_telpon_rumah'],  PHPExcel_Cell_DataType::TYPE_STRING);
                    $excel->getActiveSheet()->setCellValueExplicit('I' . $numrow, $val['nik'],  PHPExcel_Cell_DataType::TYPE_STRING);
                    $excel->setActiveSheetIndex(0)->setCellValue('J' . $numrow, $val['alamat_rumah']);
                    $excel->setActiveSheetIndex(0)->setCellValue('K' . $numrow, $val['provinsi']);
                    $excel->setActiveSheetIndex(0)->setCellValue('L' . $numrow, $val['kabupaten_kota']);
                    $excel->setActiveSheetIndex(0)->setCellValue('M' . $numrow, $val['ketenagakerjaan']);
                    $excel->setActiveSheetIndex(0)->setCellValue('N' . $numrow, $val['keahlian']);

                    // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
                    $excel->getActiveSheet()->getStyle('A' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('B' . $numrow)->applyFromArray($style_row_not_center_horizontal);
                    $excel->getActiveSheet()->getStyle('C' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('D' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('E' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('F' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('G' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('H' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('I' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('J' . $numrow)->applyFromArray($style_row_not_center_horizontal);
                    $excel->getActiveSheet()->getStyle('K' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('L' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('M' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('N' . $numrow)->applyFromArray($style_row_not_center_horizontal);
                    
                    $no++; // Tambah 1 setiap kali looping
                    $numrow++; // Tambah 1 setiap kali looping
                }
                // Set width kolom
                foreach (range('B', 'N') as $columnID) {
                    $excel->getActiveSheet()->getColumnDimension($columnID)
                        ->setAutoSize(true);
                }
            } else {
                $excel->setActiveSheetIndex(0)->setCellValue('A4', "Tidak ada kegiatan"); // Set kolom A4
                $excel->getActiveSheet()->mergeCells('A4:N4'); // Set Merge Cell pada kolom A4 sampai L4
                $excel->getActiveSheet()->getStyle('A4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
                foreach (range('B', 'N') as $columnID) {
                    $excel->getActiveSheet()->getColumnDimension($columnID)
                        ->setAutoSize(true);
                }
            }
            // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
            $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
            // Set orientasi kertas jadi LANDSCAPE
            $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
            // Set judul file excel nya
            $excel->getActiveSheet(0)->setTitle("Data Tenaga");
            $excel->setActiveSheetIndex(0);
            // Proses file excel
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            if ($kategori == 0)
                header('Content-Disposition: attachment; filename="Data Seluruh Tenaga Ahli & Mitra Terampil.xlsx"'); // Set nama file excel nya
            else if ($kategori == 1)
                header('Content-Disposition: attachment; filename="Data Seluruh Tenaga Ahli.xlsx"'); // Set nama file excel nya
            else if ($kategori == 2)
                header('Content-Disposition: attachment; filename="Data Seluruh Mitra Terampil.xlsx"'); // Set nama file excel nya
            header('Cache-Control: max-age=0');
            $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
            $write->save('php://output');
        } else
            redirect('pupr/login');
    }

    public function download_format_excel_action()
    {
        if ($this->session->userdata('logged_in') == true) {
            $this->load->helper('download');
            force_download('./assets/docs/Format Tenaga Ahli.xlsx', NULL);
        } else
            redirect('pupr/login');
    }
}
