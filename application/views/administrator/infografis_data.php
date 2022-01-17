<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("components/head.php") ?>
</head>

<body id="page-top">

    <!-- Tambah Infografis -->
    <div class="modal fade bd-example-modal-lg" id="modal-tambah-infografis-master" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Tambah Infografis</h4>
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
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                                placeholder="Contoh: Universitas Negeri Sriwijaya" required>
                        </div>
                        <div class="form-group py-2">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Kategori</label>
                            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="kategori">
                                <option selected>Choose...</option>
                                <option value="1">Mitra Balai Jasa Konstruksi Wilayah II Palembang</option>
                                <option value="2">Balai PUPR</option>
                                <option value="3">Organisasi Perangkat Daerah Sub Urusan Jasa Konstruksi</option>
                                <option value="4">Vokasi</option>
                                <option value="5">Asosiasi Profesi</option>
                                <option value="6">Asosiasi Badan Usaha Jasa Konstruksi</option>
                                <option value="7">Lapas </option>
                                <option value="8">BUJK </option>
                                <option value="9">SE Kepala Daerah</option>
                                <option value="10">Data Asesor Kompetensi Tenaga Kerja (AKTK) </option>
                                <option value="11">Data Asesor Kompetensi Badan Usaha (ABU) </option>
                                <option value="12">Data Instruktur Non Vokasi</option>
                                <option value="13">Data Instruktur Vokasi</option>
                                <option value="14">Program Padat Karya</option>
                                <option value="16">Rekap Pelaksanaan Kegiatan</option>
                                <option value="17">Rekap Pelaksanaan Kegiatan Berdasarkan Jenis Kegiatan</option>
                                <option value="18">Realisasi Peserta Berdasarkan Wilayah dan Pembiayaan</option>
                                <option value="20">Rekap Peserta Berdasarkan Skema</option>
                                <option value="21">Realisasi Peserta Kegiatan Berdasarkan Mitra Kerja</option>
                                <option value="25">JUMLAH TKK AHLI TERLATIH DAN TERSERTIFIKASI BERDASARKAN JABATAN KERJA
                                </option>
                            </select>
                        </div>
                        <div class="form-group py-2">
                            <label for="jumlah">Jumlah</label>
                            <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Contoh: 190"
                                required>
                        </div>
                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Tambah
                            Infografis</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Infografis -->

    <!-- Edit Infografis -->
    <div class="modal fade bd-example-modal-lg" id="modal-edit-infografis-master" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Edit Infografis</h4>
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
                            Infografis</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Infografis -->
    <!-- Modal Delete Infografis -->
    <div class="modal fade bd-example-modal-lg" id="modal-delete-infografis" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Item Infografis Ini?</h5>
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
    <!-- End modal delete Infografis -->

    <!-- Tambah Infografis File -->
    <div class="modal fade bd-example-modal-lg" id="modal-tambah-infografis-file-master" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Tambah File Infografis</h4>
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
                            <label for="nama">File Infografis</label>
                            <input type="file" class="form-control" id="file_infografis" name="file_infografis"
                                placeholder="Contoh: Universitas Negeri Sriwijaya" required>
                        </div>
                        <div class="form-group py-2">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Kategori</label>
                            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="kategori">
                                <option selected>Choose...</option>
                                <option value="1">Mitra Balai Jasa Konstruksi Wilayah II Palembang</option>
                                <option value="2">Balai PUPR</option>
                                <option value="3">Organisasi Perangkat Daerah Sub Urusan Jasa Konstruksi</option>
                                <option value="4">Vokasi</option>
                                <option value="5">Asosiasi Profesi</option>
                                <option value="6">Asosiasi Badan Usaha Jasa Konstruksi</option>
                                <option value="7">Lapas </option>
                                <option value="8">BUJK </option>
                                <option value="9">SE Kepala Daerah</option>
                                <option value="10">Data Asesor Kompetensi Tenaga Kerja (AKTK) </option>
                                <option value="11">Data Asesor Kompetensi Badan Usaha (ABU) </option>
                                <option value="12">Data Instruktur Non Vokasi</option>
                                <option value="13">Data Instruktur Vokasi</option>
                                <option value="14">Program Padat Karya</option>
                                <option value="16">Rekap Pelaksanaan Kegiatan</option>
                                <option value="17">Rekap Pelaksanaan Kegiatan Berdasarkan Jenis Kegiatan</option>
                                <option value="18">Realisasi Peserta Berdasarkan Wilayah dan Pembiayaan</option>
                                <option value="20">Rekap Peserta Berdasarkan Skema</option>
                                <option value="21">Realisasi Peserta Kegiatan Berdasarkan Mitra Kerja</option>
                                <option value="25">JUMLAH TKK AHLI TERLATIH DAN TERSERTIFIKASI BERDASARKAN JABATAN KERJA
                                </option>
                            </select>
                        </div>
                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Tambah File
                            Infografis</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Infografis -->
    <!-- Edit Infografis File -->
    <div class="modal fade bd-example-modal-lg" id="modal-edit-infografis-file-master" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Edit File Infografis</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" enctype="multipart/form-data">
                        <input type="text" class="form-control" id="edit_file_kategori_infografis"
                            name="edit_file_kategori_infografis" hidden>
                        <input type="text" class="form-control" id="edit_file_provinsi_infografis"
                            name="edit_file_provinsi_infografis" hidden>
                        <div class="form-group py-2">
                            <label for="nama">File Infografis</label>
                            <input type="file" class="form-control" id="edit_file_infografis"
                                name="edit_file_infografis" placeholder="Contoh: Universitas_Negeri_Sriwijaya.pdf"
                                required>
                        </div>
                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Edit File
                            Infografis</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Infografis -->
    <!-- Modal Delete Infografis -->
    <div class="modal fade bd-example-modal-lg" id="modal-delete-file-infografis" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Hapus File Infografis Ini?</h5>
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
    <!-- End modal delete Infografis -->
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
                        <h1 class="h2 font-weight-bold mb-4 mt-4">Infografis Data</h1>
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
                                <button class="btn btn-primary btn-add-kegiatan mr-2 mt-4" id="btn-add-infografis"><img
                                        class="img-profile mr-2"
                                        src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">Infografis</button>
                                <button class="btn btn-primary btn-add-kegiatan mr-2 mt-4"
                                    id="btn-add-file-infografis"><img class="img-profile mr-2"
                                        src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">File Infografis</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="pb-4 pt-2">
                                <ul class="nav nav-tabs" role="tablist">

                                    <li class="nav-item">
                                        <a class="nav-link active" href="#master-infografis" role="tab"
                                            data-toggle="tab">
                                            Infografis</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#master-file-infografis" role="tab" data-toggle="tab">
                                            Infografis File</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content">
                                <div class="tab-pane fade active show" role="tabpanel" id="master-infografis">
                                    <table id="infografis_table" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Provinsi</th>
                                                <th>Kategori</th>
                                                <th>Nama</th>
                                                <th>Jumlah</th>
                                                <th>Aksi</th>
                                                <th id="id_provinsi" style="display:none;">No </th>
                                                <th id="id_kategori" style="display:none;">No </th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="tab-pane fade show" role="tabpanel" id="master-file-infografis">
                                    <table id="infografis_file_table" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Provinsi</th>
                                                <th>Kategori</th>
                                                <th>File</th>
                                                <th>Aksi</th>
                                                <th id="id_provinsi" style="display:none;">No </th>
                                                <th id="id_kategori" style="display:none;">No </th>
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