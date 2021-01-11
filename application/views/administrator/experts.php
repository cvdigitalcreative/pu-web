<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("components/head.php") ?>
</head>

<body id="page-top">

	<!-- Filter Tenaga Ahli Modal -->
	<div class="modal fade bd-example-modal-lg" id="modal-filter-tenaga-ahli" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalCenterTitle">Filter Tenaga Ahli</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<form method="POST" action="" enctype="multipart/form-data">
						<div class="form-group py-2">
							<label for="filterTenagaAhliProvinsi">Provinsi *</label>
							<select class="form-control" id="filter-provinsi-tenaga-ahli" name="filter_provinsi_tenaga_ahli" required>
								<option selected disabled>Pilih Provinsi</option>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="filterJabkerTenagaAhli">Jabatan Kerja *</label>
							<select class="form-control" id="filter-jabatan-kerja-tenaga-ahli" name="filter_jabatan_kerja_tenaga_ahli"
								aria-placeholder="Pilih status kegiatan" required>
								<option selected disabled>Pilih Jabatan Kerja</option>
							</select>
						</div>
						<div class="menu-divider"></div>
						<button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan" id="btn-filter-tenaga-ahli">Terapkan
							Filter</button>
						<button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
							data-dismiss="modal">Batal</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End modal filter tenaga ahli -->

	<!-- Tambah Tenaga Ahli -->
	<div class="modal fade bd-example-modal-lg" id="modal-tambah-tenaga-ahli" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalCenterTitle">Tambah Tenaga Ahli</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<form method="POST" action="<?= base_url()?>"
						enctype="multipart/form-data">

						<div class="form-group py-2">
							<label for="akunKegiatan">Akun Kegiatan*</label>
							<select class="form-control" id="akun-kegiatan" name="id_akun_kegiatan" required>
								<option selected disabled>Pilih akun kegiatan</option>
								<?php if($akun_kegiatan != null):
								foreach ($akun_kegiatan as $row):?>
								<option value="<?=$row['id_akun_kegiatan']?>"><?= $row['akun_kegiatan']?></option>
								<?php endforeach; endif?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="jenisKegiatan">Jenis kegiatan *</label>
							<select class="form-control" id="jenis-kegiatan" name="id_jenis_kegiatan" required>
								<option selected disabled>Pilih jenis kegiatan</option>
								<?php if($jenis_kegiatan != null):
								foreach ($jenis_kegiatan as $row):?>
								<option value="<?=$row['id_jenis_kegiatan']?>"><?= $row['jenis_kegiatan']?></option>
								<?php endforeach; endif?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="bannerKegiatan">Banner Kegiatan *</label>
							<div id="profile-container">
								<image id="banner-image"
									src="<?= base_url('assets/icons/pupr-add-image-icon.svg') ?>" />
								<input id="banner-kegiatan" type="file" name="foto_banner_kegiatan" id="bannerKegiatan"
									placeholder="Photo" alt="Pilih Foto" required="" capture>
							</div>
						</div>
						<div class="form-group py-2">
							<label for="namaKegiatan">Nama Kegiatan *</label>
							<input type="text" class="form-control" id="nama-kegiatan" name="judul_kegiatan"
								placeholder="Contoh: Kegiatan Pelatihan" required>
						</div>
						<div class="form-group py-2">
							<label for="deskripsiKegiatan">Deskripsi Kegiatan *</label>
							<textarea type="text" class="form-control" id="deskripsi-kegiatan" name="deskripsi_kegiatan"
								placeholder="Contoh: Ini adalah deskripsi kegiatan pelatihan" required></textarea>
						</div>
						<div class="row">
							<div class="col">
								<div class="form-group py-2">
									<label for="tanggalMulaikegiatan">Tanggal Mulai *</label>
									<input type="text" class="form-control js-daterangepicker"
										id="tanggal-mulai-kegiatan" data-drops="up" name="tanggal_kegiatan" value=""
										placeholder="Pilih tanggal kegiatan" required>
									<small id="tanggal-mulai-kegiatan" class="form-text text-muted">
										Tanggal mulai kegiatan
									</small>
								</div>
							</div>
							<div class="col">
								<div class="form-group py-2">
									<label for="tanggalSelesaikegiatan">Tanggal Selesai *</label>
									<input type="text" class="form-control js-daterangepicker"
										id="tanggal-selesai-kegiatan" data-drops="up" name="tanggal_kegiatan_selesai"
										value="" placeholder="Pilih tanggal kegiatan" required>
									<small id="tanggal-selesai-kegiatan" class="form-text text-muted">
										Tanggal selesai kegiatan
									</small>
								</div>
							</div>
						</div>
						<div class="form-group py-2">
							<label for="provinsiKegiatan">Provinsi kegiatan *</label>
							<select class="form-control" id="provinsi-kegiatan" name="id_provinsi"
								onChange="getState(this.value);" required>
								<option selected disabled>Pilih Provinsi</option>
								<?php foreach ($provinsi as $row) : ?>
								<option value="<?= $row['id_provinsi']?>"><?= $row['provinsi']?></option>
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
							<textarea type="text" class="form-control" id="lokasi-kegiatan" name="lokasi_kegiatan"
								placeholder="Contoh: Jalan demang lebar daun" required></textarea>
						</div>
						<div class="form-group py-2">
							<label for="statusKegiatan">Status kegiatan *</label>
							<select class="form-control" id="status-kegiatan" name="status_kegiatan"
								aria-placeholder="Pilih status kegiatan" required>
								<option selected disabled>Pilih status kegiatan</option>
								<?php if($status_kegiatan != null):
								foreach ($status_kegiatan as $row):?>
								<option value="<?=$row['id_status_kegiatan']?>"><?= $row['status_kegiatan']?></option>
								<?php endforeach; endif?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="instrukturKegiatan">Instruktur kegiatan *</label>
							<select class="form-control selectpicker" id="instruktur-kegiatan"
								name="id_instruktur_kegiatan[]" aria-placeholder="Pilih instruktur kegiatan" multiple
								data-live-search="true" required>
								<?php if($instruktur != null):
								foreach ($instruktur as $row):?>
								<option value="<?=$row['id_tenaga_ahli']?>"><?= $row['nama_lengkap']?></option>
								<?php endforeach; endif?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="assesorKegiatan">Assesor kegiatan *</label>
							<select class="form-control selectpicker" id="assesor-kegiatan" name="id_asesor_kegiatan[]"
								aria-placeholder="Pilih assesor kegiatan" multiple data-live-search="true" required>
								<?php if($asesor != null):
								foreach ($asesor as $row):?>
								<option value="<?=$row['id_tenaga_ahli']?>"><?= $row['nama_lengkap']?></option>
								<?php endforeach; endif?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="fileMateriKegiatan">Materi kegiatan</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="file-materi-kegiatan"
									name="file_materi_kegiatan">
								<label class="custom-file-label" for="validatedCustomFile">Pilih file materi...</label>
								<small id="file-materi-kegiatan" class="form-text text-muted">
									File materi adalah opsional
								</small>
							</div>
						</div>

						<div class="menu-divider"></div>
						<button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Tambah
							Kegiatan</button>
						<button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
							data-dismiss="modal">Batal</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End modal tambah tenaga ahli -->

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
								<?php if($akun_kegiatan != null):
								foreach ($akun_kegiatan as $row2): ?>
								<option value="<?=$row2['id_akun_kegiatan']?>"><?= $row2['akun_kegiatan']?></option>
								<?php endforeach; endif;?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="editJenisKegiatan">Jenis kegiatan *</label>
							<select class="form-control" id="edit-jenis-kegiatan" name="id_jenis_kegiatan" required>
								<option selected disabled>Pilih jenis kegiatan</option>
								<?php if($jenis_kegiatan != null):
								foreach ($jenis_kegiatan as $row2):?>
								<option value="<?=$row2['id_jenis_kegiatan']?>"><?= $row2['jenis_kegiatan']?></option>
								<?php endforeach; endif;?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="editBannerKegiatan">Banner Kegiatan *</label>
							<div id="profile-container">
								<image id="banner-image"
									src="<?= base_url('assets/icons/pupr-add-image-icon.svg') ?>" />
								<input id="edit-banner-kegiatan" type="file" name="edit_foto_banner_kegiatan"
									placeholder="Photo" alt="Pilih Foto" required="" capture>
							</div>
						</div>
						<div class="form-group py-2">
							<label for="editNamaKegiatan">Nama Kegiatan *</label>
							<input type="text" class="form-control" id="edit-nama-kegiatan" name="edit_judul_kegiatan"
								placeholder="Contoh: Kegiatan Pelatihan" required>
						</div>
						<div class="form-group py-2">
							<label for="editDeskripsiKegiatan">Deskripsi Kegiatan *</label>
							<textarea type="text" class="form-control" id="edit-deskripsi-kegiatan"
								name="edit_deskripsi_kegiatan"
								placeholder="Contoh: Ini adalah deskripsi kegiatan pelatihan" required></textarea>
						</div>
						<div class="row">
							<div class="col">
								<div class="form-group py-2">
									<label for="editTanggalMulaikegiatan">Tanggal Mulai *</label>
									<input type="text" class="form-control js-daterangepicker"
										id="edit-tanggal-mulai-kegiatan" data-drops="up" name="edit_tanggal_kegiatan_mulai"
										value="" placeholder="Pilih tanggal kegiatan" required>
									<small id="tanggal-mulai-kegiatan" class="form-text text-muted">
										Tanggal mulai kegiatan
									</small>
								</div>
							</div>
							<div class="col">
								<div class="form-group py-2">
									<label for="editTanggalSelesaikegiatan">Tanggal Selesai *</label>
									<input type="text" class="form-control js-daterangepicker"
										id="edit-tanggal-selesai-kegiatan" data-drops="up"
										name="edit_tanggal_kegiatan_selesai" value=""
										placeholder="Pilih tanggal kegiatan" required>
									<small id="tanggal-selesai-kegiatan" class="form-text text-muted">
										Tanggal selesai kegiatan
									</small>
								</div>
							</div>
						</div>
						<div class="form-group py-2">
							<label for="editProvinsiKegiatan">Provinsi kegiatan *</label>
							<select class="form-control" id="edit-provinsi-kegiatan" name="id_provinsi"
								onChange="getStateEdit(this.value);" required>
								<option selected disabled>Pilih Provinsi</option>
								<?php if($provinsi != null) :
									foreach ($provinsi as $row2) :?>
											<option value="<?= $row2['id_provinsi']?>"><?= $row2['provinsi']?></option>
									<?php endforeach; endif;?>
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
							<textarea type="text" class="form-control" id="edit-lokasi-kegiatan"
								name="edit_lokasi_kegiatan" placeholder="Contoh: Jalan demang lebar daun"
								required></textarea>
						</div>
						<div class="form-group py-2">
							<label for="editStatusKegiatan">Status kegiatan *</label>
							<select class="form-control" id="edit-status-kegiatan" name="status_kegiatan"
								aria-placeholder="Pilih status kegiatan" required>
								<option selected disabled>Pilih status kegiatan</option>
								<?php if($status_kegiatan != null):
								foreach ($status_kegiatan as $row2):?>
								<option value="<?=$row2['id_status_kegiatan']?>"><?= $row2['status_kegiatan']?></option>
								<?php endforeach; endif;?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="editInstrukturKegiatan">Instruktur kegiatan *</label>
							<select class="form-control selectpicker" id="edit-instruktur-kegiatan"
								name="id_instruktur_kegiatan[]" aria-placeholder="Pilih instruktur kegiatan" multiple
								data-live-search="true" required>
								<?php if($instruktur != null):
								foreach ($instruktur as $row2):?>
								<option value="<?=$row2['id_tenaga_ahli']?>"><?= $row2['nama_lengkap']?></option>
								<?php endforeach; endif?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="editAssesorKegiatan">Assesor kegiatan *</label>
							<select class="form-control selectpicker" id="edit-assesor-kegiatan" name="id_asesor_kegiatan[]"
								aria-placeholder="Pilih assesor kegiatan" multiple data-live-search="true" required>
								<?php if($asesor != null):
								foreach ($asesor as $row2):?>
								<option value="<?=$row2['id_tenaga_ahli']?>"><?= $row2['nama_lengkap']?></option>
								<?php endforeach; endif?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="editFileMateriKegiatan">Materi kegiatan</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="edit-file-materi-kegiatan"
									name="file_materi_kegiatan">
								<label class="custom-file-label" for="validatedCustomFile">Pilih file materi...</label>
								<small id="file-materi-kegiatan" class="form-text text-muted">
									File materi adalah opsional
								</small>
							</div>
						</div>

						<div class="menu-divider"></div>
						<button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Simpan
							Perubahan</button>
						<button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
							data-dismiss="modal">Batal</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End modal edit kegiatan -->

	<!-- Delete kegiatan modal -->
	<div class="modal fade bd-example-modal-lg" id="delete-kegiatan" tabindex="-1" role="dialog"
		aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
					<form method="POST" action="<?= base_url()?>" enctype="multipart/form-data">
						<div class="form-group py-2">
							<label for="fileMateriKegiatan">File Excel Tambah Kegiatan</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="file-excel-tambah-kegiatan"
									name="fileExcelTambahKegiatan">
								<label class="custom-file-label" for="validatedCustomFile">Pilih file excel...</label>
								<small id="file-excel-tambah-kegiatan" class="form-text text-muted">
									Pilih file excel tambah kegiatan
								</small>
							</div>
						</div>

						<div class="menu-divider"></div>
						<button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Import File
							Excel</button>
						<button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
							data-dismiss="modal">Batal</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End of Import Excel Tambah Kegiatan Modal -->

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
						<h1 class="h2 font-weight-bold mb-4 mt-4">Tenaga Ahli dan Mitra</h1>
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

												<div class="h5 mb-0 mr-3 text-gray-800"><?= $total_tenaga_ahli?> Tenaga Ahli</div>

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
												Total Jumlah
											</div>
											<div class="row no-gutters align-items-center">

												<div class="h5 mb-0 mr-3 text-gray-800"><?= $total_tenaga_terampil?> Mitra Terampil</div>

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
							<button class="btn btn-light btn-filter-kegiatan" data-toggle="modal"
								data-target="#modal-filter-tenaga-ahli"><img class="img-profile mr-2"
									src="<?= base_url('assets/icons/pupr-filter-icon.svg') ?>">Filter</button>
							<button class="btn btn-primary btn-add-kegiatan" data-toggle="modal"
								data-target="#modal-tambah-kegiatan"><img class="img-profile mr-2"
									src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">Tambah</button>
							<button class="btn btn-warning btn-import-kegiatan" data-toggle="modal"
								data-target="#modal-import-excel-tambah-kegiatan"><img class="img-profile mr-2"
									src="<?= base_url('assets/icons/pupr-import-icon.svg') ?>">Import</button>
							<button class="btn btn-success btn-import-kegiatan"><img class="img-profile mr-2"
									src="<?= base_url('assets/icons/pupr-import-icon.svg') ?>">Export</button>
						</div>
						<div class="">
							<button class="btn btn-danger btn-import-kegiatan"><img class="img-profile mr-2"
									src="<?= base_url('assets/icons/pupr-download-icon.svg') ?>">Download Format Excel</button>
						</div>
						</div>
						<div class="card-body">
                            <div class="pb-4 pt-2">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#tenaga-ahli" role="tab" data-toggle="tab">Tenaga Ahli</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#mitra-terampil" role="tab" data-toggle="tab">Mitra Terampil</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content">
                                <div class="tab-pane fade active show" role="tabpanel" id="tenaga-ahli">
                                    <table id="tenaga_ahli_table" class="display">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal lahir</th>
                                                <th>Email</th>
                                                <th>Nomor HP</th>
                                                <th>Nomor Telepon Rumah</th>
                                                <th>NIK</th>
                                                <th>Alamat</th>
                                                <th>Provinsi</th>
                                                <th>Kabupaten / kota</th>
                                                <th>Ketenagakerjaan</th>
                                                <th>Keahlian</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
								
                                <div class="tab-pane fade" role="tabpanel" id="mitra-terampil">
									<table id="mitra_terampil_table" class="display">
										<thead>
											<tr>
												<th>No</th>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal lahir</th>
                                                <th>Email</th>
                                                <th>Nomor HP</th>
                                                <th>Nomor Telepon Rumah</th>
                                                <th>NIK</th>
                                                <th>Alamat</th>
                                                <th>Provinsi</th>
                                                <th>Kabupaten / kota</th>
												<th>Ketenagakerjaan</th>
                                                <th>Keterampilan</th>
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
