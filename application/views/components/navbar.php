<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light topbar mb-4 static-top">

	<!-- Sidebar Toggle (Topbar) -->
	<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
		<i class="fa fa-bars"></i>
	</button>

	<!-- Topbar Navbar -->
	<ul class="navbar-nav ml-auto">

		<!-- Nav Item - User Information -->
		<li class="nav-item dropdown no-arrow">
			<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
				aria-haspopup="true" aria-expanded="false">
				<span class="mr-3 d-none d-lg-inline user-login-name"><?= $detail_user['nama']?></span>
				<?php if($detail_user['file_foto_profile'] != '-') :?>
					<img class="" width="42" height="42" style="object-fit: cover; border-radius: 50%;" src="<?=$detail_user['file_foto_profile']?>">
				<?php else : ?>
					<img class="" width="42" height="42" src="<?=base_url('assets/image/pupr-profile-user.svg')?>">
			<?php endif?>
			</a>
			<!-- Dropdown - User Information -->
			<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
				<a class="dropdown-item" href="#">
					<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
					Profile
				</a>
				<div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
					<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
					Logout
				</a>
			</div>
		</li>

	</ul>

</nav>
<!-- End of Topbar -->
