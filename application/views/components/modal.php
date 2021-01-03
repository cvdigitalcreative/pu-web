<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Sudah mau keluar?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Pilih tombol Keluar untuk mengakhiri.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
				<a class="btn btn-danger" href="<?=base_url()?>Authentication/logout">Keluar</a>
			</div>
		</div>
	</div>
</div>

<!-- Konfirmasi Pembayaran Modal-->
<div class="modal fade" id="konfirmasiPembayaranModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Konfirmasi pembayaran?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Apakah anda ingin mengkonfirmasi pembayaran ini?</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<a class="btn btn-success" href="<?base_url('admin/confirmPayment/confirm/')?>">Accept</a>
			</div>
		</div>
	</div>
</div>

<!-- Reject pembayaran Modal-->
<div class="modal fade" id="tolakPembayaranModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tolak pembayaran?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Apakah anda ingin menolak pembayaran ini?</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<a class="btn btn-danger" href="">Reject</a>
			</div>
		</div>
	</div>
</div>

<!-- Tambah Event Modal -->

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="modalEvent" tabindex="-1" role="dialog"
	aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">Tambah Event</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label for="exampleInputEmail1">Nama Event</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					</div>
					<div class="form-group">
                        <label for="exampleFormControlTextarea1">Deskripsi</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
					</div>
					<div class="custom-file">
						<input type="file" class="custom-file-input" id="validatedCustomFile" required>
						<label class="custom-file-label" for="validatedCustomFile">Pilih Gambar</label>
						<div class="invalid-feedback">Example invalid custom file feedback</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-lg btn-block btn-success">Buat Event</button>
			</div>
		</div>
	</div>
</div>

<!-- Tambah Administrator Modal -->

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="modalRegistration" tabindex="-1" role="dialog"
	aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">Tambah Administrator</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<label for="exampleInputEmail1">Nama</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Nomor Hp</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Email</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Password</label>
						<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					</div>
					
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-lg btn-block btn-success">Tambah Administrator</button>
			</div>
		</div>
	</div>
</div>

