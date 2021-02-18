<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("components/head.php") ?>
</head>

<body id="page-top">

	<!-- Filter Tenaga Ahli Modal -->
	<div class="modal fade bd-example-modal-lg" id="modal-filter-tenaga-ahli" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalCenterTitle">Filter Tenaga Ahli</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<div class="form-group py-2">
							<label for="provinsiTenagaAhli">Provinsi</label>
							<select class="form-control" id="filter-id-provinsi-tenaga-ahli" name="filter_id_provinsi_tenaga_ahli"
								>
								<option selected value=<?= null?>>Pilih Provinsi</option>
								<?php foreach ($provinsi as $row) : ?>
								<option value="<?= $row['id_provinsi']?>"><?= $row['provinsi']?></option>
								<?php endforeach ?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="filterJabkerTenagaAhli">Jabatan Kerja</label>
							<select class="form-control" id="filter-jabatan-kerja-tenaga-ahli" name="filter_jabatan_kerja_tenaga_ahli"
								aria-placeholder="Pilih status kegiatan">
								<option selected value=<?= null?>>Pilih Jabatan Kerja</option>
								<?php if($jabker != null):
								foreach ($jabker as $row):?>
								<option value="<?=$row['id_jabker']?>"><?= $row['jabker']?></option>
								<?php endforeach; endif?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="KategoriTenagaAhli">Ketenagakerjaan</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<input type="checkbox" id="filter-is-asesor-tenaga-ahli" aria-label="Checkbox for following text input" name="filter_is_asesor_tenaga_ahli">
									</div>
								</div>
							<input type="text" class="form-control" aria-label="Text input with checkbox" value="Asesor" readonly style="background-color: white;">
							</div>

							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<input type="checkbox" id="filter-is-instruktur-tenaga-ahli" aria-label="Checkbox for following text input" name="filter_is_instruktur_tenaga_ahli">
									</div>
								</div>
							<input type="text" class="form-control" aria-label="Text input with checkbox" value="Instruktur" readonly style="background-color: white;">
							</div>
						</div>

						<div class="menu-divider"></div>
						<button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan" id="btn-filter-tenaga-ahli">Terapkan
							Filter</button>
						<button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
							data-dismiss="modal">Batal</button>
				</div>
			</div>
		</div>
	</div>
	<!-- End modal filter tenaga ahli -->

	<!-- Tambah Tenaga Ahli -->
	<div class="modal fade bd-example-modal-lg" id="modal-tambah-tenaga-ahli" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalCenterTitle">Tambah Tenaga Ahli</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" enctype="multipart/form-data">
						<div class="form-group py-2">
							<label for="namaTenagaAhli">Nama Lengkap *</label>
							<input type="text" class="form-control" id="nama-tenaga-ahli" name="nama_lengkap_tenaga_ahli"
								placeholder="Contoh: Andi Setiawan" required>
						</div>

						<div class="form-group py-2">
							<div class="row">
								<div class="col">
							<label for="tempatLahirTenagaAhli">Tempat Lahir</label>
									<input type="text" class="form-control" id="tempat-lahir-tenaga-ahli" name="tempat_lahir_tenaga_ahli"
										placeholder="Contoh: Jakarta">
								</div>
								<div class="col">
							<label for="tanggalLahirTenagaAhli">Tanggal Lahir</label>
										<input type="text" class="form-control js-daterangepicker"
											id="tanggal-lahir-tenaga-ahli" data-drops="up" name="tanggal_lahir_tenaga_ahli" value=""
											placeholder="Pilih tanggal lahir">
								</div>
							</div>
						</div>

						<div class="form-group py-2">
							<label for="jenisKelamin">Jenis Kelamin</label>
							<select class="form-control" id="jenis-kelamin-tenaga-ahli" name="id_jenis_kelamin_tenaga_ahli">
								<option selected value="<?= null?>">Pilih jenis kelamin</option>
								<?php if($jenis_kelamin != null):
								foreach ($jenis_kelamin as $row):?>
								<option value="<?=$row['id_jenis_kelamin']?>"><?= $row['jenis_kelamin']?></option>
								<?php endforeach; endif?>
							</select>
						</div>

						<div class="form-group py-2">
							<label for="nikTenagaAhli">NIK *</label>
							<input type="text" class="form-control" id="nik-tenaga-ahli" name="nik_tenaga_ahli"
								placeholder="Contoh: 1234567890123456" required>
							<small>Jumlah digit NIK 16 digit tidak boleh lebih atau kurang</small>
						</div>

						<div class="form-group py-2">
							<label for="emailTenagaAhli">Email</label>
							<input type="email" class="form-control" id="email-tenaga-ahli" name="email_tenaga_ahli"
								placeholder="Contoh: andisetiawan@email.com">
						</div>

						<div class="form-group py-2">
							<label for="alamatTenagaAhli">Alamat *</label>
							<textarea type="text" data-autoresize class="form-control" id="alamat-tenaga-ahli" name="alamat_tenaga_ahli"
								placeholder="Contoh: Jl. Jendral Sudirman No.123" required></textarea>
						</div>

						<div class="form-group py-2">
							<label for="provinsiTenagaAhli">Provinsi</label>

							<select class="form-control" id="provinsi-tenaga-ahli" name="id_provinsi_tenaga_ahli"
								onChange="getStateTenagaAhli(this.value);">
							<option selected value="<?= null?>">Pilih Provinsi</option>
								<?php foreach ($provinsi as $row) : ?>
								<option value="<?= $row['id_provinsi']?>"><?= $row['provinsi']?></option>
								<?php endforeach ?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="kotaTenagaAhli">Kota <span class="ml-3 text-secondary"><small>Mohon pilih Provinsi terlebih dahulu</small></span></label>
							<select class="form-control" id="kota-tenaga-ahli" name="id_kota_kabupaten_tenaga_ahli">
							</select>
						</div>

						<div class="row">
							<div class="col">
								<div class="form-group py-2">
									<label for="nomorHandphone">Nomor Handphone</label>
									<input type="text" class="form-control" id="nomor-handphone-tenaga-ahli" name="nomor_handphone_tenaga_ahli"
										placeholder="Contoh: +6282112341234">
								</div>
							</div>
							<div class="col">
								<div class="form-group py-2">
									<label for="nomorRumah">Nomor Rumah</label>
									<input type="text" class="form-control" id="nomor-rumah-tenaga-ahli" name="nomor_rumah_tenaga_ahli"
										placeholder="Contoh: +6271112345">
								</div>
							</div>
						</div>
						<div class="form-group py-2">
									<label for="nomorHandphone">NPWP *</label>
									<input type="text" class="form-control" id="npwp-tenaga-ahli" name="npwp_tenaga_ahli"
										placeholder="Contoh: 0203094902939043" required>
								</div>
						<div class="form-group py-2">
							<label for="jabatanKerjaTenagaAhli">Jabatan Kerja *</label>
							<select class="form-control selectpicker" id="jabatan-kerja-tenaga-ahli"
								name="id_jabatan_kerja_tenaga_ahli[]" aria-placeholder="Pilih jabatan kerja yang pernah diambil" multiple
								data-live-search="true" required>
								<?php if($jabker != null):
								foreach ($jabker as $row):?>
								<option value="<?=$row['id_jabker']?>"><?= $row['jabker']?></option>
								<?php endforeach; endif?>
							</select>
						</div>

						<div class="form-group py-2">
							<label for="KategoriTenagaAhli">Kategori *</label>
								<?php if($kategori_tenaga_ahli != null):
								$index = 0;
								foreach ($kategori_tenaga_ahli as $row):
									if($index == 0) :?>
									<div class="input-group mb-3">
									<div class="input-group-prepend">
										<div class="input-group-text">
											<input type="radio" aria-label="Checkbox for following text input" value="<?= $row['id_kategori_tenaga_ahli']?>" name="kategori_tenaga_ahli" required>
										</div>
									</div>
								<input type="text" class="form-control" aria-label="Text input with checkbox" value="<?= $row['kategori_tenaga_ahli']?>" readonly style="background-color: white;">								
								</div>
								<?php else : ?>
									<div class="input-group mb-3">
									<div class="input-group-prepend">
										<div class="input-group-text">
											<input type="radio" aria-label="Checkbox for following text input" value="<?= $row['id_kategori_tenaga_ahli']?>" name="kategori_tenaga_ahli">
										</div>
									</div>
								<input type="text" class="form-control" aria-label="Text input with checkbox" value="<?= $row['kategori_tenaga_ahli']?>" readonly style="background-color: white;">								
									</div>
								<?php endif; $index++; endforeach; endif?>
						</div>

						<div class="form-group py-2">
							<label for="KategoriTenagaAhli">Ketenagakerjaan</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<input type="hidden" name="is_asesor" value=0>
										<input type="checkbox" aria-label="Checkbox for following text input" value="1" name="is_asesor">
									</div>
								</div>
							<input type="text" class="form-control" aria-label="Text input with checkbox" value="Asesor" readonly style="background-color: white;">
							</div>

							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<input type="hidden" name="is_instruktur" value=0>
										<input type="checkbox" aria-label="Checkbox for following text input" value="1" name="is_instruktur">
									</div>
								</div>
							<input type="text" class="form-control" aria-label="Text input with checkbox" value="Instruktur" readonly style="background-color: white;">
							</div>
						</div>

						<div class="form-group py-2">
							<label for="filterJabkerTenagaAhli">Status PNS *</label>
							<select class="form-control" id="status-pns-tenaga-ahli" name="id_status_pns_tenaga_ahli"
								aria-placeholder="Pilih status PNS" required>
								<option selected disabled>Pilih Status PNS</option>
								<?php if($status_pns != null):
								foreach ($status_pns as $row):?>
								<option value="<?=$row['id_status_pns']?>"><?= $row['status_pns']?></option>
								<?php endforeach; endif?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="filterJabkerTenagaAhli">Pendidikan Terakhir *</label>
							<select class="form-control" id="pendidikan-tenaga-ahli" name="id_pendidikan_tenaga_ahli"
								aria-placeholder="Pilih pendidikan terakhir" required>
								<option selected disabled>Pilih pendidikan terakhir</option>
								<?php if($pendidikan != null):
								foreach ($pendidikan as $row):?>
								<option value="<?=$row['id_pendidikan']?>"><?= $row['pendidikan']?></option>
								<?php endforeach; endif?>
							</select>
						</div>

						<div class="form-group py-2">
							<label for="fileTenagaAhli">File Tenaga Ahli</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="file-excel-tambah-tenaga"
									name="file_tenaga_ahli">
								<label class="custom-file-label" id="custom-file-label-file-excel-tambah-tenaga" for="file-excel-tambah-tenaga">Pilih file...</label>
								<small id="file-excel-tambah-tenaga" class="form-text text-muted">
									File tenaga ahli adalah opsional
								</small>
							</div>
						</div>

						<div class="menu-divider"></div>
						<button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Tambah
							Tenaga</button>
						<button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
							data-dismiss="modal">Batal</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End modal tambah tenaga ahli -->

