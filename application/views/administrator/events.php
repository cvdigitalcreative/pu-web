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

					<form method="POST" action="" enctype="multipart/form-data">
						<div class="row">
							<div class="col">
								<div class="form-group py-2">
									<label for="filterTanggalMulaikegiatan">Tanggal Mulai *</label>
									<input type="text" class="form-control js-daterangepicker" id="filter-tanggal-mulai-kegiatan" data-drops="up" name="filter_tanggal_kegiatan_mulai" value="" placeholder="Pilih tanggal kegiatan" required>
									<small id="filter-tanggal-mulai-kegiatan-label" class="form-text text-muted">
										Tanggal mulai kegiatan
									</small>
								</div>
							</div>
							<div class="col">
								<div class="form-group py-2">
									<label for="filterTanggalSelesaikegiatan">Tanggal Selesai *</label>
									<input type="text" class="form-control js-daterangepicker" id="filter-tanggal-selesai-kegiatan" data-drops="up" name="filter_tanggal_kegiatan_selesai" value="" placeholder="Pilih tanggal kegiatan" required>
									<small id="filter-tanggal-selesai-kegiatan-label" class="form-text text-muted">
										Tanggal selesai kegiatan
									</small>
								</div>
							</div>
						</div>
						<div class="form-group py-2">
							<label for="filterJenisKegiatan">Jenis kegiatan *</label>
							<select class="form-control" id="filter-jenis-kegiatan" name="filter_jenis_kegiatan" required>
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
							<select class="form-control" id="filter-status-kegiatan" name="filter_status_kegiatan" aria-placeholder="Pilih status kegiatan" required>
								<option selected disabled>Pilih status kegiatan</option>
								<?php if ($status_kegiatan != null) :
									foreach ($status_kegiatan as $row) : ?>
										<option value="<?= $row['id_status_kegiatan'] ?>"><?= $row['status_kegiatan'] ?></option>
								<?php endforeach;
								endif ?>
							</select>
						</div>
						<div class="menu-divider"></div>
						<button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan" id="btn-filter-kegiatan">Terapkan
							Filter</button>
						<button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan" data-dismiss="modal">Batal</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End modal filter kegiatan -->

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
								<input id="banner-kegiatan" type="file" name="foto_banner_kegiatan" id="bannerKegiatan" placeholder="Photo" alt="Pilih Foto" required="" capture>
							</div>
						</div>
						<div class="form-group py-2">
							<label for="namaKegiatan">Nama Kegiatan *</label>
							<input type="text" class="form-control" id="nama-kegiatan" name="judul_kegiatan" placeholder="Contoh: Kegiatan Pelatihan" required>
						</div>
						<div class="form-group py-2">
							<label for="deskripsiKegiatan">Deskripsi Kegiatan *</label>
							<textarea type="text" class="form-control" id="deskripsi-kegiatan" name="deskripsi_kegiatan" placeholder="Contoh: Ini adalah deskripsi kegiatan pelatihan" required></textarea>
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
								<option selected disabled>Pilih Provinsi</option>
								<?php foreach ($provinsi as $row) : ?>
									<option value="<?= $row['id_provinsi'] ?>"><?= $row['provinsi'] ?></option>
								<?php endforeach ?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="kotaKegiatan">Kota kegiatan *</label>
							<select class="form-control" id="kota-kegiatan" name="id_kota_kabupaten" required>
								<option selected disabled>Mohon pilih Provinsi terlebih dahulu</option>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="lokasiKegiatan">Lokasi Kegiatan *</label>
							<textarea type="text" class="form-control" id="lokasi-kegiatan" name="lokasi_kegiatan" placeholder="Contoh: Jalan demang lebar daun" required></textarea>
						</div>
						<div class="form-group py-2">
							<label for="statusKegiatan">Status kegiatan *</label>
							<select class="form-control" id="status-kegiatan" name="status_kegiatan" aria-placeholder="Pilih status kegiatan" required>
								<option selected disabled>Pilih status kegiatan</option>
								<?php if ($status_kegiatan != null) :
									foreach ($status_kegiatan as $row) : ?>
										<option value="<?= $row['id_status_kegiatan'] ?>"><?= $row['status_kegiatan'] ?></option>
								<?php endforeach;
								endif ?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="instrukturKegiatan">Instruktur kegiatan *</label>
							<select class="form-control selectpicker" id="instruktur-kegiatan" name="id_instruktur_kegiatan[]" aria-placeholder="Pilih instruktur kegiatan" multiple data-live-search="true" required>
								<?php if ($instruktur != null) :
									foreach ($instruktur as $row) : ?>
										<option value="<?= $row['id_tenaga_ahli'] ?>"><?= $row['nama_lengkap'] ?></option>
								<?php endforeach;
								endif ?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="assesorKegiatan">Assesor kegiatan *</label>
							<select class="form-control selectpicker" id="assesor-kegiatan" name="id_asesor_kegiatan[]" aria-placeholder="Pilih assesor kegiatan" multiple data-live-search="true" required>
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
								<image id="banner-image" src="<?= base_url('assets/icons/pupr-add-image-icon.svg') ?>" />
								<input id="edit-banner-kegiatan" type="file" name="edit_foto_banner_kegiatan" placeholder="Photo" alt="Pilih Foto" required="" capture>
							</div>
						</div>
						<div class="form-group py-2">
							<label for="editNamaKegiatan">Nama Kegiatan *</label>
							<input type="text" class="form-control" id="edit-nama-kegiatan" name="edit_judul_kegiatan" placeholder="Contoh: Kegiatan Pelatihan" required>
						</div>
						<div class="form-group py-2">
							<label for="editDeskripsiKegiatan">Deskripsi Kegiatan *</label>
							<textarea type="text" class="form-control" id="edit-deskripsi-kegiatan" name="edit_deskripsi_kegiatan" placeholder="Contoh: Ini adalah deskripsi kegiatan pelatihan" required></textarea>
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
								<option selected disabled>Pilih Provinsi</option>
								<?php if ($provinsi != null) :
									foreach ($provinsi as $row2) : ?>
										<option value="<?= $row2['id_provinsi'] ?>"><?= $row2['provinsi'] ?></option>
								<?php endforeach;
								endif; ?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="editKotaKegiatan">Kota kegiatan *</label>
							<select class="form-control" id="edit-kota-kegiatan" name="id_kota_kabupaten" required>
								<option disabled>Mohon pilih Provinsi terlebih dahulu</option>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="editLokasiKegiatan">Lokasi Kegiatan *</label>
							<textarea type="text" class="form-control" id="edit-lokasi-kegiatan" name="edit_lokasi_kegiatan" placeholder="Contoh: Jalan demang lebar daun" required></textarea>
						</div>
						<div class="form-group py-2">
							<label for="editStatusKegiatan">Status kegiatan *</label>
							<select class="form-control" id="edit-status-kegiatan" name="status_kegiatan" aria-placeholder="Pilih status kegiatan" required>
								<option selected disabled>Pilih status kegiatan</option>
								<?php if ($status_kegiatan != null) :
									foreach ($status_kegiatan as $row2) : ?>
										<option value="<?= $row2['id_status_kegiatan'] ?>"><?= $row2['status_kegiatan'] ?></option>
								<?php endforeach;
								endif; ?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="editInstrukturKegiatan">Instruktur kegiatan *</label>
							<select class="form-control selectpicker" id="edit-instruktur-kegiatan" name="id_instruktur_kegiatan[]" aria-placeholder="Pilih instruktur kegiatan" multiple data-live-search="true" required>
								<?php if ($instruktur != null) :
									foreach ($instruktur as $row2) : ?>
										<option value="<?= $row2['id_tenaga_ahli'] ?>"><?= $row2['nama_lengkap'] ?></option>
								<?php endforeach;
								endif ?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="editAssesorKegiatan">Assesor kegiatan *</label>
							<select class="form-control selectpicker" id="edit-assesor-kegiatan" name="id_asesor_kegiatan[]" aria-placeholder="Pilih assesor kegiatan" multiple data-live-search="true" required>
								<?php if ($asesor != null) :
									foreach ($asesor as $row2) : ?>
										<option value="<?= $row2['id_tenaga_ahli'] ?>"><?= $row2['nama_lengkap'] ?></option>
								<?php endforeach;
								endif ?>
							</select>
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
								<input type="file" class="custom-file-input" id="file-excel-tambah-kegiatan" name="file_excel_import_kegiatan" required>
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
						<button class="btn btn-primary btn-add-kegiatan" id="btn-add-peserta-kegiatan"><img class="img-profile mr-2" src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">Tambah Peserta</button>
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

	<!-- Tambah Peserta Modal -->
	<div class="modal fade bd-example-modal-lg" id="modal-tambah-peserta" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalCenterTitle">Edit Profile</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<form method="POST" action="" enctype="multipart/form-data">
						<div class="row">
							<div class="col-4">
								<div class="form-group pt-2">
									<label for="profileFotoProfil">Foto Profile *</label>
									<center>
										<div id="peserta-picture-container">
											<image id="banner-image-peserta" src="<?= base_url('assets/icons/pupr-add-image-icon.svg') ?>" style="width: 100px; height: 100px; margin-top: 25%;" />
											<input id="banner-peserta" type="file" name="file_foto_profile" placeholder="Photo" alt="Pilih Foto" accept=".jpg, .png, .jpeg" capture>
										</div>
										<p class="text-secondary mt-2"><small>Klik gambar untuk mengganti foto profile</small></>
									</center>
								</div>
							</div>
							<div class="col">
								<div class="form-group py-2">
									<label for="profileNama">Nama *</label>
									<input type="text" class="form-control" id="profile-nama" name="nama" placeholder="Contoh: Budi Gunawan" required>
								</div>
								<div class="form-group py-2">
									<label for="profileEmail">Email *</label>
									<input type="email" class="form-control" id="profile-email" name="email" placeholder="Contoh: Budi@email.com" required>
								</div>
								<div class="row">
									<div class="col">
										<div class="form-group py-2">
											<label for="profileNomorTelepon">Nomor Telepon *</label>
											<input type="text" class="form-control" id="profile-nomor-telepon" name="nomor_telepon" placeholder="Contoh: +68119324945" required>
										</div>
									</div>
									<div class="col">
										<div class="form-group py-2">
											<label for="profileNomorHandphone">Nomor Handphone *</label>
											<input type="text" class="form-control" id="profile-nomor-handphone" name="nomor_handphone" placeholder="Contoh: +6282112341234" required>
										</div>
									</div>

								</div>
							</div>
						</div>
						<div class="form-group py-2">
							<label for="deskripsiKegiatan">Nomor Induk Kependudukan *</label>
							<input type="text" class="form-control" id="profile-nik" name="nik" placeholder="Contoh: 248430234247924" required>
						</div>
						<div class="form-group py-2">
							<label for="deskripsiKegiatan">Alamat *</label>
							<textarea type="text" rows="3" class="form-control" id="profile-alamat" name="alamat" placeholder="Contoh: Jl. Sudirman No. 1234" required></textarea>
						</div>
						<div class="form-group py-2">
							<div class="row mr-2">
								<div class="col">
									<label for="kotaKegiatan">RT./RW. *</label>
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<div class="input-group-text">
												RT.
											</div>
										</div>
										<input type="text" class="form-control" id="profile-rt" name="rt" placeholder="Contoh: 123" style="background-color: white;" required>
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
										<input type="text" class="form-control" id="profile-kode-pos" name="kode_pos" placeholder="Contoh: 30132" style="background-color: white;" required>
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
										<input type="text" class="form-control" id="profile-rw" name="rw" placeholder="Contoh: 321" style="background-color: white;" required>
									</div>
								</div>
								<div class="col">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<div class="input-group-text">
												Kode Area
											</div>
										</div>
										<input type="text" class="form-control" id="profile-kode-area" name="kode_area" placeholder="Contoh: 0711" style="background-color: white;" required>
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
										<option value="<?= $row['id_status_rumah'] ?>"><?= $row['status_rumah'] ?></option>
								<?php endforeach;
								endif; ?>
							</select>
						</div>

						<div class="form-group py-2">
							<label for="Jenis Kelamin">Jenis Kelamin *</label>
							<select class="form-control" id="profile-jenis-kelamin" name="id_jenis_kelamin" required>
								<?php if ($jenis_kelamin != null) : ?>
									<?php foreach ($jenis_kelamin as $row) : ?>
										<option value="<?= $row['id_jenis_kelamin'] ?>"><?= $row['jenis_kelamin'] ?></option>
								<?php
									endforeach;
								endif; ?>
							</select>
						</div>

						<div class="form-group py-2">
							<label for="Jenis Kelamin">Status Pernikahan *</label>
							<select class="form-control" id="profile-status-perkawinan" name="id_status_perkawinan" required>
								<?php if ($status_perkawinan != null) : ?>
									<?php foreach ($status_perkawinan as $row) : ?>

										<option value="<?= $row['id_status_perkawinan'] ?>"><?= $row['status_perkawinan'] ?></option>
								<?php endforeach;
								endif; ?>
							</select>
						</div>

						<div class="menu-divider"></div>
						<h4 class="form-data-pendidikan-title">Data Pendidikan</h4>
						<hr>
						<div class="row">
							<div class="col">
								<div class="form-group py-2">
									<label for="Jenis Kelamin">Pendidikan Terakhir *</label>
									<select class="form-control" id="profile-pendidikan" name="id_pendidikan" required>
										<?php if ($pendidikan != null) : ?>
											<?php foreach ($pendidikan as $row) : ?>
												<option value="<?= $row['id_pendidikan'] ?>"><?= $row['pendidikan'] ?></option>
										<?php endforeach;
										endif; ?>
									</select>
								</div>
							</div>
							<div class="col">
								<div class="form-group py-2">
									<label for="Jenis Kelamin">Kompetensi *</label>
									<select class="form-control" id="profile-kompetensi" name="id_kompetensi" required>
											<option value="0">-</option>
											<option value="1">Kompeten</option>
											<option value="2">Tidak Kompeten</option>
									</select>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-6">
								<div class="form-group py-2">
									<label for="profileNomorTelepon">Jurusan *</label>
									<input type="text" class="form-control" id="profile-jurusan" name="jurusan" placeholder="Contoh: Teknik Perminyakan" required>
								</div>
							</div>
							<div class="col-6">
								<div class="form-group py-2">
									<label for="profileNomorTelepon">Nama Universitas *</label>
									<input type="text" class="form-control" id="profile-nama-universitas" name="nama_universitas" placeholder="Contoh: Institut Teknologi Bandung" required>
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
							<input type="text" class="form-control" id="profile-nama-perusahaan" name="nama_perusahaan" placeholder="Contoh: PT. Indo Karya Abadi" required>
						</div>
						<div class="form-group py-2">
							<label for="profileNomorTelepon">Jabatan *</label>
							<input type="text" class="form-control" id="profile-jabatan" name="jabatan" placeholder="Contoh: Human Resource Manager" required>
						</div>

						<div class="menu-divider"></div>
						<button class="btn btn-block btn-info btn-modal-edit-profile" type="submit" data-toggle="collapse" data-target="#collapseExample" id="btn-edit-profile" aria-expanded="false" aria-controls="collapseExample">
							Tambah Peserta
						</button>
						<button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan" data-dismiss="modal">Batal</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End modal Edit Profile -->

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
											<th>Akun Kegiatan</th>
											<th>Jenis Kegiatan</th>
											<th>Tanggal Kegiatan</th>
											<th>Status Kegiatan</th>
											<th>Banner Kegiatan</th>
											<th>Instruktur Kegiatan</th>
											<th>Assesor Kegiatan</th>
											<th>Provinsi Kegiatan</th>
											<th>Kota Kegiatan</th>
											<th>Lokasi Kegiatan</th>
											<th>Jumlah Peserta</th>
											<th>Nama Materi Kegiatan</th>
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