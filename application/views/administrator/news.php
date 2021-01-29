<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("components/head.php") ?>
</head>

<body id="page-top">

	<!-- Tambah Modul Modal -->
	<div class="modal fade bd-example-modal-lg" id="modal-tambah-berita" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalCenterTitle">Tambah Berita</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" enctype="multipart/form-data">
						<div class="form-group py-2">
							<label for="bannerKegiatan">File Gambar *</label>
							<div id="profile-container">
								<image id="banner-image" src="<?= base_url('assets/icons/pupr-add-image-icon.svg') ?>" />
								<input id="banner-kegiatan" type="file" name="file_gambar_berita" id="bannerKegiatan" placeholder="Photo" alt="Pilih Foto" accept=".jpg, .jpeg, .png" required="" capture>
							</div>
						</div>
						<div class="form-group py-2">
							<label for="judulBerita">Judul *</label>
							<input type="text" class="form-control" id="judul-berita" name="judul_berita" placeholder="Masukkan judul berita yang akan diterbitkan" required>
						</div>
						<div class="form-group py-2">
							<label for="deskripsiBerita">Deskripsi *</label>
							<textarea type="text" data-autoresize rows="4" class="form-control" id="deskripsi-berita" name="deskripsi_berita" placeholder="Masukkan deskripsi / isi berita yang akan diterbitkan" required></textarea>
						</div>
						<div class="menu-divider"></div>
						<button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Tambah
							Berita</button>
						<button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan" data-dismiss="modal">Batal</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Detail Berita Modal -->
	<div class="modal fade bd-example-modal-md" id="modal-detail-berita" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-md modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalCenterTitle">Detail Berita</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
				<div id="detail-berita-container">
					<image id="banner-image-detail-berita" src="" />
				</div>
					<div class="form-group py-2">
						<label for="judulBerita">Judul</label>
						<div id="detail-judul-berita">
						</div>
					</div>
					<div class="form-group py-2">
						<label for="deskripsiBerita">Deskripsi</label>
						<div id="detail-deskripsi-berita">
						</div>
					</div>
					<hr>
					<div class="menu-divider"></div>
					<button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Edit Berita Modal -->
	<div class="modal fade bd-example-modal-lg" id="modal-edit-berita" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalCenterTitle">Edit Berita</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" action="" enctype="multipart/form-data">
						<div class="form-group py-2">
							<label for="bannerKegiatan">File Gambar</label>
							<div id="profile-container">
								<image id="banner-image-edit-berita" src="" />
								<input id="banner-edit-berita" type="file" name="file_gambar_berita" id="bannerKegiatan" placeholder="Photo" alt="Pilih Foto" accept=".jpg, .jpeg, .png" capture>
							</div>
						</div>
						<div class="form-group py-2">
							<label for="judulBerita">Judul *</label>
							<input type="text" class="form-control" id="edit-judul-berita" name="judul_berita" placeholder="Masukkan judul berita yang akan diterbitkan" required>
						</div>
						<div class="form-group py-2">
							<label for="deskripsiBerita">Deskripsi *</label>
							<textarea type="text" data-autoresize rows="4" class="form-control" id="edit-deskripsi-berita" name="deskripsi_berita" placeholder="Masukkan deskripsi / isi berita yang akan diterbitkan" required></textarea>
						</div>
						<div class="menu-divider"></div>
						<button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Edit
							Berita</button>
						<button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan" data-dismiss="modal">Batal</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Delete Modul modal -->
	<div class="modal fade bd-example-modal-lg" id="modal-delete-berita" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle">Hapus Berita Ini?</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Pastikan dengan benar bahwa berita ini ingin anda hapus!
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
						<h1 class="h2 font-weight-bold mb-4 mt-4">Berita</h1>
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
													<?= $total_berita ?></div>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="container-fluid mt-2 container-background">
						<div class="col button-field">
							<button class="btn btn-primary btn-add-kegiatan" id="btn-add-berita"><img class="img-profile mr-2" src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">Add Berita</button>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table id="berita_table" class="display">
									<thead>
										<tr>
											<th>No</th>
											<th>Judul Berita</th>
											<th>Deskripsi Berita</th>
											<th>File Gambar Berita</th>
											<th>Tanggal Dibuat</th>
											<th>Tanggal Update Terakhir</th>
											<th>Pengirim</th>
											<th>Aksi</th>
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