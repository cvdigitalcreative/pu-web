$(document).ready(function () {

	$('body').on('hidden.bs.modal', function () {
		if($('.modal.show').length > 0)
		{
			$('body').addClass('modal-open');
		}
	});
	
	// trigger modal notification
	$('#notification-modal').ready(function () {
		$('#notification-modal').modal('show')
	})

	// upload image kalender kegiatan js
	$("#banner-image").click(function (e) {
		$("#banner-kegiatan").click();
	});

	function fasterPreviewKegiatan(uploader) {
		if (uploader.files && uploader.files[0]) {
			$('#banner-image').attr('src',
				window.URL.createObjectURL(uploader.files[0]));
		}
	}

	$("#banner-kegiatan").change(function () {
		fasterPreviewKegiatan(this);
	});

	$('#modal-tambah-kegiatan').on('hidden.bs.modal', function () {
		$(this).find('form').trigger('reset');
		$(this).find("input,image,textarea").val('').end();
		$("#banner-image, #banner-kegiatan").val('')
	});
	// end upload image kalender kegiatan js

	// upload image profile kegiatan js
	$("#banner-image-profile").click(function (e) {
		$("#banner-profile").click();
	});

	function fasterPreviewProfile(uploader) {
		if (uploader.files && uploader.files[0]) {
			$('#banner-image-profile').attr('src',
				window.URL.createObjectURL(uploader.files[0]));
		}
	}

	$("#banner-profile").change(function () {
		fasterPreviewProfile(this);
	});

	// end upload image profile kegiatan js

	// upload image edit-berita kegiatan js
	$("#banner-image-edit-berita").click(function (e) {
		$("#banner-edit-berita").click();
	});

	function fasterPreviewBerita(uploader) {
		if (uploader.files && uploader.files[0]) {
			$('#banner-image-edit-berita').attr('src',
				window.URL.createObjectURL(uploader.files[0]));
		}
	}

	$("#banner-edit-berita").change(function () {
		fasterPreviewBerita(this);
	});

	// end upload image profile kegiatan js

	// tanggal mulai add kegiatan
	$(function () {
		$('input[name="tanggal_kegiatan"]').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true,
			minYear: 1900,
			maxYear: 3000
		}, function (start, end, label) {
			var years = moment().diff(start, 'years');
		});
	});

	// tanggal selesai add kegiatan
	$(function () {
		$('input[name="tanggal_kegiatan_selesai"]').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true,
			minYear: 1900,
			maxYear: 3000
		}, function (start, end, label) {
			var years = moment().diff(start, 'years');
		});
	});

	// tanggal mulai filter kegiatan
	$(function () {
		$('input[name="filter_tanggal_kegiatan_mulai"]').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true,
			minYear: 1900,
			maxYear: 3000
		}, function (start, end, label) {
			var years = moment().diff(start, 'years');
		});
	});

	// tanggal selesai filter kegiatan
	$(function () {
		$('input[name="filter_tanggal_kegiatan_selesai"]').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true,
			minYear: 1900,
			maxYear: 3000
		}, function (start, end, label) {
			var years = moment().diff(start, 'years');
		});
	});

	// tanggal mulai edit kegiatan
	$(function () {
		$('input[name="edit_tanggal_kegiatan_mulai"]').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true,
			minYear: 1900,
			maxYear: 3000
		}, function (start, end, label) {
			var years = moment().diff(start, 'years');
		});
	});

	// tanggal selesai edit kegiatan
	$(function () {
		$('input[name="edit_tanggal_kegiatan_selesai"]').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true,
			minYear: 1900,
			maxYear: 3000
		}, function (start, end, label) {
			var years = moment().diff(start, 'years');
		});
	});

	// tanggal lahir tenaga ahli
	$(function () {
		$('input[name="tanggal_lahir_tenaga_ahli"]').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true,
			minYear: 1900,
			maxYear: 3000
		}, function (start, end, label) {
			var years = moment().diff(start, 'years');
		});
	});

	// edit tanggal lahir tenaga ahli
	$(function () {
		$('input[name="edit_tanggal_lahir_tenaga_ahli"]').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true,
			minYear: 1900,
			maxYear: 3000
		}, function (start, end, label) {
			var years = moment().diff(start, 'years');
		});
	});

	// edit profile
	$(function () {
		$('input[name="profile_tahun_lulus"]').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true,
			minYear: 1900,
			maxYear: 3000
		}, function (start, end, label) {
			var years = moment().diff(start, 'years');
		});
	});

	// tanggal lahir profile
	$(function () {
		$('input[name="profile_tanggal_lahir"]').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true,
			minYear: 1900,
			maxYear: 3000
		}, function (start, end, label) {
			var years = moment().diff(start, 'years');
		});
	});
	// end input date rangepicker

	// Custom bootstrap-select each select id
	$('#instruktur-kegiatan').selectpicker();

	// End of Custom bootstrap-select each select id


	// $('#provinsi-tenaga-ahli').change(function () {
	// 	provinsi = $('#provinsi-tenaga-ahli').val();
	// 	console.log(provinsi);
	// 	$.ajax({
	//         type: "POST",
	// 		url: `${BASE_URL}Kegiatan/view_kota`,
	// 		cache: false,
	//         data: 'id_provinsi=' + provinsi,
	// 		success: function (result) {
	//             $("kota-tenaga-ahli").html(result);
	//         }
	//     });
	// })

	// 
	// ========= DATATABLE ===========
	// 

	// Kalender Kegiatan Datatable
	var TableKegiatan = $('#kalender_kegiatan_table').DataTable({
		// "order": [0, 'asc'],
		processing: true,
		serverSide: false,
		retrieve: true,
		scrollY: true,
		scrollX: true,
		scrollCollapse: true,
		// sDom: 'lrtip',
		pagingType: "full_numbers",
		language: {
			emptyTable: "Data tidak ditemukan!",
		},
		ajax: {
			url: `${BASE_URL}Kegiatan/dataSeluruh`,
			type: "GET",
		},
		columns: [
			{
				data: 'no_kegiatan',
			},
			{
				data: 'id_kegiatan',
				render: function (data) {
					return `
					<button id='btn-detail' type='submit' class='btn btn-info btn-block' data-id='${data}'>Lihat Peserta</button>
					<button id='btn-update' type='submit' class='btn btn-primary btn-block' data-id='${data}'>Ganti Status</button>
					<button id='btn-edit' type='submit' class='btn btn-warning btn-block' data-id='${data}'>Edit</button>
					<button id='btn-reject' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
				}
			},
			{
				data: 'judul_kegiatan',
			},
			{
				data: 'deskripsi_kegiatan',
			},
			{
				data: 'status_kegiatan',
			},
			{
				data: 'jenis_kegiatan',
			},
			{
				data: 'akun_kegiatan',
			},
			{
				data: 'tanggal_kegiatan_full_text',
			},
			{
				data: 'foto_banner_kegiatan',
				render: function (data) {
					if (data != '-') {
						return `
					<img class="image-hover" src="${data}" style="width: 100px; height: 100px; overflow: hidden; object-fit: cover;">`
				}
				else {
						return `
Tidak ada poster kegiatan`					}
					}
			},
			{
				data: 'str_nama_instruktur_kegiatan',
			},
			{
				data: 'str_nama_asesor_kegiatan',
			},
			{
				data: 'provinsi',
			},
			{
				data: 'kota_kabupaten',
			},
			{
				data: 'lokasi_kegiatan',
			},
			{
				data: 'jumlah_peserta',
			},
			{
				data: 'null',
				render: function (data, type, row) {
					if (row.file_materi_kegiatan != '-') {
						return `
					<a href='${row.file_materi_kegiatan}' target="__blank">${row.nama_file_materi_kegiatan}</a>`
					}
					else {
						return `
					Tidak ada file`}
				}
			},
		]
	});
	// End of Kalender kegiatan datatable 

	// Daftar Peserta by Kalender Kegiatan Datatable
	var Table = $("#daftar_peserta_table").DataTable({
		data: [],
		retrieve: true,
		processing: true,
		serverSide: false,
		scrollY: "400px",
    scrollX: true,
    scrollCollapse: true,
		// sDom: 'lrtip',
		pagingType: "full_numbers",
		language: {
			emptyTable: "Data tidak ditemukan!",
		},
		columns: [
			{
				data: 'no_peserta',
			},
			{
				data: 'file_foto_profile',
				render: function (data) {
					if (data == '-') {
						return `
					<img class="image-hover" src="${BASE_URL}assets/image/pupr-profile-user.svg" style="width: 75px; height: 75px; overflow: hidden;">`
					}else {
						return `
					<img class="image-hover" src="${data}" style="width: 75px; height: 75px; overflow: hidden;">`
					}
				}
			},
			{
				data: 'nama',
			},
			{
				data: 'jenis_kelamin',
			},
			{
				data: 'tempat_tanggal_lahir',
			},
			{
				data: 'status_perkawinan',
			},
			{
				data: 'nama_perusahaan',
			},
			{
				data: 'jabatan',
			},
			{
				data: 'utusan',
			},
			{
				data: 'email',
			},
			{
				data: 'no_handphone',
			},
			{
				data: 'no_telpon',
			},
			{
				data: 'nik',
			},
			{
				data: 'alamat_rumah',
			},
			{
				data: 'provinsi',
			},
			{
				data: 'kota_kabupaten',
			},
			{
				data: 'kecamatan',
			},
			{
				data: 'kelurahan',
			},
			{
				data: 'rt',
			},
			{
				data: 'rw',
			},
			{
				data: 'kode_pos',
			},
			{
				data: 'kode_area',
			},
			{
				data: 'status_rumah',
			},
			{
				data: 'pendidikan',
			},
			// {
			// 	data: 'id_user',
			// 	render: function (data) {
			// 		return `
			// 		<button id='btn-edit' type='submit' class='btn btn-warning btn-block' data-id='${data}'>Edit</button>
			// 		<button id='btn-reject' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
			// 	}
			// },
		],
		rowCallback: function (row, data) { },
		"order": [0, 'asc'],
		processing: true,
		serverSide: false,
		// sDom: 'lrtip',
		pagingType: "full_numbers",
		language: {
			emptyTable: "Data tidak ditemukan!",
		}
	});
	// End of Daftar Peserta by Kalender Kegiatan datatable 

	// Tenaga Ahli Datatable
	$('#tenaga_ahli_table').DataTable({
		"order": [0, 'asc'],
		processing: true,
		serverSide: false,
		scrollY: true,
		scrollX: true,
		scrollCollapse: true,
		// sDom: 'lrtip',
		language: {
			emptyTable: "Data tidak ditemukan!",
		},
		ajax: {
			url: `${BASE_URL}Tenaga_ahli/dataTenagaAhli`,
			type: "GET",
		},
		columns: [
			{
				data: 'no_tenaga_ahli',
			},
			{
				data: 'nama_lengkap',
			},
			{
				data: 'jenis_kelamin',
			},
			{
				data: 'tempat_lahir',
			},
			{
				data: 'tanggal_lahir_text',
			},
			{
				data: 'email',
			},
			{
				data: 'no_handphone',
			},
			{
				data: 'no_telpon_rumah',
			},
			{
				data: 'nik',
			},
			{
				data: 'alamat_rumah',
			},
			{
				data: 'provinsi',
			},
			{
				data: 'kabupaten_kota',
			},
			{
				data: 'ketenagakerjaan',
			},
			{
				data: 'keahlian',
			},
			{
				data: 'null',
				render: function (data, type, row) {
					if (row.file_tenaga_ahli != '-') {
						return `
					<a href='${row.file_tenaga_ahli}' target="__blank">${row.nama_file_tenaga_ahli}</a>`
					}
					else {
						return `
					Tidak ada file`}
				}
			},
			{
				data: 'id_tenaga_ahli',
				render: function (data) {
					return `
					<button id='btn-edit' type='submit' class='btn btn-warning btn-block' data-id='${data}'>Edit</button>
					<button id='btn-reject' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
					// <button id='btn-detail' type='submit' class='btn btn-info btn-block' data-id='${data}'>Download File</button>

				}
			},
		]
	}
	);
	// End of Tenaga Ahli datatable 

	// Mitra Terampil Datatable
	$('#mitra_terampil_table').DataTable({
		"order": [0, 'asc'],
		processing: true,
		serverSide: false,
		scrollY: true,
		scrollX: true,
		scrollCollapse: true,
		// sDom: 'lrtip',
		language: {
			emptyTable: "Data tidak ditemukan!",
		},
		ajax: {
			url: `${BASE_URL}Tenaga_ahli/dataTenagaTerampil`,
			type: "GET",
		},
		columns: [
			{
				data: 'no_tenaga_ahli',
			},
			{
				data: 'nama_lengkap',
			},
			{
				data: 'jenis_kelamin',
			},
			{
				data: 'tempat_lahir',
			},
			{
				data: 'tanggal_lahir_text',
			},
			{
				data: 'email',
			},
			{
				data: 'no_handphone',
			},
			{
				data: 'no_telpon_rumah',
			},
			{
				data: 'nik',
			},
			{
				data: 'alamat_rumah',
			},
			{
				data: 'provinsi',
			},
			{
				data: 'kabupaten_kota',
			},
			{
				data: 'ketenagakerjaan',
			},
			{
				data: 'keahlian',
			},
			{
				data: 'null',
				render: function (data, type, row) {
					if (row.file_tenaga_ahli != '-') {
						return `
					<a href='${row.file_tenaga_ahli}' target="__blank">${row.nama_file_tenaga_ahli}</a>`
					}
					else {
						return `
					Tidak ada file`}
				}
			},
			{
				data: 'id_tenaga_ahli',
				render: function (data) {
					return `
					<button id='btn-edit' type='submit' class='btn btn-warning btn-block' data-id='${data}'>Edit</button>
					<button id='btn-reject' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
					// <button id='btn-detail' type='submit' class='btn btn-info btn-block' data-id='${data}'>Download File</button>
				}
			},
		]
	}
	);
	// End of Mitra Terampil datatable 



	// SKKNI Datatable
	$('#skkni_table').DataTable({
		"order": [0, 'asc'],
		processing: true,
		serverSide: false,
		// scrollY: true,
    // scrollX: true,
    // scrollCollapse: true,
		// sDom: 'lrtip',
		pagingType: "full_numbers",
		language: {
			emptyTable: "Data tidak ditemukan!",
		},
		ajax: {
			url: `${BASE_URL}SKA/dataSeluruh`,
			type: "GET",
		},
		columns: [
			{
				data: 'no_ska',
			},
			{
				data: 'judul_ska',
			},
			{
				data: 'deskripsi_ska',
			},
			{
				data: 'kategori_ska',
			},
			{
				data: 'null',
				render: function (data, type, row) {
					if (row.file_ska != '-') {
						return `
					<a href='${row.file_ska}' target="__blank">${row.nama_file_ska}</a>`
					}
					else {
						return `
					Tidak ada file`}
				}
			},
			{
				data: 'pengirim',
			},
			{
				data: 'id_ska',
				render: function (data, type, row) {
					if (row.file_ska != '-') {
						return `
					<button id='btn-detail' type='submit' class='btn btn-info btn-block' data-id='${data}'>Download File</button>
					<button id='btn-edit' type='submit' class='btn btn-warning btn-block' data-id='${data}'>Edit</button>
					<button id='btn-reject' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
					}
					else {
						return `
						<button id='btn-edit' type='submit' class='btn btn-warning btn-block' data-id='${data}'>Edit</button>
						<button id='btn-reject' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
					}
				}
			},
		]
	});

	// Modul Datatable
	$('#modul_table').DataTable({
		"order": [0, 'asc'],
		processing: true,
		serverSide: false,
		// scrollY: true,
    // scrollX: true,
    // scrollCollapse: true,
		// sDom: 'lrtip',
		pagingType: "full_numbers",
		language: {
			emptyTable: "Data tidak ditemukan!",
		},
		ajax: {
			url: `${BASE_URL}Modul/dataSeluruh`,
			type: "GET",
		},
		columns: [
			{
				data: 'no_modul',
			},
			{
				data: 'judul_modul',
			},
			{
				data: 'deskripsi_modul',
			},
			{
				data: 'kategori_modul',
			},
			{
				data: 'null',
				render: function (data, type, row) {
					if (row.file_modul != '-') {
						return `
					<a href='${row.file_modul}' target="__blank">${row.nama_file_modul}</a>`
					}
					else {
						return `
					Tidak ada file`}
				}
			},
			{
				data: 'pengirim',
			},
			{
				data: 'id_modul',
				render: function (data, type, row) {
					if (row.file_modul != '-') {
						return `
					<button id='btn-detail' type='submit' class='btn btn-info btn-block' data-id='${data}'>Download File</button>
					<button id='btn-edit' type='submit' class='btn btn-warning btn-block' data-id='${data}'>Edit</button>
					<button id='btn-reject' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
					}
					else {
						return `
						<button id='btn-edit' type='submit' class='btn btn-warning btn-block' data-id='${data}'>Edit</button>
						<button id='btn-reject' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
					}
				}
			},
		]
	});

	// Buku Saku Datatable
	$('#buku_saku_table').DataTable({
		"order": [0, 'asc'],
		processing: true,
		serverSide: false,
		// scrollY: true,
    // scrollX: true,
    // scrollCollapse: true,
		// sDom: 'lrtip',
		pagingType: "full_numbers",
		language: {
			emptyTable: "Data tidak ditemukan!",
		},
		ajax: {
			url: `${BASE_URL}Buku_saku/dataSeluruh`,
			type: "GET",
		},
		columns: [
			{
				data: 'no_buku_saku',
			},
			{
				data: 'judul_buku_saku',
			},
			{
				data: 'deskripsi_buku_saku',
			},
			{
				data: 'null',
				render: function (data, type, row) {
					if (row.file_buku_saku != '-') {
						return `
					<a href='${row.file_buku_saku}' target="__blank">${row.nama_file_buku_saku}</a>`
					}
					else {
						return `
					Tidak ada file`}
				}
			},
			{
				data: 'pengirim',
			},
			{
				data: 'id_buku_saku',
				render: function (data, type, row) {
					if (row.file_buku_saku != '-') {
						return `
					<button id='btn-detail' type='submit' class='btn btn-info btn-block' data-id='${data}'>Download File</button>
					<button id='btn-edit' type='submit' class='btn btn-warning btn-block' data-id='${data}'>Edit</button>
					<button id='btn-reject' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
					}
					else {
						return `
						<button id='btn-edit' type='submit' class='btn btn-warning btn-block' data-id='${data}'>Edit</button>
						<button id='btn-reject' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
					}
				}
			},
		]
	});

	// Administrasi Kegiatan Datatable
	$('#administrasi_kegiatan_table').DataTable({
		"order": [0, 'asc'],
		processing: true,
		serverSide: false,
		// scrollY: true,
    // scrollX: true,
    // scrollCollapse: true,
		// sDom: 'lrtip',
		pagingType: "full_numbers",
		language: {
			emptyTable: "Data tidak ditemukan!",
		},
		ajax: {
			url: `${BASE_URL}Administrasi_kegiatan/dataSeluruh`,
			type: "GET",
		},
		columns: [
			{
				data: 'no_administrasi_kegiatan',
			},
			{
				data: 'judul_administrasi_kegiatan',
			},
			{
				data: 'deskripsi_administrasi_kegiatan',
			},
			{
				data: 'null',
				render: function (data, type, row) {
					if (row.file_administrasi_kegiatan != '-') {
						return `
					<a href='${row.file_administrasi_kegiatan}' target="__blank">${row.nama_file_administrasi_kegiatan}</a>`
					}
					else {
						return `
					Tidak ada file`}
				}
			},
			{
				data: 'pengirim',
			},
			{
				data: 'id_administrasi_kegiatan',
				render: function (data, type, row) {
					if (row.file_administrasi_kegiatan != '-') {
						return `
					<button id='btn-detail' type='submit' class='btn btn-info btn-block' data-id='${data}'>Download File</button>
					<button id='btn-edit' type='submit' class='btn btn-warning btn-block' data-id='${data}'>Edit</button>
					<button id='btn-reject' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
					}
					else {
						return `
						<button id='btn-edit' type='submit' class='btn btn-warning btn-block' data-id='${data}'>Edit</button>
						<button id='btn-reject' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
					}
				}
			},
		]
	});

	// Feedback Datatable
	$('#feedback_table').DataTable({
		"order": [0, 'asc'],
		processing: true,
		serverSide: false,
		// scrollY: true,
    // scrollX: true,
    // scrollCollapse: true,
		// sDom: 'lrtip',
		pagingType: "full_numbers",
		language: {
			emptyTable: "Data tidak ditemukan!",
		},
		ajax: {
			url: `${BASE_URL}Feedback/dataSeluruh`,
			type: "GET",
		},
		columns: [
			{
				data: 'no_feedback',
			},
			{
				data: 'judul_feedback',
			},
			{
				data: 'deskripsi_feedback',
			},
			{
				data: 'pengirim',
			},
			{
				data: 'id_feedback',
				render: function (data) {
					return `
					<button id='btn-detail' type='submit' class='btn btn-info btn-block' data-id='${data}'>Detail</button>
					<button id='btn-reject' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
				}
			},
		],
		columnDefs: [
			{
				targets: 1,
				width: "400px",
			},	
			{
				targets: 2,
				width: "600px",
				className: "truncate"
			}
		]
	});

	// Berita Datatable
	$('#berita_table').DataTable({
		"order": [0, 'asc'],
		processing: true,
		serverSide: false,
		// scrollY: true,
    // scrollX: true,
    // scrollCollapse: true,
		// sDom: 'lrtip',
		pagingType: "full_numbers",
		language: {
			emptyTable: "Data tidak ditemukan!",
		},
		ajax: {
			url: `${BASE_URL}Berita/dataSeluruh`,
			type: "GET",
		},
		columns: [
			{
				data: 'no_berita',
			},
			{
				data: 'judul_berita',
			},
			{
				data: 'deskripsi_berita',
			},
			{
				data: 'file_gambar_berita',
				render: function (data) {
					if (data != '-') {
						return `
							<img class="image-hover" src="${data}" style="width: 100px; height: 100px; overflow: hidden; object-fit: cover;">`
					}
				else {
					return `
						Tidak ada gambar berita`
					}
				}
			},
			{
				data: 'created_date_text',
			},
			{
				data: 'updated_date_text',
			},
			{
				data: 'pengirim',
			},
				
			{
				data: 'id_berita',
				render: function (data) {
					return `
					<button id='btn-detail' type='submit' class='btn btn-info btn-block' data-id='${data}'>Detail</button>
					<button id='btn-edit' type='submit' class='btn btn-warning btn-block' data-id='${data}'>Edit</button>
					<button id='btn-reject' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
				}
			},
		],
		columnDefs: [
			{
				targets: 1,
				className: "truncate-judul-berita"
			},	
			{
				targets: 2,
				className: "truncate-berita"
			},
		]
	});

	$('#btn-filter-kegiatan').click(function () {
		event.preventDefault();
		$.ajax({
			url: `${BASE_URL}Kegiatan/filter`,
			dataType: 'JSON',
			method: 'POST',
			data: {
				'filter_tanggal_kegiatan_mulai': $('#filter-tanggal-mulai-kegiatan').val(),
				'filter_tanggal_kegiatan_selesai': $('#filter-tanggal-selesai-kegiatan').val(),
				'filter_jenis_kegiatan': $('#filter-jenis-kegiatan').val(),
				'filter_status_kegiatan': $('#filter-status-kegiatan').val()
			},
			success: function (hasil) {
				console.log(hasil);

				$('#kalender_kegiatan_table').DataTable().clear().destroy();
				// reinitiate
				$('#kalender_kegiatan_table').DataTable({
					data: hasil,
					columns: [
						{
							data: 'no_kegiatan',
						},
						{
							data: 'tanggal_kegiatan_full_text',
						},
						{
							data: 'foto_banner_kegiatan',
							render: function (data) {
								return `
								<img src="${data}" style="width: 200px; height: 200px; overflow: hidden;">`
							}
						},
						{
							data: 'jenis_kegiatan',
						},
						{
							data: 'akun_kegiatan',
						},
						{
							data: 'status_kegiatan',
						},
						{
							data: 'judul_kegiatan',
						},
						{
							data: 'str_nama_instruktur_kegiatan',
						},
						{
							data: 'str_nama_asesor_kegiatan',
						},
						{
							data: 'provinsi',
						},
						{
							data: 'kota_kabupaten',
						},
						{
							data: 'lokasi_kegiatan',
						},
						{
							data: 'jumlah_peserta',
						},
						{
							data: 'nama_file_materi_kegiatan',
						},
						{
							data: 'file_materi_kegiatan',
							render: function (data) {
								return `
								<a href='${data}'>file</a>`
							}
						},
						{
							data: 'id_kegiatan',
							render: function (data) {
								return `
								<button id='btn-edit' type='submit' class='btn btn-success btn-block' data-id='${data}'>Detail</button>
								<button id='btn-detail' type='submit' class='btn btn-info btn-block' data-id='${data}'>Edit</button>
								<button id='btn-reject' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
							}
						},
					]
				});
				$('#modal-filter-kegiatan').modal('hide');
			}
		})
	});
	
	// ========= FILTER TENAGA AHLI ON CLICK ===========
	$('#btn-filter-tenaga-ahli').click(function () {
		event.preventDefault();
		$.ajax({
			url: `${BASE_URL}Tenaga_ahli/filter/1`,
			dataType: 'JSON',
			method: 'POST',
			data: {
				'filter_provinsi_tenaga_ahli': $('#filter-provinsi-tenaga-ahli').val(),
				'filter_jabatan_kerja_tenaga_ahli': $('#filter-jabatan-kerja-tenaga-ahli').val(),
			},
			success: function (hasil) {
				console.log(hasil);

				
			}
		})
		$.ajax({
			url: `${BASE_URL}Tenaga_ahli/filter/2`,
			dataType: 'JSON',
			method: 'POST',
			data: {
				'filter_provinsi_tenaga_ahli': $('#filter-provinsi-tenaga-ahli').val(),
				'filter_jabatan_kerja_tenaga_ahli': $('#filter-jabatan-kerja-tenaga-ahli').val(),
			},
			success: function (hasil) {
				console.log(hasil);

				
			}
		})
		$('#modal-filter-tenaga-ahli').modal('hide');
	});

	// 
	// ========= DETAIL BUTTON ON CLICK ===========
	// 

	var id_kegiatan;
	// Each Row Table onClick Edit Button
	$('table').on('click', '#btn-detail', function () {
		if ($('#kalender_kegiatan_table').length > 0) {
			const id = $(this).data('id')
			id_kegiatan = $(this).data('id')
			Table.ajax.url(`${BASE_URL}Peserta/dataPeserta/${id}`).load();
			$('#modal-lihat-peserta-by-kegiatan').modal('show')
		}
		else if ($('#skkni_table').length > 0) {
			const id = $(this).data('id')
			$.ajax({
				url: `${BASE_URL}SKA/download/${id}`,
				type: 'POST',
				success: function () {
					window.location = `${BASE_URL}SKA/download/${id}`;
				}
			})
		}
		else if ($('#buku_saku_table').length > 0) {
			const id = $(this).data('id')
			$.ajax({
				url: `${BASE_URL}Buku_saku/download/${id}`,
				type: 'POST',
				success: function () {
					window.location = `${BASE_URL}Buku_saku/download/${id}`;
				}
			})
		}
		else if ($('#modul_table').length > 0) {
			const id = $(this).data('id')
			$.ajax({
				url: `${BASE_URL}Modul/download/${id}`,
				type: 'POST',
				success: function () {
					window.location = `${BASE_URL}Modul/download/${id}`;
				}
			})
		}
		else if ($('#administrasi_kegiatan_table').length > 0) {
			const id = $(this).data('id')
			$.ajax({
				url: `${BASE_URL}Administrasi_kegiatan/download/${id}`,
				type: 'POST',
				success: function () {
					window.location = `${BASE_URL}Administrasi_kegiatan/download/${id}`;
				}
			})
		}
		else if ($('#tenaga_ahli_table').length > 0) {
			const id = $(this).data('id')
			$.ajax({
				url: `${BASE_URL}Tenaga_ahli/download/${id}`,
				type: 'POST',
				success: function () {
					window.location = `${BASE_URL}Tenaga_ahli/download/${id}`;
				}
			})
		}
		else if ($('#tenaga_terampil_table').length > 0) {
			const id = $(this).data('id')
			$.ajax({
				url: `${BASE_URL}Tenaga_ahli/download/${id}`,
				type: 'POST',
				success: function () {
					window.location = `${BASE_URL}Tenaga_ahli/download/${id}`;
				}
			})
		}
		else if ($('#feedback_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Feedback/jawab_feedback/${id}`)
			$('#judul-feedback').val($(this).parent().siblings().eq(1).text())
			$('#pertanyaan-feedback').val($(this).parent().siblings().eq(2).text())
			$('#pengirim-feedback').val($(this).parent().siblings().eq(3).text())
			$(`#modal-reply-feedback`).modal('show')
		}
		else if ($('#berita_table').length > 0) {
			const id = $(this).data('id')
			var currentRow = $(this).closest("tr");
			var data = $('#berita_table').DataTable().row(currentRow).data();
			$('#banner-image-detail-berita').attr('src', data['file_gambar_berita']);
			document.getElementById("detail-judul-berita").innerHTML = data['judul_berita'];
			document.getElementById("detail-judul-berita").classList.add('text-secondary', 'text-justify')
			document.getElementById("detail-deskripsi-berita").innerHTML = data['deskripsi_berita'];
			document.getElementById("detail-deskripsi-berita").classList.add('text-secondary', 'text-justify')
			$('#modal-detail-berita').modal('show')
		}
	})
	// End of default 
	// 
	// ========= UPDATE BUTTON ON CLICK ===========
	// 
	// Each Row Table onClick Edit Button
	$('table').on('click', '#btn-update', function () {
		if ($('#kalender_kegiatan_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Kegiatan/ganti_status_kegiatan/${id}`)
			$(`#modal-ganti-status-kegiatan`).modal('show')
		}
	})
	// End of edit

	
	// 
	// ========= EDIT BUTTON ON CLICK ===========
	// 
	
	// Each Row Table onClick Edit Button
	$('table').on('click', '#btn-edit', function () {
		if ($('#kalender_kegiatan_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Kegiatan/edit_kegiatan_action/${id}`)
			$('#edit-nama-kegiatan').val($(this).parent().siblings().eq(6).text())
			$('#edit-lokasi-kegiatan').val($(this).parent().siblings().eq(11).text())
			$(`#modal-edit-kegiatan`).modal('show')
		}
		else if ($('#skkni_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}SKA/edit_ska_action/${id}`)
			$('#edit-judul-skkni').val($(this).parent().siblings().eq(1).text())
			$('#edit-deskripsi-skkni').val($(this).parent().siblings().eq(2).text())
			$('#edit-id-kategori-skkni-old').val($(this).parent().siblings().eq(3).text())
			$('#modal-edit-skkni').modal('show')
		}
		else if ($('#modul_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Modul/edit_modul_action/${id}`)
			$('#edit-judul-modul').val($(this).parent().siblings().eq(1).text())
			$('#edit-deskripsi-modul').val($(this).parent().siblings().eq(2).text())
			$('#edit-id-kategori-modul-old').val($(this).parent().siblings().eq(3).text())
			$(`#modal-edit-modul`).modal('show')
		}
		else if ($('#administrasi_kegiatan_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Administrasi_kegiatan/edit_administrasi_kegiatan_action/${id}`)
			$('#edit-judul-administrasi-kegiatan').val($(this).parent().siblings().eq(1).text())
			$('#edit-deskripsi-administrasi-kegiatan').val($(this).parent().siblings().eq(2).text())
			$(`#modal-edit-administrasi-kegiatan`).modal('show')
		}
		else if ($('#buku_saku_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Buku_saku/edit_buku_saku_action/${id}`)
			$('#edit-judul-buku-saku').val($(this).parent().siblings().eq(1).text())
			$('#edit-deskripsi-buku-saku').val($(this).parent().siblings().eq(2).text())
			$('#modal-edit-buku-saku').modal('show')
		}
		else if ($('#tenaga_ahli_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Tenaga_ahli/edit_tenaga_ahli_action/${id}`)
			$('#edit-nama-tenaga-ahli').val($(this).parent().siblings().eq(1).text())
			$('#edit-tempat-lahir-tenaga-ahli').val($(this).parent().siblings().eq(3).text())
			$('#edit-nik-tenaga-ahli').val($(this).parent().siblings().eq(8).text())
			$('#edit-email-tenaga-ahli').val($(this).parent().siblings().eq(5).text())
			$('#edit-alamat-tenaga-ahli').val($(this).parent().siblings().eq(9).text())
			$('#edit-nomor-handphone-tenaga-ahli').val($(this).parent().siblings().eq(6).text())
			$('#edit-nomor-rumah-tenaga-ahli').val($(this).parent().siblings().eq(7).text())
			$('#modal-edit-tenaga-ahli').modal('show')
		}
		else if ($('#berita_table').length > 0) {
			const id = $(this).data('id')
			var currentRow = $(this).closest("tr");
			$('form').attr('action', `${BASE_URL}Berita/edit_berita_action/${id}`)
			var data = $('#berita_table').DataTable().row(currentRow).data();
			$('#banner-image-edit-berita').attr('src', data['file_gambar_berita'])
			$('#edit-judul-berita').val($(this).parent().siblings().eq(1).text())
			$('#edit-deskripsi-berita').val($(this).parent().siblings().eq(2).text())
			$('#modal-edit-berita').modal('show')
		}
	})
	// End of edit
	
	// 
	// ========= DELETE BUTTON ON CLICK ===========
	// 
	
	// Each Row Table onClick Delete Button
	$('table').on('click', '#btn-reject', function () {
		if ($('#kalender_kegiatan_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Kegiatan/delete_kegiatan/${id}`)
			$(`#delete-kegiatan`).modal('show')
		}
		else if ($('#skkni_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}SKA/delete_ska/${id}`)
			$('#modal-delete-skkni').modal('show')
		}
		else if ($('#modul_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Modul/delete_modul/${id}`)
			$('#modal-delete-modul').modal('show')
		}
		else if ($('#administrasi_kegiatan_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Administrasi_kegiatan/delete_administrasi_kegiatan/${id}`)
			$('#modal-delete-administrasi-kegiatan').modal('show')
		}
		else if ($('#buku_saku_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Buku_saku/delete_buku_saku/${id}`)
			$('#modal-delete-buku-saku').modal('show')
		}
		else if ($('#tenaga_ahli_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Tenaga_ahli/delete_tenaga_ahli/${id}`)
			$('#modal-delete-tenaga-ahli').modal('show')
		}
		else if ($('#feedback_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Feedback/delete_feedback/${id}`)
			$('#modal-delete-feedback').modal('show')
		}
		else if ($('#berita_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Berita/delete_berita/${id}`)
			$('#modal-delete-berita').modal('show')
		}
	})
	// End of delete
	
	// 
	// ========= EXPORT PESERTA ONCLICK ===========
	// 
	$('#btn-export-peserta').on('click', function () {
		$.ajax({
			url: `${BASE_URL}Peserta/export_peserta_action/${id_kegiatan}`,
			success: function () {
				window.location = `${BASE_URL}Peserta/export_peserta_action/${id_kegiatan}`;
			}
		})
	});
	
	// 
	// ========= IMPORT PESERTA ONCLICK ===========
	// 
	$('#btn-import-peserta-kegiatan').on('click', function () {
		$('form').attr('action', `${BASE_URL}Kegiatan/import_peserta_kegiatan_action/${id_kegiatan}`)
		$('#modal-lihat-peserta-by-kegiatan').modal('hide');
		$('#modal-import-excel-tambah-peserta-kegiatan').modal('show');
	});

	
	// ========= DOWNLOAD FORMAT TENAGA AHLI ONCLICK ===========
	// 
	// 
	$('#btn-download-format-tenaga-ahli').on('click', function () {
		$.ajax({
			url: `${BASE_URL}Tenaga_ahli/download_format_excel_action`,
			type: 'POST',
			success: function () {
				window.location = `${BASE_URL}Tenaga_ahli/download_format_excel_action`;
			}
		})
	})
	// 
	// ========= EXPORT TENAGA AHLI ONCLICK ===========
	// 
	
	$('#btn-export-seluruh-tenaga-ahli').on('click', function () {
		$.ajax({
			url: `${BASE_URL}Tenaga_ahli/export_tenaga_ahli_action/0`,
			type: 'POST',
			success: function () {
				window.location = `${BASE_URL}Tenaga_ahli/export_tenaga_ahli_action/0`;
			}
		})
		$('#modal-export-tenaga-ahli').modal('hide')
	})
	$('#btn-export-tenaga-ahli').on('click', function () {
		$.ajax({
			url: `${BASE_URL}Tenaga_ahli/export_tenaga_ahli_action/1`,
			type: 'POST',
			success: function () {
				window.location = `${BASE_URL}Tenaga_ahli/export_tenaga_ahli_action/1`;
			}
		})
		$('#modal-export-tenaga-ahli').modal('hide')
	})
	$('#btn-export-mitra-terampil').on('click', function () {
		$.ajax({
			url: `${BASE_URL}Tenaga_ahli/export_tenaga_ahli_action/2`,
			type: 'POST',
			success: function () {
				window.location = `${BASE_URL}Tenaga_ahli/export_tenaga_ahli_action/2`;
			}
		})
		$('#modal-export-tenaga-ahli').modal('hide')
	})

	// 
	// ========= EXPORT KEGIATAN ONCLICK ===========
	// 

	$('#btn-export-kegiatan').on('click', function () {
		$.ajax({
			url: `${BASE_URL}Kegiatan/export_kegiatan_action`,
			type: 'POST',
			success: function () {
				window.location = `${BASE_URL}Kegiatan/export_kegiatan_action`;
			}
		})
	})

	$('#btn-tambah-instruktur-asesor-kegiatan').on('click', function () {
		window.location.replace(`${BASE_URL}pupr/experts?redirect=events&show=1`); 
	})

	jQuery.each(jQuery('textarea[data-autoresize]'), function() {
		var offset = this.offsetHeight - this.clientHeight;
	   
		var resizeTextarea = function(el) {
		  jQuery(el).css('height', 'auto').css('height', el.scrollHeight + offset);
		};
		jQuery(this).on('keyup input', function() { resizeTextarea(this); }).removeAttr('data-autoresize');
	  });
	
});


