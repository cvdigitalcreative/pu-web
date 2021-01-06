<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("components/head.php")?>
</head>

<body id="page-top">

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
					<form method="POST" action="">
						<div class="form-group py-2">
							<label for="akunKegiatan">Akun Kegiatan*</label>
							<select class="form-control" id="akun-kegiatan" name="akunKegiatan" required>
								<option selected>Data Dari API</option>
								<option>Vokasi</option>
								<option>Pelatihan dan Uji Sertifikasi Skema I</option>
								<option>Pelatihan dan Uji Sertifikasi Skema II</option>
								<option>Fasilitasi Pembinaan Jasa Konstruksi</option>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="jenisKegiatan">Jenis kegiatan *</label>
							<select class="form-control" id="jenis-kegiatan" name="jenisKegiatan" required>
								<option selected>Data Dari API</option>
								<option>Bintek</option>
								<option>Pelatihan</option>
								<option>Pembekalan dan Uji Sertifikasi</option>
								<option>Uji Sertifikasi</option>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="bannerKegiatan">Banner Kegiatan *</label>
							<div id="profile-container">
								<image id="banner-image" src="<?=base_url('assets/icons/pupr-add-image-icon.svg')?>" />
								<input id="banner-kegiatan" type="file" name="bannerKegiatan" id="bannerKegiatan"
									placeholder="Photo" alt="Pilih Foto" required="" capture>
							</div>
						</div>
						<div class="form-group py-2">
							<label for="namaKegiatan">Nama Kegiatan *</label>
							<input type="text" class="form-control" id="nama-kegiatan" name="namaKegiatan"
								placeholder="Contoh: Kegiatan Pelatihan" required>
						</div>
						<div class="form-group py-2">
							<label for="deskripsiKegiatan">Deskripsi Kegiatan *</label>
							<textarea type="text" class="form-control" id="deskripsi-kegiatan" name="deskripsiKegiatan"
								placeholder="Contoh: Ini adalah deskripsi kegiatan pelatihan" required></textarea>
						</div>
						<div class="row">
							<div class="col">
								<div class="form-group py-2">
									<label for="tanggalMulaikegiatan">Tanggal Mulai *</label>
									<input type="text" class="form-control js-daterangepicker"
										id="tanggal-mulai-kegiatan" data-drops="up" name="tanggalMulaikegiatan" value=""
										placeholder="Pilih tanggal kegiatan" required>
									<small id="file-materi-kegiatan" class="form-text text-muted">
										Tanggal mulai kegiatan
									</small>
								</div>
							</div>
							<div class="col">
								<div class="form-group py-2">
									<label for="tanggalSelesaikegiatan">Tanggal Selesai *</label>
									<input type="text" class="form-control js-daterangepicker"
										id="tanggal-selesai-kegiatan" data-drops="up" name="tanggalSelesaikegiatan"
										value="" placeholder="Pilih tanggal kegiatan" required>
									<small id="file-materi-kegiatan" class="form-text text-muted">
										Tanggal selesai kegiatan
									</small>
								</div>
							</div>
						</div>
						<div class="form-group py-2">
							<label for="provinsiKegiatan">Provinsi kegiatan *</label>
							<select class="form-control" id="provinsi-kegiatan" name="provinsiKegiatan" required>
								<option selected>Data dari API</option>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="kotaKegiatan">Kota kegiatan *</label>
							<select class="form-control" id="kota-kegiatan" name="kotaKegiatan" required>
								<option selected>Data dari API</option>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="lokasiKegiatan">Lokasi Kegiatan *</label>
							<textarea type="text" class="form-control" id="lokasi-kegiatan" name="lokasiKegiatan"
								placeholder="Contoh: Jalan demang lebar daun" required></textarea>
						</div>
						<div class="form-group py-2">
							<label for="statusKegiatan">Status kegiatan *</label>
							<select class="form-control" id="status-kegiatan" name="statusKegiatan"
								aria-placeholder="Pilih status kegiatan" required>
								<option selected>Belum dimulai</option>
								<option>Sudah dimulai</option>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="fileMateriKegiatan">Materi kegiatan</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="file-materi-kegiatan"
									name="fileMateriKegiatan" required>
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

	<!-- Page Wrapper -->
	<div id="wrapper">

		<?php $this->load->view("components/sidebar.php")?>

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<?php $this->load->view("components/navbar.php", $header)?>

				<!-- Begin Page Content -->
				<div class="container-fluid">

					<!-- Page Heading -->
					<div class="d-sm-flex align-items-center justify-content-between mb-4">
						<h1 class="h2 font-weight-bold mb-4 mt-4">Kalender Kegiatan</h1>
					</div>

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

												<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $jumlah_seluruh_kegiatan?> Kegiatan</div>

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

												<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $jumlah_kegiatan_selesai?> Kegiatan</div>

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

												<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $jumlah_kegiatan_berjalan?> Kegiatan</div>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="container-fluid mt-4 container-background">
						<div class="col button-field">
							<button class="btn btn-light btn-filter-kegiatan"><img class="img-profile mr-2"
									src="<?=base_url('assets/icons/pupr-filter-icon.svg')?>">Filter</button>
							<button class="btn btn-primary btn-add-kegiatan" data-toggle="modal"
								data-target="#modal-tambah-kegiatan"><img class="img-profile mr-2"
									src="<?=base_url('assets/icons/pupr-add-icon.svg')?>">Add Kegiatan</button>
							<button class="btn btn-outline-primary btn-import-kegiatan"><img class="img-profile mr-2"
									src="<?=base_url('assets/icons/pupr-import-icon.svg')?>">Import Kegiatan</button>
						</div>
						<table id="kalender_kegiatan" class="display">
							<thead>
								<tr>
									<th>No</th>
									<th>Tanggal Kegiatan</th>
									<th>Jenis Kegiatan</th>
									<th>Akun Kegiatan</th>
									<th>Status Kegiatan</th>
									<th>Nama Kegiatan</th>
									<th>Banner Kegiatan</th>
									<th>Instruktur Kegiatan</th>
									<th>Assesor Kegiatan</th>
									<th>Provinsi Kegiatan</th>
									<th>Kota Kegiatan</th>
									<th>Lokasi Kegiatan</th>
									<th>Jumlah Peserta</th>
									<th>Materi Kegiatan</th>
									<th>Aksi</th>
								</tr>
							</thead>
						</table>
					</div>

				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->

			<?php $this->load->view("components/footer.php")?>

		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<?php $this->load->view("components/scrolltotop.php")?>

	<?php $this->load->view("components/modal.php")?>

	<?php $this->load->view("components/js.php")?>

</body>

</html>
