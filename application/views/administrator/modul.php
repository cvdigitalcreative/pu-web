<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("components/head.php") ?>
</head>

<body id="page-top">

	<!-- Tambah Modul Modal -->
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
					<form method="POST" action="<?= base_url() ?>Modul/tambah_modul_action" enctype="multipart/form-data">
						<div class="form-group py-2">
							<label for="judulModul">Judul Modul *</label>
							<input type="text" class="form-control" id="judul-modul" name="judul_modul" placeholder="Contoh: Modul Kegiatan Pelatihan" required>
						</div>
						<div class="form-group py-2">
							<label for="deskripsiModul">Deskripsi Modul *</label>
							<textarea type="text" class="form-control" id="deskripsi-modul" name="deskripsi_modul" placeholder="Contoh: Ini adalah deskripsi modul kegiatan pelatihan" required></textarea>
						</div>
						<div class="form-group py-2">
							<label for="fileModul">File Modul *</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="file-modul" name="file_modul" required>
								<label class="custom-file-label" for="validatedCustomFile">Pilih file modul...</label>
								<small id="file_modul" class="form-text text-muted">
									Pilih file modul yang sesuai!
								</small>
							</div>
						</div>
						<div class="form-group py-2">
							<label for="namaPengirimModul">Kategori Modul *</label>
							<select class="form-control" id="nama-pengirim-modul" name="id_kategori_modul" required>
								<option selected disabled>Pilih kategori modul</option>
								<?php if ($kategori_modul != null) :
									foreach ($kategori_modul as $row) : ?>
										<option value="<?= $row['id_kategori_modul'] ?>"><?= $row['kategori_modul'] ?></option>
								<?php endforeach;
								endif ?>
							</select>
						</div>
						<div class="menu-divider"></div>
						<button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Tambah
							Modul</button>
						<button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan" data-dismiss="modal">Batal</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Edit Modul Modal -->
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
							<label for="judulModul">Judul Modul *</label>
							<input type="text" class="form-control" id="edit-judul-modul" name="judul_modul" placeholder="Contoh: Modul Kegiatan Pelatihan" required>
						</div>
						<div class="form-group py-2">
							<label for="deskripsiModul">Deskripsi Modul *</label>
							<textarea type="text" class="form-control" id="edit-deskripsi-modul" name="deskripsi_modul" placeholder="Contoh: Ini adalah deskripsi modul kegiatan pelatihan" required></textarea>
						</div>
						<div class="form-group py-2">
							<label for="fileModul">File Modul *</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="edit-file-modul" name="file_modul">
								<label class="custom-file-label" for="validatedCustomFile">Pilih file modul...</label>
								<small id="file_modul" class="form-text text-muted">
									Pilih file modul yang sesuai!
								</small>
							</div>
						</div>
						<div class="form-group py-2">
							<div class="kategori-modul">
								<label for="namaPengirimModul">Kategori Modul *</label>
								<select class="form-control" id="edit-kategori-modul" name="id_kategori_modul" required>
									<option selected disabled>Pilih kategori modul</option>
									<?php if ($kategori_modul != null) :
										foreach ($kategori_modul as $row) : ?>
											<option value="<?= $row['id_kategori_modul'] ?>"><?= $row['kategori_modul'] ?></option>
									<?php endforeach;
									endif ?>
								</select>
							</div>
						</div>
						<input type="hidden" name="id_kategori_modul_old" id="edit-id-kategori-modul-old">
						<div class="menu-divider"></div>
						<button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Edit
							Modul</button>
						<button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan" data-dismiss="modal">Batal</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Delete Modul modal -->
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
					Pastikan dengan benar bahwa modul ini ingin anda hapus!
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
						<h1 class="h2 font-weight-bold mb-4 mt-4">Modul</h1>
					</div>

					<!-- Alert -->
					<?php if ($this->session->flashdata('success')) : ?>
						<div class="alert alert-success mb-4" role="alert">
							<?= $this->session->flashdata('success') ?>
						</div>
					<?php elseif ($this->session->flashdata('APImessage')) : ?>
						<div class="alert alert-danger mb-4" role="alert">
							<?= $this->session->flashdata('APImessage') ?>
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
													<?= $total_modul ?></div>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="container-fluid mt-2 container-background">
						<div class="col button-field">
							<button class="btn btn-primary btn-add-kegiatan" data-toggle="modal" data-target="#modal-tambah-modul"><img class="img-profile mr-2" src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">Add Modul</button>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table id="modul_table" class="display">
									<thead>
										<tr>
											<th>No</th>
											<th>Judul Modul</th>
											<th>Deskripsi Modul</th>
											<th>Kategori Modul</th>
											<th>Nama File Modul</th>
											<th>File Modul</th>
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