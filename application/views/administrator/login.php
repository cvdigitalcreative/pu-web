<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("components/head.php")?>
	<link href="<?php echo base_url('assets/css/login.css') ?>" rel="stylesheet">
</head>

<body>

	<div class="">
		<div class="row align-items-center justify-content-center">
			<div class="col-6 left align-self-center">
				<div class="">
					<img class="align-items-middle image-ilustrasi" width="284.58" height="320"
						src="<?=base_url('assets/image/pupr-ilustrasi.png')?>">
					<h3 class="mt-4 ilustrasi-title">BJKW II Palembang</h3>
				</div>

			</div>
			<div class="col-6 right align-self-center">

				<div class="col-5">
					<div class="mb-4">
						<img style="vertical-align:middle" src="<?=base_url('assets/image/pupr-logo.svg')?>" width="34"
							height="34">
						<span class="image-title">BJKW II Palembang</span>
					</div>
					<span class="masuk-title">Masuk</span>
					<h6 class="mt-2 keterangan-title mb-2">Masuk untuk melanjutkan</h6>

					<form>
						<div class="form-group mt-4">
							<input type="email" class="form-control input" id="exampleInputEmail1"
								aria-describedby="emailHelp" placeholder="Email / no.telepon">
						</div>
						<div class="form-group">
							<input type="password" class="form-control input" id="exampleInputPassword1"
								placeholder="Kata sandi">
						</div>
						<div class="form-check">
							<div class="d-flex justify-content-between">
								<div>
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Ingat saya</label>
								</div>
								<div>
									<a class="lupa-password" href="#">Lupa password?</a>
								</div>
							</div>
						</div>
						<button type="submit" class="btn btn-block mt-4 btn-primary btn-masuk">Masuk</button>
						<div class="mt-4">
							Belum punya akun?<a class="ml-1 lupa-password" href="#">Daftar</a>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>

	<?php $this->load->view("components/js.php")?>
</body>

</html>
