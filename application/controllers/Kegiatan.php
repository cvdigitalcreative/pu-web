<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kegiatan_model');
        $this->load->model('Common_model');
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

            $data['jumlah_seluruh_kegiatan'] = 0;
            $data['jumlah_kegiatan_selesai'] = 0;
            $data['jumlah_kegiatan_berjalan'] = 0;
            $data['kegiatan'] = $this->Kegiatan_model->view_kegiatan(null, $this->session->userdata('token'));
            if ($data['kegiatan'] == null)
                $null = true;
            else {
                if ($data['kegiatan']['status'] == 'Success')
                    $data['jumlah_seluruh_kegiatan'] = count($data['kegiatan']['data']);
                else {
                    $data['kegiatan'] = null;
                    $data['jumlah_seluruh_kegiatan'] = 0;

                    $this->session->set_flashdata('APImessage', $data['kegiatan']['message']);
                }
            }


            $data['jumlah_kegiatan_selesai'] = $this->Kegiatan_model->view_kegiatan_selesai($this->session->userdata('token'));
            if ($data['jumlah_kegiatan_selesai'] == null)
                $null = true;
            else {
                if ($data['jumlah_kegiatan_selesai']['status'] == "Success") {
                    $data['jumlah_kegiatan_selesai'] = count($data['jumlah_kegiatan_selesai']['data']);
                } else {
                    $data['jumlah_kegiatan_selesai'] = 0;
                    $this->session->set_flashdata('APImessage', $data['jumlah_kegiatan_selesai']['message']);
                }
            }

            $data['jumlah_kegiatan_berjalan'] = $data['jumlah_seluruh_kegiatan'] - $data['jumlah_kegiatan_selesai'];


            // ============================== data for form =================================
            $data['provinsi'] = $this->Common_model->view_provinsi($this->session->userdata('token'));
            if ($data['provinsi'] == null)
                $null = true;
            else {
                if ($data['provinsi']['status'] == "Success") {
                    $data['provinsi'] = $data['provinsi']['data'];
                } else {
                    $data['provinsi'] = null;
                    $this->session->set_flashdata('APImessage', $data['provinsi']['message']);
                }
            }

            $data['status_kegiatan'] = $this->Common_model->view_status_kegiatan($this->session->userdata('token'));
            if ($data['status_kegiatan'] == null)
                $null = true;
            else {
                if ($data['status_kegiatan']['status'] == "Success") {
                    $data['status_kegiatan'] = $data['status_kegiatan']['data'];
                } else {
                    $data['status_kegiatan'] = null;
                    $this->session->set_flashdata('APImessage', $data['status_kegiatan']['message']);
                }
            }
            $data['akun_kegiatan'] = $this->Common_model->view_akun_kegiatan($this->session->userdata('token'));
            if ($data['akun_kegiatan'] == null)
                $null = true;
            else {
                if ($data['akun_kegiatan']['status'] == "Success") {
                    $data['akun_kegiatan'] = $data['akun_kegiatan']['data'];
                } else {
                    $data['akun_kegiatan'] = null;
                    $this->session->set_flashdata('APImessage', $data['akun_kegiatan']['message']);
                }
            }
            $data['jenis_kegiatan'] = $this->Common_model->view_jenis_kegiatan($this->session->userdata('token'));
            if ($data['jenis_kegiatan'] == null)
                $null = true;
            else {
                if ($data['jenis_kegiatan']['status'] == "Success") {
                    $data['jenis_kegiatan'] = $data['jenis_kegiatan']['data'];
                } else {
                    $data['jenis_kegiatan'] = null;
                    $this->session->set_flashdata('APImessage', $data['jenis_kegiatan']['message']);
                }
            }

            $data['asesor'] = $this->Common_model->view_asesor($this->session->userdata('token'));
            if ($data['asesor'] == null)
                $null = true;
            else {
                if ($data['asesor']['status'] == "Success") {
                    $data['asesor'] = $data['asesor']['data'];
                } else {
                    $data['asesor'] = null;
                    $this->session->set_flashdata('APImessage', $data['asesor']['message']);
                }
            }

            $data['instruktur'] = $this->Common_model->view_instruktur($this->session->userdata('token'));
            if ($data['instruktur'] == null)
                $null = true;
            else {
                if ($data['instruktur']['status'] == "Success") {
                    $data['instruktur'] = $data['instruktur']['data'];
                } else {
                    $data['instruktur'] = null;
                    $this->session->set_flashdata('APImessage', $data['instruktur']['message']);
                }
            }

            $data['jenis_kelamin'] = $this->Common_model->view_jenis_kelamin($this->session->userdata('token'));
            if ($data['jenis_kelamin'] == null)
                $null = true;
            else {
                if ($data['jenis_kelamin']['status'] == "Success") {
                    $data['jenis_kelamin'] = $data['jenis_kelamin']['data'];
                } else {
                    $data['jenis_kelamin'] = null;
                    $this->session->set_flashdata('APImessage', $data['jenis_kelamin']['message']);
                }
            }

            $data['status_perkawinan'] = $this->Common_model->view_status_perkawinan($this->session->userdata('token'));
            if ($data['status_perkawinan'] == null)
                $null = true;
            else {
                if ($data['status_perkawinan']['status'] == "Success") {
                    $data['status_perkawinan'] = $data['status_perkawinan']['data'];
                } else {
                    $data['status_perkawinan'] = null;
                    $this->session->set_flashdata('APImessage', $data['status_perkawinan']['message']);
                }
            }

            $data['status_rumah'] = $this->Common_model->view_status_rumah($this->session->userdata('token'));
            if ($data['status_rumah'] == null)
                $null = true;
            else {
                if ($data['status_rumah']['status'] == "Success") {
                    $data['status_rumah'] = $data['status_rumah']['data'];
                } else {
                    $data['status_rumah'] = null;
                    $this->session->set_flashdata('APImessage', $data['status_rumah']['message']);
                }
            }
            $data['pendidikan'] = $this->Common_model->view_pendidikan($this->session->userdata('token'));
            if ($data['pendidikan'] == null)
                $null = true;
            else {
                if ($data['pendidikan']['status'] == "Success") {
                    $data['pendidikan'] = $data['pendidikan']['data'];
                } else {
                    $data['pendidikan'] = null;
                    $this->session->set_flashdata('APImessage', $data['pendidikan']['message']);
                }
            }

            if ($null)
                $this->load->view('error_page');
            else
                $this->load->view("administrator/events", $data);
        } else
            redirect("pupr/login");
    }

    public function dataSeluruh()
    {
        if ($this->session->userdata('logged_in') == true) {
            $tanggal_awal = $this->input->post('filter_tanggal_kegiatan_mulai');
            $tanggal_akhir = $this->input->post('filter_tanggal_kegiatan_selesai');
            $jenis_kegiatan = $this->input->post('filter_jenis_kegiatan');
            $status_kegiatan = $this->input->post('filter_status_kegiatan');
            $provinsi = $this->input->post('filter_id_provinsi');
            $kabupaten_kota = $this->input->post('filter_id_kabupaten_kota');

            $filter = "?";
            if ($tanggal_awal != null) {
                $temparr = explode('/', $tanggal_awal);
                $tanggal_awal = implode('-', $temparr);
                if ($filter == "?")
                    $filter = $filter . "tanggal_awal=" . $tanggal_awal;
                else
                    $filter = $filter . "&tanggal_awal=" . $tanggal_awal;
            }
            if ($tanggal_akhir != null) {
                $temparrselesai = explode('/', $tanggal_akhir);
                $tanggal_akhir = implode('-', $temparrselesai);
                if ($filter == "?")
                    $filter = $filter . "tanggal_akhir=" . $tanggal_akhir;
                else
                    $filter = $filter . "&tanggal_akhir=" . $tanggal_akhir;
            }
            if ($jenis_kegiatan != null) {
                if ($filter == "?")
                    $filter = $filter . "jenis=" . $jenis_kegiatan;
                else
                    $filter = $filter . "&jenis=" . $jenis_kegiatan;
            }
            if ($status_kegiatan != null) {
                if ($filter == "?")
                    $filter = $filter . "status=" . $status_kegiatan;
                else
                    $filter = $filter . "&status=" . $status_kegiatan;
            }
            if ($provinsi != null) {
                if ($filter == "?")
                    $filter = $filter . "id_provinsi=" . $provinsi;
                else
                    $filter = $filter . "&id_provinsi=" . $provinsi;
            }
            if ($kabupaten_kota != null) {
                if ($filter == "?")
                    $filter = $filter . "id_kabupaten_kota=" . $kabupaten_kota;
                else
                    $filter = $filter . "&id_kabupaten_kota=" . $kabupaten_kota;
            }

            $data['kegiatan'] = $this->Kegiatan_model->view_kegiatan($filter, $this->session->userdata('token'));
            if ($data['kegiatan'] == null) {
                $callback = array(
                    'data' => []
                );
            } else {
                if ($data['kegiatan']['status'] == "Success") {
                    if (count($data['kegiatan']['data']) > 0) {
                        $data['kegiatan'] = $data['kegiatan']['data'];
                        $indexKegiatan = 0;
                        $noKegiatan = 1;
                        foreach ($data['kegiatan'] as $val) {

                            $data['kegiatan'][$indexKegiatan]['str_nama_instruktur_kegiatan'] = "-";
                            $data['kegiatan'][$indexKegiatan]['str_nama_asesor_kegiatan'] = "-";
                            $data['kegiatan'][$indexKegiatan]['no_kegiatan'] = $noKegiatan;
                            // ======================= tanggal Kegiatan ================================
                            $tanggal_kegiatan = $val['tanggal_kegiatan'];
                            // Creating timestamp from given date
                            $timestamp = strtotime($tanggal_kegiatan);
                             
                            // Creating new date format from that timestamp
                            $new_date = date("d-m-Y", $timestamp);
                        $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_text'] =$new_date;

                            // ======================= tanggal Kegiatan Selesai ================================
                            $tanggal_kegiatan_selesai = $val['tanggal_kegiatan_selesai'];
                             // Creating timestamp from given date
                            $timestamp = strtotime($tanggal_kegiatan_selesai);
                             
                            // Creating new date format from that timestamp
                            $new_date = date("d-m-Y", $timestamp);
                             $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_selesai_text'] = $new_date;

                            $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_full_text'] = $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_text'] . " sampai  " . $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_selesai_text'];
                                
                            // ==================== Instruktur Kegiatan ===========================
                            $indexInstruktur = 0;
                            foreach ($data['kegiatan'][$indexKegiatan]['instruktur_kegiatan'] as $val2) {
                                if ($indexInstruktur == 0) {
                                    $data['kegiatan'][$indexKegiatan]['str_nama_instruktur_kegiatan'] = $val2['nama'];
                                } else {
                                    $data['kegiatan'][$indexKegiatan]['str_nama_instruktur_kegiatan'] = (string)  $data['kegiatan'][$indexKegiatan]['str_nama_instruktur_kegiatan'] . ", " . $val2['nama'];
                                }
                                $indexInstruktur++;
                            }
                            // ==================== Asesor Kegiatan ===========================
                            
                            $indexAsesor = 0;
                            foreach ($data['kegiatan'][$indexKegiatan]['asesor_kegiatan'] as $val2) {
                                if ($indexAsesor == 0) {
                                    $data['kegiatan'][$indexKegiatan]['str_nama_asesor_kegiatan'] = $val2['nama'];
                                } else
                                    $data['kegiatan'][$indexKegiatan]['str_nama_asesor_kegiatan'] = (string)  $data['kegiatan'][$indexKegiatan]['str_nama_asesor_kegiatan'] . ", " . $val2['nama'];
                                $indexAsesor++;
                            }
                             $data['kegiatan'][$indexKegiatan]['file_berita_acara'] = null;
                            // ==================== File Berita Acara ===========================
                            // $file_berita = $this->Kegiatan_model->view_berita_acara($val['id_kegiatan'], $this->session->userdata('token'));
                            // if ($file_berita == null)
                            //     $data['kegiatan'][$indexKegiatan]['file_berita_acara'] = null;
                            // else {
                            //     if ($file_berita['status'] == "Success" && count($file_berita['data']) > 0)
                            //         $data['kegiatan'][$indexKegiatan]['file_berita_acara'] = $file_berita['data'];
                            //     else
                            //         $data['kegiatan'][$indexKegiatan]['file_berita_acara'] = null;
                            // }
                            // $data['kegiatan'][$indexKegiatan]['file_invoice'] = null;
                            // ==================== File invoice ===========================
                            // $file_invoice = $this->Kegiatan_model->view_invoice($val['id_kegiatan'], $this->session->userdata('token'));
                            // if ($file_invoice == null)
                            //     $data['kegiatan'][$indexKegiatan]['file_invoice'] = null;
                            // else {
                            //     if ($file_invoice['status'] == "Success" && count($file_invoice['data']) > 0)
                            //         $data['kegiatan'][$indexKegiatan]['file_invoice'] = $file_invoice['data'];
                            //     else
                            //         $data['kegiatan'][$indexKegiatan]['file_invoice'] = null;
                            // }
                            
                            $data['kegiatan'][$indexKegiatan]['file_bukti_pembayaran'] = null;
                            
                            // // ==================== File Bukti pembayaran ===========================
                            // $file_bukti_pembayaran = $this->Kegiatan_model->view_bukti_pembayaran($val['id_kegiatan'], $this->session->userdata('token'));
                            // if ($file_bukti_pembayaran == null)
                            //     $data['kegiatan'][$indexKegiatan]['file_bukti_pembayaran'] = null;
                            // else {
                            //     if ($file_bukti_pembayaran['status'] == "Success" && count($file_bukti_pembayaran['data']) > 0)
                            //         $data['kegiatan'][$indexKegiatan]['file_bukti_pembayaran'] = $file_bukti_pembayaran['data'];
                            //     else
                            //         $data['kegiatan'][$indexKegiatan]['file_bukti_pembayaran'] = null;
                            // }


                            $indexKegiatan++;
                            $noKegiatan++;
                        }
                        $callback = array(
                            'data' => $data['kegiatan']
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

    public function daftar($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $daftar_kegiatan = $this->Kegiatan_model->daftar_kegiatan($id_kegiatan, $this->session->userdata('token'));
            if ($daftar_kegiatan == null) {
                $this->load->view('error_page');
            } else {
                if ($daftar_kegiatan['status'] == "Success") {
                    $this->session->set_flashdata('success', $daftar_kegiatan['message']);
                    redirect();
                } else {
                    $this->session->set_flashdata('APImessage', $daftar_kegiatan['message']);
                    redirect();
                }
            }
        } else
            redirect("pupr/login");
    }

    public function view_kota()
    {
        $provinsi = $this->input->post('id_provinsi');
        $data = $this->Common_model->view_kabupaten_kota($provinsi, $this->session->userdata('token'));
        if ($data == null) {
            $this->load->view('error_page');
        } else {
            if ($data['status'] == "Success") {
                if (count($data['data']) > 0) {
                    $data = $data['data'];
                    foreach ($data as $row) {
                        echo '<option value="' . $row['id_kabupaten_kota'] . '">' . $row['kabupaten_kota'] . '</option>';
                    }
                } else {
                    echo '<option value="0' . '" selected>Tidak ada Kota yang terdaftar</option>';
                }
            } else {
                $data = null;
                echo '<option value="' . '0">Gagal mendapatkan Kota/Kabupaten untuk Provinsi yang dipilih</option>';
            }
        }
    }

    public function tambah_kegiatan_action()
    {
        if ($this->session->userdata('logged_in') == true) {
            $judul_kegiatan = $this->input->post('judul_kegiatan');
            $deskripsi_kegiatan = $this->input->post('deskripsi_kegiatan');
            $tanggal_kegiatan = $this->input->post('tanggal_kegiatan');
            $temparr = explode('/', $tanggal_kegiatan);
            $tanggal_kegiatan = implode('-', $temparr);

            $tanggal_kegiatan_selesai = $this->input->post('tanggal_kegiatan_selesai');
            $temparrselesai = explode('/', $tanggal_kegiatan_selesai);
            $tanggal_kegiatan_selesai = implode('-', $temparrselesai);

            $lokasi_kegiatan = $this->input->post('lokasi_kegiatan');
            $latitude_lokasi = 0;
            $longitude_lokasi = 0;
            $status_kegiatan = 1;
            if ($_FILES['foto_banner_kegiatan']['size'] != 0)
                $foto_banner_kegiatan = new \CurlFile($_FILES['foto_banner_kegiatan']['tmp_name'], $_FILES['foto_banner_kegiatan']['type'], $_FILES['foto_banner_kegiatan']['name']);
            else
                $foto_banner_kegiatan = null;
            $id_akun_kegiatan = $this->input->post('id_akun_kegiatan');
            $id_jenis_kegiatan = $this->input->post('id_jenis_kegiatan');
            $id_provinsi = $this->input->post('id_provinsi');
            $id_kota_kabupaten = $this->input->post('id_kota_kabupaten');
            $id_asesor_kegiatan = $this->input->post('id_asesor_kegiatan');
            if ($id_asesor_kegiatan != null) {
                if (count($id_asesor_kegiatan) == 1)
                    $id_asesor_kegiatan = "[" . $id_asesor_kegiatan[0] . "]";
                else {
                    $id_asesor_kegiatan = (string)implode(',', $id_asesor_kegiatan);
                    $id_asesor_kegiatan = "[" . $id_asesor_kegiatan . "]";
                }
            } else
                $id_asesor_kegiatan = "[]";


            $id_instruktur_kegiatan = $this->input->post('id_instruktur_kegiatan');
            if ($id_instruktur_kegiatan != null) {
                if (count($id_instruktur_kegiatan) == 1)
                    $id_instruktur_kegiatan = "[" . $id_instruktur_kegiatan[0] . "]";
                else {
                    $id_instruktur_kegiatan = (string)implode(',', $id_instruktur_kegiatan);
                    $id_instruktur_kegiatan = "[" . $id_instruktur_kegiatan . "]";
                }
            } else
                $id_instruktur_kegiatan = "[]";


            if ($_FILES['file_materi_kegiatan']['size'] != 0)
                $file_materi_kegiatan = new \CurlFile($_FILES['file_materi_kegiatan']['tmp_name'], $_FILES['file_materi_kegiatan']['type'], $_FILES['file_materi_kegiatan']['name']);
            else
                $file_materi_kegiatan = null;

            $tambah_kegiatan = $this->Kegiatan_model->add_kegiatan(
                $judul_kegiatan,
                $deskripsi_kegiatan,
                $tanggal_kegiatan,
                $tanggal_kegiatan_selesai,
                $lokasi_kegiatan,
                $latitude_lokasi,
                $longitude_lokasi,
                $status_kegiatan,
                $foto_banner_kegiatan,
                $id_akun_kegiatan,
                $id_jenis_kegiatan,
                $id_provinsi,
                $id_kota_kabupaten,
                $id_asesor_kegiatan,
                $id_instruktur_kegiatan,
                $file_materi_kegiatan,
                $this->session->userdata('token')
            );

            if ($tambah_kegiatan == null) {
                $this->load->view('error_page');
            }
            if ($tambah_kegiatan['status'] == "Success") {
                $this->session->set_flashdata('success', $tambah_kegiatan['message']);
                redirect("pupr/events");
            } else {
                $this->session->set_flashdata('APImessage', $tambah_kegiatan['message']);
                redirect("pupr/events");
            }
        } else {
            redirect("pupr/login");
        }
    }

    public function import_kegiatan_action()
    {
        if ($this->session->userdata('logged_in') == true) {
            $file_excel_import_kegiatan = new \CurlFile($_FILES['file_excel_import_kegiatan']['tmp_name'], $_FILES['file_excel_import_kegiatan']['type'], $_FILES['file_excel_import_kegiatan']['name']);

            $import = $this->Kegiatan_model->import_kegiatan_excel($file_excel_import_kegiatan, $this->session->userdata('token'));
            if ($import == null)
                $this->load->view('error_page');
            else {
                if ($import['status'] == 'Success') {
                    $this->session->set_flashdata('success', $import['message']);
                    redirect('pupr/events');
                } else {
                    $this->session->set_flashdata('APImessage', $import['message']);
                    redirect('pupr/events');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function import_peserta_kegiatan_action($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $file_excel_import_peserta_kegiatan = new \CurlFile($_FILES['file_excel_import_peserta_kegiatan']['tmp_name'], $_FILES['file_excel_import_peserta_kegiatan']['type'], $_FILES['file_excel_import_peserta_kegiatan']['name']);

            $import = $this->Kegiatan_model->import_peserta_kegiatan_excel($file_excel_import_peserta_kegiatan, $id_kegiatan, $this->session->userdata('token'));
            if ($import == null)
                $this->load->view('error_page');
            else {
                if ($import['status'] == 'Success') {
                    $this->session->set_flashdata('success', $import['message']);
                    redirect('pupr/events');
                } else {
                    $this->session->set_flashdata('APImessage', $import['message']);
                    redirect('pupr/events');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function export_kegiatan_action()
    {
        if ($this->session->userdata('logged_in') == true) {
            // Load plugin PHPExcel nya
            include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

            // Panggil class PHPExcel nya
            $excel = new PHPExcel();
            // Settingan awal fil excel
            $excel->getProperties()->setCreator('Administrator')
                ->setLastModifiedBy('Administrator')
                ->setTitle("Export Kegiatan")
                ->setSubject("Kegiatan")
                ->setDescription("Data Kegiatan")
                ->setKeywords("Data Kegiatan");
            // Buat sebuah variabel untuk menampung pengaturan style dari header tabel

            $style_header = array(
                'font' => array(
                    'bold' => true,
                    'name'  => 'Calibri'
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
                    'name'  => 'Calibri'
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
            $excel->setActiveSheetIndex(0)->setCellValue('A1', "DATA KEGIATAN " . date('d M Y')); // Set kolom A1
            $excel->getActiveSheet()->mergeCells('A1:L1'); // Set Merge Cell pada kolom A1 sampai L1
            $excel->getActiveSheet()->getStyle('1')->getFont()->setBold(TRUE); // Set bold kolom A1
            $excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(15); // Set font size 15 untuk kolom A1
            $excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
            $excel->getActiveSheet()->getStyle('A1')->applyFromArray($style_header); //set font face
            // Buat header tabel nya pada baris ke 3
            $excel->setActiveSheetIndex(0)->setCellValue('A3', "NO");
            $excel->setActiveSheetIndex(0)->setCellValue('B3', "JUDUL");
            $excel->setActiveSheetIndex(0)->setCellValue('C3', "DESKRIPSI");
            $excel->setActiveSheetIndex(0)->setCellValue('D3', "TANGGAL");
            $excel->setActiveSheetIndex(0)->setCellValue('E3', "LOKASI");
            $excel->setActiveSheetIndex(0)->setCellValue('F3', "STATUS");
            $excel->setActiveSheetIndex(0)->setCellValue('G3', "AKUN");
            $excel->setActiveSheetIndex(0)->setCellValue('H3', "JENIS");
            $excel->setActiveSheetIndex(0)->setCellValue('I3', "PROVINSI");
            $excel->setActiveSheetIndex(0)->setCellValue('J3', "KOTA KABUPATEN");
            $excel->setActiveSheetIndex(0)->setCellValue('K3', "ASESOR");
            $excel->setActiveSheetIndex(0)->setCellValue('L3', "INSTRUKTUR");
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

            //get data
            $data['kegiatan'] = $this->Kegiatan_model->view_kegiatan(null, $this->session->userdata('token'));
            if ($data['kegiatan']['status'] == "Success") {
                if (count($data['kegiatan']['data']) > 0) {
                    $data['kegiatan'] = $data['kegiatan']['data'];
                    $indexKegiatan = 0;
                    $noKegiatan = 1;
                    foreach ($data['kegiatan'] as $val) {
                        $data['kegiatan'][$indexKegiatan]['str_nama_instruktur_kegiatan'] = "-";
                        $data['kegiatan'][$indexKegiatan]['str_nama_asesor_kegiatan'] = "-";
                        $data['kegiatan'][$indexKegiatan]['no_kegiatan'] = $noKegiatan;
                        // ======================= tanggal Kegiatan ================================
                        $tanggal_kegiatan = $val['tanggal_kegiatan'];
                        $temparr = explode('-', $tanggal_kegiatan);
                        $indextglreverse = 0;
                        for ($j = count($temparr) - 1; $j >= 0; $j--) {
                            $arrtemptanggal[$indextglreverse] = $temparr[$j];
                            $indextglreverse++;
                        }
                        $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan'] = implode('-', $arrtemptanggal);
                        $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_text'] = strtotime($val['tanggal_kegiatan']);
                        $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_text'] = date("d F Y", $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_text']);

                        // ======================= tanggal Kegiatan Selesai ================================
                        $tanggal_kegiatan_selesai = $val['tanggal_kegiatan_selesai'];
                        $temparrselesai = explode('-', $tanggal_kegiatan_selesai);
                        $indextglselesaireverse = 0;
                        for ($j = count($temparrselesai) - 1; $j >= 0; $j--) {
                            $arrtemptanggalselesai[$indextglselesaireverse] = $temparrselesai[$j];
                            $indextglselesaireverse++;
                        }
                        $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_selesai'] = implode('-', $arrtemptanggalselesai);
                        $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_selesai_text'] = strtotime($val['tanggal_kegiatan_selesai']);
                        $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_selesai_text'] = date("d F Y", $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_selesai_text']);

                        $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_full_text'] = $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_text'] . " - " . $data['kegiatan'][$indexKegiatan]['tanggal_kegiatan_selesai_text'];

                        // ==================== Instruktur Kegiatan ===========================
                        $indexInstruktur = 0;
                        foreach ($data['kegiatan'][$indexKegiatan]['instruktur_kegiatan'] as $val2) {
                            if ($indexInstruktur == 0) {
                                $data['kegiatan'][$indexKegiatan]['str_nama_instruktur_kegiatan'] = $val2['nama'];
                            } else
                                $data['kegiatan'][$indexKegiatan]['str_nama_instruktur_kegiatan'] = (string)  $data['kegiatan'][$indexKegiatan]['str_nama_instruktur_kegiatan'] . ", " . $val2['nama'];
                            $indexInstruktur++;
                        }

                        // ==================== Asesor Kegiatan ===========================
                        $indexAsesor = 0;
                        foreach ($data['kegiatan'][$indexKegiatan]['asesor_kegiatan'] as $val2) {
                            if ($indexAsesor == 0) {
                                $data['kegiatan'][$indexKegiatan]['str_nama_asesor_kegiatan'] = $val2['nama'];
                            } else
                                $data['kegiatan'][$indexKegiatan]['str_nama_asesor_kegiatan'] = (string)  $data['kegiatan'][$indexKegiatan]['str_nama_asesor_kegiatan'] . ", " . $val2['nama'];
                            $indexAsesor++;
                        }

                        $indexKegiatan++;
                        $noKegiatan++;
                    }
                } else {
                    $data['kegiatan'] = null;
                }
            }

            $no = 1; // Untuk penomoran tabel, di awal set dengan 1
            $numrow = 4; // Set baris pertama untuk isi tabel adalah baris ke 4
            if ($data['kegiatan'] != null) {
                foreach ($data['kegiatan'] as $val) { // Lakukan looping
                    $excel->setActiveSheetIndex(0)->setCellValue('A' . $numrow, $no);
                    $excel->setActiveSheetIndex(0)->setCellValue('B' . $numrow, $val['judul_kegiatan']);
                    $excel->setActiveSheetIndex(0)->setCellValue('C' . $numrow, $val['deskripsi_kegiatan']);
                    $excel->setActiveSheetIndex(0)->setCellValue('D' . $numrow, $val['tanggal_kegiatan_full_text']);
                    $excel->setActiveSheetIndex(0)->setCellValue('E' . $numrow, $val['lokasi_kegiatan']);
                    $excel->setActiveSheetIndex(0)->setCellValue('F' . $numrow, $val['status_kegiatan']);
                    $excel->setActiveSheetIndex(0)->setCellValue('G' . $numrow, $val['akun_kegiatan']);
                    $excel->setActiveSheetIndex(0)->setCellValue('H' . $numrow, $val['jenis_kegiatan']);
                    $excel->setActiveSheetIndex(0)->setCellValue('I' . $numrow, $val['provinsi']);
                    $excel->setActiveSheetIndex(0)->setCellValue('J' . $numrow, $val['kota_kabupaten']);
                    $excel->setActiveSheetIndex(0)->setCellValue('K' . $numrow, $val['str_nama_asesor_kegiatan']);
                    $excel->setActiveSheetIndex(0)->setCellValue('L' . $numrow, $val['str_nama_instruktur_kegiatan']);

                    // Apply style row yang telah kita buat tadi ke masing-masing baris (isi tabel)
                    $excel->getActiveSheet()->getStyle('A' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('B' . $numrow)->applyFromArray($style_row_not_center_horizontal);
                    $excel->getActiveSheet()->getStyle('C' . $numrow)->applyFromArray($style_row_not_center_horizontal);
                    $excel->getActiveSheet()->getStyle('D' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('E' . $numrow)->applyFromArray($style_row_not_center_horizontal);
                    $excel->getActiveSheet()->getStyle('F' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('G' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('H' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('I' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('J' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('K' . $numrow)->applyFromArray($style_row_center_horizontal);
                    $excel->getActiveSheet()->getStyle('L' . $numrow)->applyFromArray($style_row_center_horizontal);

                    $no++; // Tambah 1 setiap kali looping
                    $numrow++; // Tambah 1 setiap kali looping
                }
                // Set width kolom
                foreach (range('B', 'L') as $columnID) {
                    $excel->getActiveSheet()->getColumnDimension($columnID)
                        ->setAutoSize(true);
                }
            } else {
                $excel->setActiveSheetIndex(0)->setCellValue('A4', "Tidak ada kegiatan"); // Set kolom A4
                $excel->getActiveSheet()->mergeCells('A4:L4'); // Set Merge Cell pada kolom A4 sampai L4
                $excel->getActiveSheet()->getStyle('A4')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER); // Set text center untuk kolom A1
                foreach (range('B', 'L') as $columnID) {
                    $excel->getActiveSheet()->getColumnDimension($columnID)
                        ->setAutoSize(true);
                }
            }
            // Set height semua kolom menjadi auto (mengikuti height isi dari kolommnya, jadi otomatis)
            $excel->getActiveSheet()->getDefaultRowDimension()->setRowHeight(-1);
            // Set orientasi kertas jadi LANDSCAPE
            $excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
            // Set judul file excel nya
            $excel->getActiveSheet(0)->setTitle("Data Kegiatan");
            $excel->setActiveSheetIndex(0);
            // Proses file excel
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
            header('Content-Disposition: attachment; filename="Data Kegiatan.xlsx"'); // Set nama file excel nya
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
            force_download('./assets/docs/Format Kegiatan.xlsx', NULL);
        } else
            redirect('pupr/login');
    }

    public function download_format_peserta_excel_action()
    {
        if ($this->session->userdata('logged_in') == true) {
            $this->load->helper('download');
            force_download('./assets/docs/Format Peserta.xlsx', NULL);
        } else
            redirect('pupr/login');
    }

    public function edit_kegiatan_action($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $judul_kegiatan = $this->input->post('edit_judul_kegiatan');
            $deskripsi_kegiatan = $this->input->post('edit_deskripsi_kegiatan');
            $tanggal_kegiatan = $this->input->post('edit_tanggal_kegiatan_mulai');
            $temparr = explode('/', $tanggal_kegiatan);
            $tanggal_kegiatan = implode('-', $temparr);

            $tanggal_kegiatan_selesai = $this->input->post('edit_tanggal_kegiatan_selesai');
            $temparrselesai = explode('/', $tanggal_kegiatan_selesai);
            $tanggal_kegiatan_selesai = implode('-', $temparrselesai);


            $lokasi_kegiatan = $this->input->post('edit_lokasi_kegiatan');
            $latitude_lokasi = 0;
            $longitude_lokasi = 0;
            $status_kegiatan = $this->input->post('id_status_kegiatan');
            if ($_FILES['edit_foto_banner_kegiatan']['size'] == 0)
                $foto_banner_kegiatan = null;
            else
                $foto_banner_kegiatan = new \CurlFile($_FILES['edit_foto_banner_kegiatan']['tmp_name'], $_FILES['edit_foto_banner_kegiatan']['type'], $_FILES['edit_foto_banner_kegiatan']['name']);
            $id_akun_kegiatan = $this->input->post('id_akun_kegiatan');
            $id_jenis_kegiatan = $this->input->post('id_jenis_kegiatan');
            $id_provinsi = $this->input->post('edit_id_provinsi');
            $id_kota_kabupaten = $this->input->post('edit_id_kota_kabupaten');
            if ($_FILES['file_materi_kegiatan']['size'] == 0)
                $file_materi_kegiatan = null;
            else
                $file_materi_kegiatan = new \CurlFile($_FILES['file_materi_kegiatan']['tmp_name'], $_FILES['file_materi_kegiatan']['type'], $_FILES['file_materi_kegiatan']['name']);
            $edit_kegiatan = $this->Kegiatan_model->edit_kegiatan(
                $judul_kegiatan,
                $deskripsi_kegiatan,
                $tanggal_kegiatan,
                $tanggal_kegiatan_selesai,
                $lokasi_kegiatan,
                $latitude_lokasi,
                $longitude_lokasi,
                $status_kegiatan,
                $foto_banner_kegiatan,
                $id_akun_kegiatan,
                $id_jenis_kegiatan,
                $id_provinsi,
                $id_kota_kabupaten,
                $file_materi_kegiatan,
                $id_kegiatan,
                $this->session->userdata('token')
            );

            if ($edit_kegiatan == null) {
                $this->load->view('error_page');
            }
            if ($edit_kegiatan['status'] == "Success") {
                $this->session->set_flashdata('success', $edit_kegiatan['message']);
                redirect("pupr/events");
            } else {
                $this->session->set_flashdata('APImessage', $edit_kegiatan['message']);
                redirect("pupr/events");
            }
        } else {
            redirect("pupr/login");
        }
    }

    public function selesaikan_kegiatan_action($id_kegiatan){
        if ($this->session->userdata('logged_in') == true) {
            $kegiatan = $this->Kegiatan_model->view_detail_kegiatan($id_kegiatan, $this->session->userdata('token'));
            if($kegiatan!= null && $kegiatan['status'] == "Success"){
                $kegiatan = $kegiatan['data'];
                $judul_kegiatan = $kegiatan['judul_kegiatan'];
                $deskripsi_kegiatan = $kegiatan['deskripsi_kegiatan'];
                $tanggal_kegiatan = $kegiatan['tanggal_kegiatan'];
                $tanggal_kegiatan_selesai = $kegiatan['tanggal_kegiatan_selesai'];
                $lokasi_kegiatan = $kegiatan['lokasi_kegiatan'];
                $latitude_lokasi = $kegiatan['latitude_lokasi'];
                $longitude_lokasi = $kegiatan['longitude_lokasi'];
                $status_kegiatan = 2;
                $foto_banner_kegiatan = null;
                $id_akun_kegiatan = $kegiatan['id_akun_kegiatan'];
                $id_jenis_kegiatan = $kegiatan['id_jenis_kegiatan'];
                $id_provinsi = $kegiatan['id_provinsi'];
                $id_kota_kabupaten = $kegiatan['id_kota_kabupaten'];
                $file_materi_kegiatan = null;

                $edit_kegiatan = $this->Kegiatan_model->edit_kegiatan(
                    $judul_kegiatan,
                    $deskripsi_kegiatan,
                    $tanggal_kegiatan,
                    $tanggal_kegiatan_selesai,
                    $lokasi_kegiatan,
                    $latitude_lokasi,
                    $longitude_lokasi,
                    $status_kegiatan,
                    $foto_banner_kegiatan,
                    $id_akun_kegiatan,
                    $id_jenis_kegiatan,
                    $id_provinsi,
                    $id_kota_kabupaten,
                    $file_materi_kegiatan,
                    $id_kegiatan,
                    $this->session->userdata('token')
                );
    
                if ($edit_kegiatan == null) {
                    $this->load->view('error_page');
                }
                if ($edit_kegiatan['status'] == "Success") {
                    $this->session->set_flashdata('success', "Status Kegiatan berhasil dirubah");
                    redirect("pupr/events");
                } else {
                    $this->session->set_flashdata('APImessage', "Gagal merubah status kegiatan");
                    redirect("pupr/events");
                }
            }else {
                $this->session->set_flashdata('APImessage', "Gagal merubah status kegiatan");
                redirect("pupr/events");
            }
        } else {
            redirect("pupr/login");
        }
    }

    public function ganti_status_kegiatan($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $update = $this->Kegiatan_model->update_status_kegiatan($id_kegiatan, $this->session->userdata('token'));
            if ($update == null) {
                $this->load->view('error_page');
            } else {
                if ($update['status'] == "Success") {
                    $this->session->set_flashdata('success', $update['message']);
                    redirect('pupr/events');
                } else {
                    $this->session->set_flashdata('APImessage', $update['message']);
                    redirect('pupr/events');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function update_status_kegiatan_VVA_action($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $file_excel = new \CurlFile($_FILES['file_excel']['tmp_name'], $_FILES['file_excel']['type'], $_FILES['file_excel']['name']);

            $update = $this->Kegiatan_model->update_status_kegiatan_VVA($file_excel, $id_kegiatan, $this->session->userdata('token'));
            if ($update == null)
                $this->load->view('error_page');
            else {
                if ($update['status'] == 'Success') {
                    $this->session->set_flashdata('success', $update['message']);
                    redirect('pupr/events');
                } else {
                    $this->session->set_flashdata('APImessage', $update['message']);
                    redirect('pupr/events');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function update_status_kegiatan_asesment_action($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $file_excel = new \CurlFile($_FILES['file_excel']['tmp_name'], $_FILES['file_excel']['type'], $_FILES['file_excel']['name']);

            $update = $this->Kegiatan_model->update_status_kegiatan_asesment($file_excel, $id_kegiatan, $this->session->userdata('token'));
            if ($update == null)
                $this->load->view('error_page');
            else {
                if ($update['status'] == 'Success') {
                    $this->session->set_flashdata('success', $update['message']);
                    redirect('pupr/events');
                } else {
                    $this->session->set_flashdata('APImessage', $update['message']);
                    redirect('pupr/events');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function delete_kegiatan($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete_kegiatan = $this->Kegiatan_model->delete_kegiatan($id_kegiatan, $this->session->userdata('token'));
            if ($delete_kegiatan == null) {
                $this->load->view('error_page');
            } else {
                if ($delete_kegiatan['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete_kegiatan['message']);
                    redirect("pupr/events");
                } else {
                    $this->session->set_flashdata('APImessage', $delete_kegiatan['message']);
                    redirect("pupr/events");
                }
            }
        } else
            redirect("pupr/login");
    }

    // ====================== Berita Acara ==================================

    public function tambah_berita_acara_action($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $deskripsi_berita_acara = $this->input->post('deskripsi_berita_acara');
            $file_berita_acara = new \CurlFile($_FILES['file_berita_acara']['tmp_name'], $_FILES['file_berita_acara']['type'], $_FILES['file_berita_acara']['name']);

            $tambah_berita_acara = $this->Kegiatan_model->add_berita_acara(
                $deskripsi_berita_acara,
                $file_berita_acara,
                $id_kegiatan,
                $this->session->userdata('token')
            );

            if ($tambah_berita_acara == null) {
                $this->load->view('error_page');
            }
            if ($tambah_berita_acara['status'] == "Success") {
                $this->session->set_flashdata('success', $tambah_berita_acara['message']);
                redirect('pupr/events');
            } else {
                $this->session->set_flashdata('APImessage', $tambah_berita_acara['message']);
                redirect('pupr/events');
            }
        } else {
            redirect("pupr/login");
        }
    }

    public function edit_berita_acara_action($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $deskripsi_berita_acara = $this->input->post('deskripsi_berita_acara');
            $file_berita_acara = new \CurlFile($_FILES['file_berita_acara']['tmp_name'], $_FILES['file_berita_acara']['type'], $_FILES['file_berita_acara']['name']);

            $edit_berita_acara = $this->Kegiatan_model->edit_berita_acara(
                $deskripsi_berita_acara,
                $file_berita_acara,
                $id_kegiatan,
                $this->session->userdata('token')
            );

            if ($edit_berita_acara == null) {
                $this->load->view('error_page');
            }
            if ($edit_berita_acara['status'] == "Success") {
                $this->session->set_flashdata('success', $edit_berita_acara['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $edit_berita_acara['message']);
                redirect();
            }
        } else {
            redirect("pupr/login");
        }
    }
    // ====================== invoice ==================================


    //blm done
    public function tambah_invoice_action($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $deskripsi_invoice = $this->input->post('deskripsi_invoice');
            $file_invoice = new \CurlFile($_FILES['file_invoice']['tmp_name'], $_FILES['file_invoice']['type'], $_FILES['file_invoice']['name']);

            $tambah_invoice = $this->Kegiatan_model->add_invoice(
                $deskripsi_invoice,
                $file_invoice,
                $id_kegiatan,
                $this->session->userdata('token')
            );

            if ($tambah_invoice == null) {
                $this->load->view('error_page');
            }
            if ($tambah_invoice['status'] == "Success") {
                $this->session->set_flashdata('success', $tambah_invoice['message']);
                redirect("pupr/events");
            } else {
                $this->session->set_flashdata('APImessage', $tambah_invoice['message']);
                redirect("pupr/events");
            }
        } else {
            redirect("pupr/login");
        }
    }

    //blm done
    public function edit_invoice_action($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $deskripsi_invoice = $this->input->post('deskripsi_invoice');
            $file_invoice = new \CurlFile($_FILES['file_invoice']['tmp_name'], $_FILES['file_invoice']['type'], $_FILES['file_invoice']['name']);

            $edit_invoice = $this->Kegiatan_model->edit_invoice(
                $deskripsi_invoice,
                $file_invoice,
                $id_kegiatan,
                $this->session->userdata('token')
            );

            var_dump($edit_invoice);
            die;

            if ($edit_invoice == null) {
                $this->load->view('error_page');
            }
            if ($edit_invoice['status'] == "Success") {
                $this->session->set_flashdata('success', $edit_invoice['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $edit_invoice['message']);
                redirect();
            }
        } else {
            redirect("pupr/login");
        }
    }

    // ====================== bukti_pembayaran ==================================

    public function tambah_bukti_pembayaran_action($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $deskripsi_bukti_pembayaran = $this->input->post('deskripsi_bukti_pembayaran');
            $file_bukti_pembayaran = new \CurlFile($_FILES['file_bukti_pembayaran']['tmp_name'], $_FILES['file_bukti_pembayaran']['type'], $_FILES['file_bukti_pembayaran']['name']);

            $tambah_bukti_pembayaran = $this->Kegiatan_model->add_bukti_pembayaran(
                $deskripsi_bukti_pembayaran,
                $file_bukti_pembayaran,
                $id_kegiatan,
                $this->session->userdata('token')
            );

            if ($tambah_bukti_pembayaran == null) {
                $this->load->view('error_page');
            }
            if ($tambah_bukti_pembayaran['status'] == "Success") {
                $this->session->set_flashdata('success', $tambah_bukti_pembayaran['message']);
                redirect('pupr/events');
            } else {
                $this->session->set_flashdata('APImessage', $tambah_bukti_pembayaran['message']);
                redirect('pupr/events');
            }
        } else {
            redirect("pupr/login");
        }
    }

    public function edit_bukti_pembayaran_action($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $deskripsi_bukti_pembayaran = $this->input->post('deskripsi_bukti_pembayaran');
            $file_bukti_pembayaran = new \CurlFile($_FILES['file_bukti_pembayaran']['tmp_name'], $_FILES['file_bukti_pembayaran']['type'], $_FILES['file_bukti_pembayaran']['name']);

            $edit_bukti_pembayaran = $this->Kegiatan_model->edit_bukti_pembayaran(
                $deskripsi_bukti_pembayaran,
                $file_bukti_pembayaran,
                $id_kegiatan,
                $this->session->userdata('token')
            );

            if ($edit_bukti_pembayaran == null) {
                $this->load->view('error_page');
            }
            if ($edit_bukti_pembayaran['status'] == "Success") {
                $this->session->set_flashdata('success', $edit_bukti_pembayaran['message']);
                redirect();
            } else {
                $this->session->set_flashdata('APImessage', $edit_bukti_pembayaran['message']);
                redirect();
            }
        } else {
            redirect("pupr/login");
        }
    }

    // ====================== pelatih kegiatan ==================================

    public function delete_pelatih($id_kegiatan, $id_tenaga_ahli)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete = $this->Kegiatan_model->delete_pelatih_kegiatan($id_kegiatan, $id_tenaga_ahli, $this->session->userdata('token'));
            if ($delete == null) {
                $this->load->view('error_page');
            } else {
                if ($delete['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete['message']);
                    redirect();
                } else {
                    $this->session->set_flashdata('APImessage', $delete['message']);
                    redirect();
                }
            }
        } else
            redirect("pupr/login");
    }

    public function delete_asesor($id_kegiatan, $id_tenaga_ahli)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete = $this->Kegiatan_model->delete_asesor_kegiatan($id_kegiatan, $id_tenaga_ahli, $this->session->userdata('token'));
            if ($delete == null) {
                $this->load->view('error_page');
            } else {
                if ($delete['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete['message']);
                    redirect();
                } else {
                    $this->session->set_flashdata('APImessage', $delete['message']);
                    redirect();
                }
            }
        } else
            redirect("pupr/login");
    }

    public function delete_instruktur($id_kegiatan, $id_tenaga_ahli)
    {
        if ($this->session->userdata('logged_in') == true) {
            $delete = $this->Kegiatan_model->delete_instruktur_kegiatan($id_kegiatan, $id_tenaga_ahli, $this->session->userdata('token'));
            if ($delete == null) {
                $this->load->view('error_page');
            } else {
                if ($delete['status'] == "Success") {
                    $this->session->set_flashdata('success', $delete['message']);
                    redirect();
                } else {
                    $this->session->set_flashdata('APImessage', $delete['message']);
                    redirect();
                }
            }
        } else
            redirect("pupr/login");
    }

    public function dataAsesor($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $data['asesor'] = $this->Kegiatan_model->view_asesor($id_kegiatan, $this->session->userdata('token'));
            if ($data['asesor'] == null) {
                $callback = array(
                    'data' => []
                );
            } else {
                if ($data['asesor']['status'] == "Success") {
                    if (count($data['asesor']['data']) > 0) {
                        $data['asesor'] = $data['asesor']['data'];

                        $indexBukuSaku = 0;
                        $noBukuSaku = 1;
                        foreach ($data['asesor'] as $val) {
                            $data['asesor'][$indexBukuSaku]['no_asesor'] = $noBukuSaku;

                            $indexBukuSaku++;
                            $noBukuSaku++;
                        }
                        $callback = array(
                            'data' => $data['asesor']
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
        }
    }

    public function dataInstruktur($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $data['instruktur'] = $this->Kegiatan_model->view_instruktur($id_kegiatan, $this->session->userdata('token'));
            if ($data['instruktur'] == null) {
                $callback = array(
                    'data' => []
                );
            } else {
                if ($data['instruktur']['status'] == "Success") {
                    if (count($data['instruktur']['data']) > 0) {
                        $data['instruktur'] = $data['instruktur']['data'];

                        $indexBukuSaku = 0;
                        $noBukuSaku = 1;
                        foreach ($data['instruktur'] as $val) {
                            $data['instruktur'][$indexBukuSaku]['no_instruktur'] = $noBukuSaku;

                            $indexBukuSaku++;
                            $noBukuSaku++;
                        }
                        $callback = array(
                            'data' => $data['instruktur']
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
        }
    }

    public function add_instruktur_kegiatan_action($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $id_tenaga_ahli = $this->input->post('id_tenaga_ahli');
            $tambah = $this->Kegiatan_model->add_instruktur($id_tenaga_ahli, $id_kegiatan, $this->session->userdata('token'));
            if ($tambah == null) {
                $this->load->view('error_page');
            } else {
                if ($tambah['status'] == "Success") {
                    $this->session->set_flashdata('success', $tambah['message']);
                    redirect('pupr/events');
                } else {
                    $this->session->set_flashdata('APImessage', $tambah['message']);
                    redirect('pupr/events');
                }
            }
        } else
            redirect("pupr/login");
    }

    public function add_asesor_kegiatan_action($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $id_tenaga_ahli = $this->input->post('id_tenaga_ahli');
            $tambah = $this->Kegiatan_model->add_asesor($id_tenaga_ahli, $id_kegiatan, $this->session->userdata('token'));
            if ($tambah == null) {
                $this->load->view('error_page');
            } else {
                if ($tambah['status'] == "Success") {
                    $this->session->set_flashdata('success', $tambah['message']);
                    redirect('pupr/events');
                } else {
                    $this->session->set_flashdata('APImessage', $tambah['message']);
                    redirect('pupr/events');
                }
            }
        } else
            redirect("pupr/login");
    }
    public function delete_instruktur_kegiatan_action($id_tenaga_ahli, $id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $tambah = $this->Kegiatan_model->delete_instruktur($id_tenaga_ahli, $id_kegiatan, $this->session->userdata('token'));
            if ($tambah == null) {
                $this->load->view('error_page');
            } else {
                if ($tambah['status'] == "Success") {
                    $this->session->set_flashdata('success', $tambah['message']);
                    redirect('pupr/events');
                } else {
                    $this->session->set_flashdata('APImessage', $tambah['message']);
                    redirect('pupr/events');
                }
            }
        } else
            redirect("pupr/login");
    }

    public function delete_asesor_kegiatan_action($id_tenaga_ahli, $id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $tambah = $this->Kegiatan_model->delete_asesor($id_tenaga_ahli, $id_kegiatan, $this->session->userdata('token'));
            if ($tambah == null) {
                $this->load->view('error_page');
            } else {
                if ($tambah['status'] == "Success") {
                    $this->session->set_flashdata('success', $tambah['message']);
                    redirect('pupr/events');
                } else {
                    $this->session->set_flashdata('APImessage', $tambah['message']);
                    redirect('pupr/events');
                }
            }
        } else
            redirect("pupr/login");
    }

    public function download_file_berita_acara($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $this->load->helper('download');
            $file_berita_acara = $this->Kegiatan_model->view_berita_acara($id_kegiatan, $this->session->userdata('token'));
            if ($file_berita_acara == null)
                $this->load->view('error_page');
            else {
                if ($file_berita_acara['status'] == "Success") {
                    $data = file_get_contents($file_berita_acara['data'][0]['file_berita_acara']);
                    force_download($file_berita_acara['data'][0]['file_berita_acara'], $data);
                } else {
                    $this->session->flashdata('APImessage', $file_berita_acara['message']);
                    redirect('pupr/events');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function download_file_invoice($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $this->load->helper('download');
            $file_invoice = $this->Kegiatan_model->view_invoice($id_kegiatan, $this->session->userdata('token'));
            if ($file_invoice == null)
                $this->load->view('error_page');
            else {
                if ($file_invoice['status'] == "Success") {
                    $data = file_get_contents($file_invoice['data'][0]['file_invoice']);
                    force_download($file_invoice['data'][0]['file_invoice'], $data);
                } else {
                    $this->session->flashdata('APImessage', $file_invoice['message']);
                    redirect('pupr/events');
                }
            }
        } else
            redirect('pupr/login');
    }

    public function download_file_bukti_pembayaran($id_kegiatan)
    {
        if ($this->session->userdata('logged_in') == true) {
            $this->load->helper('download');
            $file_bukti_pembayaran = $this->Kegiatan_model->view_bukti_pembayaran($id_kegiatan, $this->session->userdata('token'));
            if ($file_bukti_pembayaran == null)
                $this->load->view('error_page');
            else {
                if ($file_bukti_pembayaran['status'] == "Success") {
                    $data = file_get_contents($file_bukti_pembayaran['data'][0]['file_bukti_pembayaran']);
                    force_download($file_bukti_pembayaran['data'][0]['file_bukti_pembayaran'], $data);
                } else {
                    $this->session->flashdata('APImessage', $file_bukti_pembayaran['message']);
                    redirect('pupr/events');
                }
            }
        } else
            redirect('pupr/login');
    }
}
