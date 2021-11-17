<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("components/head.php") ?>
</head>

<body id="page-top">

    <!-- Tambah Akun Kegiatan -->
    <div class="modal fade bd-example-modal-lg" id="modal-tambah-akun-kegiatan" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Tambah Akun Kegiatan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label for="namaAkunKegiatan">Nama Akun Kegiatan *</label>
                            <input type="text" class="form-control" id="nama-akun-kegiatan" name="nama_akun_kegiatan"
                                placeholder="Contoh: Vokasi" required>
                        </div>

                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Tambah
                            Akun Kegiatan</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal tambah Akun Kegiatan -->

    <!-- Edit Akun Kegiatan -->
    <div class="modal fade bd-example-modal-lg" id="modal-edit-akun-kegiatan" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Edit Akun Kegiatan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label for="namaAkunKegiatan">Nama Akun Kegiatan *</label>
                            <input type="text" class="form-control" id="edit-nama-akun-kegiatan"
                                name="edit_nama_akun_kegiatan" placeholder="Contoh: Vokasi SMA" required>
                        </div>

                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Edit
                            Akun kegiatan</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal edit akun kegiatan -->

    <!-- Modal Delete akun kegiatan -->
    <div class="modal fade bd-example-modal-lg" id="modal-delete-akun-kegiatan" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Akun Kegiatan Ini?</h5>
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
    <!-- End modal delete akun kegiatan -->



    <!-- Tambah Jenis Kegiatan -->
    <div class="modal fade bd-example-modal-lg" id="modal-tambah-jenis-kegiatan" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Tambah Jenis Kegiatan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label for="namaJenisKegiatan">Nama Jenis Kegiatan *</label>
                            <input type="text" class="form-control" id="nama-jenis-kegiatan" name="nama_jenis_kegiatan"
                                placeholder="Contoh: Pelatihan" required>
                        </div>

                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Tambah
                            Jenis Kegiatan</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal tambah jenis Kegiatan -->

    <!-- Edit jenis Kegiatan -->
    <div class="modal fade bd-example-modal-lg" id="modal-edit-jenis-kegiatan" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Edit Jenis Kegiatan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label for="namaJenisKegiatan">Nama Jenis Kegiatan *</label>
                            <input type="text" class="form-control" id="edit-nama-jenis-kegiatan"
                                name="edit_nama_jenis_kegiatan" placeholder="Contoh: Vokasi SMA" required>
                        </div>

                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Edit
                            Jenis kegiatan</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal edit jenis kegiatan -->

    <!-- Modal Delete jenis kegiatan -->
    <div class="modal fade bd-example-modal-lg" id="modal-delete-jenis-kegiatan" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Jenis Kegiatan Ini?</h5>
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
    <!-- End modal delete jenis kegiatan -->



    <!-- Tambah Provinsi -->
    <div class="modal fade bd-example-modal-lg" id="modal-tambah-provinsi" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Tambah Provinsi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label for="namaProvinsi">Nama Provinsi *</label>
                            <input type="text" class="form-control" id="nama-provinsi" name="nama_provinsi"
                                placeholder="Contoh: Sumatera Selatan" required>
                        </div>

                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Tambah
                            Provinsi</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal tambah provinsi -->

    <!-- Edit provinsi -->
    <div class="modal fade bd-example-modal-lg" id="modal-edit-provinsi" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Edit Provinsi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label for="namaProvinsi">Nama Provinsi *</label>
                            <input type="text" class="form-control" id="edit-provinsi" name="edit_nama_provinsi"
                                placeholder="Contoh: Sumatera Selatan" required>
                        </div>

                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Edit
                            Provinsi</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal edit provinsi -->

    <!-- Modal Delete provinsi -->
    <div class="modal fade bd-example-modal-lg" id="modal-delete-provinsi" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Provinsi Ini?</h5>
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
    <!-- End modal delete provinsi -->



    <!-- Tambah Kabupaten Kota -->
    <div class="modal fade bd-example-modal-lg" id="modal-tambah-kabupaten-kota" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Tambah Kabupaten Kota</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label for="editProvinsiKegiatan">Provinsi kegiatan *</label>
                            <select class="form-control" id="provinsi-kabupaten-kota" name="id_provinsi" required>
                                <?php if ($provinsi != null) :
									foreach ($provinsi as $row2) : ?>
                                <option value="<?= $row2['id_provinsi'] ?>"><?= $row2['provinsi'] ?></option>
                                <?php endforeach;
								endif; ?>
                            </select>
                        </div>
                        <div class="form-group py-2">
                            <label for="namaKabupatenKota">Nama Kabupaten Kota *</label>
                            <input type="text" class="form-control" id="nama-kabupaten-kota" name="nama_kabupaten_kota"
                                placeholder="Contoh: Kabupaten Banyuasin" required>
                        </div>

                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Tambah
                            Kabupaten Kota</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal tambah kabupaten kota -->

    <!-- Edit Kabupaten Kota -->
    <div class="modal fade bd-example-modal-lg" id="modal-edit-kabupaten-kota" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Edit Kabupaten Kota</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label for="namaKabupatenKota">Nama Kabupaten Kota *</label>
                            <input type="text" class="form-control" id="edit-kabupaten-kota" name="edit_kabupaten_kota"
                                placeholder="Contoh: Kabupaten Banyuasin" required>
                        </div>

                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Edit
                            Kabupaten Kota</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal edit kabupaten Kota -->

    <!-- Modal Delete kabupaten kota -->
    <div class="modal fade bd-example-modal-lg" id="modal-delete-kabupaten-kota" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Kabupaten Kota Ini?</h5>
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
    <!-- End modal delete kabupaten kota -->



    <!-- Tambah Kecamatan -->
    <div class="modal fade bd-example-modal-lg" id="modal-tambah-kecamatan" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Tambah Kecamatan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label for="editProvinsiKegiatan">Provinsi *</label>
                            <select class="form-control" id="edit-provinsi-kegiatan" name="id_provinsi"
                                onChange="getStateMasterKotaKecamatan(this.value);" required>
                                <?php if ($provinsi != null) :
									foreach ($provinsi as $row2) : ?>
                                <option value="<?= $row2['id_provinsi'] ?>"><?= $row2['provinsi'] ?></option>
                                <?php endforeach;
								endif; ?>
                            </select>
                        </div>
                        <div class="form-group py-2">
                            <label for="editKotaKegiatan">Kabupaten Kota *<span class="ml-3 text-secondary"><small>Mohon
                                        pilih Provinsi terlebih dahulu</small></span></label>
                            <select class="form-control" id="master-kota-kecamatan" name="id_kabupaten_kota" required>
                            </select>
                        </div>
                        <div class="form-group py-2">
                            <label for="namaKecamatan">Nama Kecamatan *</label>
                            <input type="text" class="form-control" id="nama-kecamatan" name="nama_kecamatan"
                                placeholder="Contoh: Alang-alang Lebar" required>
                        </div>

                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Tambah
                            Kecamatan</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal tambah kecamatan -->

    <!-- Edit Kecamatan -->
    <div class="modal fade bd-example-modal-lg" id="modal-edit-kecamatan" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Edit Kecamatan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label for="namaKecamatan">Nama Kecamatan *</label>
                            <input type="text" class="form-control" id="edit-kecamatan" name="edit_kecamatan"
                                placeholder="Contoh: Demang Lebar Daun" required>
                        </div>

                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Edit
                            Kecamatan</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal edit Kecamatan -->

    <!-- Modal Delete kecamatan -->
    <div class="modal fade bd-example-modal-lg" id="modal-delete-kecamatan" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Kecamatan Ini?</h5>
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
    <!-- End modal delete kecamatan -->



    <!-- Tambah kelurahan -->
    <div class="modal fade bd-example-modal-lg" id="modal-tambah-kelurahan" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Tambah kelurahan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label for="profileProvinsi">Provinsi *</label>
                            <select class="form-control" id="master-provinsi-kelurahan" name="id_provinsi"
                                onChange="getStateMasterKotaKelurahan(this.value);" required>
                                <?php if ($provinsi != null) : ?>
                                <?php foreach ($provinsi as $row) : ?>
                                <option value="<?= $row['id_provinsi'] ?>"><?= $row['provinsi'] ?></option>
                                <?php endforeach;
                                endif; ?>
                            </select>
                        </div>
                        <div class="form-group py-2">
                            <label for="kotaKegiatan">Kota/Kabupaten *<span class="ml-3 text-secondary"><small>Mohon
                                        pilih Provinsi terlebih dahulu</small></span></label>
                            <select class="form-control" id="master-kota-kelurahan" name="id_kota_kabupaten"
                                onChange="getStateMasterKecamatanKelurahan(this.value);" required>
                            </select>
                        </div>
                        <div class="form-group py-2">
                            <label for="kotaKegiatan">Kecamatan *<span class="ml-3 text-secondary"><small>Mohon pilih
                                        Kota/Kabupaten terlebih dahulu</small></span></label>
                            <select class="form-control" id="master-kecamatan-kelurahan" name="id_kecamatan"
                                onChange="getKelurahanProfile(this.value);" required>
                            </select>
                        </div>
                        <div class="form-group py-2">
                            <label for="namaKelurahan">Nama kelurahan *</label>
                            <input type="text" class="form-control" id="nama-kelurahan" name="nama_kelurahan"
                                placeholder="Contoh: Karya Baru" required>
                        </div>

                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Tambah
                            kelurahan</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal tambah kelurahan -->

    <!-- Edit kelurahan -->
    <div class="modal fade bd-example-modal-lg" id="modal-edit-kelurahan" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Edit kelurahan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label for="namaKelurahan">Nama kelurahan *</label>
                            <input type="text" class="form-control" id="edit-kelurahan" name="edit_kelurahan"
                                placeholder="Contoh: Karya Baru" required>
                        </div>

                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Edit
                            kelurahan</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal edit kelurahan -->

    <!-- Modal Delete kelurahan -->
    <div class="modal fade bd-example-modal-lg" id="modal-delete-kelurahan" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Hapus kelurahan Ini?</h5>
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
    <!-- End modal delete kelurahan -->



    <!-- Tambah status Kegiatan -->
    <div class="modal fade bd-example-modal-lg" id="modal-tambah-status-kegiatan" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Tambah Status Kegiatan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label for="namaStatusKegiatan">Nama Status Kegiatan *</label>
                            <input type="text" class="form-control" id="nama-status-kegiatan"
                                name="nama_status_kegiatan" placeholder="Contoh: Belum Dilaksanakan" required>
                        </div>

                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Tambah
                            Status Kegiatan</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal tambah status kegiatan -->

    <!-- Edit status kegiatan -->
    <div class="modal fade bd-example-modal-lg" id="modal-edit-status-kegiatan" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Edit status kegiatan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label for="namastatus">Nama status kegiatan *</label>
                            <input type="text" class="form-control" id="edit-status-kegiatan"
                                name="edit_status_kegiatan" placeholder="Contoh: Belum Dilaksanakan" required>
                        </div>

                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Edit
                            status</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal edit status kegiatan -->

    <!-- Modal Delete status kegiatan -->
    <div class="modal fade bd-example-modal-lg" id="modal-delete-status-kegiatan" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Hapus status kegiatan Ini?</h5>
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
    <!-- End modal delete status kegiatan -->



    <!-- Tambah status peserta -->
    <div class="modal fade bd-example-modal-lg" id="modal-tambah-status-peserta" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Tambah Status Peserta</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label for="namaStatusPeserta">Nama Status peserta *</label>
                            <input type="text" class="form-control" id="nama-status-peserta" name="nama_status_peserta"
                                placeholder="Contoh: Lulus Administrasi VVA" required>
                        </div>

                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Tambah
                            Status Peserta</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal tambah status peserta -->

    <!-- Edit status peserta -->
    <div class="modal fade bd-example-modal-lg" id="modal-edit-status-peserta" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Edit status peserta</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label for="namaStatusPeserta">Nama Status Peserta *</label>
                            <input type="text" class="form-control" id="edit-status-peserta" name="edit_status_peserta"
                                placeholder="Contoh: Lulus administrasi VVA" required>
                        </div>

                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Edit
                            Status Peserta</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal edit status peserta -->

    <!-- Modal Delete status peserta -->
    <div class="modal fade bd-example-modal-lg" id="modal-delete-status-peserta" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Hapus status peserta Ini?</h5>
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
    <!-- End modal delete status peserta -->



    <!-- Tambah status kategori ahli -->
    <div class="modal fade bd-example-modal-lg" id="modal-tambah-kategori-ahli" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Tambah Kategori Ahli</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label for="namaKategoriAhli">Nama Kategori Ahli *</label>
                            <input type="text" class="form-control" id="nama-kategori-ahli" name="nama_kategori_ahli"
                                placeholder="Contoh: Ahli bangunan dan jalan" required>
                        </div>

                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Tambah
                            Kategori Ahli</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal tambah kategori ahli -->

    <!-- Edit kategori ahli -->
    <div class="modal fade bd-example-modal-lg" id="modal-edit-kategori-ahli" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Edit Kategori Ahli</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label for="namaKategoriAhli">Nama Kategori Ahli *</label>
                            <input type="text" class="form-control" id="edit-kategori-ahli" name="edit_kategori_ahli"
                                placeholder="Contoh: Ahli jalan dan jembatan" required>
                        </div>

                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Edit
                            Kategori Ahli</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal edit kategori ahli -->

    <!-- Modal Delete kategori ahli -->
    <div class="modal fade bd-example-modal-lg" id="modal-delete-kategori-ahli" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Kategori Ahli Ini?</h5>
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
    <!-- End modal delete kategori ahli -->



    <!-- Tambah status jataban kerja -->
    <div class="modal fade bd-example-modal-lg" id="modal-tambah-jabatan-kerja" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Tambah Jabatan Kerja</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label for="namaJabatanKerja">Nama Jabatan Kerja *</label>
                            <input type="text" class="form-control" id="nama-jabatan-kerja" name="nama_jabatan_kerja"
                                placeholder="Contoh: Instruktur" required>
                        </div>

                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Tambah
                            Jabatan Kerja</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal tambah Jabatan Kerja -->

    <!-- Edit Jabatan Kerja -->
    <div class="modal fade bd-example-modal-lg" id="modal-edit-jabatan-kerja" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Edit Jabatan Kerja</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label for="namaJabatanKerja">Nama Jabatan Kerja *</label>
                            <input type="text" class="form-control" id="edit-jabatan-kerja" name="edit_jabatan_kerja"
                                placeholder="Contoh: Instruktur" required>
                        </div>

                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Edit
                            Jabatan Kerja</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal edit jabatan kerja -->

    <!-- Modal Delete jabatan kerja -->
    <div class="modal fade bd-example-modal-lg" id="modal-delete-jabatan-kerja" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Jabatan Kerja Ini?</h5>
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
    <!-- End modal delete kajabatan kerja -->



    <!-- Tambah Pendidikan -->
    <div class="modal fade bd-example-modal-lg" id="modal-tambah-pendidikan" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Tambah Pendidikan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label for="namaPendidikan">Nama Pendidikan *</label>
                            <input type="text" class="form-control" id="nama-pendidikan" name="nama_pendidikan"
                                placeholder="Contoh: S1" required>
                        </div>

                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Tambah
                            Pendidikan</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal tambah pendidikan -->

    <!-- Edit pendidikan -->
    <div class="modal fade bd-example-modal-lg" id="modal-edit-pendidikan" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Edit Pendidikan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label for="namaPendidikan">Nama Pendidikan *</label>
                            <input type="text" class="form-control" id="edit-pendidikan" name="edit_pendidikan"
                                placeholder="Contoh: S1" required>
                        </div>

                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Edit
                            Pendidikan</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal Pendidikan -->

    <!-- Modal Delete Pendidikan -->
    <div class="modal fade bd-example-modal-lg" id="modal-delete-pendidikan" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Pendidikan Ini?</h5>
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
    <!-- End modal pendidikan -->



    <!-- Tambah skkni -->
    <div class="modal fade bd-example-modal-lg" id="modal-tambah-skkni" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Tambah SKKNI</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label for="namaSkkni">Nama SKKNI *</label>
                            <input type="text" class="form-control" id="nama-skkni" name="nama_skkni"
                                placeholder="Contoh: SKKNI" required>
                        </div>

                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Tambah
                            SKKNI</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal tambah skkni -->

    <!-- Edit skkni -->
    <div class="modal fade bd-example-modal-lg" id="modal-edit-skkni" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Edit SKKNI</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label for="namaSkkni">Nama SKKNI *</label>
                            <input type="text" class="form-control" id="edit-skkni" name="edit_skkni"
                                placeholder="Contoh: SKKNI" required>
                        </div>

                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Edit
                            SKKNI</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal edit skkni -->

    <!-- Modal Delete skkni -->
    <div class="modal fade bd-example-modal-lg" id="modal-delete-skkni" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Hapus SKKNI Ini?</h5>
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
    <!-- End modal delete skkni -->



    <!-- Tambah modul -->
    <div class="modal fade bd-example-modal-lg" id="modal-tambah-modul" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Tambah Modul</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label for="namaModul">Nama Modul *</label>
                            <input type="text" class="form-control" id="nama-modul" name="nama_modul"
                                placeholder="Contoh: Modul" required>
                        </div>

                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Tambah
                            Modul</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal tambah modul -->

    <!-- Edit modul -->
    <div class="modal fade bd-example-modal-lg" id="modal-edit-modul" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Edit Modul</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label for="namaModul">Nama Modul *</label>
                            <input type="text" class="form-control" id="edit-modul" name="edit_modul"
                                placeholder="Contoh: Modul" required>
                        </div>

                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Edit
                            Modul</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal edit modul -->

    <!-- Modal Delete modul -->
    <div class="modal fade bd-example-modal-lg" id="modal-delete-modul" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Modul Ini?</h5>
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
    <!-- End modal delete modul -->



    <!-- Tambah pns -->
    <div class="modal fade bd-example-modal-lg" id="modal-tambah-pns" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Tambah PNS</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label for="namaPns">Nama PNS *</label>
                            <input type="text" class="form-control" id="nama-pns" name="nama_pns"
                                placeholder="Contoh: PNS" required>
                        </div>

                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Tambah
                            Pns</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal tambah pns -->

    <!-- Edit pns -->
    <div class="modal fade bd-example-modal-lg" id="modal-edit-pns" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Edit Pns</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label for="namaPns">Nama Pns *</label>
                            <input type="text" class="form-control" id="edit-pns" name="edit_pns"
                                placeholder="Contoh: PNS" required>
                        </div>

                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Edit
                            PNS</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal edit pns -->

    <!-- Modal Delete pns -->
    <div class="modal fade bd-example-modal-lg" id="modal-delete-pns" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Hapus PNS Ini?</h5>
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
    <!-- End modal delete pns -->
    <!-- Tambah Balai Jasa -->
    <div class="modal fade bd-example-modal-lg" id="modal-tambah-balai-jasa" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Tambah Balai Sektoral Kementerian PUPR</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Provinsi</label>
                            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                <option selected>Choose...</option>
                                <option value="1">Sumatera Selatan</option>
                                <option value="1">Jambi</option>
                            </select>
                        </div>
                        <div class="form-group py-2">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Balai Sektoral Kementerian
                                PUPR</label>
                            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                <option selected>Choose...</option>
                                <option value="1">Balai Wilayah Sungai Sumatera VI</option>
                                <option value="2">Balai Pelaksanaan Jalan Nasional IV</option>
                                <option value="3">Balai Prasarana Permukiman Wilayah Jambi</option>
                                <option value="4">Balai Pelaksana Penyediaan Perumahan</option>
                                <option value="5">Balai Pelaksana Pemilihan Jasa Konstruksi Wilayah Jambi</option>
                            </select>
                        </div>
                        <div class="form-group py-2">
                            <label for="namaPns">Jumlah *</label>
                            <input type="text" class="form-control" id="nama-pns" name="nama_pns"
                                placeholder="Contoh: 190" required>
                        </div>
                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Tambah
                            Balai Jasa</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal tambah Balai Jasa -->
    <!-- Tambah Jasa Konstruksi -->
    <div class="modal fade bd-example-modal-lg" id="modal-tambah-jasa-konsturksi" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Tambah Unit Organisasi Jasa Konstruksi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Provinsi</label>
                            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                <option selected>Choose...</option>
                                <option value="1">Sumatera Selatan</option>
                                <option value="1">Jambi</option>
                            </select>
                        </div>
                        <div class="form-group py-2">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Unit Organisasi Jasa
                                Konstruksi</label>
                            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                <option selected>Choose...</option>
                                <option value="1">Bidang Bina Konstruksi Dinas PUPR Kab. Merangin</option>
                                <option value="2">Bidang Bina Konstruksi Dinas PUPR Kab. Tanjung Jabung Timur</option>
                                <option value="3">Seksi Jasa Konstruksi, Bidang Bina Konstruksi dan Pengendalian Dinas
                                    PUPR Provinsi Jambi</option>
                                <option value="4">Seksi Bina Jasa Konstruksi, Bidang Bina Konstruksi dan Pengendalian
                                    Dinas PUPR Kota Jambi</option>
                                <option value="5">Seksi Jasa Konstruksi, Bidang Cipta Karya dan Jasa Konstruksi, Dinas
                                    PUPR Kota Sungai Penuh</option>
                            </select>
                        </div>
                        <div class="form-group py-2">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Pilih Eselon</label>
                            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                <option selected>Choose...</option>
                                <option value="1">ES .III</option>
                                <option value="2">ES .IV</option>
                            </select>
                        </div>
                        <div class="form-group py-2">
                            <label for="namaPns">Jumlah *</label>
                            <input type="text" class="form-control" id="nama-pns" name="nama_pns"
                                placeholder="Contoh: 190" required>
                        </div>
                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Tambah
                            Jasa Konstruksi</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal tambah Jasa Konstruksi-->
    <!-- Tambah Universitas -->
    <div class="modal fade bd-example-modal-lg" id="modal-tambah-universitas" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Tambah Universitas</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Provinsi</label>
                            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                <option selected>Choose...</option>
                                <option value="1">Sumatera Selatan</option>
                                <option value="1">Jambi</option>
                            </select>
                        </div>
                        <div class="form-group py-2">
                            <label for="namaPns">Universitas</label>
                            <input type="text" class="form-control" id="nama-pns" name="nama_pns"
                                placeholder="Contoh: Universitas Sriwijaya" required>
                        </div>
                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Tambah
                            Universitas</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal tambah Universitas-->
    <!-- Tambah Politeknik -->
    <div class="modal fade bd-example-modal-lg" id="modal-tambah-politeknik" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Tambah Politeknik</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Provinsi</label>
                            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                <option selected>Choose...</option>
                                <option value="1">Sumatera Selatan</option>
                                <option value="1">Jambi</option>
                            </select>
                        </div>
                        <div class="form-group py-2">
                            <label for="namaPns">Politeknik</label>
                            <input type="text" class="form-control" id="nama-pns" name="nama_pns"
                                placeholder="Contoh: Politeknik Negeri Sriwijaya" required>
                        </div>
                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Tambah
                            Politeknik</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal tambah Politeknik-->
    <!-- Tambah SMK -->
    <div class="modal fade bd-example-modal-lg" id="modal-tambah-smk" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Tambah SMK</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Provinsi</label>
                            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                <option selected>Choose...</option>
                                <option value="1">Sumatera Selatan</option>
                                <option value="1">Jambi</option>
                            </select>
                        </div>
                        <div class="form-group py-2">
                            <label for="namaPns">SMK</label>
                            <input type="text" class="form-control" id="nama-pns" name="nama_pns"
                                placeholder="Contoh: SMK 2 Palembang" required>
                        </div>
                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Tambah
                            SMK</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal tambah SMK-->
    <!-- Tambah Tambah Asosiasi Badan Usaha Jasa Konstruksi -->
    <div class="modal fade bd-example-modal-lg" id="modal-tambah-bujk" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Tambah Asosiasi Badan Usaha Jasa Konstruksi
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Provinsi</label>
                            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                <option selected>Choose...</option>
                                <option value="1">Sumatera Selatan</option>
                                <option value="1">Jambi</option>
                            </select>
                        </div>
                        <div class="form-group py-2">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Asosiasi Badan Usaha Jasa
                                Konstruksi</label>
                            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                <option value="1">DPD ASPEKINDO</option>
                                <option value="2">DPD ASPEKNAS</option>
                                <option value="3">DPD ASKONAS</option>
                                <option value="4">DPD AKAINDO</option>
                                <option value="5">BPD GAPENSI</option>
                            </select>
                        </div>
                        <div class="form-group py-2">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Status Akreditasi</label>
                            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                <option value="1">Terakreditasi</option>
                                <option value="2">Belum Terakreditasi</option>
                            </select>
                        </div>
                        <div class="form-group py-2">
                            <label for="namaPns">Jumlah</label>
                            <input type="text" class="form-control" id="nama-pns" name="nama_pns"
                                placeholder="Contoh: 4" required>
                        </div>
                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Tambah
                            Asosiasi Badan Usaha Jasa
                            Konstruksi</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal tambah Tambah Asosiasi Badan Usaha Jasa Konstruksi-->
    <!-- Tambah Tambah Asosiasi Profesi -->
    <div class="modal fade bd-example-modal-lg" id="modal-tambah-asosiasi-profesi" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Tambah Asosiasi Profesi </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Provinsi</label>
                            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                <option selected>Choose...</option>
                                <option value="1">Sumatera Selatan</option>
                                <option value="1">Jambi</option>
                            </select>
                        </div>
                        <div class="form-group py-2">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Asosiasi Profesi</label>
                            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                <option value="1">DPD ASTTI</option>
                                <option value="2">DPW A2K4-I</option>
                                <option value="3">DPD GATAKI</option>
                                <option value="4">HPJI</option>
                                <option value="5">DPD HATSINDO</option>
                            </select>
                        </div>
                        <div class="form-group py-2">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Status Akreditasi</label>
                            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                <option value="1">Terakreditasi</option>
                                <option value="2">Belum Terakreditasi</option>
                            </select>
                        </div>
                        <div class="form-group py-2">
                            <label for="namaPns">Jumlah</label>
                            <input type="text" class="form-control" id="nama-pns" name="nama_pns"
                                placeholder="Contoh: 4" required>
                        </div>
                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Tambah
                            Asosiasi Profesi</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal tambah Tambah Asosiasi Profesi-->
    <!-- Tambah AKTK -->
    <div class="modal fade bd-example-modal-lg" id="modal-tambah-aktk" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Tambah Asesor Kompetensi Tenaga Kerja</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Provinsi</label>
                            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                <option selected>Choose...</option>
                                <option value="1">Sumatera Selatan</option>
                                <option value="1">Jambi</option>
                            </select>
                        </div>
                        <div class="form-group py-2">
                            <label for="namaPns">Nama</label>
                            <input type="text" class="form-control" id="nama-pns" name="nama_pns"
                                placeholder="Contoh: Taufiiqul Hakim" required>
                        </div>
                        <div class="form-group py-2">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Bidang</label>
                            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                <option value="1">ASESOR ARSITEKTUR</option>
                                <option value="2">ASESOR ELEKTRIKAL</option>
                                <option value="3">ASESOR SIPIL</option>
                                <option value="4">ASESOR TATA LINGKUNGAN</option>
                            </select>
                        </div>
                        <div class="form-group py-2">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Status RCC</label>
                            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                <option value="1">Aktif</option>
                                <option value="2">Tidak Aktif</option>
                            </select>
                        </div>
                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Tambah
                            Asesor Kompetensi Tenaga Kerja </button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal tambah Tambah AKBU-->
    <!-- Tambah AKTK -->
    <div class="modal fade bd-example-modal-lg" id="modal-tambah-akbu" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Tambah Asesor Kompetensi Badan Usaha</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group py-2">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Provinsi</label>
                            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                <option selected>Choose...</option>
                                <option value="1">Sumatera Selatan</option>
                                <option value="1">Jambi</option>
                            </select>
                        </div>
                        <div class="form-group py-2">
                            <label for="namaPns">Nama</label>
                            <input type="text" class="form-control" id="nama-pns" name="nama_pns"
                                placeholder="Contoh: Taufiiqul Hakim" required>
                        </div>
                        <div class="form-group py-2">
                            <label for="namaPns">No. Registrasi</label>
                            <input type="text" class="form-control" id="nama-pns" name="nama_pns"
                                placeholder="Contoh: 0534/AKBU-LPJK/XI/2018" required>
                        </div>
                        <div class="form-group py-2">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Status RCC</label>
                            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                <option value="1">Aktif</option>
                                <option value="2">Tidak Aktif</option>
                            </select>
                        </div>
                        <div class="menu-divider"></div>
                        <button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Tambah
                            Asesor Kompetensi Badan Usaha</button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
                            data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal tambah Tambah AKTK-->
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
                        <h1 class="h2 font-weight-bold mb-4 mt-4">Master Data</h1>
                    </div>

                    <!-- Alert -->
                    <?php if ($this->session->flashdata('success')) : ?>
                    <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                        <?= $this->session->flashdata('success') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php elseif ($this->session->flashdata('APImessage')) : ?>
                    <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                        <?= $this->session->flashdata('APImessage') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php endif; ?>

                    <div class="container-fluid mt-2 mb-4 container-background">
                        <div class="col d-flex justify-content-between button-field">
                            <div class="">
                                <button class="btn btn-primary btn-add-kegiatan mr-2 mt-4"
                                    id="btn-add-akun-kegiatan-master"><img class="img-profile mr-2"
                                        src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">Akun</button>

                                <button class="btn btn-primary btn-add-kegiatan mr-2 mt-4"
                                    id="btn-add-jenis-kegiatan-master"><img class="img-profile mr-2"
                                        src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">Jenis</button>

                                <button class="btn btn-primary btn-add-kegiatan mr-2 mt-4"
                                    id="btn-add-provinsi-master"><img class="img-profile mr-2"
                                        src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">Provinsi</button>

                                <button class="btn btn-primary btn-add-kegiatan mr-2 mt-4"
                                    id="btn-add-kabupaten-kota-master"><img class="img-profile mr-2"
                                        src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">Kab Kota</button>

                                <button class="btn btn-primary btn-add-kegiatan mr-2 mt-4"
                                    id="btn-add-kecamatan-master"><img class="img-profile mr-2"
                                        src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">Kecamatan</button>

                                <button class="btn btn-primary btn-add-kegiatan mr-2 mt-4"
                                    id="btn-add-kelurahan-master"><img class="img-profile mr-2"
                                        src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">Kelurahan</button>

                                <button class="btn btn-primary btn-add-kegiatan mr-2 mt-4"
                                    id="btn-add-status-kegiatan-master"><img class="img-profile mr-2"
                                        src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">Status Kegiatan</button>

                                <button class="btn btn-primary btn-add-kegiatan mr-2 mt-4"
                                    id="btn-add-status-peserta-master"><img class="img-profile mr-2"
                                        src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">Status Peserta</button>

                                <button class="btn btn-primary btn-add-kegiatan mr-2 mt-4"
                                    id="btn-add-kategori-ahli-master"><img class="img-profile mr-2"
                                        src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">Kategori Ahli</button>

                                <button class="btn btn-primary btn-add-kegiatan mr-2 mt-4"
                                    id="btn-add-jabatan-kerja-master"><img class="img-profile mr-2"
                                        src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">Jabker</button>

                                <button class="btn btn-primary btn-add-kegiatan mr-2 mt-4"
                                    id="btn-add-pendidikan-master"><img class="img-profile mr-2"
                                        src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">Pendidikan</button>

                                <button class="btn btn-primary btn-add-kegiatan mr-2 mt-4"
                                    id="btn-add-skkni-ska-master"><img class="img-profile mr-2"
                                        src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">SKKNI</button>

                                <button class="btn btn-primary btn-add-kegiatan mr-2 mt-4"
                                    id="btn-add-modul-kegiatan-master"><img class="img-profile mr-2"
                                        src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">Modul</button>

                                <button class="btn btn-primary btn-add-kegiatan mr-2 mt-4" id="btn-add-pns-master"><img
                                        class="img-profile mr-2"
                                        src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">PNS</button>
                                <button class="btn btn-primary btn-add-kegiatan mr-2 mt-4"
                                    id="btn-add-balai-jasa-master"><img class="img-profile mr-2"
                                        src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">BSKP</button>
                                <button class="btn btn-primary btn-add-kegiatan mr-2 mt-4"
                                    id="btn-add-jasa-konstruksi-master"><img class="img-profile mr-2"
                                        src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">UOJK</button>
                                <button class="btn btn-primary btn-add-kegiatan mr-2 mt-4"
                                    id="btn-add-universitas-master"><img class="img-profile mr-2"
                                        src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">Universitas</button>
                                <button class="btn btn-primary btn-add-kegiatan mr-2 mt-4"
                                    id="btn-add-politeknik-master"><img class="img-profile mr-2"
                                        src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">Politeknik</button>
                                <button class="btn btn-primary btn-add-kegiatan mr-2 mt-4" id="btn-add-smk-master"><img
                                        class="img-profile mr-2"
                                        src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">SMK</button>
                                <button class="btn btn-primary btn-add-kegiatan mr-2 mt-4" id="btn-add-bujk-master"><img
                                        class="img-profile mr-2"
                                        src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">BUJK</button>
                                <button class="btn btn-primary btn-add-kegiatan mr-2 mt-4"
                                    id="btn-add-asosiasi-profesi-master"><img class="img-profile mr-2"
                                        src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">Asosiasi
                                    Profesi</button>
                                <button class="btn btn-primary btn-add-kegiatan mr-2 mt-4" id="btn-add-aktk-master"><img
                                        class="img-profile mr-2"
                                        src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">
                                    AKTK</button>
                                <button class="btn btn-primary btn-add-kegiatan mr-2 mt-4" id="btn-add-akbu-master"><img
                                        class="img-profile mr-2"
                                        src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">
                                    AKBU</button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="pb-4 pt-2">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#akun-kegiatan" role="tab"
                                            data-toggle="tab">Akun Kegiatan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#jenis-kegiatan" role="tab" data-toggle="tab">Jenis
                                            Kegiatan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#provinsi-kegiatan" role="tab"
                                            data-toggle="tab">Provinsi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#kota-kegiatan" role="tab" data-toggle="tab">Kabupaten
                                            Kota</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#kecamatan-kegiatan" role="tab"
                                            data-toggle="tab">Kecamatan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#kelurahan-kegiatan" role="tab"
                                            data-toggle="tab">Kelurahan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#status-kegiatan" role="tab" data-toggle="tab">Status
                                            Kegiatan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#status-peserta-kegiatan" role="tab"
                                            data-toggle="tab">Status
                                            Peserta Kegiatan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#kategori-tenaga-ahli" role="tab"
                                            data-toggle="tab">Kategori Tenaga Ahli</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#jabatan-kerja" role="tab"
                                            data-toggle="tab">Jabker</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#master-pendidikan" role="tab"
                                            data-toggle="tab">Pendidikan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#master-skkni" role="tab" data-toggle="tab">SKKNI</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#master-modul" role="tab" data-toggle="tab">Modul</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#master-pns" role="tab" data-toggle="tab">PNS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#master-balai-jasa" role="tab"
                                            data-toggle="tab">BSKP</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#master-jasa-konstruksi" role="tab" data-toggle="tab">
                                            UOJK</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#master-universitas" role="tab" data-toggle="tab">
                                            Universitas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#master-politeknik" role="tab" data-toggle="tab">
                                            Politeknik</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#master-smk" role="tab" data-toggle="tab">
                                            SMK</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#master-bujk" role="tab" data-toggle="tab">
                                            BUJK</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#master-asosiasi-profesi" role="tab"
                                            data-toggle="tab">
                                            Asosiasi Profesi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#master-aktk" role="tab" data-toggle="tab">
                                            AKTK</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#master-akbu" role="tab" data-toggle="tab">
                                            AKBU</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content">
                                <div class="tab-pane fade active show" role="tabpanel" id="akun-kegiatan">
                                    <table id="akun_kegiatan_table" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Akun Kegiatan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>

                                <div class="tab-pane fade show" role="tabpanel" id="jenis-kegiatan">
                                    <table id="jenis_kegiatan_table" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Jenis Kegiatan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>

                                <div class="tab-pane fade show" role="tabpanel" id="provinsi-kegiatan">
                                    <table id="provinsi_kegiatan_table" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Provinsi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>

                                <div class="tab-pane fade show" role="tabpanel" id="kota-kegiatan">
                                    <table id="kota_kegiatan_table" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Kota</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>

                                <div class="tab-pane fade show" role="tabpanel" id="kecamatan-kegiatan">
                                    <table id="kecamatan_kegiatan_table" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Kecamatan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>

                                <div class="tab-pane fade show" role="tabpanel" id="kelurahan-kegiatan">
                                    <table id="kelurahan_kegiatan_table" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Kelurahan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>

                                <div class="tab-pane fade show" role="tabpanel" id="status-kegiatan">
                                    <table id="status_kegiatan_table" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Status Kegiatan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>

                                <div class="tab-pane fade show" role="tabpanel" id="status-peserta-kegiatan">
                                    <table id="status_peserta_kegiatan_table" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Status Peserta Kegiatan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>

                                <div class="tab-pane fade show" role="tabpanel" id="kategori-tenaga-ahli">
                                    <table id="kategori_tenaga_ahli_table" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Kategori Tenaga Ahli</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>

                                <div class="tab-pane fade show" role="tabpanel" id="jabatan-kerja">
                                    <table id="jabatan_kerja_table" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Jabatan Kerja</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>

                                <div class="tab-pane fade show" role="tabpanel" id="master-pendidikan">
                                    <table id="pendidikan_table" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Pendidikan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>

                                <div class="tab-pane fade show" role="tabpanel" id="master-skkni">
                                    <table id="skkni_master_table" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama SKKNI</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>

                                <div class="tab-pane fade show" role="tabpanel" id="master-modul">
                                    <table id="kategori_modul_table" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Modul</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>

                                <div class="tab-pane fade show" role="tabpanel" id="master-pns">
                                    <table id="pns_table" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama PNS</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>

                                <div class="tab-pane fade show" role="tabpanel" id="master-balai-jasa">
                                    <table id="balai_jasa_table" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Provinsi</th>
                                                <th>Balai Jasa</th>
                                                <th>Jumlah</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>

                                <div class="tab-pane fade show" role="tabpanel" id="master-jasa-konstruksi">
                                    <table id="jasa_konstruksi_table" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Provinsi</th>
                                                <th>Jasa Konstruksi</th>
                                                <th>Eselon</th>
                                                <th>Jumlah</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>

                                <div class="tab-pane fade show" role="tabpanel" id="master-universitas">
                                    <table id="universitas_table" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Provinsi</th>
                                                <th>Univeristas</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>

                                <div class="tab-pane fade show" role="tabpanel" id="master-politeknik">
                                    <table id="politeknik_table" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Provinsi</th>
                                                <th>Politeknik</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>

                                <div class="tab-pane fade show" role="tabpanel" id="master-smk">
                                    <table id="smk_table" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Provinsi</th>
                                                <th>SMK</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>

                                <div class="tab-pane fade show" role="tabpanel" id="master-bujk">
                                    <table id="bujk_table" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Provinsi</th>
                                                <th>BUJK</th>
                                                <th>Status Akreditasi</th>
                                                <th>Jumlah</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>

                                <div class="tab-pane fade show" role="tabpanel" id="master-asosiasi-profesi">
                                    <table id="asosiasi_profesi_table" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Provinsi</th>
                                                <th>Asosiasi Profesi</th>
                                                <th>Status Akreditasi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>

                                <div class="tab-pane fade show" role="tabpanel" id="master-aktk">
                                    <table id="aktk_table" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Provinsi</th>
                                                <th>Nama</th>
                                                <th>Bidang</th>
                                                <th>Status RCC</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>

                                <div class="tab-pane fade show" role="tabpanel" id="master-akbu">
                                    <table id="akbu_table" class="display" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Provinsi</th>
                                                <th>Nama</th>
                                                <th>No. Registrasi</th>
                                                <th>Status RCC</th>
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