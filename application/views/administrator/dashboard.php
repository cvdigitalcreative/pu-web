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
						<h1 class="h2 font-weight-bold mb-4 mt-4">Dashboard</h1>
					</div>

					<!-- Content Row -->
					<div class="row">

						<!-- <div class="col-xl-3 col-md-6 mb-4">
							<div class="card h-100 p-2 card-recap">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="h5 font-weight-bold text-black text-uppercase mb-2">
												Total Kegiatan
											</div>
											<div class="row no-gutters align-items-center">
												<div class="h5 mb-0 mr-3 text-gray-800">Kegiatan</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> -->

					</div>

					<div class="row d-flex flex-column justify-content-center align-items-center">
						<div class="col mt-4">
							<div class="row d-flex flex-column justify-content-center align-items-center">
								<div class="align-items-center">
									<img class="img-profile mr-2" style="vertical-align:middle" src="<?= base_url('assets/illustration/pupr-illustration-under-construction.svg') ?>">
								</div>
							</div>
						</div>
						
						<div class="col mt-4">
							<div class="row d-flex flex-column justify-content-center align-items-center">
								<div class="align-items-center">
									<div>
										<h3>Fitur ini akan segera hadir!</h3>
									</div>
									<div>
										<p class="image-title">Menu Dashboard sedang dalam pengembangan, lihat kembali nanti!</p>
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
