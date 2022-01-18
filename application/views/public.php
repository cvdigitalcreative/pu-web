<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?php echo SITE_NAME_ADMIN . " - " . ucfirst($this->uri->segment(2)) ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?=base_url('assets/image/pupr-logo.svg')?>" rel="icon">

    <?php $this->load->view("components/head.php") ?>
    <!-- =======================================================
  * Template Name: Vesperr - v4.7.0
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?=base_url('assets/public_component/vendor/aos/aos.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/public_component/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/public_component/vendor/bootstrap-icons/bootstrap-icons.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/public_component/vendor/boxicons/css/boxicons.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/public_component/vendor/glightbox/css/glightbox.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/public_component/vendor/remixicon/remixicon.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/public_component/vendor/swiper/swiper-bundle.min.css')?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?=base_url('assets/public_component/css/style.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/public_component/css/style_custom.css')?>" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <h1><a href="#about">BJKW II PALEMBANG</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero1">Home</a></li>
                    <li class="dropdown"><a href="#about"><span>Mitra Kerja</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#balai_pupr">Balai PUPR</a></li>
                            <li><a href="#opd_1">OPD</a></li>
                            <li><a href="#vokasi_1">Vokasi</a></li>
                            <li class="dropdown"><a href="#asosiasi_1"><span>Asosiasi</span> <i
                                        class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="#asosiasi_profesi">Asosiasi Profesi</a></li>
                                    <li><a href="#asosiasi_bujk_1">Asosiasi BUJK</a></li>
                                </ul>
                            </li>
                            <li><a class="nav-link scrollto " href="#lapas_1">Lapas</a></li>
                            <li><a class="nav-link scrollto " href="#instansi_lain_1">Instansi Lain</a></li>
                            <li><a class="nav-link scrollto " href="#kso_1">KSO/PKS</a></li>
                            <li><a class="nav-link scrollto " href="#mtu_1">MTU</a></li>

                        </ul>
                    </li>

                    <li class="dropdown"><a href="#instruktur"><span>Instruktur</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#instruktur">Vokasi</a></li>
                            <li><a href="#instruktur">Non Vokasi</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#asesor"><span>Asesor</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#asesor">AKTK</a></li>
                            <li><a href="#asesor">ABU</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto " href="#se_kepala_daerah">SE Kepala Daerah</a></li>
                    <li><a class="nav-link scrollto " href="#capaian_output">Capaian Output</a></li>
                    <li class="dropdown"><a href="#"><span>Laporan</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <div class="btn-group">
                                <div class="btn-group dropleft" role="group">
                                    <button type="button" class="btn btn-white dropdown-toggle dropdown-toggle-split"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="sr-only">Infografis</span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <li class="dropdown"><a href="#"><span>2020</span> <i
                                                    class="bi bi-chevron-down"></i></a>
                                            <ul>
                                                <li><a href="<?= base_url();?>Infografis/infografis_data_null">All</a>
                                                </li>
                                                <li><a href="<?= base_url();?>Infografis/infografis_data_null">Sumatera
                                                        Selatan</a></li>
                                                <li><a href="<?= base_url();?>Infografis/infografis_data_null">Kep.
                                                        Bangka Belitung</a></li>
                                                <li><a href="<?= base_url();?>Infografis/infografis_data_null">Jambi</a>
                                                </li>
                                                <li><a
                                                        href="<?= base_url();?>Infografis/infografis_data_null">Bengkulu</a>
                                                </li>
                                                <li><a
                                                        href="<?= base_url();?>Infografis/infografis_data_null">Lampung</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#"><span>2021</span> <i
                                                    class="bi bi-chevron-down"></i></a>
                                            <ul>
                                                <li><a href="https://api.classico.id/pupr/uploads//file/file_modul/Laporan_Infografis_GABUNGAN_TA_2021_(FINAL)_1642162238.pdf"
                                                        target="_blank">All</a></li>
                                                <li><a href="https://api.classico.id/pupr/uploads//file/file_modul/01b_-_Laporan_Infografis_Prov._SUMSEL_TA_2021_(FINAL)_(1)_1642162041.pdf"
                                                        target="_blank">Sumatera Selatan</a></li>
                                                <li><a href="https://api.classico.id/pupr/uploads//file/file_modul/02b_-_Laporan_Infografis_Prov._KEP._BABEL_TA_2021_(FINAL)_(1)_1642162131.pdf"
                                                        target="_blank">Kep. Bangka Belitung</a></li>
                                                <li><a href="https://api.classico.id/pupr/uploads//file/file_modul/2021-12-28-INFOGRAFIS_PROVINSI_JAMBI_2021_1642162167.pdf"
                                                        target="_blank">Jambi</a></li>
                                                <li><a href="https://api.classico.id/pupr/uploads//file/file_modul/04b_-_Laporan_Infografis_Prov._BENGKULU_TA_2021_(FINAL)_(1)_1642162077.pdf"
                                                        target="_blank">Bengkulu</a></li>
                                                <li><a href="https://api.classico.id/pupr/uploads//file/file_modul/05b_-_Laporan_Infografis_Prov._LAMPUNG_TA_2021_(FINAL)_(1)_1642161954.pdf"
                                                        target="_blank">Lampung</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#"><span>2022</span> <i
                                                    class="bi bi-chevron-down"></i></a>
                                            <ul>
                                                <li><a href="<?= base_url();?>Infografis/infografis_data_null">All</a>
                                                </li>
                                                <li><a href="<?= base_url();?>Infografis/infografis_data_null">Sumatera
                                                        Selatan</a></li>
                                                <li><a href="<?= base_url();?>Infografis/infografis_data_null">Kep.
                                                        Bangka Belitung</a></li>
                                                <li><a href="<?= base_url();?>Infografis/infografis_data_null">Jambi</a>
                                                </li>
                                                <li><a
                                                        href="<?= base_url();?>Infografis/infografis_data_null">Bengkulu</a>
                                                </li>
                                                <li><a
                                                        href="<?= base_url();?>Infografis/infografis_data_null">Lampung</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-white">
                                    Infografis
                                </button>
                            </div>
                            <div class="btn-group">
                                <div class="btn-group dropleft" role="group">
                                    <button type="button" class="btn btn-white dropdown-toggle dropdown-toggle-split"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="sr-only">Kegiatan</span>
                                    </button>
                                    <div class="dropdown-menu">
                                        <li class="dropdown"><a href="#"><span>2020</span> <i
                                                    class="bi bi-chevron-down"></i></a>
                                            <ul>
                                                <li><a href="https://api.classico.id/pupr/uploads//file/file_modul/Infografis_BJKW_II_Plg_Update_26_-_02_-_2021_1642079316.pdf"
                                                        target="_blank">All</a></li>
                                                <li><a href="https://api.classico.id/pupr/uploads//file/file_modul/Laporan_Kegiatan_SUMSEL_TA_2020_1642079242.pdf"
                                                        target="_blank">Sumatera Selatan</a></li>
                                                <li><a href="https://api.classico.id/pupr/uploads//file/file_modul/02a_-_Laporan_Wilayah_Prov._KEP._BABEL_TA_2021_(FINAL)_1642079019.pdf"
                                                        target="_blank">Kep. Bangka Belitung</a></li>
                                                <li><a href="https://api.classico.id/pupr/uploads//file/file_modul/2021-12-30_LAPORAN_PEMBINAAN_JASA_KONSTRUKSI_WILAYAH_PROVINSI_JAMBI_TAHUN_2021_OK_LENGKAP_1642079058.pdf"
                                                        target="_blank">Jambi</a></li>
                                                <li><a href="https://api.classico.id/pupr/uploads//file/file_modul/2021_-_12_-_24_Laporan_Wilayah_Provinsi_Bengkulu_2021_-_FINAL_1642078984.pdf"
                                                        target="_blank">Bengkulu</a></li>
                                                <li><a href="https://api.classico.id/pupr/uploads//file/file_modul/Laporan_Kegiatan_Lampung_TA_2020_1642079213.pdf"
                                                        target="_blank">Lampung</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#"><span>2021</span> <i
                                                    class="bi bi-chevron-down"></i></a>
                                            <ul>
                                                <li><a href="https://api.classico.id/pupr/uploads//file/file_modul/Laporan_Wilayah_GABUNGAN_TA_2021_(FINAL)_(1)_1642079139.pdf"
                                                        target="_blank">All</a></li>
                                                <li><a href="https://api.classico.id/pupr/uploads//file/file_modul/01a_-_Laporan_Wilayah_Prov._SUMSEL_TA_2021_(FINAL)_1642078941.pdf"
                                                        target="_blank">Sumatera Selatan</a></li>
                                                <li><a href="https://api.classico.id/pupr/uploads//file/file_modul/Laporan_Kegiatan_BABEL_TA_2020_1642079270.pdf"
                                                        target="_blank">Kep. Bangka Belitung</a></li>
                                                <li><a href="https://api.classico.id/pupr/uploads//file/file_modul/Laporan_Kegiatan_JAMBI_TA_2020_1642079182.pdf"
                                                        target="_blank">Jambi</a></li>
                                                <li><a href="https://api.classico.id/pupr/uploads//file/file_modul/laporan_Kegiatan_Bengkulu_TA_2020_1642079294.pdf"
                                                        target="_blank">Bengkulu</a></li>
                                                <li><a href="https://api.classico.id/pupr/uploads//file/file_modul/05a_-_Laporan_Wilayah_Prov._LAMPUNG_TA_2021_(FINAL)_1642078848.pdf"
                                                        target="_blank">Lampung</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#"><span>2022</span> <i
                                                    class="bi bi-chevron-down"></i></a>
                                            <ul>
                                                <li><a href="<?= base_url();?>Infografis/infografis_data_null">All</a>
                                                </li>
                                                <li><a href="<?= base_url();?>Infografis/infografis_data_null">Sumatera
                                                        Selatan</a></li>
                                                <li><a href="<?= base_url();?>Infografis/infografis_data_null">Kep.
                                                        Bangka Belitung</a></li>
                                                <li><a href="<?= base_url();?>Infografis/infografis_data_null">Jambi</a>
                                                </li>
                                                <li><a
                                                        href="<?= base_url();?>Infografis/infografis_data_null">Bengkulu</a>
                                                </li>
                                                <li><a
                                                        href="<?= base_url();?>Infografis/infografis_data_null">Lampung</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-white">
                                    Kegiatan
                                </button>
                            </div>


                        </ul>
                    </li>
                    <li><a class="nav-link scrollto " href="#contact">Hubungi Kami</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <!-- End Hero -->

    <main id="main">

        <div id="hero1">

            <img id="home1" src="<?=base_url('assets/image/home1.png')?>" width="100%" height="100%" alt="">

        </div>
        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients clients">
            <div class="container">

                <div class="row">

                    <div class="col-lg-2 col-md-4 col-6">
                        <a href="#hero">
                            <img src="<?= base_url();?>assets/illustration/home.png" class="img-fluid" alt=""
                                data-aos="zoom-in" data-aos-delay="400">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <a href="#about">
                            <img src="<?= base_url();?>assets/illustration/mitra.png" class="img-fluid" alt=""
                                data-aos="zoom-in">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <a href="#instruktur">
                            <img src="<?= base_url();?>assets/illustration/instruktur.png" class="img-fluid" alt=""
                                data-aos="zoom-in" data-aos-delay="100">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <a href="#asesor">
                            <img src="<?= base_url();?>assets/illustration/asesor.png" class="img-fluid" alt=""
                                data-aos="zoom-in" data-aos-delay="200">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <a href="#se_kepala_daerah">
                            <img src="<?= base_url();?>assets/illustration/SE_Kepala_Daerah.png" class="img-fluid"
                                alt="" data-aos="zoom-in" data-aos-delay="300">
                        </a>
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <a href="#capaian_output">
                            <img src="<?= base_url();?>assets/illustration/Capaian_Output.png" class="img-fluid" alt=""
                                data-aos="zoom-in" data-aos-delay="500">
                        </a>
                    </div>

                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= Mitra Section ======= -->
        <section id="about" class="about mt-5">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Mitra Balai Jasa Konstruksi Wilayah II Palembang</h2>
                </div>
                <div class="row content">
                    <div class="col">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-black" id="">Mitra Kerja</h6>
                            </div>


                            <div class="card-body" id="mitra_1">
                                <div class="row">
                                    <div class="container">
                                        <a href="" id="chart-filter-file-mitra" type="button"
                                            class="btn btn-warning float-right bg-flat-color-1" target="">Download
                                            File</a>
                                        <a id="download-chart-mitra" download="ChartImage.png" href=""
                                            class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                            title="Download Gambar Chart">
                                            Download Image
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1"
                                                for="inlineFormCustomSelectPref text-primary">Provinsi</label>
                                            <select class="form-control" id="chart-filter-provinsi-mitra">
                                                <option selected value="0">Choose..</option>
                                                <option value="0">All By Provinsi</option>
                                                <option value="99">All By Kategori</option>
                                                <option value="15">Sumatera Selatan</option>
                                                <option value="16">Kep. Bangka Belitung</option>
                                                <option value="17">Jambi</option>
                                                <option value="18">Bengkulu</option>
                                                <option value="19">Lampung</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                Chart</label>
                                            <select class="form-control" name="chartType" id="chartType">
                                                <option value="bar">Bar</option>
                                                <option value="line">Line</option>
                                                <option value="pie">Pie</option>
                                                <option value="radar">Radar</option>
                                                <option value="doughnut">Doughnut</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="loader_mitra">
                                    </div>
                                </div>
                                <canvas id="mitra" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ======= Balai Sektoral Kemetrian PUPR Section ======= -->
        <section id="balai_pupr" class="balai_pupr">
            <div class="container">
                <div class="row content">
                    <div class="col">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold" id="">Balai PUPR</h6>
                            </div>
                            <div class="card-body" id="balai">
                                <div class="row">
                                    <div class="container mt-2">
                                        <a href="" id="chart-filter-file-Balai_Sektoral" type="button"
                                            class="btn btn-warning float-right bg-flat-color-1" target="">Download
                                            File</a>
                                        <a id="download-chart-Balai_Sektoral" download="ChartImage.png" href=""
                                            class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                            title="Download Gambar Chart">
                                            Download Image
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1"
                                                for="inlineFormCustomSelectPref text-primary">Provinsi</label>
                                            <select class="form-control" id="chart-filter-provinsi-Balai_Sektoral">
                                                <option selected value="0">Choose..</option>
                                                <option value="0">All By Provinsi</option>
                                                <option value="99">All By Kategori</option>
                                                <option value="15">Sumatera Selatan</option>
                                                <option value="16">Kep. Bangka Belitung</option>
                                                <option value="17">Jambi</option>
                                                <option value="18">Bengkulu</option>
                                                <option value="19">Lampung</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                Chart</label>
                                            <select class="form-control" name="chartTypeBalai_Sektoral"
                                                id="chartTypeBalai_Sektoral">
                                                <option value="bar">Bar</option>
                                                <option value="line">Line</option>
                                                <option value="pie">Pie</option>
                                                <option value="radar">Radar</option>
                                                <option value="doughnut">Doughnut</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="loader_Balai_Sektoral">
                                    </div>
                                </div>
                                <canvas id="Balai_Sektoral" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ======= OPD dan Vokasi ======= -->
        <section id="opd_1" class="count">
            <div class="container">
                <div class="row">

                    <div class="col-xl-6 d-flex align-items-stretch justify-content-center justify-content-xl-start">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-black" id="">Organisasi Perangkat Daerah Sub Urusan
                                    Jasa Konstruksi</h6>
                            </div>
                            <div class="card-body" id="opd">
                                <div class="row">
                                    <div class="container mt-2">
                                        <a href="" id="chart-filter-file-opd" type="button"
                                            class="btn btn-warning float-right bg-flat-color-1" target="">Download
                                            File</a>
                                        <a id="download-chart-opd" download="ChartImage.png" href=""
                                            class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                            title="Download Gambar Chart">
                                            Download Image
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Provinsi</label>
                                            <select class="form-control" id="chart-filter-provinsi-opd">
                                                <option selected value="0">Choose..</option>
                                                <option value="0">All By Provinsi</option>
                                                <option value="99">All By Kategori</option>
                                                <option value="15">Sumatera Selatan</option>
                                                <option value="16">Kep. Bangka Belitung</option>
                                                <option value="17">Jambi</option>
                                                <option value="18">Bengkulu</option>
                                                <option value="19">Lampung</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                Chart</label>
                                            <select class="form-control" name="chartTypeOPD" id="chartTypeOPD">
                                                <option value="bar">Bar</option>
                                                <option value="line">Line</option>
                                                <option value="radar">Radar</option>
                                                <option value="pie">Pie</option>
                                                <option value="doughnut">Doughnut</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="loader_OPD">
                                    </div>
                                </div>

                                <canvas id="OPD" width="900"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 d-flex align-items-stretch justify-content-center justify-content-xl-start">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-black" id="">Vokasi</h6>
                            </div>

                            <div class="card-body" id="vokasi_1">
                                <div class="row">
                                    <div class="mt-2">
                                        <a href="" id="chart-filter-file-vokasi" type="button"
                                            class="btn btn-warning float-right bg-flat-color-1" target="">Download
                                            File</a>
                                        <a id="download-chart-vokasi" download="ChartImage.png" href=""
                                            class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                            title="Download Gambar Chart">
                                            Download Image
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Provinsi</label>
                                            <select class="form-control" id="chart-filter-provinsi-vokasi">
                                                <option selected value="0">Choose..</option>
                                                <option value="0">All By Provinsi</option>
                                                <option value="99">All By Kategori</option>
                                                <option value="15">Sumatera Selatan</option>
                                                <option value="16">Kep. Bangka Belitung</option>
                                                <option value="17">Jambi</option>
                                                <option value="18">Bengkulu</option>
                                                <option value="19">Lampung</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                Chart</label>
                                            <select class="form-control" name="chartTypevokasi" id="chartTypevokasi">
                                                <option value="bar">Bar</option>
                                                <option value="line">Line</option>
                                                <option value="radar">Radar</option>
                                                <option value="pie">Pie</option>
                                                <option value="doughnut">Doughnut</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="loader_vokasi">
                                    </div>
                                </div>
                                <canvas id="vokasi" width="900"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- OPD dan Vokasi Section -->
        <!-- ======= Asosiasi Profesi dan Asosias BUJK ======= -->
        <section id="asosiasi_1" class="asosiasi_profesi">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 d-flex align-items-stretch justify-content-center justify-content-xl-start">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-black" id="">Asosiasi Profesi</h6>
                            </div>
                            <div class="card-body" id="asosiasi_profesi">
                                <div class="row">
                                    <div class="container mt-2">
                                        <a href="" id="chart-filter-file-Asosiasi_Profesi" type="button"
                                            class="btn btn-warning float-right bg-flat-color-1" target="">Download
                                            File</a>
                                        <a id="download-chart-Asosiasi_Profesi" download="ChartImage.png" href=""
                                            class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                            title="Download Gambar Chart">
                                            Download Image
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Provinsi</label>
                                            <select class="form-control" id="chart-filter-provinsi-Asosiasi_Profesi">
                                                <option selected value="0">Choose..</option>
                                                <option value="0">All By Provinsi</option>
                                                <option value="99">All By Kategori</option>
                                                <option value="15">Sumatera Selatan</option>
                                                <option value="16">Kep. Bangka Belitung</option>
                                                <option value="17">Jambi</option>
                                                <option value="18">Bengkulu</option>
                                                <option value="19">Lampung</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                Chart</label>
                                            <select class="form-control" name="chartTypeAsosiasi_Profesi"
                                                id="chartTypeAsosiasi_Profesi">
                                                <option value="bar">Bar</option>
                                                <option value="radar">Radar</option>
                                                <option value="doughnut">Doughnut</option>
                                                <option value="line">Line</option>
                                                <option value="pie">Pie</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="loader_Asosiasi_Profesi">
                                    </div>
                                </div>

                                <canvas id="Asosiasi_Profesi" width="900"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 d-flex align-items-stretch justify-content-center justify-content-xl-start"
                        id="asosiasi_bujk_1">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-black" id="">Asosiasi BUJK</h6>
                            </div>

                            <div class="card-body" id="asosiasi_bujk">
                                <div class="row">
                                    <div class="mt-2">
                                        <a href="" id="chart-filter-file-ABUJK" type="button"
                                            class="btn btn-warning float-right bg-flat-color-1" target="">Download
                                            File</a>
                                        <a id="download-chart-ABUJK" download="ChartImage.png" href=""
                                            class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                            title="Download Gambar Chart">
                                            Download Image
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Provinsi</label>
                                            <select class="form-control" id="chart-filter-provinsi-ABUJK">
                                                <option selected value="0">Choose..</option>
                                                <option value="0">All By Provinsi</option>
                                                <option value="99">All By Kategori</option>
                                                <option value="15">Sumatera Selatan</option>
                                                <option value="16">Kep. Bangka Belitung</option>
                                                <option value="17">Jambi</option>
                                                <option value="18">Bengkulu</option>
                                                <option value="19">Lampung</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                Chart</label>
                                            <select class="form-control" name="chartTypeABUJK" id="chartTypeABUJK">
                                                <option value="bar">Bar</option>
                                                <option value="radar">Radar</option>
                                                <option value="doughnut">Doughnut</option>
                                                <option value="line">Line</option>
                                                <option value="pie">Pie</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="loader_ABUJK">
                                    </div>
                                </div>
                                <canvas id="ABUJK" width="900"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- Asosiasi Profesi dan Asosias BUJK Section -->
        <!-- ======= LAPAS dan BUJK ======= -->
        <section id="lapas_1" class="lapas_1 mt-6">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 d-flex align-items-stretch justify-content-center justify-content-xl-start">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-black" id="">LAPAS</h6>
                            </div>
                            <div class="card-body" id="lapas_1">
                                <div class="row">
                                    <div class="container mt-2">
                                        <a href="" id="chart-filter-file-lapas" type="button"
                                            class="btn btn-warning float-right bg-flat-color-1" target="">Download
                                            File</a>
                                        <a id="download-chart-lapas" download="ChartImage.png" href=""
                                            class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                            title="Download Gambar Chart">
                                            Download Image
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Provinsi</label>
                                            <select class="form-control" id="chart-filter-provinsi-lapas">
                                                <option selected value="0">Choose..</option>
                                                <option value="0">All By Provinsi</option>
                                                <option value="99">All By Kategori</option>
                                                <option value="15">Sumatera Selatan</option>
                                                <option value="16">Kep. Bangka Belitung</option>
                                                <option value="17">Jambi</option>
                                                <option value="18">Bengkulu</option>
                                                <option value="19">Lampung</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                Chart</label>
                                            <select class="form-control" name="chartTypelapas" id="chartTypelapas">
                                                <option value="bar">Bar</option>
                                                <option value="pie">Pie</option>
                                                <option value="radar">Radar</option>
                                                <option value="doughnut">Doughnut</option>
                                                <option value="line">Line</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="loader_lapas">
                                    </div>
                                </div>

                                <canvas id="lapas" width="900"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 d-flex align-items-stretch justify-content-center justify-content-xl-start"
                        id="instansi_lain_1">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-black" id="">Instansi Lain</h6>
                            </div>

                            <div class="card-body" id="instansi_lain_1">
                                <div class="row">
                                    <div class="mt-2">
                                        <a href="" id="chart-filter-file-instansi_lain" type="button"
                                            class="btn btn-warning float-right bg-flat-color-1" target="">Download
                                            File</a>
                                        <a id="download-chart-instansi_lain" download="ChartImage.png" href=""
                                            class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                            title="Download Gambar Chart">
                                            Download Image
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Provinsi</label>
                                            <select class="form-control" id="chart-filter-provinsi-instansi_lain">
                                                <option selected value="0">Choose..</option>
                                                <option value="0">All By Provinsi</option>
                                                <option value="99">All By Kategori</option>
                                                <option value="15">Sumatera Selatan</option>
                                                <option value="16">Kep. Bangka Belitung</option>
                                                <option value="17">Jambi</option>
                                                <option value="18">Bengkulu</option>
                                                <option value="19">Lampung</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                Chart</label>
                                            <select class="form-control" name="chartTypeinstansi_lain"
                                                id="chartTypeinstansi_lain">
                                                <option value="bar">Bar</option>
                                                <option value="pie">Pie</option>
                                                <option value="radar">Radar</option>
                                                <option value="doughnut">Doughnut</option>
                                                <option value="line">Line</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="loader_instansi_lain">
                                    </div>
                                </div>
                                <canvas id="instansi_lain" width="900"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- Asosiasi Profesi dan Asosias BUJK Section -->
        <!-- ======= Capaian Output Daerah ======= -->
        <section id="kso_1" class="about">
            <div class="container">
                <div class="row content">
                    <div class="col">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-black" id="">KSO/PKS</h6>
                            </div>


                            <div class="card-body" id="kso">
                                <div class="row">
                                    <div class="container mt-2">
                                        <a href="" id="chart-filter-file-KSO" type="button"
                                            class="btn btn-warning float-right bg-flat-color-1" target="">Download
                                            File</a>
                                        <a id="download-chart-KSO" download="ChartImage.png" href=""
                                            class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                            title="Download Gambar Chart">
                                            Download Image
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1"
                                                for="inlineFormCustomSelectPref text-primary">Provinsi</label>
                                            <select class="form-control" id="chart-filter-provinsi-KSO">
                                                <option selected value="0">Choose..</option>
                                                <option value="0">All By Provinsi</option>
                                                <option value="99">All By Kategori</option>
                                                <option value="15">Sumatera Selatan</option>
                                                <option value="16">Kep. Bangka Belitung</option>
                                                <option value="17">Jambi</option>
                                                <option value="18">Bengkulu</option>
                                                <option value="19">Lampung</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                Chart</label>
                                            <select class="form-control" name="chartTypeKSO" id="chartTypeKSO">
                                                <option value="bar">Vertical Bar</option>
                                                <option value="horizontalBar">Horizontal Bar</option>
                                                <option value="line">Line</option>
                                                <option value="pie">Pie</option>
                                                <option value="radar">Radar</option>
                                                <option value="doughnut">Doughnut</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="loader_KSO">
                                    </div>
                                </div>
                                <canvas id="KSO" height=""></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- Capaian Output Section -->
        <section id="mtu_1" class="about">
            <div class="container">
                <div class="row content">
                    <div class="col">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-black" id="">Mobile Training Unit (MTU)</h6>
                            </div>


                            <div class="card-body" id="mtu">
                                <div class="row">
                                    <div class="container mt-2">
                                        <a href="" id="chart-filter-file-MTU" type="button"
                                            class="btn btn-warning float-right bg-flat-color-1" target="">Download
                                            File</a>
                                        <a id="download-chart-MTU" download="ChartImage.png" href=""
                                            class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                            title="Download Gambar Chart">
                                            Download Image
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1"
                                                for="inlineFormCustomSelectPref text-primary">Provinsi</label>
                                            <select class="form-control" id="chart-filter-provinsi-MTU">
                                                <option selected value="0">Choose..</option>
                                                <option value="0">All By Provinsi</option>
                                                <option value="99">All By Kategori</option>
                                                <option value="15">Sumatera Selatan</option>
                                                <option value="16">Kep. Bangka Belitung</option>
                                                <option value="17">Jambi</option>
                                                <option value="18">Bengkulu</option>
                                                <option value="19">Lampung</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                Chart</label>
                                            <select class="form-control" name="chartTypeMTU" id="chartTypeMTU">
                                                <option value="bar">Vertical Bar</option>
                                                <option value="horizontalBar">Horizontal Bar</option>
                                                <option value="line">Line</option>
                                                <option value="pie">Pie</option>
                                                <option value="radar">Radar</option>
                                                <option value="doughnut">Doughnut</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="loader_MTU">
                                    </div>
                                </div>
                                <canvas id="MTU" height=""></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- Capaian Output Section -->
        <!-- ======= Instruktur ======= -->
        <section id="instruktur" class="instruktur">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Instruktur</h2>
                    <p>Instruktur Vokasi dan Non Vokasi</p>
                </div>
                <div class="row">
                    <div class="col-xl-6 d-flex align-items-stretch justify-content-center justify-content-xl-start">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-black" id="">Instruktur Vokasi</h6>
                            </div>
                            <div class="card-body" id="instruktur_vokasi">
                                <div class="row">
                                    <div class="container mt-2">
                                        <a href="" id="chart-filter-file-DIV" type="button"
                                            class="btn btn-warning float-right bg-flat-color-1" target="">Download
                                            File</a>
                                        <a id="download-chart-DIV" download="ChartImage.png" href=""
                                            class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                            title="Download Gambar Chart">
                                            Download Image
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Provinsi</label>
                                            <select class="form-control" id="chart-filter-provinsi-DIV">
                                                <option selected value="0">Choose..</option>
                                                <option value="0">All By Provinsi</option>
                                                <option value="99">All By Kategori</option>
                                                <option value="15">Sumatera Selatan</option>
                                                <option value="16">Kep. Bangka Belitung</option>
                                                <option value="17">Jambi</option>
                                                <option value="18">Bengkulu</option>
                                                <option value="19">Lampung</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                Chart</label>
                                            <select class="form-control" name="chartTypeDIV" id="chartTypeDIV">
                                                <option value="bar">Bar</option>
                                                <option value="doughnut">Doughnut</option>
                                                <option value="radar">Radar</option>
                                                <option value="pie">Pie</option>
                                                <option value="line">Line</option>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="loader_DIV">
                                    </div>
                                </div>

                                <canvas id="DIV" width="900"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 d-flex align-items-stretch justify-content-center justify-content-xl-start"
                        id="dinv">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-black" id="">Instruktur Non Vokasi</h6>
                            </div>

                            <div class="card-body" id="instruktur_non_vokasi">
                                <div class="row">
                                    <div class="mt-2">
                                        <a href="" id="chart-filter-file-DINV" type="button"
                                            class="btn btn-warning float-right bg-flat-color-1" target="">Download
                                            File</a>
                                        <a id="download-chart-DINV" download="ChartImage.png" href=""
                                            class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                            title="Download Gambar Chart">
                                            Download Image
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Provinsi</label>
                                            <select class="form-control" id="chart-filter-provinsi-DINV">
                                                <option selected value="0">Choose..</option>
                                                <option value="0">All By Provinsi</option>
                                                <option value="99">All By Kategori</option>
                                                <option value="15">Sumatera Selatan</option>
                                                <option value="16">Kep. Bangka Belitung</option>
                                                <option value="17">Jambi</option>
                                                <option value="18">Bengkulu</option>
                                                <option value="19">Lampung</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                Chart</label>
                                            <select class="form-control" name="chartTypeDINV" id="chartTypeDINV">
                                                <option value="bar">Bar</option>
                                                <option value="doughnut">Doughnut</option>
                                                <option value="radar">Radar</option>
                                                <option value="pie">Pie</option>
                                                <option value="line">Line</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="loader_DINV">
                                    </div>
                                </div>
                                <canvas id="DINV" width="900"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- Instruktur Section -->
        <!-- ======= Asesor ======= -->
        <section id="asesor" class="counts">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Asesor</h2>
                    <p>Asesor Kompetensi Tenaga Kerja Konstruksi dan Asesor Badan Usaha</p>
                </div>
                <div class="row">
                    <div class="col-xl-6 d-flex align-items-stretch justify-content-center justify-content-xl-start"
                        id="aktk_1">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-black" id="">Asesor Kompetensi Tenaga Kerja
                                    Konstruksi</h6>
                            </div>
                            <div class="card-body" id="aktk_1">
                                <div class="row">
                                    <div class="container mt-2">
                                        <a href="" id="chart-filter-file-AKTK" type="button"
                                            class="btn btn-warning float-right bg-flat-color-1" target="">Download
                                            File</a>
                                        <a id="download-chart-AKTK" download="ChartImage.png" href=""
                                            class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                            title="Download Gambar Chart">
                                            Download Image
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Provinsi</label>
                                            <select class="form-control" id="chart-filter-provinsi-AKTK">
                                                <option selected value="0">Choose..</option>
                                                <option value="0">All By Provinsi</option>
                                                <option value="99">All By Kategori</option>
                                                <option value="15">Sumatera Selatan</option>
                                                <option value="16">Kep. Bangka Belitung</option>
                                                <option value="17">Jambi</option>
                                                <option value="18">Bengkulu</option>
                                                <option value="19">Lampung</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                Chart</label>
                                            <select class="form-control" name="chartTypeAKTK" id="chartTypeAKTK">
                                                <option value="bar">Bar</option>
                                                <option value="line">Line</option>
                                                <option value="radar">Radar</option>
                                                <option value="pie">Pie</option>
                                                <option value="doughnut">Doughnut</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="loader_AKTK">
                                    </div>
                                </div>

                                <canvas id="AKTK" width="900"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 d-flex align-items-stretch justify-content-center justify-content-xl-start"
                        id="abu_1">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-black" id="">Asesor Badan Usaha</h6>
                            </div>

                            <div class="card-body" id="ABU">
                                <div class="row">
                                    <div class="mt-2">
                                        <a href="" id="chart-filter-file-DABU" type="button"
                                            class="btn btn-warning float-right bg-flat-color-1" target="">Download
                                            File</a>
                                        <a id="download-chart-DABU" download="ChartImage.png" href=""
                                            class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                            title="Download Gambar Chart">
                                            Download Image
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Provinsi</label>
                                            <select class="form-control" id="chart-filter-provinsi-DABU">
                                                <option selected value="0">Choose..</option>
                                                <option value="0">All By Provinsi</option>
                                                <option value="99">All By Kategori</option>
                                                <option value="15">Sumatera Selatan</option>
                                                <option value="16">Kep. Bangka Belitung</option>
                                                <option value="17">Jambi</option>
                                                <option value="18">Bengkulu</option>
                                                <option value="19">Lampung</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                Chart</label>
                                            <select class="form-control" name="chartTypeDABU" id="chartTypeDABU">
                                                <option value="bar">Bar</option>
                                                <option value="line">Line</option>
                                                <option value="radar">Radar</option>
                                                <option value="pie">Pie</option>
                                                <option value="doughnut">Doughnut</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="loader_DABU">
                                    </div>
                                </div>
                                <canvas id="DABU" width="900"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- Asesor Section -->
        <!-- ======= SE Kepala Daerah ======= -->
        <section id="se_kepala_daerah" class="se_kepala_daerah">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Surat Edaran Kepala Daerah</h2>
                </div>
                <div class="row content">
                    <div class="col">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-black" id="">SE Kepala Daerah</h6>
                            </div>


                            <div class="card-body" id="SE_KD">
                                <div class="row">
                                    <div class="container">
                                        <a href="" id="chart-filter-file-SE_Kepala_Daerah" type="button"
                                            class="btn btn-warning float-right bg-flat-color-1" target="">Download
                                            File</a>
                                        <a id="download-chart-SE_Kepala_Daerah" download="ChartImage.png" href=""
                                            class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                            title="Download Gambar Chart">
                                            Download Image
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1"
                                                for="inlineFormCustomSelectPref text-primary">Provinsi</label>
                                            <select class="form-control" id="chart-filter-provinsi-SE_Kepala_Daerah">
                                                <option selected value="0">Choose..</option>
                                                <option value="0">All By Provinsi</option>
                                                <option value="99">All By Kategori</option>
                                                <option value="15">Sumatera Selatan</option>
                                                <option value="16">Kep. Bangka Belitung</option>
                                                <option value="17">Jambi</option>
                                                <option value="18">Bengkulu</option>
                                                <option value="19">Lampung</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                Chart</label>
                                            <select class="form-control" name="chartTypeSE_Kepala_Daerah"
                                                id="chartTypeSE_Kepala_Daerah">
                                                <option value="bar">Bar</option>
                                                <option value="line">Line</option>
                                                <option value="pie">Pie</option>
                                                <option value="radar">Radar</option>
                                                <option value="doughnut">Doughnut</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="loader_SE_Kepala_Daerah">
                                    </div>
                                </div>
                                <canvas id="SE_Kepala_Daerah" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- SE Kepala Daerah Section -->
        <!-- Balai Sektoral Kementerian PUPR Section -->
        <!-- ======= Capaian Output Section ======= -->
        <section id="capaian_output" class="services">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Capaian Output</h2>
                    <p>Balai Jasa Konstruksi Wilayah II Palembang</p>
                </div>

                <div class="row">
                    <div class="col d-flex">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="card mb-4">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-black" id="">Rekap Pelaksanaan Kegiatan</h6>
                                </div>
                                <div class="card-body" id="RPK_1">
                                    <div class="row">
                                        <div class="mt-2">
                                            <a href="" id="chart-filter-file-RPK" type="button"
                                                class="btn btn-warning float-right bg-flat-color-1" target="">Download
                                                File</a>
                                            <a id="download-chart-RPK" download="ChartImage.png" href=""
                                                class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                                title="Download Gambar Chart">
                                                Download Image
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group py-2">
                                                <label class="my-1"
                                                    for="inlineFormCustomSelectPref text-primary">Provinsi</label>
                                                <select class="form-control" id="chart-filter-provinsi-RPK">
                                                    <option selected value="0">Choose..</option>
                                                    <option value="0">All By Provinsi</option>
                                                    <option value="99">All By Kategori</option>
                                                    <option value="15">Sumatera Selatan</option>
                                                    <option value="16">Kep. Bangka Belitung</option>
                                                    <option value="17">Jambi</option>
                                                    <option value="18">Bengkulu</option>
                                                    <option value="19">Lampung</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group py-2">
                                                <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                    Chart</label>
                                                <select class="form-control" name="chartTypeRPK" id="chartTypeRPK">
                                                    <option value="bar">Bar</option>
                                                    <option value="pie">Pie</option>
                                                    <option value="radar">Radar</option>
                                                    <option value="line">Line</option>
                                                    <option value="doughnut">Doughnut</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="loader_RPK">
                                        </div>
                                    </div>
                                    <canvas id="RPK" width="535"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="card mb-4">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-black" id="">Rekap Peserta Berdasarkan Skema
                                    </h6>
                                </div>
                                <div class="card-body" id="RPBS_1">
                                    <div class="row">
                                        <div class="mt-2">
                                            <a href="" id="chart-filter-file-RPBK" type="button"
                                                class="btn btn-warning float-right bg-flat-color-1" target="">Download
                                                File</a>
                                            <a id="download-chart-RPBK" download="ChartImage.png" href=""
                                                class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                                title="Download Gambar Chart">
                                                Download Image
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group py-2">
                                                <label class="my-1"
                                                    for="inlineFormCustomSelectPref text-primary">Provinsi</label>
                                                <select class="form-control" id="chart-filter-provinsi-RPBK">
                                                    <option selected value="0">Choose..</option>
                                                    <option value="0">All By Provinsi</option>
                                                    <option value="99">All By Kategori</option>
                                                    <option value="15">Sumatera Selatan</option>
                                                    <option value="16">Kep. Bangka Belitung</option>
                                                    <option value="17">Jambi</option>
                                                    <option value="18">Bengkulu</option>
                                                    <option value="19">Lampung</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group py-2">
                                                <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                    Chart</label>
                                                <select class="form-control" name="chartTypeRPBK" id="chartTypeRPBK">
                                                    <option value="bar">Bar</option>
                                                    <option value="pie">Pie</option>
                                                    <option value="radar">Radar</option>
                                                    <option value="line">Line</option>
                                                    <option value="doughnut">Doughnut</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="loader_RPBK">
                                        </div>
                                    </div>
                                    <canvas id="RPBK" width="535"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Capaian Output Section -->

        <!-- ======= Capaian Output Section ======= -->
        <section id="ppp_1" class="services">
            <div class="container">
                <div class="row">
                    <div class="col d-flex">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="card mb-4">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-black" id="">Program Padat Karya</h6>
                                </div>
                                <div class="card-body" id="PPP_1">
                                    <div class="row">
                                        <div class="mt-2">
                                            <a href="" id="chart-filter-file-PPK" type="button"
                                                class="btn btn-warning float-right bg-flat-color-1" target="">Download
                                                File</a>
                                            <a id="download-chart-PPK" download="ChartImage.png" href=""
                                                class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                                title="Download Gambar Chart">
                                                Download Image
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group py-2">
                                                <label class="my-1"
                                                    for="inlineFormCustomSelectPref text-primary">Provinsi</label>
                                                <select class="form-control" id="chart-filter-provinsi-PPK">

                                                    <option selected value="99">Choose..</option>
                                                    <option value="0">All By Provinsi</option>
                                                    <option value="99">All By Kategori</option>
                                                    <option value="15">Sumatera Selatan</option>
                                                    <option value="16">Kep. Bangka Belitung</option>
                                                    <option value="17">Jambi</option>
                                                    <option value="18">Bengkulu</option>
                                                    <option value="19">Lampung</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group py-2">
                                                <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                    Chart</label>
                                                <select class="form-control" name="chartTypePPK" id="chartTypePPK">
                                                    <option value="bar">Bar</option>
                                                    <option value="pie">Pie</option>
                                                    <option value="doughnut">Doughnut</option>
                                                    <option value="radar">Radar</option>
                                                    <option value="line">Line</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="loader_PPK">
                                        </div>
                                    </div>
                                    <canvas id="PPK" width="535"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="card mb-4">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-black" id="">Rekap Peserta Berdasarkan
                                        Wilayah dan Pembiayaan</h6>
                                </div>
                                <div class="card-body" id="RPBWP_1">
                                    <div class="row">
                                        <div class="mt-2">
                                            <a href="" id="chart-filter-file-RPBWP" type="button"
                                                class="btn btn-warning float-right bg-flat-color-1" target="">Download
                                                File</a>
                                            <a id="download-chart-RPBWP" download="ChartImage.png" href=""
                                                class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                                title="Download Gambar Chart">
                                                Download Image
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group py-2">
                                                <label class="my-1"
                                                    for="inlineFormCustomSelectPref text-primary">Provinsi</label>
                                                <select class="form-control" id="chart-filter-provinsi-RPBWP">
                                                    <option selected value="99">Choose..</option>
                                                    <option value="0">All By Provinsi</option>
                                                    <option value="99">All By Kategori</option>
                                                    <option value="15">Sumatera Selatan</option>
                                                    <option value="16">Kep. Bangka Belitung</option>
                                                    <option value="17">Jambi</option>
                                                    <option value="18">Bengkulu</option>
                                                    <option value="19">Lampung</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group py-2">
                                                <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                    Chart</label>
                                                <select class="form-control" name="chartTypeRPBWP" id="chartTypeRPBWP">
                                                    <option value="bar">Bar</option>
                                                    <option value="doughnut">Doughnut</option>
                                                    <option value="radar">Radar</option>
                                                    <option value="line">Line</option>
                                                    <option value="pie">Pie</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="loader_RPBWP">
                                        </div>
                                    </div>
                                    <canvas id="RPBWP" width="535"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Capaian Output Section -->

        <!-- ======= Capaian Output Daerah ======= -->
        <section id="RPKBMK_1" class="about">
            <div class="container">
                <div class="row content">
                    <div class="col">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-black" id="">Rekap Peserta Kegiatan
                                    Berdasarkan Mitra Kerja</h6>
                            </div>


                            <div class="card-body" id="RPKBMK_1">
                                <div class="row">
                                    <div class="container mt-2">
                                        <a href="" id="chart-filter-file-RPKBMK" type="button"
                                            class="btn btn-warning float-right bg-flat-color-1" target="">Download
                                            File</a>
                                        <a id="download-chart-RPKBMK" download="ChartImage.png" href=""
                                            class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                            title="Download Gambar Chart">
                                            Download Image
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1"
                                                for="inlineFormCustomSelectPref text-primary">Provinsi</label>
                                            <select class="form-control" id="chart-filter-provinsi-RPKBMK">
                                                <option selected value="0">Choose..</option>
                                                <option value="0">All By Provinsi</option>
                                                <option value="99">All By Kategori</option>
                                                <option value="15">Sumatera Selatan</option>
                                                <option value="16">Kep. Bangka Belitung</option>
                                                <option value="17">Jambi</option>
                                                <option value="18">Bengkulu</option>
                                                <option value="19">Lampung</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                Chart</label>
                                            <select class="form-control" name="chartTypeRPKBMK" id="chartTypeRPKBMK">
                                                <option value="horizontalBar">Horizontal Bar</option>
                                                <option value="bar">Vertical Bar</option>
                                                <option value="line">Line</option>
                                                <option value="pie">Pie</option>
                                                <option value="radar">Radar</option>
                                                <option value="doughnut">Doughnut</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="loader_RPKBMK">
                                    </div>
                                </div>
                                <canvas id="RPKBMK" height=""></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- Capaian Output Section -->
        <!-- ======= Capaian Output Daerah ======= -->
        <section id="RPKBJK_1" class="about">
            <div class="container">
                <div class="row content">
                    <div class="col">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-black" id="">Rekap Pelaksanaan Kegiatan
                                    Berdasarkan Jenis Kegiatan</h6>
                            </div>


                            <div class="card-body" id="RPKBJK">
                                <div class="row">
                                    <div class="container mt-2">
                                        <a href="" id="chart-filter-file-RPKBS" type="button"
                                            class="btn btn-warning float-right bg-flat-color-1" target="">Download
                                            File</a>
                                        <a id="download-chart-RPKBS" download="ChartImage.png" href=""
                                            class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                            title="Download Gambar Chart">
                                            Download Image
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1"
                                                for="inlineFormCustomSelectPref text-primary">Provinsi</label>
                                            <select class="form-control" id="chart-filter-provinsi-RPKBS">
                                                <option selected value="0">Choose..</option>
                                                <option value="0">All By Provinsi</option>
                                                <option value="99">All By Kategori</option>
                                                <option value="15">Sumatera Selatan</option>
                                                <option value="16">Kep. Bangka Belitung</option>
                                                <option value="17">Jambi</option>
                                                <option value="18">Bengkulu</option>
                                                <option value="19">Lampung</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                Chart</label>
                                            <select class="form-control" name="chartTypeRPKBS" id="chartTypeRPKBS">
                                                <option value="bar">Bar</option>
                                                <option value="line">Line</option>
                                                <option value="pie">Pie</option>
                                                <option value="radar">Radar</option>
                                                <option value="doughnut">Doughnut</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="loader_RPKBS">
                                    </div>
                                </div>
                                <canvas id="RPKBS" height="110"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- Capaian Output Section -->
        <!-- ======= Capaian Output Daerah ======= -->
        <section id="TKK_AHLI_1" class="about">
            <div class="container">
                <div class="row content">
                    <div class="col">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-black" id="">Jumlah TKK Ahli Terlatih dan
                                    Tersertifikasi Berdasarkan Jabatan Kerja</h6>
                            </div>


                            <div class="card-body" id="TKK_AHLI_1">
                                <div class="row">
                                    <div class="container mt-2">
                                        <a href="" id="chart-filter-file-TKK_AHLI" type="button"
                                            class="btn btn-warning float-right bg-flat-color-1" target="">Download
                                            File</a>
                                        <a id="download-chart-TKK_AHLI" download="ChartImage.png" href=""
                                            class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                            title="Download Gambar Chart">
                                            Download Image
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1"
                                                for="inlineFormCustomSelectPref text-primary">Provinsi</label>
                                            <select class="form-control" id="chart-filter-provinsi-TKK_AHLI">
                                                <option selected value="0">Choose..</option>
                                                <option value="0">All By Provinsi</option>
                                                <option value="99">All By Kategori</option>
                                                <option value="15">Sumatera Selatan</option>
                                                <option value="16">Kep. Bangka Belitung</option>
                                                <option value="17">Jambi</option>
                                                <option value="18">Bengkulu</option>
                                                <option value="19">Lampung</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                Chart</label>
                                            <select class="form-control" name="chartTypeTKK_AHLI"
                                                id="chartTypeTKK_AHLI">
                                                <option value="horizontalBar">Horizontal Bar</option>
                                                <option value="bar">Vertical Bar</option>
                                                <option value="line">Line</option>
                                                <option value="pie">Pie</option>
                                                <option value="radar">Radar</option>
                                                <option value="doughnut">Doughnut</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="loader_TKK_AHLI">
                                    </div>
                                </div>
                                <canvas id="TKK_AHLI" height="110"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- Capaian Output Section -->
        <section id="TKK_TERAMPIL_1" class="about">
            <div class="container">
                <div class="row content">
                    <div class="col">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-black" id="">Jumlah TKK Terampil Terlatih dan
                                    Tersertifikasi Berdasarkan Jabatan Kerja</h6>
                            </div>


                            <div class="card-body" id="TKK_TERAMPIL_1">
                                <div class="row">
                                    <div class="container mt-2">
                                        <a href="" id="chart-filter-file-TKK_TERAMPIL" type="button"
                                            class="btn btn-warning float-right bg-flat-color-1" target="">Download
                                            File</a>
                                        <a id="download-chart-TKK_TERAMPIL" download="ChartImage.png" href=""
                                            class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                            title="Download Gambar Chart">
                                            Download Image
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1"
                                                for="inlineFormCustomSelectPref text-primary">Provinsi</label>
                                            <select class="form-control" id="chart-filter-provinsi-TKK_TERAMPIL">
                                                <option selected value="0">Choose..</option>
                                                <option value="0">All By Provinsi</option>
                                                <option value="99">All By Kategori</option>
                                                <option value="15">Sumatera Selatan</option>
                                                <option value="16">Kep. Bangka Belitung</option>
                                                <option value="17">Jambi</option>
                                                <option value="18">Bengkulu</option>
                                                <option value="19">Lampung</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                Chart</label>
                                            <select class="form-control" name="chartTypeTKK_TERAMPIL"
                                                id="chartTypeTKK_TERAMPIL">
                                                <option value="horizontalBar">Horizontal Bar</option>
                                                <option value="bar">Vertical Bar</option>
                                                <option value="line">Line</option>
                                                <option value="pie">Pie</option>
                                                <option value="radar">Radar</option>
                                                <option value="doughnut">Doughnut</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="loader_TKK_TERAMPIL">
                                    </div>
                                </div>
                                <canvas id="TKK_TERAMPIL" height="110"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- Capaian Output Section -->
        <section id="her">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Our Team</h2>
                    <p>Balai Jasa Konstruksi Wilayah II Palembang</p>
                </div>

            </div>
        </section><!-- End Capaian Output Section -->
        <div id="her">

            <img id="her" src="<?=base_url('assets/image/foto_bersama.jpg')?>" width="100%" height="50%" alt="">

        </div>

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Hubungi Kami</h2>
                </div>

                <div class="row">

                    <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="contact-about">
                            <h3>Balai Jasa Konstruksi Wilayah II Palembang</h3>
                            <p>Layanan Sosial Media Kami.</p>
                            <div class="social-links">
                                <a href="https://www.facebook.com/balai.palembang.7" target="_blank" class="facebook"><i
                                        class="bi bi-facebook"></i></a>
                                <a href="https://instagram.com/pupr_bjkw2_palembang" target="_blank" class="instagram"
                                    target-blank><i class="bi bi-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="info">
                            <div>
                                <i class="ri-map-pin-line"></i>
                                <p> <a href="https://goo.gl/maps/bCC4fWupRY4agv3z6" target="_blank">Jl. Kasnariansyah,
                                        No. 78, KM 4.5, Kel. 20 Ilir, Kec. Ilir Timur I, <br>Kota
                                        Palembang, Sumatera Selatan, Indonesia</a></p>
                            </div>

                            <!-- <div>
                                <i class="ri-mail-send-line"></i>
                                <p>info@example.com</p>
                            </div> -->

                            <div>
                                <i class="ri-phone-line"></i>
                                <p>+62 711 4169 63</p>
                            </div>
                            <div>
                                <i class="ri-mail-send-line"><a href="mailto:bjkw2plg@pu.go.id"></a></i>
                                <p><a href="mailto:bjkw2plg@pu.go.id">bjkw2plg@pu.go.id</a></p>
                            </div>

                        </div>
                    </div>


                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col text-lg-center text-center">
                    <div class="copyright">
                        &copy; Balai Jasa <strong>Konstruksi</strong> Wilayah II
                    </div>
                    <div class="credits">
                        Palembang
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <?php $this->load->view("components/js_public.php") ?>

    <!-- Vendor JS Files -->
    <script src="<?= base_url('assets/public_component/vendor/purecounter/purecounter.js')?>"></script>
    <script src="<?= base_url('assets/public_component/vendor/aos/aos.js')?>"></script>
    <script src="<?= base_url('assets/public_component/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?=base_url('assets/public_component/vendor/glightbox/js/glightbox.min.js')?>"></script>
    <script src="<?=base_url('assets/public_component/vendor/isotope-layout/isotope.pkgd.min.js')?>"></script>
    <script src="<?=base_url('assets/public_component/vendor/swiper/swiper-bundle.min.js')?>"></script>
    <script src="<?=base_url('assets/public_component/vendor/php-email-form/validate.js')?>"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url('assets/public_component/js/main.js')?>"></script>
    <script src="<?=base_url('assets/js/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js')?>"></script>
    <script src="<?=base_url('assets/js/administrator/public.js')?>"></script>
</body>

</html>