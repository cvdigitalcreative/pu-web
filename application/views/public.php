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
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
                    <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
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
                    <h1 data-aos="fade-up">Info Grafis BJKW II Palembang</h1>
                    <h2 data-aos="fade-up" data-aos-delay="400">We are team of talented designers making websites with
                        Bootstrap</h2>
                    <div data-aos="fade-up" data-aos-delay="800">
                        <a href="#about" class="btn-get-started scrollto">Get Started</a>
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
                        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="" data-aos="zoom-in">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="assets/img/clients/client-2.png" class="img-fluid" alt="" data-aos="zoom-in"
                            data-aos-delay="100">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="assets/img/clients/client-3.png" class="img-fluid" alt="" data-aos="zoom-in"
                            data-aos-delay="200">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="assets/img/clients/client-4.png" class="img-fluid" alt="" data-aos="zoom-in"
                            data-aos-delay="300">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="assets/img/clients/client-5.png" class="img-fluid" alt="" data-aos="zoom-in"
                            data-aos-delay="400">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="assets/img/clients/client-6.png" class="img-fluid" alt="" data-aos="zoom-in"
                            data-aos-delay="500">
                    </div>

                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Balai Sektoral Kementerian PUPR</h2>
                </div>
                <div class="row content">
                    <div class="col mt-3">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary" id="">Balai Sektoral</h6>
                            </div>


                            <div class="card-body">
                                <div class="row">
                                    <div class="container mt-2">
                                        <a href="" id="chart-filter-file-balai-sektoral" type="button"
                                            class="btn btn-warning float-right bg-flat-color-1">Download
                                            File</a>
                                        <a id="download-chart-balai-sektoral" download="ChartImage.jpg" href=""
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
                                            <select class="form-control" id="chart-filter-provinsi-balai-sektoral">
                                                <option selected value="0">Choose..</option>
                                                <option value="0">All</option>
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
                                <canvas id="Balai_Sektoral" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row">
                    <div class="col-xl-6 d-flex align-items-stretch justify-content-center justify-content-xl-start">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-black" id="">Organisasi Perangkat Daerah Suburusan
                                    Jasa Konstruksi</h6>
                            </div>
                            <div class="card-body">
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
                                                <option value="0">All</option>
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


                                <canvas id="OPD" width="900"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 d-flex align-items-stretch justify-content-center justify-content-xl-start">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-black" id="">Sekolah</h6>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="mt-2">
                                        <a href="" id="chart-filter-file-sekolah" type="button"
                                            class="btn btn-warning float-right bg-flat-color-1">Download
                                            File</a>
                                        <a id="download-chart-sekolah" download="ChartImage.jpg" href=""
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
                                            <select class="form-control" id="chart-filter-provinsi-sekolah">
                                                <option value="0" selected>Choose..</option>
                                                <option value="0">All</option>
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
                                            <select class="form-control" name="chartTypeSekolah" id="chartTypeSekolah">
                                                <option value="line">Line</option>
                                                <option value="bar">Bar</option>
                                                <option value="radar">Radar</option>
                                                <option value="pie">Pie</option>
                                                <option value="doughnut">Doughnut</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <canvas id="Sekolah" width="900"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Counts Section -->
        <!-- ======= About Us Section ======= -->
        <section id="about1" class="about1">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>ASOSIASI PROFESI BALAI JASA KONSTRUKSI WILAYAH II PALEMBANG</h2>
                </div>

                <div class="row content">
                    <div class="col mt-3">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary" id="">Asosiasi Profesi</h6>
                            </div>


                            <div class="card-body">
                                <div class="row">
                                    <div class="mt-2">
                                        <a href="" id="chart-filter-file-asosiasi-profesi" type="button"
                                            class="btn btn-warning float-right bg-flat-color-1">Download
                                            File</a>
                                        <a id="download-chart-asosiasi-profesi" download="ChartImage.jpg" href=""
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
                                            <select class="form-control" id="chart-filter-provinsi-asosiasi-profesi">
                                                <option selected value="0">Choose..</option>
                                                <option value="0">All</option>
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
                                            <select class="form-control" name="chartTypeAsosiasiProfesi"
                                                id="chartTypeAsosiasiProfesi">
                                                <option value="pie">Pie</option>
                                                <option value="line">Line</option>
                                                <option value="bar">Bar</option>
                                                <option value="radar">Radar</option>
                                                <option value="doughnut">Doughnut</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <canvas id="Asosiasi_Profesi" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->
        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Services</h2>
                    <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fug</p>
                </div>

                <div class="row">
                    <div class="col d-flex">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="card mb-4">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-black" id="">Asosiasi Badan Jasa Usaha
                                        Konstruksi</h6>
                                </div>
                                <div class="card-body">
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
                                                <label class="my-1"
                                                    for="inlineFormCustomSelectPref text-primary">Provinsi</label>
                                                <select class="form-control" id="chart-filter-provinsi-ABUJK">
                                                    <option selected value="0">Choose..</option>
                                                    <option value="0">All</option>
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
                                                    <option value="line">Line</option>
                                                    <option value="bar">Bar</option>
                                                    <option value="pie">Pie</option>
                                                    <option value="doughnut">Doughnut</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <canvas id="ABUJK" width="535"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col d-flex">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="card mb-4">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-black" id="">Tenaga Kerja Konstruksi yang
                                        Bersertifikat Kompetensi</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="mt-2">
                                            <a href="" id="chart-filter-file-Sertifikasi" type="button"
                                                class="btn btn-warning float-right bg-flat-color-1">Download
                                                File</a>
                                            <a id="download-chart-Sertifikasi" download="ChartImage.jpg" href=""
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
                                                <select class="form-control" id="chart-filter-provinsi-Sertifikasi">
                                                    <option selected value="0">Choose..</option>
                                                    <option value="0">All</option>
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
                                                <select class="form-control" name="chartTypeSertifikasi"
                                                    id="chartTypeSertifikasi">
                                                    <option value="radar">Radar</option>
                                                    <option value="line">Line</option>
                                                    <option value="bar">Bar</option>
                                                    <option value="pie">Pie</option>
                                                    <option value="doughnut">Doughnut</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <canvas id="Sertifikasi" width="535"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= More Services Section ======= -->
        <section id="more-services" class="more-services">
            <div class="container">

                <div class="row">
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-black" id="">Asesor Badan Usaha</h6>
                            </div>
                            <div class="card-body">
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
                                            <label class="my-1"
                                                for="inlineFormCustomSelectPref text-primary">Provinsi</label>
                                            <select class="form-control" id="chart-filter-provinsi-DABU">
                                                <option selected value="0">Choose..</option>
                                                <option value="0">All</option>
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
                                                <option value="doughnut">Doughnut</option>
                                                <option value="line">Line</option>
                                                <option value="bar">Bar</option>
                                                <option value="radar">Radar</option>
                                                <option value="pie">Pie</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <canvas id="DABU" width="900" height="600"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-black" id="">Asesor Kompetensi Tenaga Kerja</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="mt-2">
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
                                            <label class="my-1"
                                                for="inlineFormCustomSelectPref text-primary">Provinsi</label>
                                            <select class="form-control" id="chart-filter-provinsi-AKTK">
                                                <option selected value="0">Choose..</option>
                                                <option value="0">All</option>
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
                                                <option value="doughnut">Doughnut</option>
                                                <option value="line">Line</option>
                                                <option value="bar">Bar</option>
                                                <option value="radar">Radar</option>
                                                <option value="pie">Pie</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <canvas id="AKTK" width="900" height="600"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 align-items-stretch">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-black" id="">Daftar Instruktur Non Vokasi</h6>
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
                                            <label class="my-1"
                                                for="inlineFormCustomSelectPref text-primary">Provinsi</label>
                                            <select class="form-control" id="chart-filter-provinsi-DINV">
                                                <option selected value="0">Choose..</option>
                                                <option value="0">All</option>
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
                                                <option value="bar">Bar</option>
                                                <option value="line">Line</option>
                                                <option value="radar">Radar</option>
                                                <option value="pie">Pie</option>
                                                <option value="doughnut">Doughnut</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <canvas id="DINV" width="900" height="600"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 align-items-stretch">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-black" id="">Instruktur Vokasi</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="mt-2">
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
                                            <label class="my-1"
                                                for="inlineFormCustomSelectPref text-primary">Provinsi</label>
                                            <select class="form-control" id="chart-filter-provinsi-DIV">
                                                <option selected value="0">Choose..</option>
                                                <option value="0">All</option>
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
                                                <option value="bar">Bar</option>
                                                <option value="line">Line</option>
                                                <option value="radar">Radar</option>
                                                <option value="pie">Pie</option>
                                                <option value="doughnut">Doughnut</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <canvas id="DIV" width="900" height="600"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End More Services Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Testimonials</h2>
                    <p>Magnam dolores commodi suscipit eum quidem consectetur velit</p>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="card mb-4">
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-black" id="">Asesor Kompetensi Tenaga
                                            Kerja</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="mt-2">
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
                                                    <label class="my-1"
                                                        for="inlineFormCustomSelectPref text-primary">Provinsi</label>
                                                    <select class="form-control" id="chart-filter-provinsi-DIV">
                                                        <option selected value="0">Choose..</option>
                                                        <option value="0">All</option>
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
                                                    <label class="my-1"
                                                        for="inlineFormCustomSelectPref text-primary">Pilih
                                                        Chart</label>
                                                    <select class="form-control" name="chartTypeDIV" id="chartTypeDIV">
                                                        <option value="line">Line</option>
                                                        <option value="bar">Bar</option>
                                                        <option value="radar">Radar</option>
                                                        <option value="pie">Pie</option>
                                                        <option value="doughnut">Doughnut</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <canvas id="DIV" width="400" height="300"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="card mb-4">
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-black" id="">Asesor Kompetensi Tenaga
                                            Kerja</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="mt-2">
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
                                                    <label class="my-1"
                                                        for="inlineFormCustomSelectPref text-primary">Provinsi</label>
                                                    <select class="form-control" id="chart-filter-provinsi-DIV">
                                                        <option selected value="0">Choose..</option>
                                                        <option value="0">All</option>
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
                                                    <label class="my-1"
                                                        for="inlineFormCustomSelectPref text-primary">Pilih
                                                        Chart</label>
                                                    <select class="form-control" name="chartTypeDIV" id="chartTypeDIV">
                                                        <option value="line">Line</option>
                                                        <option value="bar">Bar</option>
                                                        <option value="radar">Radar</option>
                                                        <option value="pie">Pie</option>
                                                        <option value="doughnut">Doughnut</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <canvas id="DIV" width="400" height="300"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="card mb-4">
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-black" id="">Asesor Kompetensi Tenaga
                                            Kerja</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="mt-2">
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
                                                    <label class="my-1"
                                                        for="inlineFormCustomSelectPref text-primary">Provinsi</label>
                                                    <select class="form-control" id="chart-filter-provinsi-DIV">
                                                        <option selected value="0">Choose..</option>
                                                        <option value="0">All</option>
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
                                                    <label class="my-1"
                                                        for="inlineFormCustomSelectPref text-primary">Pilih
                                                        Chart</label>
                                                    <select class="form-control" name="chartTypeDIV" id="chartTypeDIV">
                                                        <option value="line">Line</option>
                                                        <option value="bar">Bar</option>
                                                        <option value="radar">Radar</option>
                                                        <option value="pie">Pie</option>
                                                        <option value="doughnut">Doughnut</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <canvas id="DIV" width="400" height="300"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="card mb-4">
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h6 class="m-0 font-weight-bold text-black" id="">Asesor Kompetensi Tenaga
                                            Kerja</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="mt-2">
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
                                                    <label class="my-1"
                                                        for="inlineFormCustomSelectPref text-primary">Provinsi</label>
                                                    <select class="form-control" id="chart-filter-provinsi-DIV">
                                                        <option selected value="0">Choose..</option>
                                                        <option value="0">All</option>
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
                                                    <label class="my-1"
                                                        for="inlineFormCustomSelectPref text-primary">Pilih
                                                        Chart</label>
                                                    <select class="form-control" name="chartTypeDIV" id="chartTypeDIV">
                                                        <option value="line">Line</option>
                                                        <option value="bar">Bar</option>
                                                        <option value="radar">Radar</option>
                                                        <option value="pie">Pie</option>
                                                        <option value="doughnut">Doughnut</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <canvas id="DIV" width="400" height="300"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Portfolio</h2>
                    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-12 d-flex justify-content-center">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">App</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="400">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 1</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 2</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 2</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 2</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 3</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 1</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Card 3</h4>
                                <p>Card</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Web 3</h4>
                                <p>Web</p>
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery"
                                        class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Features</h2>
                    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
                </div>

                <div class="row" data-aos="fade-up" data-aos-delay="300">
                    <div class="col-lg-3 col-md-4">
                        <div class="icon-box">
                            <i class="ri-store-line" style="color: #ffbb2c;"></i>
                            <h3><a href="">Lorem Ipsum</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
                            <h3><a href="">Dolor Sitema</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box">
                            <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                            <h3><a href="">Sed perspiciatis</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                        <div class="icon-box">
                            <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
                            <h3><a href="">Magni Dolores</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-database-2-line" style="color: #47aeff;"></i>
                            <h3><a href="">Nemo Enim</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
                            <h3><a href="">Eiusmod Tempor</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
                            <h3><a href="">Midela Teren</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
                            <h3><a href="">Pira Neve</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-anchor-line" style="color: #b2904f;"></i>
                            <h3><a href="">Dirada Pack</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-disc-line" style="color: #b20969;"></i>
                            <h3><a href="">Moton Ideal</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-base-station-line" style="color: #ff5828;"></i>
                            <h3><a href="">Verdo Park</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4">
                        <div class="icon-box">
                            <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
                            <h3><a href="">Flavor Nivelanda</a></h3>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Features Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Team</h2>
                    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Chief Executive Officer</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="200">
                            <div class="member-img">
                                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Sarah Jhonson</h4>
                                <span>Product Manager</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                            <div class="member-img">
                                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="400">
                            <div class="member-img">
                                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Amanda Jepson</h4>
                                <span>Accountant</span>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container">

                <div class="section-title">
                    <h2>Pricing</h2>
                    <p>Sit sint consectetur velit nemo qui impedit suscipit alias ea</p>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="box" data-aos="zoom-in-right" data-aos-delay="200">
                            <h3>Free</h3>
                            <h4><sup>$</sup>0<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li class="na">Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                        <div class="box recommended" data-aos="zoom-in" data-aos-delay="100">
                            <h3>Business</h3>
                            <h4><sup>$</sup>19<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li class="na">Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                        <div class="box" data-aos="zoom-in-left" data-aos-delay="200">
                            <h3>Developer</h3>
                            <h4><sup>$</sup>29<span> / month</span></h4>
                            <ul>
                                <li>Aida dere</li>
                                <li>Nec feugiat nisl</li>
                                <li>Nulla at volutpat dola</li>
                                <li>Pharetra massa</li>
                                <li>Massa ultricies mi</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Buy Now</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Pricing Section -->

        <!-- ======= F.A.Q Section ======= -->
        <section id="faq" class="faq">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Frequently Asked Questions</h2>
                </div>

                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-5">
                        <i class="ri-question-line"></i>
                        <h4>Non consectetur a erat nam at lectus urna duis?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non
                            curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-5">
                        <i class="ri-question-line"></i>
                        <h4>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit
                            laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium.
                            Est pellentesque elit ullamcorper dignissim.
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="col-lg-5">
                        <i class="ri-question-line"></i>
                        <h4>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar
                            elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus
                            pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus.
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
                    <div class="col-lg-5">
                        <i class="ri-question-line"></i>
                        <h4>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Aperiam itaque sit optio et deleniti eos nihil quidem cumque. Voluptas dolorum accusantium
                            sunt sit enim. Provident consequuntur quam aut reiciendis qui rerum dolorem sit odio.
                            Repellat assumenda soluta sunt pariatur error doloribus fuga.
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

                <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
                    <div class="col-lg-5">
                        <i class="ri-question-line"></i>
                        <h4>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h4>
                    </div>
                    <div class="col-lg-7">
                        <p>
                            Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est
                            ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing
                            bibendum est. Purus gravida quis blandit turpis cursus in
                        </p>
                    </div>
                </div><!-- End F.A.Q Item-->

            </div>
        </section><!-- End F.A.Q Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Contact Us</h2>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="contact-about">
                            <h3>Vesperr</h3>
                            <p>Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus.
                                Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc
                                congue.</p>
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
                                <p>A108 Adam Street<br>New York, NY 535022</p>
                            </div>

                            <div>
                                <i class="ri-mail-send-line"></i>
                                <p>info@example.com</p>
                            </div>

                            <div>
                                <i class="ri-phone-line"></i>
                                <p>+1 5589 55488 55s</p>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                    required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
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
                        &copy; Copyright <strong>Vesperr</strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        <!-- All the links in the footer should remain intact. -->
                        <!-- You can delete the links only if you purchased the pro version. -->
                        <!-- Licensing information: https://bootstrapmade.com/license/ -->
                        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/vesperr-free-bootstrap-template/ -->
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
                        <a href="#intro" class="scrollto">Home</a>
                        <a href="#about" class="scrollto">About</a>
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms of Use</a>
                    </nav>
                </div>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <?php $this->load->view("components/js.php") ?>
</body>

</html>