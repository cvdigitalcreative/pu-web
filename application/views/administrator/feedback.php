<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("components/head.php") ?>
</head>

<body id="page-top">

	<!-- Edit Modul Modal -->
	<div class="modal fade bd-example-modal-lg" id="modal-reply-feedback" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalCenterTitle">Detail Kotak Saran</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" action="" enctype="multipart/form-data">
						<div class="form-group py-2">
							<label for="namaTenagaAhli">Pengirim</label>
							<div id="pengirim-feedback"></div>
						</div>
						<div class="form-group py-2">
							<label for="namaTenagaAhli">Judul</label>
							<div id="judul-feedback"></div>
						</div>
						<div class="form-group py-2">
							<label for="judulModul">Deskripsi</label>
							<div id="deskripsi-feedback"></div>
						</div>
						<div class="form-group py-2">
							<label for="judulModul">Jawaban *</label>
							<textarea type="text" data-autoresize class="form-control" id="jawaban-feedback" name="jawaban" placeholder="Masukkan jawaban Anda disini" required></textarea>
						</div>

						<div class="menu-divider"></div>
						<button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Kirim Jawaban
						</button>
						<button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan" data-dismiss="modal">Batal</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- Edit Modul Modal -->
	<div class="modal fade bd-example-modal-lg" id="modal-edit-jawaban-feedback" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalCenterTitle">Detail Kotak Saran</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
						<div class="form-group py-2">
							<label for="namaTenagaAhli">Pengirim</label>
							<div id="answered-pengirim-feedback" class="text-secondary"></div>
						</div>
						<div class="form-group py-2">
							<label for="namaTenagaAhli">Judul</label>
							<div id="answered-judul-feedback"></div>
						</div>
						<div class="form-group py-2">
							<label for="judulModul">Deskripsi</label>
							<div id="answered-deskripsi-feedback"></div>
						</div>
						<div class="form-group py-2">
							<label for="judulModul">Jawaban</label>
							<div id="answered-jawaban-feedback"></div>
						</div>

						<div class="menu-divider"></div>
						<button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan" data-dismiss="modal">Batal</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Delete Modul modal -->
	<div class="modal fade bd-example-modal-lg" id="modal-delete-feedback" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle">Hapus Kotak Saran Ini?</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Pastikan dengan benar bahwa kotak saran ini ingin anda hapus!
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
						<h1 class="h2 font-weight-bold mb-4 mt-4">Kotak Saran</h1>
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
													<?= $total_feedback ?></div>

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
												Belum Dijawab
											</div>
											<div class="row no-gutters align-items-center">

												<div class="h5 mb-0 mr-3 text-gray-800">
													<?= $total_unanswered_feedback ?></div>

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
												Sudah Dijawab
											</div>
											<div class="row no-gutters align-items-center">

												<div class="h5 mb-0 mr-3 text-gray-800">
													<?= $total_answered_feedback ?></div>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="container-fluid mt-2 container-background">

						<div class="card-body">
							<ul class="nav nav-tabs pt-2 pb-4" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" href="#list-feedback-unanswered" role="tab" data-toggle="tab">Belum Dijawab</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#list-feedback-answered" role="tab" data-toggle="tab">Sudah Dijawab</a>
								</li>
							</ul>

							<div class="tab-content">
								<div class="tab-pane fade active show" role="tabpanel" id="list-feedback-unanswered">
									<table id="feedback_table" class="display" style="width:100%">
										<thead>
											<tr>
												<th>No</th>
												<th>Judul Kotak Saran</th>
												<th>Deskripsi Kotak Saran</th>
												<th>Pengirim</th>
												<th>Aksi</th>
											</tr>
										</thead>
									</table>
								</div>

								<div class="tab-pane fade show" role="tabpanel" id="list-feedback-answered">
									<table id="feedback_answered_table" class="display" style="width:100%">
										<thead>
											<tr>
												<th>No</th>
												<th>Judul Kotak Saran</th>
												<th>Deskripsi Kotak Saran</th>
												<th>Jawaban</th>
												<th>Pengirim</th>
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