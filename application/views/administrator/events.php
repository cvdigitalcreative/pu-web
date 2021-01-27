<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("components/head.php") ?>
</head>

<body id="page-top">

	<!-- Filter Kegiatan Modal -->
	<div class="modal fade bd-example-modal-lg" id="modal-filter-kegiatan" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalCenterTitle">Filter Kegiatan</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<form method="POST" id='filter-kegiatan-form' enctype="multipart/form-data">
						<div class="row">
							<div class="col">
								<div class="form-group py-2">
									<label for="filterTanggalMulaikegiatan">Tanggal Mulai *</label>
									<input type="text" class="form-control js-daterangepicker" id="filter-tanggal-mulai-kegiatan" data-drops="up" name="filter_tanggal_kegiatan_mulai" value="" placeholder="Pilih tanggal kegiatan">
									<small id="filter-tanggal-mulai-kegiatan-label" class="form-text text-muted">
										Tanggal mulai kegiatan
									</small>
								</div>
							</div>
							<div class="col">
								<div class="form-group py-2">
									<label for="filterTanggalSelesaikegiatan">Tanggal Selesai *</label>
									<input type="text" class="form-control js-daterangepicker" id="filter-tanggal-selesai-kegiatan" data-drops="up" name="filter_tanggal_kegiatan_selesai" value="" placeholder="Pilih tanggal kegiatan">
									<small id="filter-tanggal-selesai-kegiatan-label" class="form-text text-muted">
										Tanggal selesai kegiatan
									</small>
								</div>
							</div>
						</div>
						<div class="form-group py-2">
							<label for="filterJenisKegiatan">Jenis kegiatan *</label>
							<select class="form-control" id="filter-jenis-kegiatan" name="filter_jenis_kegiatan">
								<option selected disabled>Pilih jenis kegiatan</option>
								<?php if ($jenis_kegiatan != null) :
									foreach ($jenis_kegiatan as $row) : ?>
										<option value="<?= $row['id_jenis_kegiatan'] ?>"><?= $row['jenis_kegiatan'] ?></option>
								<?php endforeach;
								endif ?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="filterStatusKegiatan">Status kegiatan *</label>
							<select class="form-control" id="filter-status-kegiatan" name="filter_status_kegiatan" aria-placeholder="Pilih status kegiatan">
								<option selected disabled>Pilih status kegiatan</option>
								<?php if ($status_kegiatan != null) :
									foreach ($status_kegiatan as $row) : ?>
										<option value="<?= $row['id_status_kegiatan'] ?>"><?= $row['status_kegiatan'] ?></option>
								<?php endforeach;
								endif ?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="provinsiKegiatan">Provinsi kegiatan *<span class="ml-3 text-secondary"><small>Mohon pilih Provinsi terlebih dahulu</small></span></label>
							<select class="form-control" id="filter-id-provinsi" name="filter_id_provinsi" onChange="getStateFilterKegiatan(this.value);">
								<option selected disabled>Pilih Provinsi</option>
								<?php foreach ($provinsi as $row) : ?>
									<option value="<?= $row['id_provinsi'] ?>"><?= $row['provinsi'] ?></option>
								<?php endforeach ?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="kotaKegiatan">Kota kegiatan *</label>
							<select class="form-control" id="filter-id-kabupaten-kota" name="filter_id_kabupaten_kota">
								<option selected disabled>Mohon pilih Provinsi terlebih dahulu</option>
							</select>
						</div>
						<div class="menu-divider"></div>
						<button type="button" class="btn btn-block btn-primary btn-modal-add-kegiatan" id="btn-filter-kegiatan">Terapkan
							Filter</button>
						<button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan" data-dismiss="modal">Batal</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End modal filter kegiatan -->

	<!-- Update Status Kegiatan Modal -->
	<div class="modal fade bd-example-modal-lg" id="modal-ganti-status-kegiatan" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle">Update Status Kegiatan Ini?</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Pastikan dengan benar bahwa Anda ingin mengubah status kegiatan ini!
					<form>
						<div class="modal-footer">
							<button class="btn btn-light" data-dismiss="modal">Batal</button>
							<button class="btn btn-warning" type="submit">Update</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End modal update status kegiatan -->

	<!-- Tambah Kegiatan Modal -->
	<div class="modal fade bd-example-modal-lg" id="modal-tambah-kegiatan" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalCenterTitle">Tambah Kegiatan</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<form method="POST" action="<?= base_url() ?>Kegiatan/tambah_kegiatan_action" enctype="multipart/form-data">

						<div class="form-group py-2">
							<label for="akunKegiatan">Akun Kegiatan*</label>
							<select class="form-control" id="akun-kegiatan" name="id_akun_kegiatan" required>
								<option selected disabled>Pilih akun kegiatan</option>
								<?php if ($akun_kegiatan != null) :
									foreach ($akun_kegiatan as $row) : ?>
										<option value="<?= $row['id_akun_kegiatan'] ?>"><?= $row['akun_kegiatan'] ?></option>
								<?php endforeach;
								endif ?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="jenisKegiatan">Jenis kegiatan *</label>
							<select class="form-control" id="jenis-kegiatan" name="id_jenis_kegiatan" required>
								<option selected disabled>Pilih jenis kegiatan</option>
								<?php if ($jenis_kegiatan != null) :
									foreach ($jenis_kegiatan as $row) : ?>
										<option value="<?= $row['id_jenis_kegiatan'] ?>"><?= $row['jenis_kegiatan'] ?></option>
								<?php endforeach;
								endif ?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="bannerKegiatan">Banner Kegiatan *</label>
							<div id="profile-container">
								<image id="banner-image" src="<?= base_url('assets/icons/pupr-add-image-icon.svg') ?>" />
								<input id="banner-kegiatan" type="file" name="foto_banner_kegiatan" id="bannerKegiatan" placeholder="Photo" alt="Pilih Foto" accept=".jpg, .jpeg, .png" required="" capture>
							</div>
						</div>
						<div class="form-group py-2">
							<label for="namaKegiatan">Nama Kegiatan *</label>
							<input type="text" class="form-control" id="nama-kegiatan" name="judul_kegiatan" placeholder="Contoh: Kegiatan Pelatihan" required>
						</div>
						<div class="form-group py-2">
							<label for="deskripsiKegiatan">Deskripsi Kegiatan</label>
							<textarea type="text" data-autoresize class="form-control" id="deskripsi-kegiatan" name="deskripsi_kegiatan" placeholder="Contoh: Ini adalah deskripsi kegiatan pelatihan"></textarea>
						</div>
						<div class="row">
							<div class="col">
								<div class="form-group py-2">
									<label for="tanggalMulaikegiatan">Tanggal Mulai *</label>
									<input type="text" class="form-control js-daterangepicker" id="tanggal-mulai-kegiatan" data-drops="up" name="tanggal_kegiatan" value="" placeholder="Pilih tanggal kegiatan" required>
									<small id="tanggal-mulai-kegiatan" class="form-text text-muted">
										Tanggal mulai kegiatan
									</small>
								</div>
							</div>
							<div class="col">
								<div class="form-group py-2">
									<label for="tanggalSelesaikegiatan">Tanggal Selesai *</label>
									<input type="text" class="form-control js-daterangepicker" id="tanggal-selesai-kegiatan" data-drops="up" name="tanggal_kegiatan_selesai" value="" placeholder="Pilih tanggal kegiatan" required>
									<small id="tanggal-selesai-kegiatan" class="form-text text-muted">
										Tanggal selesai kegiatan
									</small>
								</div>
							</div>
						</div>
						<div class="form-group py-2">
							<label for="provinsiKegiatan">Provinsi kegiatan *</label>
							<select class="form-control" id="provinsi-kegiatan" name="id_provinsi" onChange="getState(this.value);" required>
								<?php foreach ($provinsi as $row) : ?>
									<option value="<?= $row['id_provinsi'] ?>"><?= $row['provinsi'] ?></option>
								<?php endforeach ?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="kotaKegiatan">Kota kegiatan *<span class="ml-3 text-secondary"><small>Mohon pilih Provinsi terlebih dahulu</small></span></label>
							<select class="form-control" id="kota-kegiatan" name="id_kota_kabupaten" required>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="lokasiKegiatan">Lokasi Kegiatan *</label>
							<textarea type="text" data-autoresize class="form-control" id="lokasi-kegiatan" name="lokasi_kegiatan" placeholder="Contoh: Jalan demang lebar daun" required></textarea>
						</div>

						<div>
							<a class="btn btn-block btn-primary btn-move-input-experts" id="btn-tambah-instruktur-asesor-kegiatan" role="button">
								<img class="img-profile mr-2" src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">
								Tambah Instruktur & Assesor
							</a>
							<small id="file-materi-kegiatan" class="form-text text-muted mb-4">
								Klik untuk menambahkan instruktur dan assesor baru.
							</small>
						</div>

						<div class="form-group py-2">
							<label for="instrukturKegiatan">Instruktur kegiatan</label>
							<select class="form-control selectpicker" id="instruktur-kegiatan" name="id_instruktur_kegiatan[]" aria-placeholder="Pilih instruktur kegiatan" multiple data-live-search="true">
								<?php if ($instruktur != null) :
									foreach ($instruktur as $row) : ?>
										<option value="<?= $row['id_tenaga_ahli'] ?>"><?= $row['nama_lengkap'] ?></option>
								<?php endforeach;
								endif ?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="assesorKegiatan">Assesor kegiatan</label>
							<select class="form-control selectpicker" id="assesor-kegiatan" name="id_asesor_kegiatan[]" aria-placeholder="Pilih assesor kegiatan" multiple data-live-search="true">
								<?php if ($asesor != null) :
									foreach ($asesor as $row) : ?>
										<option value="<?= $row['id_tenaga_ahli'] ?>"><?= $row['nama_lengkap'] ?></option>
								<?php endforeach;
								endif ?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="fileMateriKegiatan">Materi kegiatan</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="file-materi-kegiatan" name="file_materi_kegiatan">
								<label class="custom-file-label" for="validatedCustomFile">Pilih file materi...</label>
								<small id="file-materi-kegiatan" class="form-text text-muted">
									File materi adalah opsional
								</small>
							</div>
						</div>

						<div class="menu-divider"></div>
						<button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Tambah
							Kegiatan</button>
						<button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan" data-dismiss="modal">Batal</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End modal tambah kegiatan -->

	<!-- Edit Kegiatan Modal -->
	<div class="modal fade bd-example-modal-lg" id="modal-edit-kegiatan" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalCenterTitle">Edit Kegiatan</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<form method="POST" action="" enctype="multipart/form-data">

						<div class="form-group py-2">
							<label for="editAkunKegiatan">Akun Kegiatan*</label>
							<select class="form-control" id="edit-akun-kegiatan" name="id_akun_kegiatan" required>
								<option selected disabled>Pilih akun kegiatan</option>
								<?php if ($akun_kegiatan != null) :
									foreach ($akun_kegiatan as $row2) : ?>
										<option value="<?= $row2['id_akun_kegiatan'] ?>"><?= $row2['akun_kegiatan'] ?></option>
								<?php endforeach;
								endif; ?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="editJenisKegiatan">Jenis kegiatan *</label>
							<select class="form-control" id="edit-jenis-kegiatan" name="id_jenis_kegiatan" required>
								<option selected disabled>Pilih jenis kegiatan</option>
								<?php if ($jenis_kegiatan != null) :
									foreach ($jenis_kegiatan as $row2) : ?>
										<option value="<?= $row2['id_jenis_kegiatan'] ?>"><?= $row2['jenis_kegiatan'] ?></option>
								<?php endforeach;
								endif; ?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="editBannerKegiatan">Banner Kegiatan *</label>
							<div id="profile-container">
								<image id="banner-image-edit" />
								<input id="edit-banner-kegiatan" type="file" name="edit_foto_banner_kegiatan" placeholder="Photo" alt="Pilih Foto" accept=".jpg, .jpeg, .png" capture>
							</div>
							<div class="d-flex flex-column">
								<small class="text-secondary text-center pt-2">Klik gambar untuk mengganti foto banner kegiatan</small>
							</div>
						</div>
						<div class="form-group py-2">
							<label for="editNamaKegiatan">Nama Kegiatan *</label>
							<input type="text" class="form-control" id="edit-nama-kegiatan" name="edit_judul_kegiatan" placeholder="Contoh: Kegiatan Pelatihan" required>
						</div>
						<div class="form-group py-2">
							<label for="editDeskripsiKegiatan">Deskripsi Kegiatan *</label>
							<textarea type="text" data-autoresize class="form-control" id="edit-deskripsi-kegiatan" name="edit_deskripsi_kegiatan" placeholder="Contoh: Ini adalah deskripsi kegiatan pelatihan" required></textarea>
						</div>
						<div class="row">
							<div class="col">
								<div class="form-group py-2">
									<label for="editTanggalMulaikegiatan">Tanggal Mulai *</label>
									<input type="text" class="form-control js-daterangepicker" id="edit-tanggal-mulai-kegiatan" data-drops="up" name="edit_tanggal_kegiatan_mulai" value="" placeholder="Pilih tanggal kegiatan" required>
									<small id="tanggal-mulai-kegiatan" class="form-text text-muted">
										Tanggal mulai kegiatan
									</small>
								</div>
							</div>
							<div class="col">
								<div class="form-group py-2">
									<label for="editTanggalSelesaikegiatan">Tanggal Selesai *</label>
									<input type="text" class="form-control js-daterangepicker" id="edit-tanggal-selesai-kegiatan" data-drops="up" name="edit_tanggal_kegiatan_selesai" value="" placeholder="Pilih tanggal kegiatan" required>
									<small id="tanggal-selesai-kegiatan" class="form-text text-muted">
										Tanggal selesai kegiatan
									</small>
								</div>
							</div>
						</div>
						<div class="form-group py-2">
							<label for="editProvinsiKegiatan">Provinsi kegiatan *</label>
							<select class="form-control" id="edit-provinsi-kegiatan" name="id_provinsi" onChange="getStateEdit(this.value);" required>
								<?php if ($provinsi != null) :
									foreach ($provinsi as $row2) : ?>
										<option value="<?= $row2['id_provinsi'] ?>"><?= $row2['provinsi'] ?></option>
								<?php endforeach;
								endif; ?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="editKotaKegiatan">Kota kegiatan *<span class="ml-3 text-secondary"><small>Mohon pilih Provinsi terlebih dahulu</small></span></label>
							<select class="form-control" id="edit-kota-kegiatan" name="id_kota_kabupaten" required>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="editLokasiKegiatan">Lokasi Kegiatan *</label>
							<textarea type="text" data-autoresize class="form-control" id="edit-lokasi-kegiatan" name="edit_lokasi_kegiatan" placeholder="Contoh: Jalan demang lebar daun" required></textarea>
						</div>
						<div class="form-group py-2">
							<label for="editFileMateriKegiatan">Materi kegiatan</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="edit-file-materi-kegiatan" name="file_materi_kegiatan">
								<label class="custom-file-label" for="validatedCustomFile">Pilih file materi...</label>
								<small id="file-materi-kegiatan" class="form-text text-muted">
									File materi adalah opsional
								</small>
							</div>
						</div>

						<div class="menu-divider"></div>
						<button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Simpan
							Perubahan</button>
						<button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan" data-dismiss="modal">Batal</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End modal edit kegiatan -->

	<!-- Delete kegiatan modal -->
	<div class="modal fade bd-example-modal-lg" id="delete-kegiatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle">Hapus Kegiatan Ini?</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Pastikan dengan benar bahwa kegiatan ini ingin anda hapus!
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
	<!-- End modal delete kegiatan -->

	<!-- Import Excel Tambah Kegiatan Modal -->
	<div class="modal fade bd-example-modal-lg" id="modal-import-excel-tambah-kegiatan" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalCenterTitle">Import File Excel Tambah Kegiatan</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" action="<?= base_url() ?>Kegiatan/import_kegiatan_action" enctype="multipart/form-data">
						<div class="form-group py-2">
							<label for="fileMateriKegiatan">File Excel Tambah Kegiatan</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="file-excel-tambah-kegiatan" name="file_excel_import_kegiatan" accept=".xlsx, .xls, .csv" required>
								<label class="custom-file-label" for="validatedCustomFile">Pilih file excel...</label>
								<small id="file-excel-tambah-kegiatan" class="form-text text-muted">
									Pilih file excel tambah kegiatan
								</small>
							</div>
						</div>

						<div class="menu-divider"></div>
						<button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Import File
							Excel</button>
						<button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan" data-dismiss="modal">Batal</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End of import Excel Tambah Kegiatan Modal -->

	<!-- Update Status Kegiatan VVA Modal -->
	<div class="modal fade bd-example-modal-lg" id="modal-ganti-status-kegiatan-vva" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalCenterTitle">VVA</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" action="" enctype="multipart/form-data">
						<a class="btn btn-success btn-import-kegiatan float-right mb-4" href="" id="btn-export-peserta-vva"><img class="img-profile mr-2" src="<?= base_url('assets/icons/pupr-import-icon.svg') ?>">Export Peserta Kegiatan</a>
						<div class="form-group pt-2">
							<label for="fileMateriKegiatan">File Excel VVA *</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="file-excel-tambah-kegiatan" name="file_excel" accept=".xlsx, .xls, .csv" required>
								<label class="custom-file-label" for="validatedCustomFile">Pilih file excel...</label>
								<small id="file-excel-tambah-kegiatan" class="form-text text-muted">
									Pilih file excel VVA yang ingin diupload
								</small>
							</div>
						</div>
						<div class="menu-divider"></div>
						<button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Ganti Status Kegiatan</button>
						<button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan" data-dismiss="modal">Batal</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End of Update Status Kegiatan VVA Modal -->

	<!-- Update Status Kegiatan asesment Modal -->
	<div class="modal fade bd-example-modal-lg" id="modal-ganti-status-kegiatan-asesment" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalCenterTitle">Asesment</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" action="" enctype="multipart/form-data">
						<a class="btn btn-success btn-import-kegiatan float-right mb-4" href="" id="btn-export-peserta-asesment"><img class="img-profile mr-2" src="<?= base_url('assets/icons/pupr-import-icon.svg') ?>">Export Peserta Kegiatan</a>
						<div class="form-group pt-2">
							<label for="fileMateriKegiatan">File Excel Asesment *</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="file-excel-tambah-kegiatan" name="file_excel" accept=".xlsx, .xls, .csv" required>
								<label class="custom-file-label" for="validatedCustomFile">Pilih file excel...</label>
								<small id="file-excel-tambah-kegiatan" class="form-text text-muted">
									Pilih file excel asesment yang ingin diupload
								</small>
							</div>
						</div>
						<div class="menu-divider"></div>
						<button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Ganti Status Kegiatan</button>
						<button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan" data-dismiss="modal">Batal</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End of Update Status Kegiatan asesment Modal -->

	<!-- Update Status Kegiatan berita acara Modal -->
	<div class="modal fade bd-example-modal-lg" id="modal-ganti-status-kegiatan-berita-acara" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalCenterTitle">Berita Acara</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" action="" enctype="multipart/form-data">
						<div class="form-group py-2">
							<label for="editNamaKegiatan">Deskripsi Berita Acara *</label>
							<input type="text" class="form-control" id="deskripsi-berita-acara" name="deskripsi_berita_acara" placeholder="Contoh: Berita Acara Kegiatan" required>
						</div>
						<div class="form-group pt-2">
							<label for="fileMateriKegiatan">File Berita Acara *</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="file-excel-tambah-kegiatan" name="file_berita_acara" required>
								<label class="custom-file-label" for="validatedCustomFile">Pilih file...</label>
								<small id="file-excel-tambah-kegiatan" class="form-text text-muted">
									Pilih file berita acara yang ingin diupload
								</small>
							</div>
						</div>
						<div class="menu-divider"></div>
						<button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Ganti Status Kegiatan</button>
						<button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan" data-dismiss="modal">Batal</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End of Update Status Kegiatan berita acara Modal -->

	<!-- Update Status Kegiatan Invoice Modal -->
	<div class="modal fade bd-example-modal-lg" id="modal-ganti-status-kegiatan-invoice" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalCenterTitle">Invoice</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" action="" enctype="multipart/form-data">
						<div class="form-group py-2">
							<label for="editNamaKegiatan">Deskripsi Invoice *</label>
							<input type="text" class="form-control" id="deskripsi-invoice" name="deskripsi_invoice" placeholder="Contoh: Invoice Kegiatan" required>
						</div>
						<div class="form-group pt-2">
							<label for="fileMateriKegiatan">File Invoice *</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="file-excel-tambah-kegiatan" name="file_invoice" required>
								<label class="custom-file-label" for="validatedCustomFile">Pilih file...</label>
								<small id="file-excel-tambah-kegiatan" class="form-text text-muted">
									Pilih file invoice yang ingin diupload
								</small>
							</div>
						</div>
						<div class="menu-divider"></div>
						<button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Ganti Status Kegiatan</button>
						<button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan" data-dismiss="modal">Batal</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End of Update Status Kegiatan berita acara Modal -->

	<!-- Import Excel Tambah Peserta Kegiatan Modal -->
	<div class="modal fade bd-example-modal-lg" id="modal-import-excel-tambah-peserta-kegiatan" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalCenterTitle">Import File Excel Tambah Peserta Kegiatan</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" action="<?= base_url() ?>Kegiatan/import_kegiatan_action" enctype="multipart/form-data">
						<div class="form-group py-2">
							<label for="fileMateriKegiatan">File Excel Tambah Peserta Kegiatan</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="file-excel-tambah-kegiatan" name="file_excel_import_peserta_kegiatan" required>
								<label class="custom-file-label" for="validatedCustomFile">Pilih file excel...</label>
								<small id="file-excel-tambah-kegiatan" class="form-text text-muted">
									Pilih file excel tambah peserta kegiatan
								</small>
							</div>
						</div>

						<div class="menu-divider"></div>
						<button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Import File
							Excel</button>
						<button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan" data-dismiss="modal">Batal</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End of import Excel Tambah Peserta Kegiatan Modal -->

	<!-- Lihat peserta Modal -->
	<div class="modal fade" id="modal-lihat-peserta-by-kegiatan" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-daftar-peserta-kegiatan-custom" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalCenterTitle">Daftar Peserta Kegiatan</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="col">
						<a class="btn btn-success btn-import-kegiatan" href="" id="btn-export-peserta"><img class="img-profile mr-2" src="<?= base_url('assets/icons/pupr-import-icon.svg') ?>">Export Peserta</a>
						<button class="btn btn-warning btn-import-kegiatan" id="btn-import-peserta-kegiatan"><img class="img-profile mr-2" src="<?= base_url('assets/icons/pupr-import-icon.svg') ?>">Import Peserta</button>
						<a href="<?= base_url() ?>Kegiatan/download_format_peserta_excel_action"><button class="btn btn-danger btn-import-kegiatan float-right"><img class="img-profile mr-2" src="<?= base_url('assets/icons/pupr-download-icon.svg') ?>">Download Format Excel</button></a>
					</div>
					<div class="card-body">
						<div class="">
							<table id="daftar_peserta_table" class="display">
								<thead>
									<tr>
										<th>No</th>
										<th>Foto</th>
										<th>Nama</th>
										<th>Jenis Kelamin</th>
										<th>Tempat & Tanggal Lahir</th>
										<th>Status Perkawinan</th>
										<th>Nama Perusahaan</th>
										<th>Jabatan</th>
										<th>Utusan</th>
										<th>Email</th>
										<th>Nomor Hp</th>
										<th>Nomor Telepon Rumah</th>
										<th>NIK</th>
										<th>Alamat</th>
										<th>Provinsi</th>
										<th>Kabupaten / Kota</th>
										<th>Kecamatan</th>
										<th>Kelurahan</th>
										<th>Rt</th>
										<th>Rw</th>
										<th>Kode POS</th>
										<th>Kode Area</th>
										<th>Status Rumah</th>
										<th>Pendidikan</th>
										<!-- <th>Aksi</th> -->
									</tr>
								</thead>
							</table>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- End of lihat peserta Modal -->

	<!-- Modal show image -->
	<div id="show-image-modal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<img class="showimage img-responsive" src="" />
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	<!-- End modal show image -->

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
						<h1 class="h2 font-weight-bold mb-4 mt-4">Kegiatan</h1>
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

					<!-- Content Row -->
					<div class="row mt-4">

						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card h-100 p-2 card-recap">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="h5 font-weight-bold text-black text-uppercase mb-2">
												Total Jumlah
											</div>
											<div class="row no-gutters align-items-center">

												<div class="h5 mb-0 mr-3 text-gray-800">
													<?= $jumlah_seluruh_kegiatan ?> Kegiatan</div>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card h-100 p-2 card-recap">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="h5 font-weight-bold text-black text-uppercase mb-2">
												Selesai
											</div>
											<div class="row no-gutters align-items-center">

												<div class="h5 mb-0 mr-3 text-gray-800">
													<?= $jumlah_kegiatan_selesai ?> Kegiatan</div>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card h-100 p-2 card-recap">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="h5 font-weight-bold text-black text-uppercase mb-2">
												Sedang Berjalan
											</div>
											<div class="row no-gutters align-items-center">

												<div class="h5 mb-0 mr-3 text-gray-800">
													<?= $jumlah_kegiatan_berjalan ?> Kegiatan</div>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="container-fluid mt-2 mb-4 container-background">
						<div class="col d-flex justify-content-between button-field">
							<div class="">
								<button class="btn btn-light btn-filter-kegiatan" data-toggle="modal" data-target="#modal-filter-kegiatan"><img class="img-profile mr-2" src="<?= base_url('assets/icons/pupr-filter-icon.svg') ?>">Filter</button>
								<button class="btn btn-primary btn-add-kegiatan" data-toggle="modal" data-target="#modal-tambah-kegiatan"><img class="img-profile mr-2" src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">Tambah</button>
								<button class="btn btn-warning btn-import-kegiatan" data-toggle="modal" data-target="#modal-import-excel-tambah-kegiatan"><img class="img-profile mr-2" src="<?= base_url('assets/icons/pupr-import-icon.svg') ?>">Import</button>
								<a href="" class="btn btn-success btn-import-kegiatan" id="btn-export-kegiatan"><img class="img-profile mr-2" src="<?= base_url('assets/icons/pupr-import-icon.svg') ?>">Export</a>
							</div>
							<div class="">
								<a href="<?= base_url() ?>Kegiatan/download_format_excel_action"><button class="btn btn-danger btn-import-kegiatan"><img class="img-profile mr-2" src="<?= base_url('assets/icons/pupr-download-icon.svg') ?>">Download Format Excel</button></a>
							</div>
						</div>
						<div class="card-body">
							<div class="">
								<table id="kalender_kegiatan_table" class="display">
									<thead>
										<tr>
											<th>No</th>
											<th>Aksi</th>
											<th>Nama Kegiatan</th>
											<th>Deskripsi Kegiatan</th>
											<th>Status Kegiatan</th>
											<th>Akun Kegiatan</th>
											<th>Jenis Kegiatan</th>
											<th>Tanggal Kegiatan</th>
											<th>Banner Kegiatan</th>
											<th>Instruktur Kegiatan</th>
											<th>Assesor Kegiatan</th>
											<th>Provinsi Kegiatan</th>
											<th>Kota Kegiatan</th>
											<th>Lokasi Kegiatan</th>
											<th>Jumlah Peserta</th>
											<th>File Materi Kegiatan</th>
										</tr>
									</thead>
								</table>
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