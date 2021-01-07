<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("components/head.php") ?>
</head>

<body id="page-top">

	<!-- Tambah Kegiatan Modal -->
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
					<form method="POST" action="<?= base_url()?>"
						enctype="multipart/form-data">
						<div class="form-group py-2">
							<label for="judulSkkni">Judul Skkni *</label>
							<input type="text" class="form-control" id="judul-skkni" name="judul_skkni"
								placeholder="Contoh: SKKNI Kegiatan Pelatihan" required>
						</div>
						<div class="form-group py-2">
							<label for="deskripsiSkkni">Deskripsi Skkni *</label>
							<textarea type="text" class="form-control" id="deskripsi-skkni" name="deskripsi_skkni"
								placeholder="Contoh: Ini adalah deskripsi skkni kegiatan pelatihan" required></textarea>
						</div>
						<div class="form-group py-2">
							<label for="fileSkkni">File Skkni *</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="file-skkni"
									name="file_skkni" required>
								<label class="custom-file-label" for="validatedCustomFile">Pilih file skkni...</label>
								<small id="file_skkni" class="form-text text-muted">
									Pilih file skkni yang sesuai!
								</small>
							</div>
						</div>
                        <div class="form-group py-2">
							<label for="namaPengirimSkkni">Pengirim *</label>
							<select class="form-control" id="nama-pengirim-skkni" name="nama_pengirim_skkni" required>
								<option selected disabled>Pilih nama pengirim</option>
							</select>
						</div>
						<div class="menu-divider"></div>
						<button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Tambah
							Skkni</button>
						<button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
							data-dismiss="modal">Batal</button>
					</form>
				</div>
			</div>
		</div>
	</div>

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
						<h1 class="h2 font-weight-bold mb-4 mt-4">SKKNI</h1>
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
													<?= $total_ska?></div>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="container-fluid mt-2 container-background">
						<div class="col button-field">
							<button class="btn btn-primary btn-add-kegiatan" data-toggle="modal"
								data-target="#modal-tambah-skkni"><img class="img-profile mr-2"
									src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">Add SKKNI</button>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table id="skkni_table" class="display">
									<thead>
										<tr>
											<th>No</th>
											<th>Judul SKKNI</th>
											<th>Deskripsi SKKNI</th>
											<th>Nama File SKKNI</th>
											<th>File SKKNI</th>
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
