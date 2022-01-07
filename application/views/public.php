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
                <h1><a href="index.html">BJKW II Palembang</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li class="dropdown"><a href="#about"><span>Mitra Balai</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#balai_pupr">Balai PUPR</a></li>
                            <li><a href="#opd_1">OPD</a></li>
                            <li><a href="#vokasi_1">Vokasi</a></li>
                            <li class="dropdown"><a href="#"><span>Asosiasi</span> <i
                                        class="bi bi-chevron-down"></i></a>
                                <ul>
                                    <li><a href="#counts">Asosiasi Profesi</a></li>
                                    <li><a href="#services">Asosiasi BUJK</a></li>
                                </ul>
                            </li>
                            <li><a class="nav-link scrollto " href="#more-services">Lapas</a></li>
                            <li><a class="nav-link scrollto " href="#more-services">BUJK</a></li>

                        </ul>
                    </li>

                    <li class="dropdown"><a href="#"><span>Instruktur</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#counts">Vokasi</a></li>
                            <li><a href="#services">Non Vokasi</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#"><span>Asesor</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#counts">AKTK</a></li>
                            <li><a href="#services">ABU</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto " href="#more-services">SE Kepala Daerah</a></li>
                    <li><a class="nav-link scrollto " href="#more-services">Capaian Output</a></li>
                    <li><a class="getstarted scrollto" href="#contact">Hubungi</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Infografis</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">Balai Jasa Konstruksi Wilayah II Palembang</h2>
                    <div data-aos="fade-up" data-aos-delay="800">
                        <a href="#about" class="btn-get-started scrollto">Selengkapnya</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                    <img src="<?=base_url('assets/image/pupr_logo.png')?>" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients clients">
            <div class="container">

                <div class="row">

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="<?= base_url();?>assets/illustration/deal.png" class="img-fluid" alt="" data-aos="zoom-in">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="<?= base_url();?>assets/illustration/instructor.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="<?= base_url();?>assets/illustration/checklist.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="200">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="<?= base_url();?>assets/illustration/letter.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="300">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="<?= base_url();?>assets/illustration/office.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="400">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="<?= base_url();?>assets/illustration/output.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="500">
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
                                <h6 class="m-0 font-weight-bold text-primary" id="">Mitra</h6>
                            </div>


                            <div class="card-body" id="mitra_1">
                                <div class="row">
                                    <div class="container">
                                        <a href="" id="chart-filter-file-mitra" type="button"
                                            class="btn btn-warning float-right bg-flat-color-1">Download
                                            File</a>
                                        <a id="download-chart-mitra" download="ChartImage.jpg" href=""
                                            class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                            title="Descargar Gráfico">
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
                                                <option value="15">Jambi</option>
                                                <option value="16">Sumatera Selatan</option>
                                                <option value="17">Bengkulu</option>
                                                <option value="18">Lampung</option>
                                                <option value="19">Kepulauan Bangka</option>

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
                        <div class="card mb-4" >
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold" id="">Balai PUPR</h6>
                            </div>
                            <div class="card-body" id="balai" >
                                <div class="row">
                                    <div class="container mt-2">
                                        <a href="" id="chart-filter-file-Balai_Sektoral" type="button"
                                            class="btn btn-warning float-right bg-flat-color-1">Download
                                            File</a>
                                        <a id="download-chart-Balai_Sektoral" download="ChartImage.jpg" href=""
                                            class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                            title="Descargar Gráfico">
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
                                                <option value="15">Jambi</option>
                                                <option value="16">Sumatera Selatan</option>
                                                <option value="17">Bengkulu</option>
                                                <option value="18">Lampung</option>
                                                <option value="19">Kepulauan Bangka</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                Chart</label>
                                            <select class="form-control" name="chartTypeBalai_Sektoral" id="chartTypeBalai_Sektoral">
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
        <section id="opd_1" class="counts mt-3">
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
                                            class="btn btn-warning float-right bg-flat-color-1">Download
                                            File</a>
                                        <a id="download-chart-opd" download="ChartImage.jpg" href=""
                                            class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                            title="Descargar Gráfico">
                                            Download Image
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Provinsi</label>
                                            <select class="form-control" id="chart-filter-provinsi-opd">
                                                <option value="0" selected>Choose..</option>
                                                <option value="0">All By Provinsi</option>
                                                <option value="99">All By Kategori</option>
                                                <option value="15">Jambi</option>
                                                <option value="16">Sumatera Selatan</option>
                                                <option value="17">Bengkulu</option>
                                                <option value="18">Lampung</option>
                                                <option value="19">Kepulauan Bangka</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                Chart</label>
                                            <select class="form-control" name="chartTypeOPD" id="chartTypeOPD">
                                                <option value="line">Line</option>
                                                <option value="bar">Bar</option>
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

                                <canvas id="OPD" width="900" ></canvas>
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
                                            class="btn btn-warning float-right bg-flat-color-1">Download
                                            File</a>
                                        <a id="download-chart-vokasi" download="ChartImage.jpg" href=""
                                            class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                            title="Descargar Gráfico">
                                            Download Image
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Provinsi</label>
                                            <select class="form-control" id="chart-filter-provinsi-vokasi">
                                                <option value="0" selected>Choose..</option>
                                                <option value="0">All By Provinsi</option>
                                                <option value="99">All By Kategori</option>
                                                <option value="15">Jambi</option>
                                                <option value="16">Sumatera Selatan</option>
                                                <option value="17">Bengkulu</option>
                                                <option value="18">Lampung</option>
                                                <option value="19">Kepulauan Bangka</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                Chart</label>
                                            <select class="form-control" name="chartTypevokasi" id="chartTypevokasi">
                                                <option value="line">Line</option>
                                                <option value="bar">Bar</option>
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
                                <canvas id="vokasi" width="900" ></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- OPD dan Vokasi Section -->
        <!-- ======= Asosiasi Profesi dan Asosias BUJK ======= -->
        <section id="counts1" class=" mt-3">
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
                                            class="btn btn-warning float-right bg-flat-color-1">Download
                                            File</a>
                                        <a id="download-chart-Asosiasi_Profesi" download="ChartImage.jpg" href=""
                                            class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                            title="Descargar Gráfico">
                                            Download Image
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Provinsi</label>
                                            <select class="form-control" id="chart-filter-provinsi-Asosiasi_Profesi">
                                                <option value="0" selected>Choose..</option>
                                                <option value="0">All By Provinsi</option>
                                                <option value="99">All By Kategori</option>
                                                <option value="15">Jambi</option>
                                                <option value="16">Sumatera Selatan</option>
                                                <option value="17">Bengkulu</option>
                                                <option value="18">Lampung</option>
                                                <option value="19">Kepulauan Bangka</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                Chart</label>
                                            <select class="form-control" name="chartTypeAsosiasi_Profesi"
                                                id="chartTypeAsosiasi_Profesi">
                                                <option value="radar">Radar</option>
                                                <option value="doughnut">Doughnut</option>
                                                <option value="line">Line</option>
                                                <option value="bar">Bar</option>
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

                    <div class="col-xl-6 d-flex align-items-stretch justify-content-center justify-content-xl-start">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-black" id="">Asosiasi BUJK</h6>
                            </div>

                            <div class="card-body" id="asosiasi_bujk">
                                <div class="row">
                                    <div class="mt-2">
                                        <a href="" id="chart-filter-file-ABUJK" type="button"
                                            class="btn btn-warning float-right bg-flat-color-1">Download
                                            File</a>
                                        <a id="download-chart-ABUJK" download="ChartImage.jpg" href=""
                                            class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                            title="Descargar Gráfico">
                                            Download Image
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Provinsi</label>
                                            <select class="form-control" id="chart-filter-provinsi-ABUJK">
                                                <option value="0" selected>Choose..</option>
                                                <option value="0">All By Provinsi</option>
                                                <option value="99">All By Kategori</option>
                                                <option value="15">Jambi</option>
                                                <option value="16">Sumatera Selatan</option>
                                                <option value="17">Bengkulu</option>
                                                <option value="18">Lampung</option>
                                                <option value="19">Kepulauan Bangka</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                Chart</label>
                                            <select class="form-control" name="chartTypeABUJK" id="chartTypeABUJK">
                                                <option value="radar">Radar</option>    
                                                <option value="doughnut">Doughnut</option>    
                                                <option value="line">Line</option>
                                                <option value="bar">Bar</option>
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
             <section id="counts" class="counts mt-3">
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
                                            class="btn btn-warning float-right bg-flat-color-1">Download
                                            File</a>
                                        <a id="download-chart-lapas" download="ChartImage.jpg" href=""
                                            class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                            title="Descargar Gráfico">
                                            Download Image
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Provinsi</label>
                                            <select class="form-control" id="chart-filter-provinsi-lapas">
                                                <option value="0" selected>Choose..</option>
                                                <option value="0">All By Provinsi</option>
                                                <option value="99">All By Kategori</option>
                                                <option value="15">Jambi</option>
                                                <option value="16">Sumatera Selatan</option>
                                                <option value="17">Bengkulu</option>
                                                <option value="18">Lampung</option>
                                                <option value="19">Kepulauan Bangka</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                Chart</label>
                                            <select class="form-control" name="chartTypelapas"
                                                id="chartTypelapas">
                                                <option value="pie">Pie</option>
                                                <option value="bar">Bar</option>
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

                    <div class="col-xl-6 d-flex align-items-stretch justify-content-center justify-content-xl-start">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-black" id="">BUJK</h6>
                            </div>

                            <div class="card-body" id="bujk_1">
                                <div class="row">
                                    <div class="mt-2">
                                        <a href="" id="chart-filter-file-BUJK" type="button"
                                            class="btn btn-warning float-right bg-flat-color-1">Download
                                            File</a>
                                        <a id="download-chart-BUJK" download="ChartImage.jpg" href=""
                                            class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                            title="Descargar Gráfico">
                                            Download Image
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Provinsi</label>
                                            <select class="form-control" id="chart-filter-provinsi-BUJK">
                                                <option value="0" selected>Choose..</option>
                                                <option value="0">All By Provinsi</option>
                                                <option value="99">All By Kategori</option>
                                                <option value="15">Jambi</option>
                                                <option value="16">Sumatera Selatan</option>
                                                <option value="17">Bengkulu</option>
                                                <option value="18">Lampung</option>
                                                <option value="19">Kepulauan Bangka</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                Chart</label>
                                            <select class="form-control" name="chartTypeBUJK" id="chartTypeBUJK">
                                                <option value="pie">Pie</option>
                                                <option value="radar">Radar</option>    
                                                <option value="doughnut">Doughnut</option>    
                                                <option value="line">Line</option>
                                                <option value="bar">Bar</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="loader_BUJK">
                                    </div>
                                </div>
                                <canvas id="BUJK" width="900"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- Asosiasi Profesi dan Asosias BUJK Section -->
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
                            <div class="card-body">
                                <div class="row">
                                    <div class="container mt-2">
                                        <a href="" id="chart-filter-file-DIV" type="button"
                                            class="btn btn-warning float-right bg-flat-color-1">Download
                                            File</a>
                                        <a id="download-chart-DIV" download="ChartImage.jpg" href=""
                                            class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                            title="Descargar Gráfico">
                                            Download Image
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Provinsi</label>
                                            <select class="form-control" id="chart-filter-provinsi-DIV">
                                                <option value="0" selected>Choose..</option>
                                                <option value="0">All By Provinsi</option>
                                                <option value="99">All By Kategori</option>
                                                <option value="15">Jambi</option>
                                                <option value="16">Sumatera Selatan</option>
                                                <option value="17">Bengkulu</option>
                                                <option value="18">Lampung</option>
                                                <option value="19">Kepulauan Bangka</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                Chart</label>
                                            <select class="form-control" name="chartTypeDIV" id="chartTypeDIV">
                                                <option value="doughnut">Doughnut</option>    
                                                <option value="radar">Radar</option>    
                                                <option value="pie">Pie</option>
                                                <option value="bar">Bar</option>
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

                    <div class="col-xl-6 d-flex align-items-stretch justify-content-center justify-content-xl-start">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-black" id="">Instruktur Non Vokasi</h6>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="mt-2">
                                        <a href="" id="chart-filter-file-DINV" type="button"
                                            class="btn btn-warning float-right bg-flat-color-1">Download
                                            File</a>
                                        <a id="download-chart-DINV" download="ChartImage.jpg" href=""
                                            class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                            title="Descargar Gráfico">
                                            Download Image
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Provinsi</label>
                                            <select class="form-control" id="chart-filter-provinsi-DINV">
                                                <option value="0" selected>Choose..</option>
                                                <option value="0">All By Provinsi</option>
                                                <option value="99">All By Kategori</option>
                                                <option value="15">Jambi</option>
                                                <option value="16">Sumatera Selatan</option>
                                                <option value="17">Bengkulu</option>
                                                <option value="18">Lampung</option>
                                                <option value="19">Kepulauan Bangka</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                Chart</label>
                                            <select class="form-control" name="chartTypeDINV" id="chartTypeDINV">
                                                <option value="doughnut">Doughnut</option>    
                                                <option value="radar">Radar</option>     
                                                <option value="pie">Pie</option>
                                                <option value="line">Line</option>
                                                <option value="bar">Bar</option>
                                                
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
        <section id="counts" class="counts">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Asesor</h2>
                    <p>Asesor Kompetensi Tenaga Kerja Konstruksi dan Asesor Badan Usaha</p>
                </div>
                <div class="row">
                    <div class="col-xl-6 d-flex align-items-stretch justify-content-center justify-content-xl-start">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-black" id="">Asesor Kompetensi Tenaga Kerja
                                    Konstruksi</h6>
                            </div>
                            <div class="card-body" id="aktk_1" >
                                <div class="row">
                                    <div class="container mt-2">
                                        <a href="" id="chart-filter-file-AKTK" type="button"
                                            class="btn btn-warning float-right bg-flat-color-1">Download
                                            File</a>
                                        <a id="download-chart-AKTK" download="ChartImage.jpg" href=""
                                            class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                            title="Descargar Gráfico">
                                            Download Image
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Provinsi</label>
                                            <select class="form-control" id="chart-filter-provinsi-AKTK">
                                                <option value="0" selected>Choose..</option>
                                                <option value="0">All By Provinsi</option>
                                                <option value="99">All By Kategori</option>
                                                <option value="15">Jambi</option>
                                                <option value="16">Sumatera Selatan</option>
                                                <option value="17">Bengkulu</option>
                                                <option value="18">Lampung</option>
                                                <option value="19">Kepulauan Bangka</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                Chart</label>
                                            <select class="form-control" name="chartTypeAKTK" id="chartTypeAKTK">
                                                <option value="line">Line</option>
                                                <option value="bar">Bar</option>
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

                    <div class="col-xl-6 d-flex align-items-stretch justify-content-center justify-content-xl-start">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-black" id="">Asesor Badan Usaha</h6>
                            </div>

                            <div class="card-body" id="ABU">
                                <div class="row">
                                    <div class="mt-2">
                                        <a href="" id="chart-filter-file-DABU" type="button"
                                            class="btn btn-warning float-right bg-flat-color-1">Download
                                            File</a>
                                        <a id="download-chart-DABU" download="ChartImage.jpg" href=""
                                            class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                            title="Descargar Gráfico">
                                            Download Image
                                        </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Provinsi</label>
                                            <select class="form-control" id="chart-filter-provinsi-DABU">
                                                <option value="0" selected>Choose..</option>
                                                <option value="0">All By Provinsi</option>
                                                <option value="99">All By Kategori</option>
                                                <option value="15">Jambi</option>
                                                <option value="16">Sumatera Selatan</option>
                                                <option value="17">Bengkulu</option>
                                                <option value="18">Lampung</option>
                                                <option value="19">Kepulauan Bangka</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                Chart</label>
                                            <select class="form-control" name="chartTypeDABU" id="chartTypeDABU">
                                                <option value="line">Line</option>
                                                <option value="bar">Bar</option>
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
                                <h6 class="m-0 font-weight-bold text-primary" id="">SE Kepala Daerah</h6>
                            </div>


                            <div class="card-body" id="SE_KD">
                                <div class="row">
                                    <div class="container">
                                        <a href="" id="chart-filter-file-SE_Kepala_Daerah" type="button"
                                            class="btn btn-warning float-right bg-flat-color-1">Download
                                            File</a>
                                        <a id="download-chart-SE_Kepala_Daerah" download="ChartImage.jpg" href=""
                                            class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                            title="Descargar Gráfico">
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
                                                <option value="15">Jambi</option>
                                                <option value="16">Sumatera Selatan</option>
                                                <option value="17">Bengkulu</option>
                                                <option value="18">Lampung</option>
                                                <option value="19">Kepulauan Bangka</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                Chart</label>
                                            <select class="form-control" name="chartTypeSE_Kepala_Daerah" id="chartTypeSE_Kepala_Daerah">
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
        <section id="services" class="services">
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
                                <div class="card-body">
                                    <div class="row">
                                        <div class="mt-2">
                                            <a href="" id="chart-filter-file-RPK" type="button"
                                                class="btn btn-warning float-right bg-flat-color-1">Download
                                                File</a>
                                            <a id="download-chart-RPK" download="ChartImage.jpg" href=""
                                                class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                                title="Descargar Gráfico">
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
                                                    <option value="15">Jambi</option>
                                                    <option value="16">Sumatera Selatan</option>
                                                    <option value="17">Bengkulu</option>
                                                    <option value="18">Lampung</option>
                                                    <option value="19">Kepulauan Bangka</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group py-2">
                                                <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                    Chart</label>
                                                <select class="form-control" name="chartTypeRPK" id="chartTypeRPK">
                                                    <option value="radar">Radar</option>
                                                    <option value="line">Line</option>
                                                    <option value="bar">Bar</option>
                                                    <option value="pie">Pie</option>
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
                                <div class="card-body">
                                    <div class="row">
                                        <div class="mt-2">
                                            <a href="" id="chart-filter-file-RPBK" type="button"
                                                class="btn btn-warning float-right bg-flat-color-1">Download
                                                File</a>
                                            <a id="download-chart-RPBK" download="ChartImage.jpg" href=""
                                                class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                                title="Descargar Gráfico">
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
                                                    <option value="15">Jambi</option>
                                                    <option value="16">Sumatera Selatan</option>
                                                    <option value="17">Bengkulu</option>
                                                    <option value="18">Lampung</option>
                                                    <option value="19">Kepulauan Bangka</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group py-2">
                                                <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                    Chart</label>
                                                <select class="form-control" name="chartTypeRPBK" id="chartTypeRPBK">
                                                    <option value="radar">Radar</option>
                                                    <option value="line">Line</option>
                                                    <option value="bar">Bar</option>
                                                    <option value="pie">Pie</option>
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
        <section id="services" class="services">
            <div class="container">
                <div class="row">
                    <div class="col d-flex">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="card mb-4">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-black" id="">Rekap Pelaksanaan Kegiatan Berdasarkan Jenis Kegiatan</h6>
                                </div>
                                <div class="card-body" id="RPKBS_1">
                                    <div class="row">
                                        <div class="mt-2">
                                            <a href="" id="chart-filter-file-RPKBS" type="button"
                                                class="btn btn-warning float-right bg-flat-color-1">Download
                                                File</a>
                                            <a id="download-chart-RPKBS" download="ChartImage.jpg" href=""
                                                class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                                title="Descargar Gráfico">
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
                                                    <option value="15">Jambi</option>
                                                    <option value="16">Sumatera Selatan</option>
                                                    <option value="17">Bengkulu</option>
                                                    <option value="18">Lampung</option>
                                                    <option value="19">Kepulauan Bangka</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group py-2">
                                                <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                    Chart</label>
                                                <select class="form-control" name="chartTypeRPKBS" id="chartTypeRPKBS">
                                                    <option value="doughnut">Doughnut</option>    
                                                    <option value="radar">Radar</option>
                                                    <option value="line">Line</option>
                                                    <option value="bar">Bar</option>
                                                    <option value="pie">Pie</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="loader_RPKBS">
                                        </div>
                                    </div>
                                    <canvas id="RPKBS" width="535"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="card mb-4">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-black" id="">Realisasi Peserta Berdasarkan Wilayah dan Pembiayaan</h6>
                                </div>
                                <div class="card-body" id="RPBWP_1">
                                    <div class="row">
                                        <div class="mt-2">
                                            <a href="" id="chart-filter-file-RPBWP" type="button"
                                                class="btn btn-warning float-right bg-flat-color-1">Download
                                                File</a>
                                            <a id="download-chart-RPBWP" download="ChartImage.jpg" href=""
                                                class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                                title="Descargar Gráfico">
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
                                                    <option selected value="0">Choose..</option>
                                                    <option value="0">All By Provinsi</option>
                                                    <option value="99">All By Kategori</option>
                                                    <option value="15">Jambi</option>
                                                    <option value="16">Sumatera Selatan</option>
                                                    <option value="17">Bengkulu</option>
                                                    <option value="18">Lampung</option>
                                                    <option value="19">Kepulauan Bangka</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group py-2">
                                                <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                    Chart</label>
                                                <select class="form-control" name="chartTypeRPBWP"
                                                    id="chartTypeRPBWP">
                                                    <option value="doughnut">Doughnut</option>
                                                    <option value="radar">Radar</option>
                                                    <option value="line">Line</option>
                                                    <option value="bar">Bar</option>
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
<section id="about" class="about">
            <div class="container">
                <div class="row content">
                    <div class="col">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary" id="">Realisasi Peserta Kegiatan Berdasarkan Mitra Kerja</h6>
                            </div>


                            <div class="card-body">
                                <div class="row">
                                    <div class="container mt-2">
                                        <a href="" id="chart-filter-file-RPKBMK" type="button"
                                            class="btn btn-warning float-right bg-flat-color-1">Download
                                            File</a>
                                        <a id="download-chart-RPKBMK" download="ChartImage.jpg" href=""
                                            class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                            title="Descargar Gráfico">
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
                                                <option value="15">Jambi</option>
                                                <option value="16">Sumatera Selatan</option>
                                                <option value="17">Bengkulu</option>
                                                <option value="18">Lampung</option>
                                                <option value="19">Kepulauan Bangka</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                Chart</label>
                                            <select class="form-control" name="chartTypeRPKBMK" id="chartTypeRPKBMK">
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
                                    <div class="loader_RPKBMK">
                                    </div>
                                </div>
                                <canvas id="RPKBMK" height="110"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- Capaian Output Section -->
        <!-- ======= Capaian Output Daerah ======= -->
