<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("components/head.php") ?>
	<link href="<?php echo base_url('assets/css/login.css') ?>" rel="stylesheet">
</head>

<body>

	<div class="">
		<div class="row">

			<div class="col left">
				<div class="row d-flex flex-column justify-content-center align-items-center">
					<div class="align-items-center">
						<img class="img-fluids image-ilustrasi" width="284.58" height="320"
							src="<?= base_url('assets/image/pupr-ilustrasi.png') ?>">
					</div>
					<div>
						<h3 class="mt-4 ilustrasi-title text-center pb-4">BJKW II Palembang</h3>
					</div>
				</div>

			</div>

			<div class="col right">

				<div class="row d-flex flex-column justify-content-center align-items-center">
					<div class="col-5">

						<div class="mb-4">
							<img style="vertical-align:middle" src="<?= base_url('assets/image/pupr-logo.svg') ?>"
								width="34" height="34">
							<span class="image-title">BJKW II Palembang</span>
						</div>

						<?php if ($this->session->flashdata("APImessage")) : ?>

						<div class="alert alert-info" role="alert">
							<?= $this->session->flashdata("APImessage"); ?>
						</div>

						<?php endif; ?>
						<span class="masuk-title">Daftar</span>
						<h6 class="mt-2 keterangan-title mb-2">Lengkapi formulir dibawah</h6>

						<form action="<?= base_url(); ?>Authentication/login_action" method="POST"
							enctype="multipart/form-data">
							<div class="form-group mt-4">
								<input type="text" class="form-control input" id="registerEmail"
									aria-describedby="emailNoTeleponHelp" placeholder="Email / no.telepon"
									name="email_no_telepon">
                            </div>
                            <div class="form-group mt-4">
								<input type="text" class="form-control input" id="registerNama"
									aria-describedby="namaLengkapHelp" placeholder="Nama lengkap"
									name="nama_lengkap">
                            </div>
                            <div class="form-group mt-4">
								<input type="text" class="form-control input" id="registerNoTelepon"
									aria-describedby="noTeleponHelp" placeholder="081234567890"
									name="no_telepon">
							</div>
							<div class="form-group">
								<input type="password" class="form-control input" id="registerPassword"
                                    placeholder="Kata sandi" name="password" aria-describedby="passwordHelp">
                                <small id="passwordHelp" class="form-text text-muted">Minimal 8 Karakter.</small>
							</div>
							<button type="submit" class="btn btn-block mt-4 btn-primary btn-masuk">Masuk</button>
							<div class="mt-4">
								Sudah punya akun?<a class="ml-1 lupa-password"
									href="<?= base_url()?>pupr/register">Masuk</a>
							</div>
						</form>

					</div>
				</div>

			</div>
		</div>
	</div>

	<?php $this->load->view("components/js.php") ?>
</body>

</html>
