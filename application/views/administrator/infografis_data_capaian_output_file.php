<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("components/head.php") ?>
</head>

<body id="page-top">


    <!-- Tambah Capaian Output File -->
    <div class="modal fade bd-example-modal-lg" id="modal-tambah-infografis-capaian_output-file-master" tabindex="-1"
        role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Tambah File Capaian Output</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Provinsi</label>
                            <select class="custom-select my-1 mr-sm-2" id="idprovinsi" name="idprovinsi">
                                <option selected>Choose...</option>
                                <option value="15">Sumatera Selatan</option>
                                <option value="16">Kep. Bangka Belitung</option>
                                <option value="17">Jambi</option>
                                <option value="18">Bengkulu</option>
                                <option value="19">Lampung</option>
                            </select>
                        </div>
                        <div class="form-group py-2">
                            <label for="nama">File Capaian Output</label>
                            <input type="file" class="form-control" id="file_infografis" name="file_infografis"
                                placeholder="Contoh: Universitas Negeri Sriwijaya" required>
                        </div>
                        <div class="form-group py-2">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Kategori</label>
                            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="kategori">
                                <option selected>Choose...</option>
                                <option value="16">Rekap Pelaksanaan Kegiatan</option>
                                <option value="20">Rekap Peserta Berdasarkan Skema</option>
                                <option value="14">Program Padat Karya</option>
                                <option value="18">Rekap Peserta Berdasarkan Wilayah dan Pembiayaan</option>
                                <option value="21">Rekap Peserta Kegiatan Berdasarkan Mitra Kerja</option>
                                <option value="17">Rekap Pelaksanaan Kegiatan Berdasarkan Jenis Kegiatan</option>
                                <option value="25">Jumlah TKK Ahli Terlatih dan Tersertifikasi Berdasarkan Jabatan Kerja
                                </option>
                                <option value="26">Jumlah TKK Terampil Terlatih dan Tersertifikasi Berdasarkan Jabatan Kerja</option>
                            </select>
                        </div>
                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Tambah File
                            Capaian Output</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Capaian Output -->
    <!-- Edit Capaian Output File -->
    <div class="modal fade bd-example-modal-lg" id="modal-edit-infografis-file-master" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Edit File Capaian Output</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label for="nama">File Capaian Output</label>
                            <input type="file" class="form-control" id="edit_file_infografis_instruktur"
                                name="edit_file_infografis_instruktur"
                                placeholder="Contoh: Universitas_Negeri_Sriwijaya.pdf" required>
                        </div>
                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Edit File
                            Capaian Output</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Capaian Output -->
    <!-- Modal Delete Capaian Output -->
    <div class="modal fade bd-example-modal-lg" id="modal-delete-file-infografis" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Hapus File Capaian Output Ini?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Pastikan dengan benar bahwa anda ingin menghapus data ini!
                    <form>
                        <div class="modal-footer">
                            <button class="btn btn-light" data-dismiss="modal">Batal</button>
                            <button class="btn btn-danger" type="submit">Hapus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal delete Capaian Output -->
    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php $this->load->view("components/sidebar.php") ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php $this->load->view("components/navbar.php", $header) ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h2 font-weight-bold mb-4 mt-4">Capaian Output File</h1>
                    </div>

                    <!-- Alert -->
                    <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                        <?= $this->session->flashdata('success') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php endif; ?>
                    <?php if ($this->session->flashdata('gagal')) : ?>
                    <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                        <?= $this->session->flashdata('gagal') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php endif; ?>

                    <div class="container-fluid mt-2 mb-4 container-background">
                        <div class="col d-flex justify-content-between button-field">
                            <div class="">
                                <button class="btn btn-primary btn-add-kegiatan mr-2 mt-4"
                                    id="btn-add-file-infografis-capaian_output"><img class="img-profile mr-2"
                                        src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">Capaian Output
                                    File</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="pb-4 pt-2">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#master-file-infografis-RPK" role="tab"
                                            data-toggle="tab">
                                            Rekap Pelaksanaan Kegiatan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#master-file-infografis-RPBS" role="tab"
                                            data-toggle="tab">
                                            Rekap Peserta Berdasarkan Skema</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#master-file-infografis-PPK" role="tab"
                                            data-toggle="tab">
                                            Program Padat Karya</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#master-file-infografis-RPBWP" role="tab"
                                            data-toggle="tab">
                                            Rekap Peserta Berdasarkan Wilayah dan Pembiayaan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#master-file-infografis-RPKBMK" role="tab"
                                            data-toggle="tab">
                                            Rekap Peserta Kegiatan Berdasarkan Mitra Kerja</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#master-file-infografis-RPKBJK" role="tab"
                                            data-toggle="tab">
                                            Rekap Pelaksanaan Kegiatan Berdasarkan Jenis Kegiatan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#master-file-infografis-TKK_AHLI" role="tab"
                                            data-toggle="tab">
                                            Jumlah TKK Ahli Terlatih dan Tersertifikasi Berdasarkan Jabatan Kerja</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#master-file-infografis-TKK_TERAMPIL" role="tab"
                                            data-toggle="tab">
                                            Jumlah TKK Terampil Terlatih dan Tersertifikasi Berdasarkan Jabatan Kerja</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content">
                                <div class="tab-pane fade active show" role="tabpanel" id="master-file-infografis-RPK">
                                    <table id="infografis_file_RPK_table" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Provinsi</th>
                                                <th>Kategori</th>
                                                <th>File</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="tab-pane fade show" role="tabpanel" id="master-file-infografis-RPBS">
                                    <table id="infografis_file_RPBS_table" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Provinsi</th>
                                                <th>Kategori</th>
                                                <th>File</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="tab-pane fade show" role="tabpanel" id="master-file-infografis-PPK">
                                    <table id="infografis_file_PPK_table" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Provinsi</th>
                                                <th>Kategori</th>
                                                <th>File</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="tab-pane fade show" role="tabpanel" id="master-file-infografis-RPBWP">
                                    <table id="infografis_file_RPBWP_table" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Provinsi</th>
                                                <th>Kategori</th>
                                                <th>File</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="tab-pane fade show" role="tabpanel" id="master-file-infografis-RPKBMK">
                                    <table id="infografis_file_RPKBMK_table" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Provinsi</th>
                                                <th>Kategori</th>
                                                <th>File</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="tab-pane fade show" role="tabpanel" id="master-file-infografis-RPKBJK">
                                    <table id="infografis_file_RPKBJK_table" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Provinsi</th>
                                                <th>Kategori</th>
                                                <th>File</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="tab-pane fade show" role="tabpanel" id="master-file-infografis-TKK_AHLI">
                                    <table id="infografis_file_TKK_AHLI_table" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Provinsi</th>
                                                <th>Kategori</th>
                                                <th>File</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="tab-pane fade show" role="tabpanel" id="master-file-infografis-TKK_TERAMPIL">
                                    <table id="infografis_file_TKK_TERAMPIL_table" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Provinsi</th>
                                                <th>Kategori</th>
                                                <th>File</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
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