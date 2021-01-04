<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion sticky-top" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url('pupr/dashboard')?>">
		<div class="sidebar-brand-icon">
			<img src="<?=base_url('assets/image/pupr-logo.svg')?>" width="34" height="34" alt="BJKW II Palembang">
		</div>
		<div class="sidebar-brand-text mx-3">BJKW II Palembang</div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item <?=$this->uri->segment(2) == 'dashboard' ? 'active' : ''?>">
		<a class="nav-link <?=$this->uri->segment(2) == 'dashboard' ? 'disabled' : ''?>"
			href="<?=base_url('pupr/dashboard')?>">
			<img class="img-profile mr-2" src="<?=base_url('assets/illustration/dashboard-menu.svg')?>">
			<span>Dashboard</span>
		</a>
	</li>

	<!-- Nav Item - Kalender Kegiatan -->
	<li class="nav-item <?=$this->uri->segment(2) == 'events' ? 'active' : ''?>">
		<a class="nav-link <?=$this->uri->segment(2) == 'events' ? 'disabled' : ''?>"
			href="<?=base_url('pupr/events')?>">
			<img class="img-profile mr-2" src="<?=base_url('assets/illustration/kegiatan-menu.svg')?>">
			<span>Kalender Kegiatan</span>
		</a>
	</li>

	<!-- Nav Item - Tenaga Ahli & Mitra -->
	<li class="nav-item <?=$this->uri->segment(2) == 'experts' ? 'active' : ''?>">
		<a class="nav-link <?=$this->uri->segment(2) == 'experts' ? 'disabled' : ''?>"
			href="<?=base_url('pupr/experts/')?>">
			<img class="img-profile mr-2" src="<?=base_url('assets/illustration/ahli-menu.svg')?>">
			<span>Tenaga Ahli & Mitra</span>
		</a>
	</li>

	<!-- Nav Item - Peserta -->
	<li class="nav-item <?=$this->uri->segment(2) == 'participant' ? 'active' : ''?>">
		<a class="nav-link <?=$this->uri->segment(2) == 'participant' ? 'disabled' : ''?>"
			href="<?=base_url('pupr/participant')?>">
			<img class="img-profile mr-2" src="<?=base_url('assets/illustration/peserta-menu.svg')?>">
			<span>Peserta</span>
		</a>
	</li>

	<!-- Nav Item - Buku Saku -->
	<li class="nav-item <?=$this->uri->segment(2) == 'pocketbook' ? 'active' : ''?>">
		<a class="nav-link <?=$this->uri->segment(2) == 'pocketbook' ? 'disabled' : ''?>"
			href="<?=base_url('pupr/pocketbook')?>">
			<img class="img-profile mr-2" src="<?=base_url('assets/illustration/buku-saku-menu.svg')?>">
			<span>Buku Saku</span>
		</a>
	</li>

	<!-- Nav Item - Administrasi Kegiatan -->
	<li class="nav-item <?=$this->uri->segment(2) == 'administration' ? 'active' : ''?>">
		<a class="nav-link <?=$this->uri->segment(2) == 'administration' ? 'disabled' : ''?>"
			href="<?=base_url('pupr/administration')?>">
			<img class="img-profile mr-2" src="<?=base_url('assets/illustration/administrasi-menu.svg')?>">
			<span>Administrasi Kegiatan</span>
		</a>
	</li>

	<!-- Nav Item - SKKNI -->
	<li class="nav-item <?=$this->uri->segment(2) == 'skkni' ? 'active' : ''?>">
		<a class="nav-link <?=$this->uri->segment(2) == 'skkni' ? 'disabled' : ''?>" href="<?=base_url('pupr/skkni')?>">
			<img class="img-profile mr-2" src="<?=base_url('assets/illustration/surat-menu.svg')?>">
			<span>SKKNI</span>
		</a>
	</li>

	<!-- Nav Item - Modul -->
	<li class="nav-item <?=$this->uri->segment(2) == 'modul' ? 'active' : ''?>">
		<a class="nav-link <?=$this->uri->segment(2) == 'modul' ? 'disabled' : ''?>" href="<?=base_url('pupr/modul')?>">
			<img class="img-profile mr-2" src="<?=base_url('assets/illustration/modul-menu.svg')?>">
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
