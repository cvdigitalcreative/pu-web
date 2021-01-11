<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("components/head.php") ?>
</head>

<body id="page-top">

	<!-- Tambah Kegiatan Modal -->
	<div class="modal fade bd-example-modal-lg" id="modal-tambah-buku-saku" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalCenterTitle">Tambah Buku Saku</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" action="<?= base_url() ?>Buku_saku/tambah_buku_saku_action" enctype="multipart/form-data">
						<div class="form-group py-2">
							<label for="judulBukuSaku">Judul Buku Saku *</label>
							<input type="text" class="form-control" id="judul-buku-saku" name="judul_buku_saku" placeholder="Contoh: Buku Kegiatan Pelatihan" required>
						</div>
						<div class="form-group py-2">
							<label for="deskripsiBukuSaku">Deskripsi Buku Saku *</label>
							<textarea type="text" class="form-control" id="deskripsi-buku-saku" name="deskripsi_buku_saku" placeholder="Contoh: Ini adalah deskripsi buku saku kegiatan pelatihan" required></textarea>
						</div>
						<div class="form-group py-2">
							<label for="fileBukuSaku">File Buku Saku *</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="file-buku-saku" name="file_buku_saku" required>
								<label class="custom-file-label" for="validatedCustomFile">Pilih file buku saku...</label>
								<small id="file_buku_saku" class="form-text text-muted">
									Pilih file buku saku yang sesuai!
								</small>
							</div>
						</div>
						<div class="menu-divider"></div>
						<button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Tambah
							Buku Saku</button>
						<button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan" data-dismiss="modal">Batal</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Edit Buku Saku Modal -->
	<div class="modal fade bd-example-modal-lg" id="modal-edit-buku-saku" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalCenterTitle">Edit Buku Saku</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" action="" enctype="multipart/form-data">
						<div class="form-group py-2">
							<label for="judulBukuSaku">Judul Buku Saku *</label>
							<input type="text" class="form-control" id="edit-judul-buku-saku" name="judul_buku_saku" placeholder="Contoh: Buku Kegiatan Pelatihan" required>
						</div>
						<div class="form-group py-2">
							<label for="deskripsiBukuSaku">Deskripsi Buku Saku *</label>
							<textarea type="text" class="form-control" id="edit-deskripsi-buku-saku" name="deskripsi_buku_saku" placeholder="Contoh: Ini adalah deskripsi buku saku kegiatan pelatihan" required></textarea>
						</div>
						<div class="form-group py-2">
							<label for="fileBukuSaku">File Buku Saku *</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="edit-file-buku-saku" name="file_buku_saku">
								<label class="custom-file-label" for="validatedCustomFile">Pilih file buku saku...</label>
								<small id="file_buku_saku" class="form-text text-muted">
									Pilih file buku saku yang sesuai!
								</small>
							</div>
						</div>
						<div class="menu-divider"></div>
						<button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Edit
							Buku Saku</button>
						<button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan" data-dismiss="modal">Batal</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Delete buku saku modal -->
	<div class="modal fade bd-example-modal-lg" id="modal-delete-buku-saku" tabindex="-1" role="dialog"
		aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle">Hapus buku saku Ini?</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Pastikan dengan benar bahwa buku saku ini ingin anda hapus!
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
	<!-- End modal delete buku saku -->

<!-- Modal Notification -->
<?php if ($this->session->flashdata('success') || $this->session->flashdata('APImessage')): ?>
		<div class="modal fade" id="notification-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
					<?php if($this->session->flashdata('success')):?>
						<h5 class="modal-title" id="exampleModalLabel">Information: Success</h5>
					<?php elseif($this->session->flashdata('APImessage')):?>
						<h5 class="modal-title" id="exampleModalLabel">Information: Error</h5>
						<?php endif?>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body" id="modalMessage">
					<?php if($this->session->flashdata('success')):?>
						<?= $this->session->flashdata('success'); ?>
					<?php elseif($this->session->flashdata('APImessage')):?>
						<?= $this->session->flashdata('APImessage'); ?>
						<?php endif;?>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	<?php endif ?>
	<!-- End modal notification -->
	
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
						<h1 class="h2 font-weight-bold mb-4 mt-4">Buku Saku</h1>
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

												<div class="h5 mb-0 mr-3 text-gray-800">
													<?= $total_buku_saku?></div>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="container-fluid mt-2 container-background">
						<div class="col button-field">
							<button class="btn btn-primary btn-add-kegiatan" data-toggle="modal" data-target="#modal-tambah-buku-saku"><img class="img-profile mr-2" src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">Add Buku Saku</button>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table id="buku_saku_table" class="display">
									<thead>
										<tr>
											<th>No</th>
											<th>Judul Buku Saku</th>
											<th>Deskripsi Buku Saku</th>
											<th>Nama File Buku Saku</th>
											<th>File Buku Saku</th>
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