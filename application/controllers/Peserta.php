<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peserta extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Peserta_model');
        $this->load->model('Peserta_Kegiatan_model');
        $this->load->model('Common_model');
        $this->load->model('Kegiatan_model');
        $this->load->model('User_model');
    }

    public function dataPeserta($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $data['peserta'] = $this->Peserta_model->view_seluruh_peserta($id_kegiatan, $this->session->userdata('token'));
            if ($data['peserta'] == null) {
                $callback = array(
                    'data' => []
                );
            } else {
                if ($data['peserta']['status'] == "Success") {
                    if (count($data['peserta']['data']) > 0) {
                        $data['peserta'] = $data['peserta']['data'];

                        $indexPeserta = 0;
                        $noPeserta = 1;
                        foreach ($data['peserta'] as $val) {
                            $data['peserta'][$indexPeserta]['no_peserta'] = $noPeserta;
                            $data['peserta'][$indexPeserta]['tanggal_lahir_text'] = strtotime($val['tanggal_lahir']);
                            $data['peserta'][$indexPeserta]['tanggal_lahir_text'] = date("d F Y", $data['peserta'][$indexPeserta]['tanggal_lahir_text']);

                            $data['peserta'][$indexPeserta]['tempat_tanggal_lahir'] = $val['tempat_lahir'] . ', ' . $data['peserta'][$indexPeserta]['tanggal_lahir_text'];


                            $indexPeserta++;
                            $noPeserta++;
                        }
                        $callback = array(
                            'data' => $data['peserta']
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

    public function daerah($id_provinsi)
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

            $data['peserta'] = $this->Peserta_model->view_peserta_daerah($id_provinsi, $this->session->userdata('token'));
            if ($data['peserta'] == null)
                $null = true;
            else {
                if ($data['peserta']['status'] == "Success") {
                    $data['peserta'] = $data['peserta']['data'];
                } else {
                    $data['peserta'] = null;
                    $this->session->set_flashdata('APImessage', $data['peserta']['message']);
                }
            }

            if ($null)
                $this->load->view('error_page');
        } else
            redirect("pupr/login");
    }

    public function detail($id_user)
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

            $data['peserta'] = $this->Peserta_model->view_detail_peserta($id_user, $this->session->userdata('token'));
            if ($data['peserta'] == null)
                $null = true;
            else {
                if ($data['peserta']['status'] == "Success") {
                    $data['peserta'] = $data['peserta']['data'];
                } else {
                    $data['peserta'] = null;
                    $this->session->set_flashdata('APImessage', $data['peserta']['message']);
                }
            }

            if ($null)
                $this->load->view('error_page');
        } else
            redirect("pupr/login");
    }

    public function tambah_peserta_action()
    {
        if ($this->session->userdata('logged_in') == true) {
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $no_telpon = $this->input->post('no_telpon');
            $id_provinsi = $this->input->post('id_provinsi');
            $id_kota_kabupaten = $this->input->post('id_kota_kabupaten');
            $id_kecamatan = $this->input->post('id_kecamatan');
            $id_kelurahan = $this->input->post('id_kelurahan');
            $id_jenis_kelamin = $this->input->post('id_jenis_kelamin');
            $id_status_perkawinan = $this->input->post('id_status_perkawinan');
            $nama_perusahaan = $this->input->post('nama_perusahaan');
            $jabatan = $this->input->post('jabatan');
            $utusan = $this->input->post('utusan');
            $alamat_rumah = $this->input->post('alamat_rumah');
            $nik = $this->input->post('nik');
            $rt = $this->input->post('rt');
            $rw = $this->input->post('rw');
            $kode_pos = $this->input->post('kode_pos');
            $kode_area = $this->input->post('kode_area');
            $no_handphone = $this->input->post('no_handphone');
            $id_status_rumah = $this->input->post('id_status_rumah');
            $id_pendidikan = $this->input->post('id_pendidikan');
            $id_jabker = $this->input->post('id_jabker');
            $id_kompetensi = $this->input->post('id_kompetensi');
            // $no_sertifikat = $this->input->post('no_sertifikat');
            $file_foto_profil = new \CurlFile($_FILES['file_foto_profil']['tmp_name'], $_FILES['file_foto_profil']['type'], $_FILES['file_foto_profil']['name']);

            $tambah_peserta = $this->Peserta_model->add_peserta(
                $nama,
                $email,
                $no_telpon,
                $id_provinsi,
                $id_kota_kabupaten,
                $id_kecamatan,
                $id_kelurahan,
                $id_jenis_kelamin,
                $id_status_perkawinan,
                $nama_perusahaan,
                $jabatan,
                $utusan,
                $alamat_rumah,
                $nik,
                $rt,
                $rw,
                $kode_pos,
                $kode_area,
                $no_handphone,
                $id_status_rumah,
                $id_pendidikan,
                $id_jabker,
                $id_kompetensi,
                // $no_sertifikat,
                $file_foto_profil,
                $this->session->userdata('token')
            );

            if ($tambah_peserta == null) {
                $this->load->view('error_page');
            }
            if ($tambah_peserta['status'] == "Success") {
                $this->session->set_flashdata('success', $tambah_peserta['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $tambah_peserta['message']);
                redirect();
            }
        } else {
            redirect("pupr/login");
        }
    }

    public function edit_peserta_action($id_user)
    {
        if ($this->session->userdata('logged_in') == true) {
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $no_telpon = $this->input->post('no_telpon');
            $id_provinsi = $this->input->post('id_provinsi');
            $id_kota_kabupaten = $this->input->post('id_kota_kabupaten');
            $id_kecamatan = $this->input->post('id_kecamatan');
            $id_kelurahan = $this->input->post('id_kelurahan');
            $id_jenis_kelamin = $this->input->post('id_jenis_kelamin');
            $id_status_perkawinan = $this->input->post('id_status_perkawinan');
            $nama_perusahaan = $this->input->post('nama_perusahaan');
            $jabatan = $this->input->post('jabatan');
            $utusan = $this->input->post('utusan');
            $alamat_rumah = $this->input->post('alamat_rumah');
            $nik = $this->input->post('nik');
            $rt = $this->input->post('rt');
            $rw = $this->input->post('rw');
            $kode_pos = $this->input->post('kode_pos');
            $kode_area = $this->input->post('kode_area');
            $no_handphone = $this->input->post('no_handphone');
            $id_status_rumah = $this->input->post('id_status_rumah');
            $id_pendidikan = $this->input->post('id_pendidikan');
            $id_jabker = $this->input->post('id_jabker');
            $id_kompetensi = $this->input->post('id_kompetensi');
            // $no_sertifikat = $this->input->post('no_sertifikat');
            $file_foto_profil = new \CurlFile($_FILES['file_foto_profil']['tmp_name'], $_FILES['file_foto_profil']['type'], $_FILES['file_foto_profil']['name']);

            $edit_peserta = $this->Peserta_model->edit_peserta(
                $nama,
                $email,
                $no_telpon,
                $id_provinsi,
                $id_kota_kabupaten,
                $id_kecamatan,
                $id_kelurahan,
                $id_jenis_kelamin,
                $id_status_perkawinan,
                $nama_perusahaan,
                $jabatan,
                $utusan,
                $alamat_rumah,
                $nik,
                $rt,
                $rw,
                $kode_pos,
                $kode_area,
                $no_handphone,
                $id_status_rumah,
                $id_pendidikan,
                $id_jabker,
                $id_kompetensi,
                // $no_sertifikat,
                $file_foto_profil,
                $id_user,
                $this->session->userdata('token')
            );

            if ($edit_peserta == null) {
                $this->load->view('error_page');
            }
            if ($edit_peserta['status'] == "Success") {
                $this->session->set_flashdata('success', $edit_peserta['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $edit_peserta['message']);
                redirect();
            }
        } else {
            redirect("pupr/login");
        }
    }

    public function edit_peserta_kegiatan_action($id_jadwal_kegiatan, $id_peserta)
    {
        if ($this->session->userdata('logged_in') == true) {
            $id_status_peserta_kegiatan = $this->input->post('id_status_peserta_kegiatan');
            $id_status_peserta_kegiatan = 1;
            $edit_peserta = $this->Peserta_Kegiatan_model->update_peserta_kegiatan(
                $id_peserta,
                $id_status_peserta_kegiatan,
                $id_jadwal_kegiatan,
                $this->session->userdata('token')
            );

            if ($edit_peserta == null) {
                $this->load->view('error_page');
            }
            if ($edit_peserta['status'] == "Success") {
                $this->session->set_flashdata('success', $edit_peserta['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $edit_peserta['message']);
                redirect();
            }
        } else {
            redirect("pupr/login");
        }
    }

    public function delete_peserta($id_user_peserta)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete_peserta = $this->Peserta_model->delete_peserta($id_user_peserta, $this->session->userdata('token'));
            if ($delete_peserta == null) {
                $this->load->view('error_page');
            } else {
                if ($delete_peserta['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete_peserta['message']);
                    redirect();
                } else {
                    $this->session->set_flashdata('APImessage', $delete_peserta['message']);
                    redirect();
                }
            }
        } else
            redirect("pupr/login");
    }

    public function export_peserta_action($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            // Load plugin PHPExcel nya
            include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

            // Panggil class PHPExcel nya
            $excel = new PHPExcel();
            // Settingan awal fil excel
            $excel->getProperties()->setCreator('Administrator')
                ->setLastModifiedBy('Administrator')
                ->setTitle("Export Peserta")
                ->setSubject("Export Peserta")
                ->setDescription("Data Peserta")
                ->setKeywords("Data Peserta");
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

            $data['kegiatan'] = $this->Kegiatan_model->view_detail_kegiatan($id_kegiatan, $this->session->userdata('token'));
            if ($data['kegiatan']['status'] == "Success") {
                $data['kegiatan'] = $data['kegiatan']['data'];
            } else
                $data['kegiatan'] = null;




            $excel->setActiveSheetIndex(0)->setCellValue('A1', "DATA PESERTA KEGIATAN " . $data['kegiatan']['judul_kegiatan'] . " " . date('d M Y')); // Set kolom A1
            $excel->getActiveSheet()->mergeCells('A1:W1'); // Set Merge Cell pada kolom A1 sampai L1
            $excel->getActiveSheet()->getStyle('1')->getFont()->setBold(TRUE); // Set bold kolom A1
            $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
            $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
            $excel->getActiveSheet()->getStyle('A1')->applyFromArray($style_header); //set font face
            // Buat header tabel nya pada baris ke 3
            $excel->setActiveSheetIndex(0)->setCellValue('A3', "NO");
            $excel->setActiveSheetIndex(0)->setCellValue('B3', "NAMA");
            $excel->setActiveSheetIndex(0)->setCellValue('C3', "JENIS KELAMIN");
            $excel->setActiveSheetIndex(0)->setCellValue('D3', "TEMPAT & TANGGAL LAHIR");
            $excel->setActiveSheetIndex(0)->setCellValue('E3', "STATUS PERKAWINAN");
            $excel->setActiveSheetIndex(0)->setCellValue('F3', "NAMA PERUSAHAAN");
            $excel->setActiveSheetIndex(0)->setCellValue('G3', "JABATAN");
            $excel->setActiveSheetIndex(0)->setCellValue('H3', "UTUSAN");
            $excel->setActiveSheetIndex(0)->setCellValue('I3', "EMAIL");
            $excel->setActiveSheetIndex(0)->setCellValue('J3', "NOMOR HANDPHONE");
            $excel->setActiveSheetIndex(0)->setCellValue('K3', "NOMOR RUMAH");
            $excel->setActiveSheetIndex(0)->setCellValue('L3', "NIK");
            $excel->setActiveSheetIndex(0)->setCellValue('M3', "ALAMAT");
            $excel->setActiveSheetIndex(0)->setCellValue('N3', "PROVINSI");
            $excel->setActiveSheetIndex(0)->setCellValue('O3', "KABUPATEN / KOTA");
            $excel->setActiveSheetIndex(0)->setCellValue('P3', "KECAMATAN");
            $excel->setActiveSheetIndex(0)->setCellValue('Q3', "KELURAHAN");
            $excel->setActiveSheetIndex(0)->setCellValue('R3', "RT");
            $excel->setActiveSheetIndex(0)->setCellValue('S3', "RW");
            $excel->setActiveSheetIndex(0)->setCellValue('T3', "KODE POS");
            $excel->setActiveSheetIndex(0)->setCellValue('U3', "KODE AREA");
            $excel->setActiveSheetIndex(0)->setCellValue('V3', "STATUS RUMAH");
            $excel->setActiveSheetIndex(0)->setCellValue('W3', "PENDIDIKAN");
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
            $excel->getActiveSheet()->getStyle('O3')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('P3')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('Q3')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('R3')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('S3')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('T3')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('U3')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('V3')->applyFromArray($style_col);
            $excel->getActiveSheet()->getStyle('W3')->applyFromArray($style_col);

            //get data
            $data['peserta'] = $this->Peserta_model->view_seluruh_peserta($id_kegiatan, $this->session->userdata('token'));
            if ($data['peserta']['status'] == "Success") {
                if (count($data['peserta']['data']) > 0) {
                    $data['peserta'] = $data['peserta']['data'];
                    $indexPeserta = 0;
                    $noPeserta = 1;
                    foreach ($data['peserta'] as $val) {
                        $data['peserta'][$indexPeserta]['no_peserta'] = $noPeserta;
                        $data['peserta'][$indexPeserta]['tanggal_lahir_text'] = strtotime($val['tanggal_lahir']);
                        $data['peserta'][$indexPeserta]['tanggal_lahir_text'] = date("d F Y", $data['peserta'][$indexPeserta]['tanggal_lahir_text']);

                        $data['peserta'][$indexPeserta]['tempat_tanggal_lahir'] = $val['tempat_lahir'] . ', ' . $data['peserta'][$indexPeserta]['tanggal_lahir_text'];


                        $indexPeserta++;
                        $noPeserta++;
                    }
                } else {
                    $data['peserta'] = null;
                }
            }

            $no = 1; // Untuk penomoran tabel, di awal set dengan 1
            $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
            if ($data['peserta'] != null) {
                foreach ($data['peserta'] as $val) { // Lakukan looping
                    $excel->setActiveSheetIndex(0)->setCellValue('A' . $numrow, $no);
                    $excel->setActiveSheetIndex(0)->setCellValue('B' . $numrow, $val['nama']);
                    $excel->setActiveSheetIndex(0)->setCellValue('C' . $numrow, $val['jenis_kelamin']);
                    $excel->setActiveSheetIndex(0)->setCellValue('D' . $numrow, $val['tempat_tanggal_lahir']);
                    $excel->setActiveSheetIndex(0)->setCellValue('E' . $numrow, $val['status_perkawinan']);
                    $excel->setActiveSheetIndex(0)->setCellValue('F' . $numrow, $val['nama_perusahaan']);
                    $excel->setActiveSheetIndex(0)->setCellValue('G' . $numrow, $val['jabatan']);
                    $excel->setActiveSheetIndex(0)->setCellValue('H' . $numrow, $val['utusan']);
                    $excel->setActiveSheetIndex(0)->setCellValue('I' . $numrow, $val['email']);
                    $excel->getActiveSheet()->setCellValueExplicit('J' . $numrow, $val['no_handphone'],  PHPExcel_Cell_DataType::TYPE_STRING);
                    $excel->getActiveSheet()->setCellValueExplicit('K' . $numrow, $val['no_telpon'],  PHPExcel_Cell_DataType::TYPE_STRING);
                    $excel->getActiveSheet()->setCellValueExplicit('L' . $numrow, $val['nik'],  PHPExcel_Cell_DataType::TYPE_STRING);
                    $excel->setActiveSheetIndex(0)->setCellValue('M' . $numrow, $val['alamat_rumah']);
                    $excel->setActiveSheetIndex(0)->setCellValue('N' . $numrow, $val['provinsi']);
                    $excel->setActiveSheetIndex(0)->setCellValue('O' . $numrow, $val['kota_kabupaten']);
                    $excel->setActiveSheetIndex(0)->setCellValue('P' . $numrow, $val['kecamatan']);
                    $excel->setActiveSheetIndex(0)->setCellValue('Q' . $numrow, $val['kelurahan']);
                    $excel->setActiveSheetIndex(0)->setCellValue('R' . $numrow, $val['rt']);
                    $excel->setActiveSheetIndex(0)->setCellValue('S' . $numrow, $val['rw']);
                    $excel->setActiveSheetIndex(0)->setCellValue('T' . $numrow, $val['kode_pos']);
                    $excel->setActiveSheetIndex(0)->setCellValue('U' . $numrow, $val['kode_area']);
                    $excel->setActiveSheetIndex(0)->setCellValue('V' . $numrow, $val['status_rumah']);
                    $excel->setActiveSheetIndex(0)->setCellValue('W' . $numrow, $val['pendidikan']);

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
                    $excel->getActiveSheet()->getStyle('J' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('K' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('L' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('M' . $numrow)->applyFromArray($style_row_not_center_horizontal);
                    $excel->getActiveSheet()->getStyle('N' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('O' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('P' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('Q' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('R' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('S' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('T' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('U' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('V' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('W' . $numrow)->applyFromArray($style_row_center_horizontal);

                    $no++; // Tambah 1 setiap kali looping
                    $numrow++; // Tambah 1 setiap kali looping
                }
                // Set width kolom
                foreach (range('B', 'W') as $columnID) {
                    $excel->getActiveSheet()->getColumnDimension($columnID)
                        ->setAutoSize(true);
                }
            } else {
                $excel->setActiveSheetIndex(0)->setCellValue('A4', "Tidak ada kegiatan"); // Set kolom A4
                $excel->getActiveSheet()->mergeCells('A4:W4'); // Set Merge Cell pada kolom A4 sampai L4
                $excel->getActiveSheet()->getStyle('A4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
                foreach (range('B', 'W') as $columnID) {
                    $excel->getActiveSheet()->getColumnDimension($columnID)
                        ->setAutoSize(true);
                }
            }
            // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
            $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
            // Set orientasi kertas jadi LANDSCAPE
            $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
            // Set judul file excel nya
            $excel->getActiveSheet(0)->setTitle("Data Peserta");
            $excel->setActiveSheetIndex(0);
            // Proses file excel
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment; filename="Data Peserta Kegiatan.xlsx"'); // Set nama file excel nya
            header('Cache-Control: max-age=0');
            $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
            $write->save('php://output');
        } else
            redirect('pupr/login');
    }
}
