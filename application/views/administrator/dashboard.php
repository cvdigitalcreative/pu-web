<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("components/head.php") ?>
</head>

<body id="page-top">

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
						<h1 class="h2 font-weight-bold mb-4 mt-4">Dashboard</h1>
					</div>

					<!-- Content Row -->
					<div class="row">

						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-primary h-100 p-2 card-recap">

								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="h5 font-weight-bold text-black text-uppercase mb-2">
												Total Peserta Pendaftar
											</div>
											<div class="row no-gutters align-items-center">
												<div class="h5 mb-0 mr-3 text-gray-800"><?= $total_peserta . ' ' . $dashboard['dashboard'][0]['satuan'] ?></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-danger h-100 p-2 card-recap">

								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="h5 font-weight-bold text-black text-uppercase mb-2">
												Total Jabatan Kerja
											</div>
											<div class="row no-gutters align-items-center">
												<div class="h5 mb-0 mr-3 text-gray-800"><?= $dashboard['dashboard'][5]['jumlah'] . ' ' . $dashboard['dashboard'][5]['satuan'] ?></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="row">

						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-warning h-100 p-2 card-recap">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="h5 font-weight-bold text-black text-uppercase mb-2">
												Total Tenaga Ahli
											</div>
											<div class="row no-gutters align-items-center">
												<div class="h5 mb-0 mr-3 text-gray-800"><?= $dashboard['dashboard'][1]['jumlah'] . ' ' . $dashboard['dashboard'][1]['satuan'] ?></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-warning h-100 p-2 card-recap">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="h5 font-weight-bold text-black text-uppercase mb-2">
												Total Tenaga Terampil
											</div>
											<div class="row no-gutters align-items-center">
												<div class="h5 mb-0 mr-3 text-gray-800"><?= $dashboard['dashboard'][2]['jumlah'] . ' ' . $dashboard['dashboard'][2]['satuan'] ?></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-info h-100 p-2 card-recap">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="h5 font-weight-bold text-black text-uppercase mb-2">
												Total Kegiatan
											</div>
											<div class="row no-gutters align-items-center">
												<div class="h5 mb-0 mr-3 text-gray-800"><?= $jumlah_seluruh_kegiatan . ' ' . $dashboard['dashboard'][3]['satuan'] ?></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-3 col-md-6 mb-4">
							<div class="card border-left-info h-100 p-2 card-recap">
								<div class="card-body">
									<div class="row no-gutters align-items-center">
										<div class="col mr-2">
											<div class="h5 font-weight-bold text-black text-uppercase mb-2">
												Total Kegiatan Selesai
											</div>
											<div class="row no-gutters align-items-center">
												<div class="h5 mb-0 mr-3 text-gray-800"><?= $jumlah_kegiatan_selesai . ' ' . $dashboard['dashboard'][4]['satuan'] ?></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Pie Chart -->
					<!-- <div class="col-xl-4 col-lg-5">
							<div class="card mb-4">
								<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
									<h6 class="m-0 font-weight-bold text-black">Total Jumlah Kegiatan</h6>
								</div>
								<div class="card-body">
									<div class="chart-pie pt-4 pb-2">
										<canvas id="myPieChart"></canvas>
									</div>
									<div class="mt-4 text-center small">
										<span class="mr-2">
											<i class="fas fa-circle text-primary"></i> Pelatihan
										</span>
										<span class="mr-2">
											<i class="fas fa-circle text-success"></i> Terampil
										</span>
										<span class="mr-2">
											<i class="fas fa-circle text-info"></i> Vokasi
										</span>
										<span class="mr-2">
											<i class="fas fa-circle text-warning"></i> Kegiatan Kerja Sama
										</span>
									</div>
								</div>
							</div>
						</div> -->

					<div class="col mt-3">

						<div class="card mb-4">
							<!-- Card Header - Dropdown -->
							<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
								<h6 class="m-0 font-weight-bold text-black" id="labelChart"></h6>
							</div>
							<div class="card-body">

								<div class="form-group py-2">
									<label for="profileProvinsi">Filter Tahun</label>
									<select class="form-control" id="chart-filter-tahun">
										<?php if ($dashboard['grafik_filter'] != null) :
											foreach ($dashboard['grafik_filter'] as $val) :
												if ($val['keterangan'] == date('Y')) : ?>
													<option value=<?= $val['keterangan'] ?> selected><?= $val['keterangan'] ?></option>
												<?php else : ?>
													<option value=<?= $val['keterangan'] ?>><?= $val['keterangan'] ?></option>
										<?php endif;
											endforeach;
										endif; ?>
									</select>
								</div>

								<div class="pb-4 pt-2">
									<ul class="nav nav-tabs" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" id="tab-link-peserta" href="#tab-chart-peserta" role="tab" data-toggle="tab">Pendaftar</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="tab-link-tenaga-ahli" href="#tab-chart-tenaga-ahli" role="tab" data-toggle="tab">Tenaga Ahli</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="tab-link-tenaga-terampil" href="#tab-chart-tenaga-terampil" role="tab" data-toggle="tab">Tenaga Terampil</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="tab-link-kegiatan" href="#tab-chart-kegiatan" role="tab" data-toggle="tab">Kegiatan</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="tab-link-kegiatan-selesai" href="#tab-chart-kegiatan-selesai" role="tab" data-toggle="tab">Kegiatan Selesai</a>
										</li>
									</ul>
								</div>

								<div class="tab-content">
									<div class="tab-pane fade active show" role="tabpanel" id="tab-chart-peserta">
										<canvas id="chartPeserta"></canvas>
									</div>
									<div class="tab-pane fade show" role="tabpanel" id="tab-chart-tenaga-ahli">
										<canvas id="chartTenagaAhli"></canvas>
									</div>
									<div class="tab-pane fade show" role="tabpanel" id="tab-chart-tenaga-terampil">
										<canvas id="chartTenagaTerampil"></canvas>
									</div>
									<div class="tab-pane fade show" role="tabpanel" id="tab-chart-kegiatan">
										<canvas id="chartKegiatan"></canvas>
									</div>
									<div class="tab-pane fade show" role="tabpanel" id="tab-chart-kegiatan-selesai">
										<canvas id="chartKegiatanSelesai"></canvas>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6 mt-3">
							<div class="card mb-4">
								<!-- Card Header - Dropdown -->
								<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
									<h6 class="m-0 font-weight-bold text-black" id="labelChartKegiatanStatus"></h6>
								</div>
								<div class="card-body">

									<div class="form-group py-2">
										<label for="profileProvinsi">Filter Tahun</label>
										<select class="form-control" id="chart-filter-tahun-kegiatan-status">
											<?php if ($dashboard['grafik_filter'] != null) :
												foreach ($dashboard['grafik_filter'] as $val) :
													if ($val['keterangan'] == date('Y')) : ?>
														<option value=<?= $val['keterangan'] ?> selected><?= $val['keterangan'] ?></option>
													<?php else : ?>
														<option value=<?= $val['keterangan'] ?>><?= $val['keterangan'] ?></option>
											<?php endif;
												endforeach;
											endif; ?>
										</select>
									</div>

									<canvas id="chartKegiatanStatus"></canvas>
								</div>
							</div>
						</div>

						<div class="col-lg-6 mt-3">
							<div class="card mb-4">
								<!-- Card Header - Dropdown -->
								<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
									<h6 class="m-0 font-weight-bold text-black" id="labelChartKegiatanJenis"></h6>
								</div>
								<div class="card-body">

									<div class="form-group py-2">
										<label for="profileProvinsi">Filter Tahun</label>
										<select class="form-control" id="chart-filter-tahun-kegiatan-jenis">
											<?php if ($dashboard['grafik_filter'] != null) :
												foreach ($dashboard['grafik_filter'] as $val) :
													if ($val['keterangan'] == date('Y')) : ?>
														<option value=<?= $val['keterangan'] ?> selected><?= $val['keterangan'] ?></option>
													<?php else : ?>
														<option value=<?= $val['keterangan'] ?>><?= $val['keterangan'] ?></option>
											<?php endif;
												endforeach;
											endif; ?>
										</select>
									</div>

									<canvas id="chartKegiatanJenis"></canvas>
								</div>
							</div>
						</div>
					</div>

					<div class="col mt-3">
							<div class="card mb-4">
								<!-- Card Header - Dropdown -->
								<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
									<h6 class="m-0 font-weight-bold text-black" id="labelChartKegiatanProvinsi"></h6>
								</div>
								<div class="card-body">

									<div class="form-group py-2">
										<label for="profileProvinsi">Filter Tahun</label>
										<select class="form-control" id="chart-filter-tahun-kegiatan-provinsi">
											<?php if ($dashboard['grafik_filter'] != null) :
												foreach ($dashboard['grafik_filter'] as $val) :
													if ($val['keterangan'] == date('Y')) : ?>
														<option value=<?= $val['keterangan'] ?> selected><?= $val['keterangan'] ?></option>
													<?php else : ?>
														<option value=<?= $val['keterangan'] ?>><?= $val['keterangan'] ?></option>
											<?php endif;
												endforeach;
											endif; ?>
										</select>
									</div>

									<canvas id="chartKegiatanProvinsi"></canvas>
								</div>
							</div>
						</div>

					<!-- <div class="row d-flex flex-column justify-content-center align-items-center"> -->
						<!-- <div class="col mt-4">
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
						</div> -->
					<!-- </div> -->
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