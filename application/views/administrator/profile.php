<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("components/head.php") ?>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php $this->load->view("components/sidebar.php") ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php $this->load->view("components/navbar.php", $header) ?>

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h2 font-weight-bold mb-4 mt-4">Profile</h1>
                    </div>

                    <div class="row gutters-sm">
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <?php if ($user['file_foto_profile'] != '-') : ?>
                                            <img class="" width="165" height="165" style="object-fit: cover; border-radius: 50%;" src="<?= $user['file_foto_profile'] ?>">
                                        <?php else : ?>
                                            <img class="" width="165" height="165" src="<?= base_url('assets/image/pupr-profile-user.svg') ?>">
                                        <?php endif ?>
                                        <div class="mt-3">
                                            <h4><?= $user['nama'] ?><span class="badge-status-user badge-info ml-1"><?= $user['status_user'] ?></span></h4>
                                            <p class="text-secondary mb-1"><?= $user['role'] ?></p>
                                            <p class="text-muted font-size-sm"><?= $user['kota_kabupaten'] ?>, <?= $user['provinsi'] ?></p>
                                            <button class="btn btn-block btn-outline-info" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                Edit Profile
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mt-3">
                                <div class="card-body">
                                    <h5 class="mb-2">Data Perusahaan</h5>
                                    <hr>
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <div class="mt-3">
                                            <h5 class=""><?= $user['nama_perusahaan'] ?></h5>
                                            <p class="mb-1 text-muted"><?= $user['jabatan'] ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-8">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="mb-4">Data Pribadi</h5>
                                    <div class="px-3">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Nama</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <?= $user['nama'] ?>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Email</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <?= $user['email'] ?>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Nomor Telepon</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <?= $user['no_telpon'] ?>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Nomor Handphone</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <?= $user['no_handphone'] ?>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">nik</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary">
                                                <?= $user['nik'] ?>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <h6 class="mb-0">Alamat</h6>
                                            </div>
                                            <div class="col-sm-9 text-secondary text-capitalize text-justify">
                                                <?= $user['alamat_lengkap'] ?>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="collapse" id="collapseExample">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Kode Area</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary text-capitalize text-justify">
                                                    <?= $user['kode_area'] ?>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Status Kepemilikan Rumah</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <?= $user['status_rumah'] ?>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Jenis Kelamin</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <?= $user['jenis_kelamin'] ?>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Status Perkawinan</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <?= $user['status_perkawinan'] ?>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="collapse" id="collapseExample">
                                        <h5 class="mb-4 ">Data Pendidikan</h5>
                                        <div class="px-3">
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Pendidikan Terakhir</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <?= $user['pendidikan'] ?>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Jurusan</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <?= $user['jurusan'] ?>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Nama Universitas</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <?= $user['nama_universitas'] ?>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <h6 class="mb-0">Tahun Lulus</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <?= $user['tahun_lulus'] ?>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>

                                    <div class="row mt-2">
                                        <button class="btn btn-block btn-outline-info" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                            Detail
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
    <?php $this->load->view("components/footer.php") ?>
    </div>
    <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <?php $this->load->view("components/scrolltotop.php") ?>

    <?php $this->load->view("components/modal.php") ?>

    <?php $this->load->view("components/js.php") ?>

</body>

</html>