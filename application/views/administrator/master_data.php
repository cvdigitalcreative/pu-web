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
                                <option value="15">Jambi</option>
                                <option value="16">Sumatera Selatan</option>
                                <option value="17">Bengkulu</option>
                                <option value="18">Lampung</option>
                                <option value="19">Kepulauan Bangka</option>
                            </select>
                        </div>
                        <div class="form-group py-2">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                                placeholder="Contoh: UNiversitas Negeri Sriwijaya" required>
                        </div>
                        <div class="form-group py-2">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Kategori</label>
                            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="kategori">
                                <option selected>Choose...</option>
                                <option value="1">Balai Sektoral Kementerian PUPR</option>
                                <option value="2">Organisasi Perangkat Daerah Suburusan Jasa Konstruksi</option>
                                <option value="3">Sekolah</option>
                                <option value="4">Asosiasi Profesi</option>
                                <option value="5">Asosiasi Badan Usaha Jasa Konstruksi</option>
                                <option value="6">Aturan Kewajiban Penggunaan Tenaga Kerja Konstruksi yang Bersertifikat
                                    Kompetensi</option>
                                <option value="7">Asesor Kompetensi Tenaga Kerja </option>
                                <option value="8">Daftar Asesor Badan Usaha </option>
                                <option value="9">Daftar Instruktur Non Vokasi</option>
                                <option value="10">Daftar Instruktur Vokasi</option>
                                <option value="11">Program Padat Karya</option>
                                <option value="12">Pemanfaatan Mobile Training Unit</option>
                                <option value="13">Rekap Pelaksanaan Kegiatan</option>
                                <option value="14">Rekap Pelaksanaan Kegiatan Peserta</option>
                                <option value="15">Realisasi Peserta Berdasarkan Wilayah dan Pembiayaan</option>
                                <option value="16">Realisasi Peserta Berdasarkan Wilayah dan Pembiayaan</option>
                                <option value="17">Realisasi Peserta Pembekalan/Bimtek dan Uji Sertifikasi Berdasarkan
                                    Berita Acara Hasil Penilaian</option>
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
                                <option value="15">Jambi</option>
                                <option value="16">Sumatera Selatan</option>
                                <option value="17">Bengkulu</option>
                                <option value="18">Lampung</option>
                                <option value="19">Kepulauan Bangka</option>
                            </select>
                        </div>
                        <div class="form-group py-2">
                            <label for="nama">File Infografis</label>
                            <input type="file" class="form-control" id="file_infografis" name="file_infografis"
                                placeholder="Contoh: UNiversitas Negeri Sriwijaya" required>
                        </div>
                        <div class="form-group py-2">
                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Kategori</label>
                            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="kategori">
                                <option selected>Choose...</option>
                                <option value="1">Balai Sektoral Kementerian PUPR</option>
                                <option value="2">Organisasi Perangkat Daerah Suburusan Jasa Konstruksi</option>
                                <option value="3">Sekolah</option>
                                <option value="4">Asosiasi Profesi</option>
                                <option value="5">Asosiasi Badan Usaha Jasa Konstruksi</option>
                                <option value="6">Aturan Kewajiban Penggunaan Tenaga Kerja Konstruksi yang Bersertifikat
                                    Kompetensi</option>
                                <option value="7">Asesor Kompetensi Tenaga Kerja </option>
                                <option value="8">Daftar Asesor Badan Usaha </option>
                                <option value="9">Daftar Instruktur Non Vokasi</option>
                                <option value="10">Daftar Instruktur Vokasi</option>
                                <option value="11">Program Padat Karya</option>
                                <option value="12">Pemanfaatan Mobile Training Unit</option>
                                <option value="13">Rekap Pelaksanaan Kegiatan</option>
                                <option value="14">Rekap Pelaksanaan Kegiatan Peserta</option>
                                <option value="15">Realisasi Peserta Berdasarkan Wilayah dan Pembiayaan</option>
                                <option value="16">Realisasi Peserta Berdasarkan Wilayah dan Pembiayaan</option>
                                <option value="17">Realisasi Peserta Pembekalan/Bimtek dan Uji Sertifikasi Berdasarkan
                                    Berita Acara Hasil Penilaian</option>
                            </select>
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
                                <button class="btn btn-primary btn-add-kegiatan mr-2 mt-4" id="btn-add-infografis"><img
                                        class="img-profile mr-2"
                                        src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">Infografis</button>
                                <button class="btn btn-primary btn-add-kegiatan mr-2 mt-4" id="btn-add-file-infografis"><img
                                        class="img-profile mr-2"
                                        src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">File Infografis</button>
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
                                        <a class="nav-link" href="#master-infografis" role="tab" data-toggle="tab">
                                            Infografis</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#master-file-infografis" role="tab" data-toggle="tab">
                                            Infografis File</a>
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
                                <div class="tab-pane fade show" role="tabpanel" id="master-infografis">
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