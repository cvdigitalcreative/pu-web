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
                    <li><a class="nav-link scrollto" href="#about">Balai Sektoral</a></li>
                    <li><a class="nav-link scrollto" href="#asosiasi">Asosiasi</a></li>
                    <li><a class="nav-link scrollto " href="#more-services">Asesor</a></li>
                    <li class="dropdown"><a href="#"><span>Infografis Lainnya</span> <i
                                class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#counts">OPD dan Sekolah</a></li>
                            <li><a href="#services">Kegiatan</a></li>
                            <li><a href="#program">Program</a></li>
                            <li><a href="#sumber_daya">Vokasi</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#contact">Hubungi</a></li>
                    <li><a class="getstarted scrollto" href="#about">Explore</a></li>
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
                        <img src="" class="img-fluid" alt="" data-aos="zoom-in">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="200">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="300">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="400">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6">
                        <img src="" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="500">
                    </div>

                </div>

            </div>
        </section><!-- End Clients Section -->

        <!-- ======= Balai Sektoral Kementerian PUPR Section ======= -->
        <section id="about" class="about mt-5">
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
        </section><!-- Balai Sektoral Kementerian PUPR Section -->

        <!-- ======= Mitra OPD dan Sekolah ======= -->
        <section id="counts" class="counts">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Organisasi Perangkat Daerah Suburusan dan Sekolah</h2>
                    <p>Balai Jasa Konstruksi Wilayah II Palembang</p>
                </div>

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
        </section><!-- Mitra OPD dan Sekolah Section -->
        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Rekap Pelaksanaan Kegiatan</h2>
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
                                    <h6 class="m-0 font-weight-bold text-black" id="">Rekap Pelaksanaan Kegiatan Peserta
                                    </h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="mt-2">
                                            <a href="" id="chart-filter-file-RPKP" type="button"
                                                class="btn btn-warning float-right bg-flat-color-1">Download
                                                File</a>
                                            <a id="download-chart-RPKP" download="ChartImage.jpg" href=""
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
                                                <select class="form-control" id="chart-filter-provinsi-RPKP">
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
                                                <select class="form-control" name="chartTypeRPKP" id="chartTypeRPKP">
                                                    <option value="radar">Radar</option>
                                                    <option value="line">Line</option>
                                                    <option value="bar">Bar</option>
                                                    <option value="pie">Pie</option>
                                                    <option value="doughnut">Doughnut</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <canvas id="RPKP" width="535"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->
        <!-- ======= About Us Section ======= -->
        <section id="asosiasi" class="asosiasi">
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


        <!-- ======= Asesor Section ======= -->
        <section id="more-services" class="more-services">
            <div class="container">

                <div class="row">
                    <div class="section-title" data-aos="fade-up">
                        <h2>Asesor Badan Usaha dan Kompetensi Tenaga Kerja</h2>
                        <p>Balai Jasa Konstruksi Wilayah II Palembang</p>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-black" id="">Asesor Badan Usaha</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="mt-2">
                                        <a href="" id="chart-filter-file-DABU" type="button"
                                            class="btn btn-warning float-right bg-flat-color-1 ">Download
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
                    <div id="program" class="section-title mt-3" data-aos="fade-up">
                        <h2>Program Padat Karya dan Pemanfaatan Mobile Training Unit</h2>
                        <p>Balai Jasa Konstruksi Wilayah II Palembang</p>
                    </div>
                    <div class="col-md-6 align-items-stretch">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-black" id="">Program Padat Karya</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="mt-2">
                                        <a href="" id="chart-filter-file-PPP" type="button"
                                            class="btn btn-warning float-right bg-flat-color-1">Download
                                            File</a>
                                        <a id="download-chart-PPP" download="ChartImage.jpg" href=""
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
                                            <select class="form-control" id="chart-filter-provinsi-PPP">
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
                                            <select class="form-control" name="chartTypePPP" id="chartTypePPP">
                                                <option value="pie">Pie</option>
                                                <option value="bar">Bar</option>
                                                <option value="line">Line</option>
                                                <option value="radar">Radar</option>
                                                <option value="doughnut">Doughnut</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <canvas id="PPP" width="900" height="600"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 align-items-stretch">
                        <div class="card mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-black" id="">Pemanfaatan Mobile Training Unit</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="mt-2">
                                        <a href="" id="chart-filter-file-PMTU" type="button"
                                            class="btn btn-warning float-right bg-flat-color-1">Download
                                            File</a>
                                        <a id="download-chart-PMTU" download="ChartImage.jpg" href=""
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
                                            <select class="form-control" id="chart-filter-provinsi-PMTU">
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
                                            <select class="form-control" name="chartTypePMTU" id="chartTypePMTU">
                                                <option value="pie">Pie</option>
                                                <option value="bar">Bar</option>
                                                <option value="line">Line</option>
                                                <option value="radar">Radar</option>
                                                <option value="doughnut">Doughnut</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <canvas id="PMTU" width="900" height="600"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 align-items-stretch">

                    </div>
                    <div class="col-md-6 align-items-stretch">

                    </div>

                </div>

            </div>
        </section><!-- End More Services Section -->
        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Asosiasi Badan Jasa Usaha dan Tenaga Kerja Konstruksi</h2>
                    <p>Balai Jasa Konstruksi Wilayah II Palembang</p>
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

        <section>
            <div class="container">
                <div id="sumber_daya" class="section-title" data-aos="fade-up">
                    <h2>Sumber Daya Tenaga Ahli</h2>
                    <p>Balai Jasa Konstruksi Wilayah II Palembang</p>
                </div>
                <div class="row">
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
        </section>
        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container">

                <div class="section-title">
                    <h2>Rekap Pelaksanaan Kegiatan</h2>
                    <p>Balai Jasa Konstruksi Wilayah II Palembang</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="box" data-aos="zoom-in-right" data-aos-delay="200">
                            <div class="card mb-5">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-black" id="">Peserta Berdasarkan Wilayah dan
                                        Pembiayaan</h6>
                                </div>
                                <div class="card-body">
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
                                                <select class="form-control" name="chartTypeRPBWP" id="chartTypeRPBWP">
                                                    <option value="pie">Pie</option>
                                                    <option value="line">Line</option>
                                                    <option value="bar">Bar</option>
                                                    <option value="radar">Radar</option>
                                                    <option value="doughnut">Doughnut</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <canvas id="RPBWP" height="260"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                        <div class="box recommended" data-aos="zoom-in" data-aos-delay="100">
                            <div class="card mb-5">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-black" id="">Realisasi Peserta
                                        Pembekalan/Bimtek dan Uji Sertifikasi Berdasarkan Berita Acara Hasil Penilaian
                                    </h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="mt-2">
                                            <a href="" id="chart-filter-file-RPBU" type="button"
                                                class="btn btn-warning float-right bg-flat-color-1">Download
                                                File</a>
                                            <a id="download-chart-RPBU" download="ChartImage.jpg" href=""
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
                                                <select class="form-control" id="chart-filter-provinsi-RPBU">
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
                                                <select class="form-control" name="chartTypeRPBU" id="chartTypeRPBU">
                                                    <option value="radar">Radar</option>
                                                    <option value="line">Line</option>
                                                    <option value="bar">Bar</option>
                                                    <option value="pie">Pie</option>
                                                    <option value="doughnut">Doughnut</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <canvas id="RPBU" height="260"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                        <div class="box" data-aos="zoom-in-left" data-aos-delay="200">
                            <div class="card mb-5">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-black" id="">Peserta Berdasarkan Wilayah
                                        dan
                                        Pembiayaan</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="mt-2">
                                            <a href="" id="chart-filter-file-RPBWP2" type="button"
                                                class="btn btn-warning float-right bg-flat-color-1">Download
                                                File</a>
                                            <a id="download-chart-RPBWP2" download="ChartImage.jpg" href=""
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
                                                <select class="form-control" id="chart-filter-provinsi-RPBWP2">
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
                                                <select class="form-control" name="chartTypeRPBWP2"
                                                    id="chartTypeRPBWP2">
                                                    <option value="bar">Bar</option>
                                                    <option value="line">Line</option>
                                                    <option value="radar">Radar</option>
                                                    <option value="pie">Pie</option>
                                                    <option value="doughnut">Doughnut</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <canvas id="RPBWP2" height="260"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            </div>
        </section><!-- End Pricing Section -->


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
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Judul" required>
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
    
 

    <script src="<?=base_url('assets/js/administrator/public.js')?>"></script>
</body>

</html>