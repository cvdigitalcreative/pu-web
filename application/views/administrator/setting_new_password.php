<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("components/head.php") ?>
	<link href="<?php echo base_url('assets/css/login.css') ?>" rel="stylesheet">
</head>

<body>

	<div class="">
		<div class="row">

			<div class="col left login-content-left">
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
					<div class="col-5 login-content-right">

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
						<div>
							<a class="lupa-password" href="<?= base_url()?>pupr/login">
								<img class="mb-2" src="<?= base_url('assets/icons/pupr-button-back.svg') ?>" width="40"
									height="40">
							</a>
						</div>
						<span class="masuk-title">Lupa Password</span>
						<h6 class="mt-2 keterangan-title mb-2">Atur ulang password akun anda</h6>

						<form action="<?= base_url(); ?>Authentication/change_password_action/<?=$id_forgot_password?>"
							method="POST" enctype="multipart/form-data">
							<div class="form-group mt-4">
								<input type="password" class="form-control input" id="settingNewPassword"
									aria-describedby="passwordHelp" placeholder="Password baru" name="new_password" required>
							</div>
							<button type="submit" class="btn btn-block mt-4 btn-primary btn-masuk">Kirim</button>
						</form>

					</div>
				</div>

			</div>
		</div>
	</div>

	<?php $this->load->view("components/js.php") ?>
</body>

</html>
