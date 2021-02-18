<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Common_model');

        if ($this->session->userdata('id_role') == 3) {
            $this->session->set_flashdata('APImessage', "Akses gagal. Hanya administrator yang dapat mengakses website ini");
            redirect('pupr/login');
        }
    }

    public function profile()
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

            $data['user'] = $this->User_model->view_user_detail($this->session->userdata('token'));
            if ($data['user'] == null)
                $null = true;
            else {
                if ($data['user']['status'] == "Success") {
                    $data['user'] = $data['user']['data'];
                    $data['user']['alamat_lengkap'] = '-';
                    if ($data['user']['alamat_rumah'] != '-') {
                        if ($data['user']['alamat_lengkap'] == '-')
                            $data['user']['alamat_lengkap'] = $data['user']['alamat_rumah'];
                        else
                            $data['user']['alamat_lengkap'] = $data['user']['alamat_lengkap'] . ' ' . $data['user']['alamat_rumah'];
                    }
                    if ($data['user']['rt'] != '-') {
                        if ($data['user']['alamat_lengkap'] == '-')
                            $data['user']['alamat_lengkap'] = 'RT. ' . $data['user']['rt'];
                        else {
                            $data['user']['alamat_lengkap'] = $data['user']['alamat_lengkap'] . ' RT.' . $data['user']['rt'];
                        }
                    }
                    if ($data['user']['rw'] != '-') {
                        if ($data['user']['alamat_lengkap'] == '-')
                            $data['user']['alamat_lengkap'] = 'RW. ' . $data['user']['rw'];
                        else
                            $data['user']['alamat_lengkap'] = $data['user']['alamat_lengkap'] . ' RW.' . $data['user']['rw'];
                    }
                    if ($data['user']['kelurahan'] != '-') {
                        if ($data['user']['alamat_lengkap'] == '-')
                            $data['user']['alamat_lengkap'] = 'Kelurahan ' . $data['user']['kelurahan'];
                        else
                            $data['user']['alamat_lengkap'] = $data['user']['alamat_lengkap'] . ', Kelurahan ' . $data['user']['kelurahan'];
                    }
                    if ($data['user']['kecamatan'] != '-') {
                        if ($data['user']['alamat_lengkap'] == '-')
                            $data['user']['alamat_lengkap'] = 'Kecamatan ' . $data['user']['kecamatan'];
                        else
                            $data['user']['alamat_lengkap'] = $data['user']['alamat_lengkap'] . ', Kecamatan ' . $data['user']['kecamatan'];
                    }
                    if ($data['user']['kota_kabupaten'] != '-') {
                        if ($data['user']['alamat_lengkap'] == '-')
                            $data['user']['alamat_lengkap'] = $data['user']['kota_kabupaten'];
                        else
                            $data['user']['alamat_lengkap'] = $data['user']['alamat_lengkap'] . ', ' . $data['user']['kota_kabupaten'];
                    }
                    if ($data['user']['provinsi'] != '-') {
                        if ($data['user']['alamat_lengkap'] == '-')
                            $data['user']['alamat_lengkap'] = $data['user']['provinsi'];
                        else
                            $data['user']['alamat_lengkap'] = $data['user']['alamat_lengkap'] . ', ' . $data['user']['provinsi'];
                    }
                    if ($data['user']['kode_pos'] != '-') {
                        if ($data['user']['alamat_lengkap'] == '-')
                            $data['user']['alamat_lengkap'] = $data['user']['kode_pos'];
                        else
                            $data['user']['alamat_lengkap'] = $data['user']['alamat_lengkap'] . ', ' . $data['user']['kode_pos'];
                    }

                    $data['user']['alamat_lengkap'] = strtolower($data['user']['alamat_lengkap']);

                    $data['user']['alamat_card'] = $data['user']['kota_kabupaten'] . ', ' . $data['user']['provinsi'];
                    $data['user']['alamat_card'] = strtolower($data['user']['alamat_card']);

                    $data['user']['tahun_lulus_date'] = $data['user']['tahun_lulus'];
                    $temparrtgl = explode('-', $data['user']['tahun_lulus_date']);
                    $tempbulan = $temparrtgl[1];
                    $temparrtgl[1] = $temparrtgl[2];
                    $temparrtgl[2] = $tempbulan;
                    $data['user']['tahun_lulus_tahun'] = $temparrtgl[0];
                    $data['user']['tahun_lulus_date'] = implode('-', $temparrtgl);
                    $tahun_lulus = strtotime($data['user']['tahun_lulus']);
                    $data['user']['tahun_lulus'] = date('d M Y', $tahun_lulus);

                    if ($data['user']['tempat_lahir'] == "")
                        $data['user']['tempat_lahir'] = "-";

                    $data['user']['tempat_tanggal_lahir'] = $data['user']['tempat_lahir'] . ', ' . date("d F Y", strtotime($data['user']['tanggal_lahir']));
                } else {
                    $data['user'] = null;
                    $this->session->set_flashdata("APImessage", $data['user']['message']);
                }
            }

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

            if ($null) {
                $this->load->view('error_page');
            } else {
                $this->load->view('administrator/profile', $data);
            }
        } else
            redirect("pupr/login");
    }

    public function view_kecamatan()
    {
        $kabupaten_kota = $this->input->post('id_kota_kabupaten');
        $data = $this->Common_model->view_kecamatan($kabupaten_kota, $this->session->userdata('token'));
        if ($data == null) {
            $this->load->view('error_page');
        } else {
            if ($data['status'] == "Success") {
                if (count($data['data']) > 0) {
                    $data = $data['data'];
                    foreach ($data as $row) {
                        echo '<option value="' . $row['id_kecamatan'] . '">' . $row['kecamatan'] . '</option>';
                    }
                } else
                    echo '<option value="0' . '" selected>Tidak ada Kecamatan yang terdaftar</option>';
            } else {
                $data = null;
                echo '<option value="' . '">Gagal mendapatkan Kecamatan untuk Kota/Kabupaten yang dipilih</option>';
            }
        }
    }

    public function view_kelurahan()
    {
        $kecamatan = $this->input->post('id_kecamatan');
        $data = $this->Common_model->view_kelurahan_desa($kecamatan, $this->session->userdata('token'));
        if ($data == null) {
            $this->load->view('error_page');
        } else {
            if ($data['status'] == "Success") {
                if (count($data['data']) > 0) {
                    $data = $data['data'];
                    foreach ($data as $row) {
                        echo '<option value="' . $row['id_kelurahan_desa'] . '">' . $row['kelurahan_desa'] . '</option>';
                    }
                } else
                    echo '<option value="0' . '" selected>Tidak ada kelurahan yang terdaftar</option>';
            } else {
                $data = null;
                echo '<option value="' . '">Gagal mendapatkan Kelurahan untuk Kecamatan yang dipilih</option>';
            }
        }
    }

    public function edit_profile_action()
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
            $id_status_perkawinan = $this->input->post('id_status_perkawinan');
            $nama_perusahaan = $this->input->post('nama_perusahaan');
            $jabatan = $this->input->post('jabatan');
            $utusan = $this->input->post('utusan');;
            $alamat_rumah = $this->input->post('alamat');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $temptanggallahir = explode('/', $this->input->post('profile_tanggal_lahir'));
            $tempbulan = $temptanggallahir[1];
            $temphari = $temptanggallahir[0];
            $temptahun = $temptanggallahir[2];
            $temptanggallahir[0] = $temptahun;
            $temptanggallahir[1] = $tempbulan;
            $temptanggallahir[2] = $temphari;
            $tanggal_lahir = implode('-', $temptanggallahir);
            $nik = $this->input->post('nik');
            $rt = $this->input->post('rt');
            $rw = $this->input->post('rw');
            $kode_pos = $this->input->post('kode_pos');
            $kode_area = $this->input->post('kode_area');
            $no_handphone = $this->input->post('nomor_handphone');
            $id_status_rumah = $this->input->post('id_status_rumah');
            $id_pendidikan = $this->input->post('id_pendidikan');
            $id_kompetensi = $this->input->post('id_kompetensi');
            $nama_universitas = $this->input->post('nama_universitas');
            $jurusan = $this->input->post('jurusan');
            $temptahunlulus = explode('/', $this->input->post('profile_tahun_lulus'));
            $tempbulan = $temptahunlulus[1];
            $temphari = $temptahunlulus[0];
            $temptahun = $temptahunlulus[2];
            $temptahunlulus[0] = $temptahun;
            $temptahunlulus[1] = $tempbulan;
            $temptahunlulus[2] = $temphari;
            $tahun_lulus = implode('-', $temptahunlulus);
            if ($_FILES['file_foto_profile']['size'] == 0)
                $file_foto_profil = null;
            else
                $file_foto_profil = new \CurlFile($_FILES['file_foto_profile']['tmp_name'], $_FILES['file_foto_profile']['type'], $_FILES['file_foto_profile']['name']);

            $npwp = $this->input->post('npwp');

            $edit_profile = $this->User_model->edit_user_detail(
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
                $id_kompetensi,
                $nama_universitas,
                $jurusan,
                $tahun_lulus,
                $npwp,
                $file_foto_profil,
                $this->session->userdata('token')
            );

            if ($edit_profile == null) {
                $this->load->view('error_page');
            }
            if ($edit_profile['status'] == "Success") {
                $this->session->set_flashdata('success', $edit_profile['message']);
                redirect('pupr/profile');
            } else {
                $this->session->set_flashdata('APImessage', $edit_profile['message']);
                redirect('pupr/profile');
            }
        } else {
            redirect("pupr/login");
        }
    }

    public function change_password_action()
    {
        if ($this->session->userdata('logged_in') == true) {
            $old_password = hash('sha256', $this->input->post('old_password'));
            $new_password = hash('sha256', $this->input->post('new_password'));

            $change_password = $this->User_model->change_password_user($old_password, $new_password, $this->session->userdata('token'));

            if ($change_password == null)
                $this->load->view('error_page');
            else {
                if ($change_password['status'] == "Success") {
                    $this->session->set_flashdata('success', $change_password['message']);
                    redirect("pupr/profile");
                } else {
                    $this->session->set_flashdata('APImessage', $change_password['message']);
                    redirect("pupr/profile");
                }
            }
        }
        else
        redirect('pupr/login');
    }
}
