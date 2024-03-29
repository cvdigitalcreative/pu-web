<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("components/head.php") ?>
</head>

<body id="page-top">

	<!-- Tambah administrasi Modal -->
	<div class="modal fade bd-example-modal-lg" id="modal-tambah-administrasi-kegiatan" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalCenterTitle">Tambah Administrasi Kegiatan</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" enctype="multipart/form-data">
						<div class="form-group py-2">
							<label for="judulAdministrasiKegiatan">Judul Administrasi Kegiatan *</label>
							<input type="text" class="form-control" id="judul-administrasi-kegiatan" name="judul_administrasi_kegiatan"
								placeholder="Contoh: Administrasi kegiatan pelatihan" required>
						</div>
						<div class="form-group py-2">
							<label for="deskripsiAdministrasiKegiatan">Deskripsi Administrasi Kegiatan *</label>
							<textarea type="text" data-autoresize class="form-control" id="deskripsi-administrasi-kegiatan" name="deskripsi_administrasi_kegiatan"
								placeholder="Contoh: Ini adalah deskripsi administrasi kegiatan pelatihan" required></textarea>
						</div>
						<div class="form-group py-2">
							<label for="fileAdministrasiKegiatan">File Administrasi Kegiatan *</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="file-administrasi-kegiatan"
									name="file_administrasi_kegiatan" required>
								<label class="custom-file-label" id="custom-file-label-file-administrasi-kegiatan" for="file-administrasi-kegiatan">Pilih file administrasi kegiatan...</label>
								<small id="file-administrasi-kegiatan" class="form-text text-muted">
									Pilih file administrasi kegiatan yang sesuai!
								</small>
							</div>
						</div>
						<div class="menu-divider"></div>
						<button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Tambah
                            Administrasi Kegiatan</button>
						<button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
							data-dismiss="modal">Batal</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Edit administrasi Modal -->
	<div class="modal fade bd-example-modal-lg" id="modal-edit-administrasi-kegiatan" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalCenterTitle">Edit Administrasi Kegiatan</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" action=""
						enctype="multipart/form-data">
						<div class="form-group py-2">
							<label for="judulAdministrasiKegiatan">Judul Administrasi Kegiatan *</label>
							<input type="text" class="form-control" id="edit-judul-administrasi-kegiatan" name="judul_administrasi_kegiatan"
								placeholder="Contoh: Administrasi kegiatan pelatihan" required>
						</div>
						<div class="form-group py-2">
							<label for="deskripsiAdministrasiKegiatan">Deskripsi Administrasi Kegiatan *</label>
							<textarea type="text" data-autoresize class="form-control" id="edit-deskripsi-administrasi-kegiatan" name="deskripsi_administrasi_kegiatan"
								placeholder="Contoh: Ini adalah deskripsi administrasi kegiatan pelatihan" required></textarea>
						</div>
						<div class="form-group py-2">
							<label for="fileAdministrasiKegiatan">File Administrasi Kegiatan</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="edit-file-administrasi-kegiatan"
									name="file_administrasi_kegiatan">
								<label class="custom-file-label" id="custom-file-label-edit-file-administrasi-kegiatan" for="edit-file-administrasi-kegiatan">Pilih file administrasi kegiatan...</label>
								<small id="file-administrasi-kegiatan" class="form-text text-muted">
									Pilih file administrasi kegiatan yang sesuai!
								</small>
							</div>
						</div>
						<div class="menu-divider"></div>
						<button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Edit
                            Administrasi Kegiatan</button>
						<button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
							data-dismiss="modal">Batal</button>
					</form>
				</div>
			</div>
		</div>
	</div>

		<!-- Delete Administrasi modal -->
		<div class="modal fade bd-example-modal-lg" id="modal-delete-administrasi-kegiatan" tabindex="-1" role="dialog"
		aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle">Hapus administrasi kegiatan Ini?</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Pastikan dengan benar bahwa administrasi kegiatan ini ingin anda hapus!
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
	<!-- End modal delete administrasi -->

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
						<h1 class="h2 font-weight-bold mb-4 mt-4">Administrasi Kegiatan</h1>
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
													<?=$total_administrasi_kegiatan?>
                        </div>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="container-fluid mt-2 container-background">
						<div class="col button-field">
							<button class="btn btn-primary btn-add-kegiatan" id="btn-add-administrasi-kegiatan"><img class="img-profile mr-2"
									src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">Add Administrasi Kegiatan</button>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table id="administrasi_kegiatan_table" class="display">
									<thead>
										<tr>
											<th>No</th>
											<th>Judul Administrasi Kegiatan</th>
											<th>Deskripsi Administrasi Kegiatan</th>
											<th>File Administrasi Kegiatan</th>
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
