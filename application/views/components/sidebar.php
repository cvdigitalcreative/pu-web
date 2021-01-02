<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url('admin/dashboard')?>">
		<div class="sidebar-brand-icon">
			<img src="<?=base_url('assets/image/pupr-logo.svg')?>" width="34" height="34" alt="BJKW II Palembang">
		</div>
		<div class="sidebar-brand-text mx-3">BJKW II Palembang</sup></div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item <?=$this->uri->segment(2) == 'dashboard' ? 'active' : ''?>">
		<a class="nav-link <?=$this->uri->segment(2) == 'dashboard' ? 'disabled' : ''?>"
			href="<?=base_url('admin/dashboard')?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span>
		</a>
	</li>

	<!-- Nav Item - Kalender Kegiatan -->
	<li class="nav-item <?=$this->uri->segment(2) == 'confirmPayment' ? 'active' : ''?>">
		<a class="nav-link <?=$this->uri->segment(2) == 'confirmPayment' ? 'disabled' : ''?>"
			href="<?=base_url('admin/confirmPayment')?>">
			<i class="fas fa-fw fa fa-check-circle"></i>
			<span>Kalender Kegiatan</span>
		</a>
	</li>

	<!-- Nav Item - Tenaga Ahli & Mitra -->
	<li class="nav-item <?=$this->uri->segment(2) == 'confirmWithdraw' ? 'active' : ''?>">
		<a class="nav-link <?=$this->uri->segment(2) == 'confirmWithdraw' ? 'disabled' : ''?>"
			href="<?=base_url('admin/confirmWithdraw')?>">
			<i class="fas fa-fw fa fa-check-circle"></i>
			<span>Tenaga Ahli & Mitra</span>
		</a>
	</li>

	<!-- Nav Item - Peserta -->
	<li class="nav-item <?=$this->uri->segment(2) == 'confirmDriver' ? 'active' : ''?>">
		<a class="nav-link <?=$this->uri->segment(2) == 'confirmDriver' ? 'disabled' : ''?>"
			href="<?=base_url('admin/confirmDriver')?>">
			<i class="fas fa-fw fa fa-check-circle"></i>
			<span>Peserta</span>
		</a>
	</li>

	<!-- Nav Item - Buku Saku -->
	<li class="nav-item <?=$this->uri->segment(2) == 'emergency' ? 'active' : ''?>">
		<a class="nav-link <?=$this->uri->segment(2) == 'emergency' ? 'disabled' : ''?>"
			href="<?=base_url('admin/emergency')?>">
			<i class="fas fa-fw fa fa-exclamation-triangle"></i>
			<span>Buku Saku</span>
		</a>
	</li>

	<!-- Nav Item - Administrasi Kegiatan -->
	<li class="nav-item <?=$this->uri->segment(2) == 'help' ? 'active' : ''?>">
		<a class="nav-link <?=$this->uri->segment(2) == 'help' ? 'disabled' : ''?>"
			href="<?=base_url('admin/help')?>">
			<i class="fas fa-fw fa fa-question-circle"></i>
			<span>Administrasi Kegiatan</span>
		</a>
	</li>

	<!-- Nav Item - SKKNI -->
	<li class="nav-item <?=$this->uri->segment(2) == 'skkni' ? 'active' : ''?>">
		<a class="nav-link <?=$this->uri->segment(2) == 'skkni' ? 'disabled' : ''?>"
			href="<?=base_url('admin/skkni')?>">
			<i class="fas fa-fw fa fa-question-circle"></i>
			<span>SKKNI</span>
		</a>
	</li>

	<!-- Nav Item - Modul -->
	<li class="nav-item <?=$this->uri->segment(2) == 'modul' ? 'active' : ''?>">
		<a class="nav-link <?=$this->uri->segment(2) == 'modul' ? 'disabled' : ''?>"
			href="<?=base_url('admin/modul')?>">
			<i class="fas fa-fw fa fa-question-circle"></i>
			<span>Modul</span>
		</a>
	</li>

	<!-- Divider -->
	<hr class="sidebar-divider d-none d-md-block">

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

</ul>
<!-- End of Sidebar -->
