<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("components/head.php") ?>
</head>

<body id="page-top">

	<!-- Daftar File Modal -->
	<div class="modal fade bd-example-modal-sm" id="modal-daftar-file-kegiatan" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-sm modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle">Daftar File Kegiatan</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
						<div class="col mb-2">
						<button class="btn btn-primary btn-block btn-download-file-kegiatan"  id="btn-daftar-file-kegiatan-berita-acara"><img class="img-profile mr-2"
									src="<?= base_url('assets/icons/pupr-import-icon.svg') ?>">Berita Acara</button>
						</div>
						<div class="col mb-2">
						<button class="btn btn-primary btn-block btn-download-file-kegiatan" href="" id="btn-daftar-file-kegiatan-invoice"><img class="img-profile mr-2"
									src="<?= base_url('assets/icons/pupr-import-icon.svg') ?>">Invoice</button>
						</div>
						<div class="col mb-2">
						<button class="btn btn-primary btn-block btn-download-file-kegiatan" href="" id="btn-daftar-file-kegiatan-bukti-pembayaran"><img class="img-profile mr-2"
									src="<?= base_url('assets/icons/pupr-import-icon.svg') ?>">Bukti Pembayaran</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End of Import Excel Tambah Kegiatan Modal -->
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
									<label for="filterTanggalMulaikegiatan">Tanggal Mulai</label>
									<input type="text" class="form-control js-daterangepicker" id="filter-tanggal-mulai-kegiatan" data-drops="down" name="filter_tanggal_kegiatan_mulai" value="" placeholder="Pilih tanggal kegiatan" style="cursor:pointer; background-color: #FFFFFF" readonly>
									<small id="filter-tanggal-mulai-kegiatan-label" class="form-text text-muted">
										Tanggal mulai kegiatan
									</small>
								</div>
							</div>
							<div class="col">
								<div class="form-group py-2">
									<label for="filterTanggalSelesaikegiatan">Tanggal Selesai</label>
									<input type="text" class="form-control js-daterangepicker" id="filter-tanggal-selesai-kegiatan" data-drops="down" name="filter_tanggal_kegiatan_selesai" value="" placeholder="Pilih tanggal kegiatan" style="cursor:pointer; background-color: #FFFFFF" readonly>
									<small id="filter-tanggal-selesai-kegiatan-label" class="form-text text-muted">
										Tanggal selesai kegiatan
									</small>
								</div>
							</div>
						</div>
						<div class="form-group py-2">
							<label for="filterJenisKegiatan">Jenis kegiatan</label>
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
							<label for="filterStatusKegiatan">Status kegiatan</label>
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
							<label for="provinsiKegiatan">Provinsi kegiatan<span class="ml-3 text-secondary"><small>Mohon pilih Provinsi terlebih dahulu</small></span></label>
							<select class="form-control" id="filter-id-provinsi" name="filter_id_provinsi" onChange="getStateFilterKegiatan(this.value);">
								<option selected disabled>Pilih Provinsi</option>
								<?php foreach ($provinsi as $row) : ?>
									<option value="<?= $row['id_provinsi'] ?>"><?= $row['provinsi'] ?></option>
								<?php endforeach ?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="kotaKegiatan">Kota kegiatan</label>
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

					<form method="POST" enctype="multipart/form-data">

						<div class="form-group py-2">
							<label for="akunKegiatan">Akun Kegiatan*</label>
							<select class="form-control" id="akun-kegiatan" name="id_akun_kegiatan" required>
								<option selected disabled>Pilih akun kegiatan</option>
								<?php if ($akun_kegiatan != null) :
									foreach ($akun_kegiatan as $row) :
										if ($row['akun_kegiatan'] != "-") : ?>

											<option value="<?= $row['id_akun_kegiatan'] ?>"><?= $row['akun_kegiatan'] ?></option>
								<?php endif;
									endforeach;
								endif ?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="jenisKegiatan">Jenis kegiatan *</label>
							<select class="form-control" id="jenis-kegiatan" name="id_jenis_kegiatan" required>
								<option selected disabled>Pilih jenis kegiatan</option>
								<?php if ($jenis_kegiatan != null) :
									foreach ($jenis_kegiatan as $row) :
										if ($row['jenis_kegiatan'] != "-" && strtolower($row['jenis_kegiatan']) != 'forum') : ?>
											<option value="<?= $row['id_jenis_kegiatan'] ?>"><?= $row['jenis_kegiatan'] ?></option>
								<?php endif;
									endforeach;
								endif ?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="bannerKegiatan">Banner Kegiatan</label>
							<div id="profile-container">
								<image id="banner-image" src="<?= base_url('assets/icons/pupr-add-image-icon.svg') ?>" />
								<input id="banner-kegiatan" type="file" name="foto_banner_kegiatan" id="bannerKegiatan" placeholder="Photo" alt="Pilih Foto" accept=".jpg, .jpeg, .png" capture>
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
									<input type="text" class="form-control js-daterangepicker" id="tanggal-mulai-kegiatan" data-drops="down" name="tanggal_kegiatan" value="" placeholder="Pilih tanggal kegiatan" style="cursor:pointer; background-color: #FFFFFF" readonly required>
									<small id="tanggal-mulai-kegiatan" class="form-text text-muted">
										Tanggal mulai kegiatan
									</small>
								</div>
							</div>
							<div class="col">
								<div class="form-group py-2">
									<label for="tanggalSelesaikegiatan">Tanggal Selesai *</label>
									<input type="text" class="form-control js-daterangepicker" id="tanggal-selesai-kegiatan" data-drops="down" name="tanggal_kegiatan_selesai" value="" placeholder="Pilih tanggal kegiatan" style="cursor:pointer; background-color: #FFFFFF" readonly required>
									<small id="tanggal-selesai-kegiatan" class="form-text text-muted">
										Tanggal selesai kegiatan
									</small>
								</div>
							</div>
						</div>
						<div class="form-group py-2">
							<label for="provinsiKegiatan">Provinsi kegiatan *</label>
							<select class="form-control" id="provinsi-kegiatan" name="id_provinsi" onChange="getState(this.value);" required>
								<?php foreach ($provinsi as $row) :
									if ($row['provinsi'] != "-") : ?>
										<option value="<?= $row['id_provinsi'] ?>"><?= $row['provinsi'] ?></option>
								<?php endif;
								endforeach; ?>
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
								Tambah Instruktur / Narasumber & Assesor
							</a>
							<small id="asesor-instruktur-label" class="form-text text-muted mb-4">
								Klik untuk menambahkan instruktur / narasumber dan assesor baru.
							</small>
						</div>

						<div class="form-group py-2">
							<label for="instrukturKegiatan">Instruktur / Narasumber kegiatan</label>
							<select class="form-control selectpicker" id="instruktur-kegiatan" name="id_instruktur_kegiatan[]" aria-placeholder="Pilih instruktur / narasumber kegiatan" multiple data-live-search="true">
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
								<label class="custom-file-label" id="custom-file-label-file-materi-kegiatan" for="file-materi-kegiatan">Pilih file materi...</label>
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
							<label for="editAkunKegiatan">Akun Kegiatan *</label>
							<select class="form-control" id="edit-akun-kegiatan" name="id_akun_kegiatan" required>
								<option selected disabled>Pilih akun kegiatan</option>
								<?php if ($akun_kegiatan != null) :
									foreach ($akun_kegiatan as $row2) :
										if($row2['akun_kegiatan'] != "-") :?>
										<option value="<?= $row2['id_akun_kegiatan'] ?>"><?= $row2['akun_kegiatan'] ?></option>
								<?php endif;
								endforeach;
								endif; ?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="editJenisKegiatan">Jenis kegiatan *</label>
							<select class="form-control" id="edit-jenis-kegiatan" name="id_jenis_kegiatan" required>
								<option selected disabled>Pilih jenis kegiatan</option>
								<?php if ($jenis_kegiatan != null) :
									foreach ($jenis_kegiatan as $row2) :
										if($row2['jenis_kegiatan'] != "-" && strtolower($row2['jenis_kegiatan']) != 'forum') : ?>
										<option value="<?= $row2['id_jenis_kegiatan'] ?>"><?= $row2['jenis_kegiatan'] ?></option>
								<?php endif;
								endforeach;
								endif; ?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="editBannerKegiatan">Banner Kegiatan</label>
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
									<input type="text" class="form-control js-daterangepicker" id="edit-tanggal-mulai-kegiatan" data-drops="down" name="edit_tanggal_kegiatan_mulai" value="" placeholder="Pilih tanggal kegiatan" style="cursor:pointer; background-color: #FFFFFF" readonly required>
									<small id="tanggal-mulai-kegiatan" class="form-text text-muted">
										Tanggal mulai kegiatan
									</small>
								</div>
							</div>
							<div class="col">
								<div class="form-group py-2">
									<label for="editTanggalSelesaikegiatan">Tanggal Selesai *</label>
									<input type="text" class="form-control js-daterangepicker" id="edit-tanggal-selesai-kegiatan" data-drops="down" name="edit_tanggal_kegiatan_selesai" value="" placeholder="Pilih tanggal kegiatan" style="cursor:pointer; background-color: #FFFFFF" readonly required>
									<small id="tanggal-selesai-kegiatan" class="form-text text-muted">
										Tanggal selesai kegiatan
									</small>
								</div>
							</div>
						</div>
						<div class="form-group py-2">
							<label for="editProvinsiKegiatan">Provinsi kegiatan *<span class="ml-3 text-secondary"><small>Mohon pilih ulang provinsi</small></span></label>
							<select class="form-control" id="edit-provinsi-kegiatan" name="edit_id_provinsi" onChange="getStateEdit(this.value);" required>
								<?php if ($provinsi != null) :
									foreach ($provinsi as $row2) : ?>
										<option value="<?= $row2['id_provinsi'] ?>"><?= $row2['provinsi'] ?></option>
								<?php endforeach;
								endif; ?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="editKotaKegiatan">Kota kegiatan *<span class="ml-3 text-secondary"><small>Mohon pilih Provinsi terlebih dahulu</small></span></label>
							<select class="form-control" id="edit-kota-kegiatan" name="edit_id_kota_kabupaten" required>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="editLokasiKegiatan">Lokasi Kegiatan *</label>
							<textarea type="text" data-autoresize class="form-control" id="edit-lokasi-kegiatan" name="edit_lokasi_kegiatan" placeholder="Contoh: Jalan demang lebar daun" required></textarea>
						</div>
						<div class="form-group py-2">
							<label for="editStatusKegiatan">Status kegiatan *</label>
							<select class="form-control" id="edit-status-kegiatan" name="id_status_kegiatan" required>
								<?php if ($status_kegiatan != null) :
									foreach ($status_kegiatan as $row2) :
									if($row2['id_status_kegiatan'] == 1 || $row2['id_status_kegiatan'] == 2): ?>
										<option value="<?= $row2['id_status_kegiatan'] ?>"><?= $row2['status_kegiatan'] ?></option>
								<?php endif; endforeach;
								endif; ?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="editFileMateriKegiatan">Materi kegiatan</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="edit-file-materi-kegiatan" name="file_materi_kegiatan">
								<label class="custom-file-label" id="custom-file-label-edit-file-materi-kegiatan" for="edit-file-materi-kegiatan">Pilih file materi...</label>
								<small id="edit-file-materi-kegiatan" class="form-text text-muted">
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

	<!-- Delete kegiatan modal -->
	<div class="modal fade bd-example-modal-lg" id="modal-delete-instruktur-kegiatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle">Hapus Instruktur Kegiatan Ini?</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Pastikan dengan benar bahwa instruktur kegiatan ingin anda hapus!
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

	<!-- Delete kegiatan modal -->
	<div class="modal fade bd-example-modal-lg" id="modal-delete-asesor-kegiatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle">Hapus Asesor Kegiatan Ini?</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Pastikan dengan benar bahwa asesor kegiatan ingin anda hapus!
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

	<!-- Delete peserta modal -->
	<div class="modal fade bd-example-modal-lg" id="modal-delete-peserta-kegiatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle">Hapus Peserta dari Kegiatan Ini?</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Pastikan dengan benar bahwa peserta kegiatan ini ingin anda hapus!
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
	<!-- End modal delete peserta -->

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
								<label class="custom-file-label" id="custom-file-label-file-excel-tambah-kegiatan" for="file-excel-tambah-kegiatan">Pilih file excel...</label>
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
								<input type="file" class="custom-file-input" id="file-excel-vva-ganti-status" name="file_excel" accept=".xlsx, .xls, .csv" required>
								<label class="custom-file-label" id="custom-file-label-file-excel-vva-ganti-status" for="file-excel-vva-ganti-status">Pilih file excel...</label>
								<small id="file-excel-vva-ganti-status" class="form-text text-muted">
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
								<input type="file" class="custom-file-input" id="file-excel-asesment-ganti-status" name="file_excel" accept=".xlsx, .xls, .csv" required>
								<label class="custom-file-label" id="custom-file-label-file-excel-asesment-ganti-status" for="file-excel-asesment-ganti-status">Pilih file excel...</label>
								<small id="file-excel-asesment-ganti-status" class="form-text text-muted">
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
								<input type="file" class="custom-file-input" id="file-berita-acara-ganti-status" name="file_berita_acara" required>
								<label class="custom-file-label" id="custom-file-label-file-berita-acara-ganti-status" for="file-berita-acara-ganti-status">Pilih file...</label>
								<small id="file-berita-acara-ganti-status" class="form-text text-muted">
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
								<input type="file" class="custom-file-input" id="file-invoice-ganti-status" name="file_invoice" required>
								<label class="custom-file-label" id="custom-file-label-file-invoice-ganti-status" for="file-invoice-ganti-status">Pilih file...</label>
								<small id="file-invoice-ganti-status" class="form-text text-muted">
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

	<!-- Update Status Kegiatan bukti pembayaran Modal -->
	<div class="modal fade bd-example-modal-lg" id="modal-ganti-status-kegiatan-bukti-pembayaran" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalCenterTitle">Bukti Pembayaran</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" action="" enctype="multipart/form-data">
						<div class="form-group py-2">
							<label for="editNamaKegiatan">Deskripsi Bukti Pembayaran *</label>
							<input type="text" class="form-control" id="deskripsi-bukti-pembayaran" name="deskripsi_bukti_pembayaran" placeholder="Contoh: Bukti Pembayaran Kegiatan" required>
						</div>
						<div class="form-group pt-2">
							<label for="fileMateriKegiatan">File Bukti Pembayaran *</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="file-bukti-pembayaran-ganti-status" name="file_bukti_pembayaran" required>
								<label class="custom-file-label" id="custom-file-label-file-bukti-pembayaran-ganti-status" for="file-bukti-pembayaran-ganti-status">Pilih file...</label>
								<small id="file-bukti-pembayaran-ganti-status" class="form-text text-muted">
									Pilih file bukti pembayaran yang ingin diupload
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
								<input type="file" class="custom-file-input" id="file-import-excel-tambah-peserta-kegiatan" name="file_excel_import_peserta_kegiatan" accept=".xlsx, .xls, .csv"" required>
								<label class=" custom-file-label" id="custom-file-label-file-import-excel-tambah-peserta-kegiatan" for="file-import-excel-tambah-peserta-kegiatan">Pilih file excel...</label>
								<small id="file-import-excel-tambah-peserta-kegiatan" class="form-text text-muted">
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

	<!-- Tambah Instruktur Modal -->
	<div class="modal fade bd-example-modal-lg" id="modal-tambah-instruktur-kegiatan" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalCenterTitle">Tambah Instruktur Kegiatan</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" action="" enctype="multipart/form-data">
						<div class="form-group py-2">
							<label for="filterStatusKegiatan">Instruktur Kegiatan</label>
							<select class="form-control selectpicker" id="filter-status-kegiatan" name="id_tenaga_ahli" aria-placeholder="Pilih Instruktur" data-live-search="true">
								<?php if ($instruktur != null) :
									foreach ($instruktur as $row) : ?>
										<option value="<?= $row['id_tenaga_ahli'] ?>"><?= $row['nama_lengkap'] ?></option>
								<?php endforeach;
								endif ?>
							</select>
						</div>

						<div class="menu-divider"></div>
						<button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Tambah Instruktur</button>
						<button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan" data-dismiss="modal">Batal</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End of import Excel Tambah Peserta Kegiatan Modal -->

	<!-- Tambah Instruktur Modal -->
	<div class="modal fade bd-example-modal-lg" id="modal-tambah-asesor-kegiatan" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalCenterTitle">Tambah Asesor Kegiatan</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" action="" enctype="multipart/form-data">
						<div class="form-group py-2">
							<label for="filterStatusKegiatan">Asesor Kegiatan</label>
							<select class="form-control selectpicker" id="filter-status-kegiatan" name="id_tenaga_ahli" data-live-search="true" aria-placeholder="Pilih Asesor">
								<?php if ($asesor != null) :
									foreach ($asesor as $row) : ?>
										<option value="<?= $row['id_tenaga_ahli'] ?>"><?= $row['nama_lengkap'] ?></option>
								<?php endforeach;
								endif ?>
							</select>
						</div>

						<div class="menu-divider"></div>
						<button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Tambah Asesor</button>
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
						<button class="btn btn-success btn-import-kegiatan dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<img class="img-profile mr-2" src="<?= base_url('assets/icons/pupr-import-icon.svg') ?>">Export Peserta
						</button>

						<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
							<a class="dropdown-item" id="btn-export-peserta-seluruh">Seluruh Peserta</a>
							<a class="dropdown-item" id="btn-export-peserta-filter">Filter Peserta</a>
						</div>

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
										<th>Tempat & Tanggal Lahir</th>
										<th>Jenis Kelamin</th>
										<th>NIK</th>
										<th>Email</th>
										<th>Utusan</th>
										<th>Alamat</th>
										<th>Provinsi</th>
										<th>Kabupaten/Kota</th>
										<th>Nomor Telepon Rumah</th>
										<th>Nomor Handphone</th>
										<th>Pendidikan</th>
										<th>Jurusan</th>
										<th>Universitas/ST/Institute</th>
										<th>Tanggal Lulus Pendidikan</th>
										<th>Jabatan Kerja</th>
										<th>Kompeten</th>
										<th>No Sertifikat</th>
										<th>Aksi</th>
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

	<!-- Lihat instruktur assesor Modal -->
	<div class="modal fade" id="modal-lihat-instruktur-assesor-by-kegiatan" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-daftar-peserta-kegiatan-custom" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalCenterTitle">Daftar Instruktur / Narasumber & Assesor Kegiatan</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<div class="col">
						<button class="btn btn-primary btn-add-kegiatan" id="btn-add-instruktur-kegiatan"><img class="img-profile mr-2" src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">Tambah Instruktur / Narasumber</button>
						<button class="btn btn-primary btn-add-kegiatan" id="btn-add-asesor-kegiatan"><img class="img- mr-2" src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">Tambah Assesor</button>
					</div>

					<div class="card-body">
						<ul class="nav nav-tabs pt-2 pb-4" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" href="#list-instruktur-kegiatan" role="tab" data-toggle="tab">Instruktur / Narasumber</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#list-assesor-kegiatan" role="tab" data-toggle="tab">Asesor</a>
							</li>
						</ul>

						<div class="tab-content">
							<div class="tab-pane fade active show" role="tabpanel" id="list-instruktur-kegiatan">
								<table id="daftar_instruktur_table" class="display" style="width:100%">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama Instruktur / Narasumber</th>
											<th>Email</th>
											<th>No Telepon</th>
											<th>No Handphone</th>
											<th>Aksi</th>
										</tr>
									</thead>
								</table>
							</div>

							<div class="tab-pane fade show" role="tabpanel" id="list-assesor-kegiatan">
								<table id="daftar_assesor_table" class="display" style="width:100%">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama Assesor</th>
											<th>Email</th>
											<th>No Telepon</th>
											<th>No Handphone</th>
											<th>Aksi</th>
										</tr>
									</thead>
								</table>
							</div>
						</div>
					</div>

				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>

			</div>
		</div>
	</div>
	<!-- End of Lihat instruktur assesor Modal -->

	<!-- Selesaikan kegiatan modal -->
	<div class="modal fade bd-example-modal-lg" id="modal-selesaikan-kegiatan" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle">Ganti Status Kegiatan Ini?</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Pastikan dengan benar bahwa Anda ingin menyelesaikan kegiatan ini!
					<form>
						<div class="modal-footer">
							<button class="btn btn-light" data-dismiss="modal">Batal</button>
							<button class="btn btn-selesaikan-kegiatan" type="submit">Selesaikan Kegiatan</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End modal selesaikan kegiatan -->

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

	    <!-- Edit Profile Modal -->
		<div class="modal fade bd-example-modal-lg" id="modal-edit-profile-peserta-kegiatan" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalCenterTitle">Edit Data Peserta Kegiatan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form method="POST" enctype="multipart/form-data">
                        <h4>Data Diri</h4>
                        <div class="row">
                            <div class="col-5">
                                <div class="form-group pt-2">
                                    <label for="profileFotoProfil">Foto Peserta</label>
                                    <center>
                                        <div id="profile-picture-container">
                                            <image id="banner-image-profile"/>
                                            <input id="banner-profile" type="file" name="file_foto_profile" placeholder="Photo" alt="Pilih Foto" accept=".jpg, .png, .jpeg" capture>
                                        </div>
                                        <p class="text-secondary mt-2"><small>Klik gambar untuk mengganti foto peserta</small></p>
                                    </center>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group py-2">
                                    <label for="profileNama">Nama *</label>
                                    <input type="text" class="form-control" id="edit-profile-nama" name="nama" placeholder="Contoh: Budi Gunawan" required>
                                </div>
                                <div class="form-group py-2">
                                    <label for="profileEmail">Jenis Kelamin *</label>
                                    <div class="custom-radio-button-form d-flex">
                                        <?php if ($jenis_kelamin != null) :
                                            foreach ($jenis_kelamin as $val) :
                                                if ($val['id_jenis_kelamin'] != 0) :?>
                                                        <div class="radio-custom pr-3">
                                                            <input type="radio" value="<?= $val['id_jenis_kelamin'] ?>" id="jk-<?= $val['id_jenis_kelamin'] ?>" name="id_jenis_kelamin" />
                                                            <label for="jk-<?= $val['id_jenis_kelamin'] ?>"><?= $val['jenis_kelamin'] ?></label>
                                                        </div>
                                        <?php endif;
                                            endforeach;
                                        endif ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label for="profileTempatLahir">Tempat Lahir *</label>
                                            <input type="text" class="form-control" id="edit-profile-tempat-lahir" name="tempat_lahir" placeholder="Contoh: Jakarta" required>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group py-2">
                                            <label for="profileTanggalLahir">Tanggal Lahir *</label>
                                            <input type="text" class="form-control js-daterangepicker" id="profile-tanggal-lahir" data-drops="down" name="profile_tanggal_lahir" placeholder="Pilih tanggal lahir" style="cursor:pointer; background-color: #FFFFFF" readonly required>
                                        </div>
                                    </div>
                                </div>


                                <input type="hidden" name="status_perkawinan" id="edit-profile-status-perkawinan">

                            </div>
                        </div>


                        <div class="menu-divider"></div>
                        <h4 class="form-data-pendidikan-title">Data Pekerjaan</h4>
                        <div class="form-group py-2">
                            <label for="profileNomorTelepon">Nama Perusahaan *</label>
                            <input type="text" class="form-control" id="edit-profile-nama-perusahaan" name="nama_perusahaan" placeholder="Contoh: PT. Digital Creative" required>
                        </div>
                        <div class="form-group py-2">
                            <label for="profileNomorTelepon">Jabatan *</label>
                            <input type="text" class="form-control" id="edit-profile-jabatan" name="jabatan" placeholder="Contoh: Human Resource Manager" required>
                        </div>
                        <div class="form-group py-2">
                            <label for="profileNomorTelepon">Utusan *</label>
                            <input type="text" class="form-control" id="edit-profile-utusan" name="utusan" placeholder="Contoh: DPRD SUMSEL" required>
                        </div>
                        <div class="form-group py-2">
                            <label for="profileNomorTelepon">NPWP *</label>
                            <input type="text" class="form-control" id="edit-profile-npwp" name="npwp" placeholder="Contoh: 14567653267885" required>
                        </div>

                        <div class="menu-divider"></div>
                        <h4 class="form-data-pendidikan-title">Data Kontak</h4>
                        <div class="form-group py-2">
                            <label for="profileEmail">Email *</label>
                            <input type="email" class="form-control" id="edit-profile-email" name="email" placeholder="Contoh: Budi@email.com" required>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group py-2">
                                    <label for="profileNomorTelepon">Nomor Telepon *</label>
                                    <input type="text" class="form-control" id="edit-profile-nomor-telepon" name="nomor_telepon" placeholder="Contoh: +68119324945" required>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group py-2">
                                    <label for="profileNomorHandphone">Nomor Handphone *</label>
                                    <input type="text" class="form-control" id="edit-profile-nomor-handphone" name="nomor_handphone" placeholder="Contoh: +6282112341234" required>
                                </div>
                            </div>

                        </div>
                        <div class="form-group py-2">
                            <label for="deskripsiKegiatan">NIK *</label>
                            <input type="text" class="form-control" id="edit-profile-nik" pattern="[0-9]{16}" name="nik" placeholder="Contoh: 248430234247924" required>
							<small>Jumlah digit NIK 16 digit tidak boleh lebih atau kurang</small>
						</div>


                        <div class="menu-divider"></div>
                        <h4 class="form-data-pendidikan-title">Data Tempat Tinggal</h4>
                        <div class="form-group py-2">
                            <label for="deskripsiKegiatan">Alamat *</label>
                            <textarea type="text" data-autoresize rows="3" class="form-control" id="edit-profile-alamat" name="alamat" placeholder="Contoh: Jl. Sudirman No. 1234" required></textarea>
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
                                        <input type="text" class="form-control" id="edit-profile-rt" name="rt" placeholder="Contoh: 123" style="background-color: white;" required>
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
                                        <input type="text" class="form-control" id="edit-profile-kode-pos" name="kode_pos" placeholder="Contoh: 30132"  style="background-color: white;" required>
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
                                        <input type="text" class="form-control" id="edit-profile-rw" name="rw" placeholder="Contoh: 321" style="background-color: white;" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                Kode Area
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" id="edit-profile-kode-area" name="kode_area" placeholder="Contoh: 0711" style="background-color: white;" required>
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

                        <input type="hidden" name="id_status_rumah" id="edit-profile-status-rumah">


                        <div class="menu-divider"></div>
                        <h4 class="form-data-pendidikan-title">Data Pendidikan</h4>
                        <div class="row">
                            <div class="col">
                                <div class="form-group py-2">
                                    <label for="Jenis Kelamin">Pendidikan Terakhir *</label>
                                    <select class="form-control" id="edit-profile-pendidikan" name="id_pendidikan" required>
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
                                    <label for="Jenis Kelamin">Kompeten *</label>
                                    <select class="form-control" id="edit-profile-kompetensi" name="id_kompetensi" required>
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
                                    <input type="text" class="form-control" id="edit-profile-jurusan" name="jurusan" placeholder="Contoh: Teknik Perminyakan" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group py-2">
                                    <label for="profileNomorTelepon">Nama Universitas *</label>
                                    <input type="text" class="form-control" id="edit-profile-nama-universitas" name="nama_universitas" placeholder="Contoh: Institut Teknologi Bandung" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group py-2">
                            <label for="filterTanggalSelesaikegiatan">Tahun Lulus *</label>
                            <input type="text" class="form-control js-daterangepicker" id="profile-tahun-lulus" data-drops="up" name="profile_tahun_lulus" placeholder="Pilih tahun lulus" style="cursor:pointer; background-color: #FFFFFF" readonly required>
                        </div>

                        <div class="menu-divider"></div>
                        <button class="btn btn-block btn-warning btn-modal-add-kegiatan" type="submit" data-toggle="collapse" data-target="#collapseExample" id="btn-edit-profile" aria-expanded="false" aria-controls="collapseExample">
                            Edit Peserta Kegiatan
                        </button>
                        <button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan" data-dismiss="modal">Batal</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal Edit Profile -->

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
								<button class="btn btn-primary btn-add-kegiatan" id="btn-tambah-kegiatan"><img class="img-profile mr-2" src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">Tambah</button>
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
											<th>Kode Kegiatan</th>
											<th>Nama Kegiatan</th>
											<th>Deskripsi Kegiatan</th>
											<th>Status Kegiatan</th>
											<th>Jumlah Peserta</th>
											<th>Akun Kegiatan</th>
											<th>Jenis Kegiatan</th>
											<th>Tanggal Kegiatan</th>
											<th>Banner Kegiatan</th>
											<th>Instruktur / Narasumber Kegiatan</th>
											<th>Assesor Kegiatan</th>
											<th>Provinsi Kegiatan</th>
											<th>Kota Kegiatan</th>
											<th>Lokasi Kegiatan</th>
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