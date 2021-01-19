<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("components/head.php") ?>
</head>

<body id="page-top">

    <!-- Tambah Kegiatan Modal -->
    <div class="modal fade bd-example-modal-lg" id="modal-edit-profile" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Edit Profile</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="<?= base_url() ?>User/edit_profile_action" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group pt-2">
                                    <label for="profileFotoProfil">Foto Profile *</label>
                                    <center>
                                        <div id="profile-picture-container">
                                            <image id="banner-image-profile" src="<?= $user['file_foto_profile'] ?>" />
                                            <input id="banner-profile" type="file" name="file_foto_profile" placeholder="Photo" alt="Pilih Foto" accept=".jpg, .png, .jpeg" capture>
                                        </div>
                                        <p class="text-secondary mt-2"><small>Klik gambar untuk mengganti foto profile</small></>
                                    </center>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group py-2">
                                    <label for="profileNama">Nama *</label>
                                    <input type="text" class="form-control" value="<?= $user['nama'] ?>" id="profile-nama" name="nama" placeholder="Contoh: Budi Gunawan" required>
                                </div>
                                <div class="form-group py-2">
                                    <label for="profileEmail">Email *</label>
                                    <input type="email" class="form-control" value="<?= $user['email'] ?>" id="profile-email" name="email" placeholder="Contoh: Budi@email.com" required>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label for="profileNomorTelepon">Nomor Telepon *</label>
                                            <input type="text" class="form-control" value="<?= $user['no_telpon'] ?>" id="profile-nomor-telepon" name="nomor_telepon" placeholder="Contoh: +68119324945" required>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label for="profileNomorHandphone">Nomor Handphone *</label>
                                            <input type="text" class="form-control" value="<?= $user['no_handphone'] ?>" id="profile-nomor-handphone" name="nomor_handphone" placeholder="Contoh: +6282112341234" required>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="form-group py-2">
                            <label for="deskripsiKegiatan">Nomor Induk Kependudukan *</label>
                            <input type="text" class="form-control" value="<?= $user['nik'] ?>" id="profile-nik" name="nik" placeholder="Contoh: 248430234247924" required>
                        </div>
                        <div class="form-group py-2">
                            <label for="deskripsiKegiatan">Alamat *</label>
                            <textarea type="text" rows="3" class="form-control" id="profile-alamat" name="alamat" placeholder="Contoh: Jl. Sudirman No. 1234" required><?= $user['alamat_rumah'] ?></textarea>
                        </div>
                        <div class="form-group py-2">
                            <div class="row mr-2">
                                <div class="col">
                                    <label for="kotaKegiatan">RT./RW.</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                RT.
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" id="profile-rt" name="rt" placeholder="Contoh: 123" value="<?= $user['rt'] ?>" style="background-color: white;" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="kotaKegiatan">Kode Pos/Area *</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                Kode Pos
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" id="profile-kode-pos" name="kode_pos" placeholder="Contoh: 30132" value="<?= $user['kode_pos'] ?>" style="background-color: white;" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row mr-2">
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                RW.
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" id="profile-rw" name="rw" placeholder="Contoh: 321" value="<?= $user['rw'] ?>" style="background-color: white;" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                Kode Area
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" id="profile-kode-area" name="kode_area" placeholder="Contoh: 0711" value="<?= $user['kode_area'] ?>" style="background-color: white;" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group py-2">
                            <label for="profileProvinsi">Provinsi *</label>
                            <select class="form-control" id="profile-provinsi" name="id_provinsi" onChange="getStateProfile(this.value);" required>
                                <?php if ($provinsi != null) : ?>
                                    <?php foreach ($provinsi as $row) : ?>
                                        <option value="<?= $row['id_provinsi'] ?>"><?= $row['provinsi'] ?></option>
                                <?php endforeach;
                                endif; ?>
                            </select>
                        </div>
                        <div class="form-group py-2">
                            <label for="kotaKegiatan">Kota/Kabupaten *<span class="ml-3 text-secondary"><small>Mohon pilih Provinsi terlebih dahulu</small></span></label>
                            <select class="form-control" id="profile-kota" name="id_kota_kabupaten" onChange="getKecamatanProfile(this.value);" required>
                            </select>
                        </div>
                        <div class="form-group py-2">
                            <label for="kotaKegiatan">Kecamatan *<span class="ml-3 text-secondary"><small>Mohon pilih Kota/Kabupaten terlebih dahulu</small></span></label>
                            <select class="form-control" id="profile-kecamatan" name="id_kecamatan" onChange="getKelurahanProfile(this.value);" required>
                            </select>
                        </div>
                        <div class="form-group py-2">
                            <label for="kotaKegiatan">Kelurahan *<span class="ml-3 text-secondary"><small>Mohon pilih Kecamatan terlebih dahulu</small></span></label>
                            <select class="form-control" id="profile-kelurahan" name="id_kelurahan" required>
                            </select>
                        </div>

                        <div class="form-group py-2">
                            <label for="Jenis Kelamin">Status Kepemilikan Rumah *</label>
                            <select class="form-control" id="profile-status-rumah" name="id_status_rumah" required>
                                <?php if ($status_rumah != null) : ?>
                                    <?php foreach ($status_rumah as $row) : ?>
                                        <?php if ($user['status_rumah'] == $row['status_rumah']) : ?>
                                            <option value="<?= $row['id_status_rumah'] ?>" selected><?= $row['status_rumah'] ?></option>
                                        <?php else : ?>
                                            <option value="<?= $row['id_status_rumah'] ?>"><?= $row['status_rumah'] ?></option>
                                <?php endif;
                                    endforeach;
                                endif; ?>
                            </select>
                        </div>

                        <div class="form-group py-2">
                            <label for="Jenis Kelamin">Jenis Kelamin *</label>
                            <select class="form-control" id="profile-jenis-kelamin" name="id_jenis_kelamin" required>
                                <?php if ($jenis_kelamin != null) : ?>
                                    <?php foreach ($jenis_kelamin as $row) : ?>
                                        <?php if ($user['jenis_kelamin'] == $row['jenis_kelamin']) : ?>
                                            <option value="<?= $row['id_jenis_kelamin'] ?>" selected><?= $row['jenis_kelamin'] ?></option>
                                        <?php else : ?>
                                            <option value="<?= $row['id_jenis_kelamin'] ?>"><?= $row['jenis_kelamin'] ?></option>
                                <?php endif;
                                    endforeach;
                                endif; ?>
                            </select>
                        </div>

                        <div class="form-group py-2">
                            <label for="Jenis Kelamin">Status Pernikahan *</label>
                            <select class="form-control" id="profile-status-perkawinan" name="id_status_perkawinan" required>
                                <?php if ($status_perkawinan != null) : ?>
                                    <?php foreach ($status_perkawinan as $row) : ?>
                                        <?php if ($user['status_perkawinan'] == $row['status_perkawinan']) : ?>
                                            <option value="<?= $row['id_status_perkawinan'] ?>" selected><?= $row['status_perkawinan'] ?></option>
                                        <?php else : ?>
                                            <option value="<?= $row['id_status_perkawinan'] ?>"><?= $row['status_perkawinan'] ?></option>
                                <?php endif;
                                    endforeach;
                                endif; ?>
                            </select>
                        </div>

                        <div class="menu-divider"></div>
                        <h4 class="form-data-pendidikan-title">Data Pendidikan</h4>
                        <hr>
                        <div class="form-group py-2">
                            <label for="Jenis Kelamin">Pendidikan Terakhir *</label>
                            <select class="form-control" id="profile-pendidikan" name="id_pendidikan" required>
                                <?php if ($pendidikan != null) : ?>
                                    <?php foreach ($pendidikan as $row) : ?>
                                        <?php if ($user['pendidikan'] == $row['pendidikan']) : ?>
                                            <option value="<?= $row['id_pendidikan'] ?>" selected><?= $row['pendidikan'] ?></option>
                                        <?php else : ?>
                                            <option value="<?= $row['id_pendidikan'] ?>"><?= $row['pendidikan'] ?></option>
                                <?php endif;
                                    endforeach;
                                endif; ?>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group py-2">
                                    <label for="profileNomorTelepon">Jurusan *</label>
                                    <input type="text" class="form-control" value="<?= $user['jurusan'] ?>" id="profile-jurusan" name="jurusan" placeholder="Contoh: Teknik Perminyakan" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group py-2">
                                    <label for="profileNomorTelepon">Nama Universitas *</label>
                                    <input type="text" class="form-control" value="<?= $user['nama_universitas'] ?>" id="profile-nama-universitas" name="nama_universitas" placeholder="Contoh: Institut Teknologi Bandung" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group py-2">
                            <label for="filterTanggalSelesaikegiatan">Tahun Lulus *</label>
                            <input type="text" class="form-control js-daterangepicker" id="profile-tahun-lulus" data-drops="up" name="profile_tahun_lulus" placeholder="Pilih tahun lulus" required>
                        </div>

                        <div class="menu-divider"></div>
                        <h4 class="form-data-pendidikan-title">Data Perusahaan</h4>
                        <hr>
                        <div class="form-group py-2">
                            <label for="profileNomorTelepon">Nama Perusahaan *</label>
                            <input type="text" class="form-control" value="<?= $user['nama_perusahaan'] ?>" id="profile-nama-perusahaan" name="nama_perusahaan" placeholder="Contoh: PT. Indo Karya Abadi" required>
                        </div>
                        <div class="form-group py-2">
                            <label for="profileNomorTelepon">Jabatan *</label>
                            <input type="text" class="form-control" value="<?= $user['jabatan'] ?>" id="profile-jabatan" name="jabatan" placeholder="Contoh: Human Resource Manager" required>
                        </div>

                        <div class="menu-divider"></div>
                        <button class="btn btn-block btn-info btn-modal-edit-profile" onsubmit="return foo();" type="submit" data-toggle="collapse" data-target="#collapseExample" id="btn-edit-profile" aria-expanded="false" aria-controls="collapseExample">
                            Edit Profile
                        </button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan" data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal tambah kegiatan -->

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
                        <h1 class="h2 font-weight-bold mt-4">Profile</h1>
                    </div>

                    <!-- Alert -->
                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                            <?= $this->session->flashdata('success'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php elseif ($this->session->flashdata('APImessage')) : ?>
                        <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                            <?= $this->session->flashdata('success'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif ?>

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
                                            <p class="text-muted text-capitalize font-size-sm"><?= $user['alamat_card'] ?></p>
                                            <button class="btn btn-block btn-outline-info btn-modal-edit-profile" type="button" data-toggle="modal" data-target="#modal-edit-profile" aria-expanded="false" aria-controls="collapseExample">
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
                            <div class="collapse" id="collapseDetail">
                                <div class="card mt-3">
                                    <div class="card-body">
                                        <h5 class="mb-2">Data Pendidikan</h5>
                                        <hr>
                                        <div class="text-right mb-4">
                                            <small class="text-secondary"><?= $user['pendidikan'] ?></small>
                                        </div>
                                        <div class="d-flex flex-column align-items-center text-center">
                                            <div class="">
                                                <h5 class=""><?= $user['jurusan'] ?></h5>
                                                <small class="mb-1 text-muted"><?= $user['nama_universitas'] ?> (<?= $user['tahun_lulus_tahun'] ?>)</small><br>
                                            </div>
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
                                        <div class="collapse" id="collapseDetail">
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
                                                    <h6 class="mb-0">Status Pernikahan</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    <?= $user['status_perkawinan'] ?>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="px-3">
                                        <div class="row mt-2">
                                            <button class="btn btn-block btn-outline-info btn-modal-edit-profile" type="button" data-toggle="collapse" data-target="#collapseDetail" aria-expanded="false" aria-controls="collapseExample">
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