<!-- Edit Tenaga Ahli -->
<div class="modal fade bd-example-modal-lg" id="modal-edit-tenaga-ahli" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalCenterTitle">Edit Tenaga Ahli</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					<form method="POST" action="<?= base_url()?>Tenaga_ahli/edit_tenaga_ahli_action"
						enctype="multipart/form-data">
						<div class="form-group py-2">
							<label for="namaTenagaAhli">Nama Lengkap *</label>
							<input type="text" class="form-control" id="edit-nama-tenaga-ahli" name="edit_nama_lengkap_tenaga_ahli"
								placeholder="Contoh: Andi Setiawan" required>
						</div>

						<div class="form-group py-2">
							<div class="row">
								<div class="col">
							<label for="tempatLahirTenagaAhli">Tempat Lahir *</label>
									<input type="text" class="form-control" id="edit-tempat-lahir-tenaga-ahli" name="edit_tempat_lahir_tenaga_ahli"
										placeholder="Contoh: Jakarta" required>
								</div>
								<div class="col">
							<label for="tanggalLahirTenagaAhli">Tanggal Lahir *</label>
										<input type="text" class="form-control js-daterangepicker"
											id="edit-tanggal-lahir-tenaga-ahli" data-drops="up" name="edit_tanggal_lahir_tenaga_ahli" value=""
											placeholder="Pilih tanggal lahir" required>
								</div>
							</div>
						</div>

						<div class="form-group py-2">
							<label for="jenisKelamin">Jenis Kelamin *</label>
							<select class="form-control" id="edit-jenis-kelamin-tenaga-ahli" name="edit_id_jenis_kelamin_tenaga_ahli" required>
								<option selected disabled>Pilih jenis kelamin</option>
								<?php if($jenis_kelamin != null):
								foreach ($jenis_kelamin as $row):?>
								<option value="<?=$row['id_jenis_kelamin']?>"><?= $row['jenis_kelamin']?></option>
								<?php endforeach; endif?>
							</select>
						</div>

						<div class="form-group py-2">
							<label for="nikTenagaAhli">NIK *</label>
							<input type="text" class="form-control" id="edit-nik-tenaga-ahli" name="edit_nik_tenaga_ahli"
								placeholder="Contoh: 1234567898765432" required>
						</div>

						<div class="form-group py-2">
							<label for="emailTenagaAhli">Email *</label>
							<input type="text" class="form-control" id="edit-email-tenaga-ahli" name="edit_email_tenaga_ahli"
								placeholder="Contoh: andisetiawan@email.com" required>
						</div>

						<div class="form-group py-2">
							<label for="alamatTenagaAhli">Alamat *</label>
							<textarea type="text" data-autoresize class="form-control" id="edit-alamat-tenaga-ahli" name="edit_alamat_tenaga_ahli"
								placeholder="Contoh: Jl. Jendral Sudirman No.123" required></textarea>
						</div>

						<div class="form-group py-2">
							<label for="provinsiTenagaAhli">Provinsi *</label>
							<select class="form-control" id="edit-provinsi-tenaga-ahli" name="edit_id_provinsi_tenaga_ahli"
								onChange="getStateEditTenagaAhli(this.value);" required>
								<?php foreach ($provinsi as $row) : ?>
								<option value="<?= $row['id_provinsi']?>"><?= $row['provinsi']?></option>
								<?php endforeach ?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="kotaTenagaAhli">Kota *<span class="ml-3 text-secondary"><small>Mohon pilih Provinsi terlebih dahulu</small></span></label>
							<select class="form-control" id="edit-kota-tenaga-ahli" name="edit_id_kota_kabupaten_tenaga_ahli" required>
							</select>
						</div>

						<div class="row">
							<div class="col">
								<div class="form-group py-2">
									<label for="nomorHandphone">Nomor Handphone *</label>
									<input type="text" class="form-control" id="edit-nomor-handphone-tenaga-ahli" name="edit_nomor_handphone_tenaga_ahli"
										placeholder="Contoh: +6282112341234" required>
								</div>
							</div>
							<div class="col">
								<div class="form-group py-2">
									<label for="nomorRumah">Nomor Rumah *</label>
									<input type="text" class="form-control" id="edit-nomor-rumah-tenaga-ahli" name="edit_nomor_rumah_tenaga_ahli"
										placeholder="Contoh: +6271112345" required>
								</div>
							</div>
						</div>
						<div class="form-group py-2">
									<label for="nomorHandphone">NPWP *</label>
									<input type="text" class="form-control" id="edit-npwp-tenaga-ahli" name="edit_npwp_tenaga_ahli"
										placeholder="Contoh: 0203094902939043" required>
								</div>
						<div class="form-group py-2">
							<label for="jabatanKerjaTenagaAhli">Jabatan Kerja</label>
							<select class="form-control selectpicker" id="edit-jabatan-kerja-tenaga-ahli"
								name="edit_id_jabatan_kerja_tenaga_ahli[]" aria-placeholder="Pilih jabatan kerja yang pernah diambil" multiple
								data-live-search="true">
								<?php if($jabker != null):
								foreach ($jabker as $row):?>
								<option value="<?=$row['id_jabker']?>"><?= $row['jabker']?></option>
								<?php endforeach; endif?>
							</select>
						</div>

						<div class="form-group py-2">
							<label for="KategoriTenagaAhli">Kategori *</label>
								<?php if($kategori_tenaga_ahli != null):
								$index = 0;
								foreach ($kategori_tenaga_ahli as $row):
									if($index == 0) :?>
									<div class="input-group mb-3">
									<div class="input-group-prepend">
										<div class="input-group-text">
											<input type="radio" aria-label="Checkbox for following text input" value="<?= $row['id_kategori_tenaga_ahli']?>" name="edit_kategori_tenaga_ahli" required>
										</div>
									</div>
								<input type="text" class="form-control" aria-label="Text input with checkbox" value="<?= $row['kategori_tenaga_ahli']?>" readonly style="background-color: white;">								
								</div>
								<?php else : ?>
									<div class="input-group mb-3">
									<div class="input-group-prepend">
										<div class="input-group-text">
											<input type="radio" aria-label="Checkbox for following text input" value="<?= $row['id_kategori_tenaga_ahli']?>" name="edit_kategori_tenaga_ahli">
										</div>
									</div>
								<input type="text" class="form-control" aria-label="Text input with checkbox" value="<?= $row['kategori_tenaga_ahli']?>" readonly style="background-color: white;">								
									</div>
								<?php endif; $index++; endforeach; endif?>
						</div>

						<div class="form-group py-2">
							<label for="KategoriTenagaAhli">Ketenagakerjaan *</label>
							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<input type="hidden" name="edit_is_asesor" value=0>
										<input type="checkbox" aria-label="Checkbox for following text input" value="1" name="edit_is_asesor">
									</div>
								</div>
							<input type="text" class="form-control" aria-label="Text input with checkbox" value="Asesor" readonly style="background-color: white;">
							</div>

							<div class="input-group mb-3">
								<div class="input-group-prepend">
									<div class="input-group-text">
										<input type="hidden" name="edit_is_instruktur" value=0>
										<input type="checkbox" aria-label="Checkbox for following text input" value="1" name="edit_is_instruktur">
									</div>
								</div>
							<input type="text" class="form-control" aria-label="Text input with checkbox" value="Instruktur" readonly style="background-color: white;">
							</div>
						</div>
						<div class="form-group py-2">
							<label for="filterJabkerTenagaAhli">Status PNS *</label>
							<select class="form-control" id="edit-status-pns-tenaga-ahli" name="edit_id_status_pns_tenaga_ahli"
								aria-placeholder="Pilih status PNS" required>
								<option selected disabled>Pilih Status PNS</option>
								<?php if($status_pns != null):
								foreach ($status_pns as $row):?>
								<option value="<?=$row['id_status_pns']?>"><?= $row['status_pns']?></option>
								<?php endforeach; endif?>
							</select>
						</div>
						<div class="form-group py-2">
							<label for="filterJabkerTenagaAhli">Pendidikan Terakhir *</label>
							<select class="form-control" id="edit-pendidikan-tenaga-ahli" name="edit_id_pendidikan_tenaga_ahli"
								aria-placeholder="Pilih pendidikan terakhir" required>
								<option selected disabled>Pilih pendidikan terakhir</option>
								<?php if($pendidikan != null):
								foreach ($pendidikan as $row):?>
								<option value="<?=$row['id_pendidikan']?>"><?= $row['pendidikan']?></option>
								<?php endforeach; endif?>
							</select>
						</div>

						<div class="form-group py-2">
							<label for="fileTenagaAhli">File Tenaga Ahli</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="edit-file-tenaga-ahli"
									name="file_tenaga_ahli">
								<label class="custom-file-label" id="custom-file-label-edit-file-tenaga-ahli" for="edit-file-tenaga-ahli">Pilih file...</label>
								<small id="edit-file-tenaga-ahli" class="form-text text-muted">
									Pilih file tenaga ahli
								</small>
							</div>
						</div>

						<div class="menu-divider"></div>
						<button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Edit
							Tenaga</button>
						<button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
							data-dismiss="modal">Batal</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End modal tambah tenaga ahli -->

	<!-- Delete Tenaga Ahli modal -->
	<div class="modal fade bd-example-modal-lg" id="modal-delete-tenaga-ahli" tabindex="-1" role="dialog"
		aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalCenterTitle">Hapus tenaga Ini?</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					Pastikan dengan benar bahwa tenaga ini ingin anda hapus!
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

	<!-- Import Excel Tambah Tenaga Ahli Modal -->
	<div class="modal fade bd-example-modal-lg" id="modal-import-excel-tambah-tenaga-ahli" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalCenterTitle">Import File Excel tambah Tenaga Ahli & Tenaga Terampil</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form method="POST" action="<?= base_url()?>Tenaga_ahli/import_tenaga_ahli_action" enctype="multipart/form-data">
						<div class="form-group py-2">
							<label for="fileExcelTambahTenaga">File Excel Tambah Tenaga Ahli & Tenaga Terampil</label>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="file-excel-import-tenaga-ahli"
									name="file_excel_tambah_tenaga" accept=".xlsx, .xls, .csv">
								<label class="custom-file-label" id="custom-file-label-file-excel-import-tenaga-ahli" for="file-excel-import-tenaga-ahli">Pilih file excel...</label>
								<small id="file-excel-import-tenaga-ahli" class="form-text text-muted">
									Pilih file excel tambah tenaga ahli & Tenaga terampil
								</small>
							</div>
						</div>

						<div class="menu-divider"></div>
						<button type="submit" class="btn btn-block btn-primary btn-modal-add-kegiatan">Import File
							Excel</button>
						<button type="button" class="btn btn-block btn-outline-dark btn-modal-close-add-kegiatan"
							data-dismiss="modal">Batal</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- export Excel Tenaga Ahli Modal -->
	<div class="modal fade bd-example-modal-sm" id="modal-export-tenaga-ahli" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-sm modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="exampleModalCenterTitle">Export Tenaga Ahli</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
						<div class="col mb-2">
						<a class="btn btn-success btn-block" href="" id="btn-export-seluruh-tenaga-ahli"><img class="img-profile mr-2"
									src="<?= base_url('assets/icons/pupr-import-icon.svg') ?>">Seluruh</a>
						</div>
						<div class="col mb-2">
						<a class="btn btn-success btn-block" href="" id="btn-export-tenaga-ahli"><img class="img-profile mr-2"
									src="<?= base_url('assets/icons/pupr-import-icon.svg') ?>">Tenaga Ahli</a>
						</div>
						<div class="col mb-2">
						<a class="btn btn-success btn-block" href="" id="btn-export-mitra-terampil"><img class="img-profile mr-2"
									src="<?= base_url('assets/icons/pupr-import-icon.svg') ?>">Tenaga Terampil</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End of Import Excel Tambah Kegiatan Modal -->

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
						<h1 class="h2 font-weight-bold mb-4 mt-4">Tenaga Ahli dan Tenaga Terampil</h1>
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

												<div class="h5 mb-0 mr-3 text-gray-800"><?= $total_tenaga_ahli?> Tenaga Ahli</div>

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
												Total Jumlah
											</div>
											<div class="row no-gutters align-items-center">

												<div class="h5 mb-0 mr-3 text-gray-800"><?= $total_tenaga_terampil?> Tenaga Terampil</div>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div class="container-fluid mt-2 mb-4 container-background">
						<div class="col d-flex justify-content-between button-field">
						<div class="">
							<button class="btn btn-light btn-filter-kegiatan" data-toggle="modal"
								data-target="#modal-filter-tenaga-ahli"><img class="img-profile mr-2"
									src="<?= base_url('assets/icons/pupr-filter-icon.svg') ?>">Filter</button>
							<button class="btn btn-primary btn-add-kegiatan" id="btn-add-tenaga-ahli"><img class="img-profile mr-2"
									src="<?= base_url('assets/icons/pupr-add-icon.svg') ?>">Tambah</button>
							<button class="btn btn-warning btn-import-kegiatan" data-toggle="modal"
								data-target="#modal-import-excel-tambah-tenaga-ahli"><img class="img-profile mr-2"
									src="<?= base_url('assets/icons/pupr-import-icon.svg') ?>">Import</button>
							<button class="btn btn-success btn-import-kegiatan" data-toggle="modal"
								data-target="#modal-export-tenaga-ahli" ><img class="img-profile mr-2"
									src="<?= base_url('assets/icons/pupr-import-icon.svg') ?>">Export</button>
						</div>
						<div class="">
							<a class="btn btn-danger btn-import-kegiatan" href="" id="btn-download-format-tenaga-ahli"><img class="img-profile mr-2"
									src="<?= base_url('assets/icons/pupr-download-icon.svg') ?>">Download Format Excel</a>
						</div>
						</div>
						<div class="card-body">
                            <div class="pb-4 pt-2">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#tenaga-ahli" role="tab" data-toggle="tab">Tenaga Ahli</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#mitra-terampil" role="tab" data-toggle="tab">Tenaga Terampil</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content">
                                <div class="tab-pane fade active show" role="tabpanel" id="tenaga-ahli">
                                    <table id="tenaga_ahli_table" class="display">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal lahir</th>
                                                <th>Email</th>
                                                <th>Nomor HP</th>
                                                <th>Nomor Telepon Rumah</th>
                                                <th>NIK</th>
                                                <th>NPWP</th>
                                                <th>Pendidikan</th>
                                                <th>Status PNS</th>
                                                <th>Alamat</th>
                                                <th>Provinsi</th>
                                                <th>Kabupaten / kota</th>
                                                <th>Ketenagakerjaan</th>
                                                <th>Keahlian</th>
                                                <th>File Tenaga Ahli</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
								
                                <div class="tab-pane fade show" role="tabpanel" id="mitra-terampil">
								<table id="mitra_terampil_table" class="display">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal lahir</th>
                                                <th>Email</th>
                                                <th>Nomor HP</th>
                                                <th>Nomor Telepon Rumah</th>
                                                <th>NIK</th>
                                                <th>NPWP</th>
                                                <th>Pendidikan</th>
                                                <th>Status PNS</th>
                                                <th>Alamat</th>
                                                <th>Provinsi</th>
                                                <th>Kabupaten / kota</th>
                                                <th>Ketenagakerjaan</th>
                                                <th>Keterampilan</th>
                                                <th>File Tenaga Ahli</th>
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
