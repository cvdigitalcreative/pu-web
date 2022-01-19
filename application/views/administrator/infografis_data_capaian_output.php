<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("components/head.php") ?>
</head>

<body id="page-top">

    <!-- Tambah Capaian Output -->
    <div class="modal fade bd-example-modal-lg" id="modal-tambah-infografis-capaian_output-master" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Tambah Capaian Output</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Provinsi</label>
                            <select class="custom-select my-1 mr-sm-2" id="idprovinsi" name="idprovinsi">
                            <?php if($this->session->userdata('id_provinsi') == 0) {?>
                                <option selected>Choose...</option>
                                <option value="15">Sumatera Selatan</option>
                                <option value="16">Kep. Bangka Belitung</option>
                                <option value="17">Jambi</option>
                                <option value="18">Bengkulu</option>
                                <option value="19">Lampung</option>
                                <?php } elseif($this->session->userdata('id_provinsi')== 15){?>
                                <option selected>Choose...</option>
                                <option value="15">Sumatera Selatan</option>
                                <?php } elseif($this->session->userdata('id_provinsi')== 16){ ?>
                                <option selected>Choose...</option>
                                <option value="16">Kep. Bangka Belitung</option>
                                <?php } elseif($this->session->userdata('id_provinsi')== 17){ ?>
                                <option selected>Choose...</option>
                                <option value="17">Jambi</option>
                                <?php } elseif($this->session->userdata('id_provinsi')== 18){ ?>
                                <option selected>Choose...</option>
                                <option value="18">Bengkulu</option>
                                <?php } elseif($this->session->userdata('id_provinsi')== 19){ ?>
                                <option selected>Choose...</option>
                                <option value="19">Lampung</option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group py-2">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama"
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
                                <option value="25">Jumlah TKK Ahli Terlatih dan Tersertifikasi Berdasarkan Jabatan Kerja</option>
                                <option value="26">Jumlah TKK Terampil Terlatih dan Tersertifikasi Berdasarkan Jabatan Kerja</option>

                            </select>
                        </div>
                        <div class="form-group py-2">
                            <label for="jumlah">Jumlah</label>
                            <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Contoh: 190"
                                required>
                        </div>
                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Tambah
                            Capaian Output</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Capaian Output -->

    <!-- Edit Capaian Output -->
    <div class="modal fade bd-example-modal-lg" id="modal-edit-infografis-capaian_output" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Edit Capaian Output</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" enctype="multipart/form-data">

                        <div class="form-group py-2">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="edit_nama_infografis"
                                name="edit_nama_infografis" placeholder="Contoh: Universitas Negeri Sriwijaya" required>
                        </div>
                        <input type="text" class="form-control" id="edit_kategori_infografis"
                            name="edit_kategori_infografis" hidden>
                        <input type="text" class="form-control" id="edit_provinsi_infografis"
                            name="edit_provinsi_infografis" hidden>
                        <div class="form-group py-2">
                            <label for="jumlah">Jumlah</label>
                            <input type="text" class="form-control" id="edit_jumlah_infografis"
                                name="edit_jumlah_infografis" placeholder="Contoh: 190" required>
                        </div>
                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Edit
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
    <div class="modal fade bd-example-modal-lg" id="modal-delete-infografis-capaian_output" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Item Capaian Output Ini?</h5>
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
                        <h1 class="h2 font-weight-bold mb-4 mt-4">Capaian Output Data</h1>
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
                                <button class="btn btn-primary btn-add-kegiatan mr-2 mt-4" id="btn-add-infografis-capaian_output"><img
                                        class="img-profile mr-2"
                                        src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">Capaian Output</button>
                               
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="pb-4 pt-2">
                                <ul class="nav nav-tabs" role="tablist">

                                    <li class="nav-item">
                                        <a class="nav-link active" href="#master-infografis-RPK" role="tab"
                                            data-toggle="tab">
                                            Rekap Pelaksanaan Kegiatan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#master-infografis-RPBS" role="tab"
                                            data-toggle="tab">
                                            Rekap Peserta Berdasarkan Skema</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#master-infografis-PPK" role="tab"
                                            data-toggle="tab">
                                            Program Padat Karya</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#master-infografis-RPBWP" role="tab"
                                            data-toggle="tab">
                                            Rekap Peserta Berdasarkan Wilayah dan Pembiayaan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#master-infografis-RPKBMK" role="tab"
                                            data-toggle="tab">
                                            Rekap Peserta Kegiatan Berdasarkan Mitra Kerja</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#master-infografis-RPKBJK" role="tab"
                                            data-toggle="tab">
                                            Rekap Pelaksanaan Kegiatan Berdasarkan Jenis Kegiatan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#master-infografis-TKK_AHLI" role="tab"
                                            data-toggle="tab">
                                            Jumlah TKK Ahli Terlatih dan Tersertifikasi Berdasarkan Jabatan Kerja</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#master-infografis-TKK_TERAMPIL" role="tab"
                                            data-toggle="tab">
                                            Jumlah TKK Terampil Terlatih dan Tersertifikasi Berdasarkan Jabatan Kerja</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content">
                                <div class="tab-pane fade active show" role="tabpanel" id="master-infografis-RPK">
                                    <table id="infografis_table_RPK" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Provinsi</th>
                                                <th>Kategori</th>
                                                <th>Nama</th>
                                                <th>Jumlah</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="tab-pane fade show" role="tabpanel" id="master-infografis-RPBS">
                                    <table id="infografis_table_RPBS" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Provinsi</th>
                                                <th>Kategori</th>
                                                <th>Nama</th>
                                                <th>Jumlah</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="tab-pane fade show" role="tabpanel" id="master-infografis-PPK">
                                    <table id="infografis_table_PPK" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Provinsi</th>
                                                <th>Kategori</th>
                                                <th>Nama</th>
                                                <th>Jumlah</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="tab-pane fade show" role="tabpanel" id="master-infografis-RPBWP">
                                    <table id="infografis_table_RPBWP" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Provinsi</th>
                                                <th>Kategori</th>
                                                <th>Nama</th>
                                                <th>Jumlah</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="tab-pane fade show" role="tabpanel" id="master-infografis-RPKBMK">
                                    <table id="infografis_table_RPKBMK" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Provinsi</th>
                                                <th>Kategori</th>
                                                <th>Nama</th>
                                                <th>Jumlah</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="tab-pane fade show" role="tabpanel" id="master-infografis-RPKBJK">
                                    <table id="infografis_table_RPKBJK" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Provinsi</th>
                                                <th>Kategori</th>
                                                <th>Nama</th>
                                                <th>Jumlah</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="tab-pane fade show" role="tabpanel" id="master-infografis-TKK_AHLI">
                                    <table id="infografis_table_TKK_AHLI" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Provinsi</th>
                                                <th>Kategori</th>
                                                <th>Nama</th>
                                                <th>Jumlah</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="tab-pane fade show" role="tabpanel" id="master-infografis-TKK_TERAMPIL">
                                    <table id="infografis_table_TKK_TERAMPIL" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Provinsi</th>
                                                <th>Kategori</th>
                                                <th>Nama</th>
                                                <th>Jumlah</th>
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