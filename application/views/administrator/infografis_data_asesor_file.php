<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("components/head.php") ?>
</head>

<body id="page-top">


    <!-- Tambah Asesor File -->
    <div class="modal fade bd-example-modal-lg" id="modal-tambah-infografis-asesor-file-master" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Tambah File Asesor</h4>
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
                            <label for="nama">File Asesor</label>
                            <input type="file" class="form-control" id="file_infografis" name="file_infografis"
                                placeholder="Contoh: Universitas Negeri Sriwijaya" required>
                        </div>
                        <div class="form-group py-2">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Kategori</label>
                            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="kategori">
                                <option selected>Choose...</option>
                                <option value="10">Asesor Kompetensi Tenaga Kerja (AKTK) </option>
                                <option value="11">Asesor Kompetensi Badan Usaha (ABU)</option>
                            </select>
                        </div>
                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Tambah File
                            Asesor</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Asesor -->
    <!-- Edit Asesor File -->
    <div class="modal fade bd-example-modal-lg" id="modal-edit-infografis-file-master" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Edit File Asesor</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label for="nama">File Asesor</label>
                            <input type="file" class="form-control" id="edit_file_infografis_asesor"
                                name="edit_file_infografis_asesor" placeholder="Contoh: Universitas_Negeri_Sriwijaya.pdf"
                                required>
                        </div>
                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Edit File
                            Asesor</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Asesor -->
    <!-- Modal Delete Asesor -->
    <div class="modal fade bd-example-modal-lg" id="modal-delete-file-infografis" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Hapus File Asesor Ini?</h5>
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
    <!-- End modal delete Asesor -->
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
                        <h1 class="h2 font-weight-bold mb-4 mt-4">Asesor File</h1>
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
                                    id="btn-add-file-infografis-asesor"><img class="img-profile mr-2"
                                        src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">Asesor File</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="pb-4 pt-2">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#master-file-infografis-aktk" role="tab" data-toggle="tab">
                                            AKTK</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#master-file-infografis-abu" role="tab" data-toggle="tab">
                                            ABUJK</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content">
                                <div class="tab-pane fade active show" role="tabpanel" id="master-file-infografis-aktk">
                                    <table id="infografis_file_aktk_table" class="display" style="width:100%">
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
                                <div class="tab-pane fade show" role="tabpanel" id="master-file-infografis-abu">
                                    <table id="infografis_file_abu_table" class="display" style="width:100%">
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