<section id="about" class="about">
            <div class="container">
                <div class="row content">
                    <div class="col">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary" id="">Program Padat Karya</h6>
                            </div>


                            <div class="card-body">
                                <div class="row">
                                    <div class="container mt-2">
                                        <a href="" id="chart-filter-file-PPK" type="button"
                                            class="btn btn-warning float-right bg-flat-color-1">Download
                                            File</a>
                                        <a id="download-chart-PPK" download="ChartImage.jpg" href=""
                                            class="btn btn-warning float-right bg-flat-color-1 mr-2"
                                            title="Descargar Gráfico">
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
                                                <option selected value="0">Choose..</option>
                                                <option value="0">All By Provinsi</option>
                                                <option value="99">All By Kategori</option>
                                                <option value="15">Jambi</option>
                                                <option value="16">Sumatera Selatan</option>
                                                <option value="17">Bengkulu</option>
                                                <option value="18">Lampung</option>
                                                <option value="19">Kepulauan Bangka</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label class="my-1" for="inlineFormCustomSelectPref text-primary">Pilih
                                                Chart</label>
                                            <select class="form-control" name="chartTypePPK" id="chartTypePPK">
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
                                    <div class="loader_PPK">
                                    </div>
                                </div>
                                <canvas id="PPK" height="110"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- Capaian Output Section -->



        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Hubungi Kami</h2>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="contact-about">
                            <h3>Balai Jasa Konstruksi Wilayah II Palembang</h3>
                            <p>Layanan Sosial Media Kami.</p>
                            <div class="social-links">
                                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="info">
                            <div>
                                <i class="ri-map-pin-line"></i>
                                <p>20 Ilir D. IV, Ilir Timur I, <br>Kota Palembang, Sumatera Selatan, Indonesia</p>
                            </div>

                            <!-- <div>
                                <i class="ri-mail-send-line"></i>
                                <p>info@example.com</p>
                            </div> -->

                            <div>
                                <i class="ri-phone-line"></i>
                                <p>+62 627 11416963</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Masukan Nama"
                                    required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Masukan Email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Judul"
                                    required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" placeholder="Isi Pesan"
                                    required></textarea>
                            </div>
                            <div class="text-center"><button type="submit">Kirim Pesan</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-lg-6 text-lg-left text-center">
                    <div class="copyright">
                        &copy; Balai Jasa <strong>Konstruksi</strong> Wilayah II
                    </div>
                    <div class="credits">
                        Palembang
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
                        <a href="#intro" class="scrollto">Home</a>
                        <a href="#about" class="scrollto">About</a>
                    </nav>
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <?php $this->load->view("components/js.php") ?>
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