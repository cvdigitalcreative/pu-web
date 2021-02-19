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

        if ($this->session->userdata('id_role') == 3) {
            $this->session->set_flashdata('APImessage', "Akses gagal. Hanya administrator yang dapat mengakses website ini");
            redirect('pupr/login');
        }
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

                            $data['peserta'][$indexPeserta]['str_tahun_lulus'] = date("d F Y", strtotime($val['tahun_lulus']));

                            $data['peserta'][$indexPeserta]['tempat_tanggal_lahir'] = $val['tempat_lahir'] . ', ' . $data['peserta'][$indexPeserta]['tanggal_lahir_text'];

                            $index = 1;
                            if (count($data['peserta'][$indexPeserta]['jabker']) != 0) {
                                foreach ($data['peserta'][$indexPeserta]['jabker'] as $val2) {
                                    if ($index != count($data['peserta'][$indexPeserta]['jabker'])) {
                                        $data['peserta'][$indexPeserta]['str_nama_jabker'] = $index . '. ' . $val2['nama_jabker'] . '<br>';
                                    } else {
                                        $data['peserta'][$indexPeserta]['str_nama_jabker'] = $index . '. ' . $val2['nama_jabker'];
                                    }
                                    $index++;
                                }
                            } else {
                                $data['peserta'][$indexPeserta]['str_nama_jabker'] = "-";
                            }

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
            $no_telpon = $this->input->post('nomor_telepon');
            $id_provinsi = $this->input->post('id_provinsi');
            $id_kota_kabupaten = $this->input->post('id_kota_kabupaten');
            $id_kecamatan = $this->input->post('id_kecamatan');
            $id_kelurahan = $this->input->post('id_kelurahan');
            $id_jenis_kelamin = $this->input->post('id_jenis_kelamin');
            $id_status_perkawinan = $this->input->post('status_perkawinan');
            $temp_status_perkawinan = $this->Common_model->view_status_perkawinan($this->session->userdata('token'));
            if ($temp_status_perkawinan != null) {
                if ($temp_status_perkawinan['status'] == 'Success') {
                    if ($temp_status_perkawinan['data'] != null) {
                        foreach ($temp_status_perkawinan['data'] as $val) {
                            if ($val['status_perkawinan'] == $id_status_perkawinan) {
                                $id_status_perkawinan = $val['id_status_perkawinan'];
                            }
                        }
                    } else
                        $id_status_perkawinan = 0;
                } else
                    $id_status_perkawinan = 0;
            }

            $nama_perusahaan = $this->input->post('nama_perusahaan');
            $jabatan = $this->input->post('jabatan');
            $utusan = $this->input->post('utusan');
            $alamat_rumah = $this->input->post('alamat');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $tanggal_lahir = $this->input->post('profile_tanggal_lahir');
            $temparr = explode('/', $tanggal_lahir);
            $tanggal_lahir = implode('-', $temparr);

            $nik = $this->input->post('nik');
            $rt = $this->input->post('rt');
            $rw = $this->input->post('rw');
            $kode_pos = $this->input->post('kode_pos');
            $kode_area = $this->input->post('kode_area');
            $no_handphone = $this->input->post('nomor_handphone');
            $id_status_rumah = $this->input->post('id_status_rumah');

            $temp_status_rumah = $this->Common_model->view_status_rumah($this->session->userdata('token'));
            if ($temp_status_rumah != null) {
                if ($temp_status_rumah['status'] == 'Success') {
                    if ($temp_status_rumah['data'] != null) {
                        foreach ($temp_status_rumah['data'] as $val) {
                            if ($val['status_rumah'] == $id_status_rumah) {
                                $id_status_rumah = $val['id_status_rumah'];
                            }
                        }
                    } else
                        $id_status_rumah = 0;
                } else
                    $id_status_rumah = 0;
            }

            $id_pendidikan = $this->input->post('id_pendidikan');
            $id_jabker = $this->input->post('id_jabker');
            $id_kompetensi = $this->input->post('id_kompetensi');
            $nama_universitas = $this->input->post('nama_universitas');
            $jurusan = $this->input->post('jurusan');
            $tahun_lulus = $this->input->post('profile_tahun_lulus');
            
            $temparrlulus = explode('/', $tahun_lulus);
            $tahun_lulus = implode('-', $temparrlulus);

            $npwp = $this->input->post('npwp');
            // $no_sertifikat = $this->input->post('no_sertifikat');
            if ($_FILES["file_foto_profile"]['size'] != 0)
                $file_foto_profil = new \CurlFile($_FILES['file_foto_profile']['tmp_name'], $_FILES['file_foto_profile']['type'], $_FILES['file_foto_profile']['name']);
            else
                $file_foto_profil = null;

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
                $tempat_lahir,
                $tanggal_lahir,
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
                $nama_universitas,
                $jurusan,
                $tahun_lulus,
                // $no_sertifikat,
                $file_foto_profil,
                $npwp,
                $id_user,
                $this->session->userdata('token')
            );

            if ($edit_peserta == null) {
                $this->load->view('error_page');
            }
            if ($edit_peserta['status'] == "Success") {
                $this->session->set_flashdata('success', $edit_peserta['message']);
                redirect('pupr/events');
            } else {
                $this->session->set_flashdata('APImessage', $edit_peserta['message']);
                redirect('pupr/events');
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

    public function export_peserta_action($id_kegiatan, $kategori)
    {
        if ($this->session->userdata('logged_in') == true) {
            // Load plugin PHPExcel nya
            include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

            $file = "./assets/docs/Template Export Peserta.xlsx";

            try {
                $inputFileType  =   PHPExcel_IOFactory::identify($file);
                $objReader      =   PHPExcel_IOFactory::createReader($inputFileType);
                $excel    =   $objReader->load($file);
            } catch (Exception $e) {
                die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME) . '": ' . $e->getMessage());
            }

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
                    'name'  => 'Calibri'
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
                    'name'  => 'Calibri'
                )
            );

            $data['kegiatan'] = $this->Kegiatan_model->view_detail_kegiatan($id_kegiatan, $this->session->userdata('token'));
            if ($data['kegiatan']['status'] == "Success") {
                $data['kegiatan'] = $data['kegiatan']['data'];
            } else
                $data['kegiatan'] = null;




            $excel->setActiveSheetIndex(0)->setCellValue('A1', "DATA PESERTA KEGIATAN " . strtoupper($data['kegiatan']['judul_kegiatan']) . " " . date('d M Y')); // Set kolom A1
            $excel->getActiveSheet()->mergeCells('A1:F1'); // Set Merge Cell pada kolom A1 sampai L1
            $excel->getActiveSheet()->getStyle('1')->getFont()->setBold(TRUE); // Set bold kolom A1
            $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(14); // Set font size 15 untuk kolom A1

            //get data
            if ($kategori == 1)
                $data['peserta'] = $this->Peserta_model->view_seluruh_peserta($id_kegiatan, $this->session->userdata('token'));
            else if ($kategori == 2)
                $data['peserta'] = $this->Kegiatan_model->view_peserta_kegiatan($id_kegiatan, $this->session->userdata('token'));

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

                        // $index = 1;
                        // if (count($data['peserta'][$indexPeserta]['jabker']) != 0) {
                        //     foreach ($data['peserta'][$indexPeserta]['jabker'] as $val2) {
                        //         if ($index != count($data['peserta'][$indexPeserta]['jabker'])) {
                        //             $data['peserta'][$indexPeserta]['str_nama_jabker'] = $index . '. ' . $val2['nama_jabker'] . '<br>';
                        //         } else {
                        //             $data['peserta'][$indexPeserta]['str_nama_jabker'] = $index . '. ' . $val2['nama_jabker'];
                        //         }
                        //         $index++;
                        //     }
                        // } else {
                        //     $data['peserta'][$indexPeserta]['str_nama_jabker'] = "-";
                        // }

                        if ($val['jenis_kelamin'] == "Laki-laki")
                            $data['peserta'][$indexPeserta]['jenis_kelamin'] = 'L';
                        elseif ($val['jenis_kelamin'] == "Perempuan")
                            $data['peserta'][$indexPeserta]['jenis_kelamin'] = 'P';

                        $indexPeserta++;
                        $noPeserta++;
                    }
                } else {
                    $data['peserta'] = null;
                }
            }

            $no = 1; // Untuk penomoran tabel, di awal set dengan 1
            $numrow = 6; // Set baris pertama untuk isi tabel adalah baris ke 4
            if ($data['peserta'] != null) {
                foreach ($data['peserta'] as $val) { // Lakukan looping
                    $excel->setActiveSheetIndex(0)->setCellValue('A' . $numrow, $no);
                    $excel->setActiveSheetIndex(0)->setCellValue('B' . $numrow, $val['nama']);
                    $excel->setActiveSheetIndex(0)->setCellValue('C' . $numrow, $val['tempat_lahir']);
                    $excel->setActiveSheetIndex(0)->setCellValue('D' . $numrow, $val['tanggal_lahir']);
                    $excel->setActiveSheetIndex(0)->setCellValue('E' . $numrow, $val['jenis_kelamin']);
                    $excel->getActiveSheet()->setCellValueExplicit('F' . $numrow, $val['nik'],  PHPExcel_Cell_DataType::TYPE_STRING);
                    $excel->setActiveSheetIndex(0)->setCellValue('G' . $numrow, $val['email']);
                    $excel->setActiveSheetIndex(0)->setCellValue('H' . $numrow, $val['utusan']);
                    $excel->setActiveSheetIndex(0)->setCellValue('I' . $numrow, $data['kegiatan']['judul_kegiatan']);
                    $excel->setActiveSheetIndex(0)->setCellValue('J' . $numrow, $val['alamat_rumah']);
                    $excel->setActiveSheetIndex(0)->setCellValue('K' . $numrow, $val['id_provinsi']);
                    $excel->setActiveSheetIndex(0)->setCellValue('L' . $numrow, $val['id_kota_kabupaten']);
                    $excel->getActiveSheet()->setCellValueExplicit('M' . $numrow, $val['no_telpon'],  PHPExcel_Cell_DataType::TYPE_STRING);
                    $excel->getActiveSheet()->setCellValueExplicit('N' . $numrow, $val['no_handphone'],  PHPExcel_Cell_DataType::TYPE_STRING);
                    $excel->setActiveSheetIndex(0)->setCellValue('O' . $numrow, $val['pendidikan']);
                    $excel->setActiveSheetIndex(0)->setCellValue('P' . $numrow, $val['jurusan']);
                    $excel->setActiveSheetIndex(0)->setCellValue('Q' . $numrow, $val['nama_universitas']);
                    $excel->setActiveSheetIndex(0)->setCellValue('R' . $numrow, $val['tahun_lulus']);
                    $excel->setActiveSheetIndex(0)->setCellValue('S' . $numrow, '-');
                    $excel->setActiveSheetIndex(0)->setCellValue('T' . $numrow, $val['kompetensi']);
                    $excel->setActiveSheetIndex(0)->setCellValue('U' . $numrow, '-');

                    // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
                    $excel->getActiveSheet()->getStyle('A' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('B' . $numrow)->applyFromArray($style_row_center_horizontal);
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
                    $excel->getActiveSheet()->getStyle('M' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('N' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('O' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('P' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('Q' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('R' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('S' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('T' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('U' . $numrow)->applyFromArray($style_row_center_horizontal);

                    $no++; // Tambah 1 setiap kali looping
                    $numrow++; // Tambah 1 setiap kali looping
                }
            } else {
                $excel->setActiveSheetIndex(0)->setCellValue('A6', "Tidak ada Peserta Kegiatan"); // Set kolom A4
                $excel->getActiveSheet()->mergeCells('A6:U6'); // Set Merge Cell pada kolom A4 sampai L4
                $excel->getActiveSheet()->getStyle('A6')->applyFromArray($style_row_center_horizontal);
            }
            // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
            $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
            // Set orientasi kertas jadi LANDSCAPE
            $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
            // Set judul file excel nya
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

    public function export_peserta_asesment($id_kegiatan)
    {
        include_once APPPATH . 'third_party/PHPExcel/PHPExcel.php';


        $file = "./assets/docs/Template Asesment.xlsx";

        try {
            $inputFileType  =   PHPExcel_IOFactory::identify($file);
            $objReader      =   PHPExcel_IOFactory::createReader($inputFileType);
            $excel    =   $objReader->load($file);
        } catch (Exception $e) {
            die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME) . '": ' . $e->getMessage());
        }

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
                'name'  => 'Calibri'
            )
        );

        $data['peserta'] = $this->Kegiatan_model->view_peserta_kegiatan($id_kegiatan, $this->session->userdata('token'));
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

                    if ($val['jenis_kelamin'] == "Laki-laki")
                        $data['peserta'][$indexPeserta]['jenis_kelamin'] = 'L';
                    elseif ($val['jenis_kelamin'] == "Perempuan")
                        $data['peserta'][$indexPeserta]['jenis_kelamin'] = 'P';

                    $indexPeserta++;
                    $noPeserta++;
                }
            } else {
                $data['peserta'] = null;
            }
        }

        $no = 1; // Untuk penomoran tabel, di awal set dengan 1
        $numrow = 3; // Set baris pertama untuk isi tabel adalah baris ke 4
        if ($data['peserta'] != null) {
            foreach ($data['peserta'] as $val) { // Lakukan looping
                $excel->setActiveSheetIndex(0)->setCellValue('A' . $numrow, $no);
                $excel->setActiveSheetIndex(0)->setCellValue('B' . $numrow, $val['id_user']);
                $excel->setActiveSheetIndex(0)->setCellValue('C' . $numrow, $val['nama']);
                $excel->setActiveSheetIndex(0)->setCellValue('D' . $numrow, $val['tempat_lahir']);
                $excel->setActiveSheetIndex(0)->setCellValue('E' . $numrow, $val['tanggal_lahir']);
                $excel->setActiveSheetIndex(0)->setCellValue('F' . $numrow, $val['jenis_kelamin']);
                $excel->getActiveSheet()->setCellValueExplicit('G' . $numrow, $val['nik'],  PHPExcel_Cell_DataType::TYPE_STRING);
                $excel->setActiveSheetIndex(0)->setCellValue('H' . $numrow, $val['email']);
                $excel->setActiveSheetIndex(0)->setCellValue('I' . $numrow, $val['alamat_rumah']);
                $excel->getActiveSheet()->setCellValueExplicit('J' . $numrow, $val['no_telpon'],  PHPExcel_Cell_DataType::TYPE_STRING);
                $excel->getActiveSheet()->setCellValueExplicit('K' . $numrow, $val['no_handphone'],  PHPExcel_Cell_DataType::TYPE_STRING);
                $excel->setActiveSheetIndex(0)->setCellValue('L' . $numrow, $val['kompetensi']);
                $excel->setActiveSheetIndex(0)->setCellValue('M' . $numrow, "-");
                $excel->setActiveSheetIndex(0)->setCellValue('N' . $numrow, null);


                // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
                $excel->getActiveSheet()->getStyle('A' . $numrow)->applyFromArray($style_row_center_horizontal);
                $excel->getActiveSheet()->getStyle('B' . $numrow)->applyFromArray($style_row_center_horizontal);
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
                $excel->getActiveSheet()->getStyle('M' . $numrow)->applyFromArray($style_row_center_horizontal);
                $excel->getActiveSheet()->getStyle('N' . $numrow)->applyFromArray($style_row_center_horizontal);
                $no++; // Tambah 1 setiap kali looping
                $numrow++; // Tambah 1 setiap kali looping
            }
            // foreach (range('A', 'N') as $columnID) {
            //     $excel->getActiveSheet()->getColumnDimension($columnID)
            //         ->setAutoSize(true);
            // }
        } else {
            $excel->setActiveSheetIndex(0)->setCellValue('A3', "Tidak ada peserta kegiatan"); // Set kolom A4
            $excel->getActiveSheet()->mergeCells('A3:N3'); // Set Merge Cell pada kolom A4 sampai L4
            $excel->getActiveSheet()->getStyle('A3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
            // foreach (range('A', 'N') as $columnID) {
            //     $excel->getActiveSheet()->getColumnDimension($columnID)
            //         ->setAutoSize(true);
            // }
        }



        // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
        $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
        // Set orientasi kertas jadi LANDSCAPE
        $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
        // Set judul file excel nya
        $excel->setActiveSheetIndex(0);
        // Proses file excel
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Data Peserta Asesment Kegiatan.xlsx"'); // Set nama file excel nya
        header('Cache-Control: max-age=0');
        $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
        $write->save('php://output');
    }

    public function export_peserta_VVA($id_kegiatan)
    {
        include_once APPPATH . 'third_party/PHPExcel/PHPExcel.php';

        $file = "./assets/docs/Template VVA.xlsx";

        try {
            $inputFileType  =   PHPExcel_IOFactory::identify($file);
            $objReader      =   PHPExcel_IOFactory::createReader($inputFileType);
            $excel    =   $objReader->load($file);
        } catch (Exception $e) {
            die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME) . '": ' . $e->getMessage());
        }

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
                'name'  => 'Calibri'
            )
        );

        $data['peserta'] = $this->Kegiatan_model->view_peserta_kegiatan($id_kegiatan, $this->session->userdata('token'));
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

                    if ($val['jenis_kelamin'] == "Laki-laki")
                        $data['peserta'][$indexPeserta]['jenis_kelamin'] = 'L';
                    elseif ($val['jenis_kelamin'] == "Perempuan")
                        $data['peserta'][$indexPeserta]['jenis_kelamin'] = 'P';

                    $indexPeserta++;
                    $noPeserta++;
                }
            } else {
                $data['peserta'] = null;
            }
        }

        $no = 1; // Untuk penomoran tabel, di awal set dengan 1
        $numrow = 3; // Set baris pertama untuk isi tabel adalah baris ke 4
        if ($data['peserta'] != null) {
            foreach ($data['peserta'] as $val) { // Lakukan looping
                $excel->setActiveSheetIndex(0)->setCellValue('A' . $numrow, $no);
                $excel->setActiveSheetIndex(0)->setCellValue('B' . $numrow, $val['id_user']);
                $excel->setActiveSheetIndex(0)->setCellValue('C' . $numrow, $val['nama']);
                $excel->setActiveSheetIndex(0)->setCellValue('D' . $numrow, $val['tempat_lahir']);
                $excel->setActiveSheetIndex(0)->setCellValue('E' . $numrow, $val['tanggal_lahir']);
                $excel->setActiveSheetIndex(0)->setCellValue('F' . $numrow, $val['jenis_kelamin']);
                $excel->getActiveSheet()->setCellValueExplicit('G' . $numrow, $val['nik'],  PHPExcel_Cell_DataType::TYPE_STRING);
                $excel->setActiveSheetIndex(0)->setCellValue('H' . $numrow, $val['email']);
                $excel->setActiveSheetIndex(0)->setCellValue('I' . $numrow, $val['alamat_rumah']);
                $excel->getActiveSheet()->setCellValueExplicit('J' . $numrow, $val['no_telpon'],  PHPExcel_Cell_DataType::TYPE_STRING);
                $excel->getActiveSheet()->setCellValueExplicit('K' . $numrow, $val['no_handphone'],  PHPExcel_Cell_DataType::TYPE_STRING);
                $excel->setActiveSheetIndex(0)->setCellValue('L' . $numrow, $val['kompetensi']);
                $excel->setActiveSheetIndex(0)->setCellValue('M' . $numrow, "-");
                $excel->setActiveSheetIndex(0)->setCellValue('N' . $numrow, null);


                // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
                $excel->getActiveSheet()->getStyle('A' . $numrow)->applyFromArray($style_row_center_horizontal);
                $excel->getActiveSheet()->getStyle('B' . $numrow)->applyFromArray($style_row_center_horizontal);
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
                $excel->getActiveSheet()->getStyle('M' . $numrow)->applyFromArray($style_row_center_horizontal);
                $excel->getActiveSheet()->getStyle('N' . $numrow)->applyFromArray($style_row_center_horizontal);
                $no++; // Tambah 1 setiap kali looping
                $numrow++; // Tambah 1 setiap kali looping
            }
            // foreach (range('A', 'N') as $columnID) {
            //     $excel->getActiveSheet()->getColumnDimension($columnID)
            //         ->setAutoSize(true);
            // }
        } else {
            $excel->setActiveSheetIndex(0)->setCellValue('A3', "Tidak ada peserta kegiatan"); // Set kolom A4
            $excel->getActiveSheet()->mergeCells('A3:N3'); // Set Merge Cell pada kolom A4 sampai L4
            $excel->getActiveSheet()->getStyle('A3')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
            // foreach (range('A', 'N') as $columnID) {
            //     $excel->getActiveSheet()->getColumnDimension($columnID)
            //         ->setAutoSize(true);
            // }
        }



        // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
        $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
        // Set orientasi kertas jadi LANDSCAPE
        $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
        // Set judul file excel nya
        $excel->setActiveSheetIndex(0);
        // Proses file excel

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="Data Peserta VVA Kegiatan.xlsx"'); // Set nama file excel nya
        header('Cache-Control: max-age=0');
        $write = PHPExcel_IOFactory::createWriter($excel, 'Excel2007');
        $write->save('php://output');
    }
}
