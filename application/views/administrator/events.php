<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("components/head.php")?>
</head>

<body id="page-top">

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
						<h1 class="h2 mb-4 mt-4">Kalender Kegiatan</h1>
					</div>

					<!-- Content Row -->
					<div class="row mt-4">

						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-primary shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xl font-weight-bold text-black text-uppercase mb-1">
												Total Jumlah
											</div>
											<div class="row no-gutters align-items-center">
												<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $jumlah_seluruh_kegiatan?> Kegiatan</div>
											</div>
										</div>
										<div class="col-auto">
											<i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-primary shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xl font-weight-bold text-black text-uppercase mb-1">
												Selesai
											</div>
											<div class="row no-gutters align-items-center">
												<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $jumlah_kegiatan_selesai?> Kegiatan</div>
											</div>
										</div>
										<div class="col-auto">
											<i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-primary shadow h-100 py-2">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="text-xl font-weight-bold text-black text-uppercase mb-1">
												Sedang Berjalan
											</div>
											<div class="row no-gutters align-items-center">
												<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $jumlah_kegiatan_berjalan?> Kegiatan</div>
											</div>
										</div>
										<div class="col-auto">
											<i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
										</div>
									</div>
								</div>
							</div>
						</div>

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
