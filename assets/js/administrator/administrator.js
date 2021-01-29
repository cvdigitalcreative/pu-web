$(document).ready(function () {

	$('body').on('hidden.bs.modal', function () {
		if ($('.modal.show').length > 0) {
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

	// upload image edit kalender kegiatan js
	$("#banner-image-edit").click(function (e) {
		$("#edit-banner-kegiatan").click();
	});

	function fasterPreviewEditKegiatan(uploader) {
		if (uploader.files && uploader.files[0]) {
			$('#banner-image-edit').attr('src',
				window.URL.createObjectURL(uploader.files[0]));
		}
	}

	$("#edit-banner-kegiatan").change(function () {
		fasterPreviewEditKegiatan(this);
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

	fill_datatable();
	

	// Kalender Kegiatan Datatable
	function fill_datatable(filter_tanggal_kegiatan_mulai = null,
		filter_tanggal_kegiatan_selesai = null,
		filter_jenis_kegiatan = null,
		filter_status_kegiatan = null,
		filter_id_provinsi = null,
		filter_id_kabupaten_kota = null
	) {
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
				dataType: 'JSON',
				method: 'POST',
				data: {
					'filter_tanggal_kegiatan_mulai': filter_tanggal_kegiatan_mulai,
					'filter_tanggal_kegiatan_selesai': filter_tanggal_kegiatan_selesai,
					'filter_jenis_kegiatan': filter_jenis_kegiatan,
					'filter_status_kegiatan': filter_status_kegiatan,
					'filter_id_provinsi': filter_id_provinsi,
					'filter_id_kabupaten_kota': filter_id_kabupaten_kota
				}
			},
			columns: [
				{
					data: 'no_kegiatan',
				},
				{
					data: 'null',
					render: function (data, type, row) {
						if (row.id_status_kegiatan != 2) {
							return `
					<button id='btn-detail' type='submit' class='btn btn-info btn-block' data-id='${row.id_kegiatan}'>Lihat Peserta</button>
					<button id='btn-detail-experts' type='submit' class='btn btn-success btn-block' data-id='${row.id_kegiatan}'>Instruktur & Assesor</button>
					<button id='btn-update' type='submit' class='btn btn-primary btn-block' data-id='${row.id_kegiatan}'>Ganti Status</button>
					<button id='btn-edit' type='submit' class='btn btn-warning btn-block' data-id='${row.id_kegiatan}'>Edit</button>
					<button id='btn-reject' type='submit' class='btn btn-danger btn-block' data-id='${row.id_kegiatan}'>Hapus</button>`
				}
				else {
							return `
					<button id='btn-detail' type='submit' class='btn btn-info btn-block' data-id='${row.id_kegiatan}'>Lihat Peserta</button>
					<button id='btn-detail-experts' type='submit' class='btn btn-success btn-block' data-id='${row.id_kegiatan}'>Instruktur & Assesor</button>
					<button id='btn-update' type='submit' class='btn btn-primary btn-block' data-id='${row.id_kegiatan}' disabled>Selesai Dilaksanakan</button>
					<button id='btn-edit' type='submit' class='btn btn-warning btn-block' data-id='${row.id_kegiatan}'>Edit</button>
					<button id='btn-reject' type='submit' class='btn btn-danger btn-block' data-id='${row.id_kegiatan}'>Hapus</button>`
							
						}
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
					data: 'jumlah_peserta',
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
		})
	}
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
					} else {
						return `
					<img class="image-hover" src="${data}" style="width: 75px; height: 75px; overflow: hidden;">`
					}
				}
			},
			{
				data: 'nama',
			},
			{
				data: 'tempat_tanggal_lahir',
			},
			{
				data: 'jenis_kelamin',
			},
			{
				data: 'nik',
			},
			{
				data: 'email',
			},
			{
				data: 'utusan',
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
				data: 'no_telpon',
			},
			{
				data: 'no_handphone',
			},
			{
				data: 'pendidikan',
			},
			{
				data: 'jurusan',
			},
			{
				data: 'nama_universitas',
			},
			{
				data: 'str_tahun_lulus',
			},
			{
				data: 'str_nama_jabker',
			},
			{
				data: 'kompetensi',
			},
			{
				render: function () {
					return "-"
				}
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

	// Daftar Peserta by Kalender Kegiatan Datatable

	var TableInstruktur = $("#daftar_instruktur_table").DataTable({
		data: [],
		retrieve: true,
		processing: true,
		serverSide: false,
		// scrollY: true,
		// scrollX: true,
		// scrollCollapse: true,
		pagingType: "full_numbers",
		language: {
			emptyTable: "Data tidak ditemukan!",
		},
		columns: [
			{
				data: 'no_instruktur',
			},
			{
				data: 'nama',
			},
			{
				data: 'email',
			},
			{
				data: 'no_telepon',
			},
			{
				data: 'no_handphone',
			},
			{
				data: 'id_tenaga_ahli',
				render: function (data) {
					return `
					<button id='btn-reject-instruktur-kegiatan' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
				}
			},
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

	$('table').on('click', '#btn-reject-instruktur-kegiatan', function () {
		if ($('#daftar_instruktur_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Kegiatan/delete_instruktur_kegiatan_action/${id}/${id_kegiatan}`)
			$('#modal-lihat-instruktur-assesor-by-kegiatan').modal('hide')
			$('#modal-delete-instruktur-kegiatan').modal('show')
		}
	})


	var TableAsesor = $("#daftar_assesor_table").DataTable({
		data: [],
		retrieve: true,
		processing: true,
		serverSide: false,
		// scrollY: true,
		// scrollX: true,
		// scrollCollapse: true,
		pagingType: "full_numbers",
		language: {
			emptyTable: "Data tidak ditemukan!",
		},
		columns: [
			{
				data: 'no_asesor',
			},
			{
				data: 'nama',
			},
			{
				data: 'email',
			},
			{
				data: 'no_telepon',
			},
			{
				data: 'no_handphone',
			},
			{
				data: 'id_tenaga_ahli',
				render: function (data) {
					return `
					<button id='btn-reject-asesor-kegiatan' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
				}
			},
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

	$('table').on('click', '#btn-reject-asesor-kegiatan', function () {
		if ($('#daftar_assesor_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Kegiatan/delete_asesor_kegiatan_action/${id}/${id_kegiatan}`)
			$('#modal-lihat-instruktur-assesor-by-kegiatan').modal('hide')
			$('#modal-delete-asesor-kegiatan').modal('show')
		}
	})
	// End of Daftar Peserta by Kalender Kegiatan datatable 

	fill_datatable_tenaga_ahli();
	// Tenaga Ahli Datatable
	function fill_datatable_tenaga_ahli(
		filter_id_provinsi_tenaga_ahli = null,
		filter_jabatan_kerja_tenaga_ahli = null,
		filter_is_asesor_tenaga_ahli = null,
		filter_is_instruktur_tenaga_ahli = null
	) {
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
				dataType: 'JSON',
				method: 'POST',
				data: {
					'filter_id_provinsi_tenaga_ahli': filter_id_provinsi_tenaga_ahli,
					"filter_jabatan_kerja_tenaga_ahli": filter_jabatan_kerja_tenaga_ahli,
					'filter_is_asesor_tenaga_ahli': filter_is_asesor_tenaga_ahli,
					'filter_is_instruktur_tenaga_ahli': filter_is_instruktur_tenaga_ahli
				}
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
					data: 'npwp',
				},
				{
					data: 'pendidikan',
				},
				{
					data: 'status_pns',
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
					<button id='btn-reject' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>
					<button id='btn-download' type='submit' class='btn btn-info btn-block' data-id='${data}'>Download CV</button>`

					}
				},
			]
		}
		)
	}
	// End of Tenaga Ahli datatable 

	fill_datatable_mitra_terampil();
	// Mitra Terampil Datatable
	function fill_datatable_mitra_terampil(
		filter_id_provinsi_tenaga_ahli = null,
		filter_jabatan_kerja_tenaga_ahli = null,
		filter_is_asesor_tenaga_ahli = null,
		filter_is_instruktur_tenaga_ahli = null
	) {
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
				dataType: 'JSON',
				method: 'POST',
				data: {
					'filter_id_provinsi_tenaga_ahli': filter_id_provinsi_tenaga_ahli,
					"filter_jabatan_kerja_tenaga_ahli": filter_jabatan_kerja_tenaga_ahli,
					'filter_is_asesor_tenaga_ahli': filter_is_asesor_tenaga_ahli,
					'filter_is_instruktur_tenaga_ahli': filter_is_instruktur_tenaga_ahli
				}
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
					data: 'npwp',
				},
				{
					data: 'pendidikan',
				},
				{
					data: 'status_pns',
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
						<button id='btn-reject' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>
						<button id='btn-download' type='submit' class='btn btn-info btn-block' data-id='${data}'>Download CV</button>`
					}
				},
			]
		}
		)
	}
	// End of Mitra Terampil datatable 



	// SKKNI Datatable
	$('#skkni_table').DataTable({
		"order": [0, 'asc'],
		processing: true,
		serverSide: false,
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

	// Feedback Answered Datatable
	$('#feedback_answered_table').DataTable({
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
			url: `${BASE_URL}Feedback/dataAnswered`,
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
				data: 'jawaban',
			},
			{
				data: 'pengirim',
			},
			{
				data: 'id_feedback',
				render: function (data) {
					return `
					<button id='btn-detail-answered' type='submit' class='btn btn-info btn-block' data-id='${data}'>Detail</button>
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
			},
			{
				targets: 3,
				width: "600px",
				className: "truncate"
			}
		]
	});

	$('table').on('click', '#btn-detail-answered', function () {
		if ($('#feedback_answered_table').length > 0) {
			const id = $(this).data('id')
			var currentRow = $(this).closest("tr");
			var data = $('#feedback_answered_table').DataTable().row(currentRow).data();
			document.getElementById("answered-pengirim-feedback").innerHTML = data['pengirim'];
			document.getElementById("answered-pengirim-feedback").classList.add('text-secondary', 'text-justify')
			document.getElementById("answered-judul-feedback").innerHTML = data['judul_feedback'];
			document.getElementById("answered-judul-feedback").classList.add('text-secondary', 'text-justify')
			document.getElementById("answered-deskripsi-feedback").innerHTML = data['deskripsi_feedback'];
			document.getElementById("answered-deskripsi-feedback").classList.add('text-secondary', 'text-justify')
			document.getElementById("answered-jawaban-feedback").innerHTML = data['jawaban'];
			document.getElementById("answered-jawaban-feedback").classList.add('text-secondary', 'text-justify')
			$(`#modal-edit-jawaban-feedback`).modal('show')
		}
	})

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

	// ====================================== MASTER DATA DATATABLES =================================
	//Akun Kegiatan
	$('#akun_kegiatan_table').DataTable({
		"order": [0, 'asc'],
		processing: true,
		serverSide: false,
		pagingType: "full_numbers",
		language: {
			emptyTable: "Data tidak ditemukan!",
		},
		ajax: {
			url: `${BASE_URL}Master/dataAkunKegiatan`,
			type: "GET",
		},
		columns: [
			{
				data: 'no_akun_kegiatan',
			},
			{
				data: 'akun_kegiatan',
			},
			
				
			{
				data: 'id_akun_kegiatan',
				render: function (data) {
					return `
					<button id='btn-edit-akun-kegiatan-master' type='submit' class='btn btn-warning btn-block' data-id='${data}'>Edit</button>
					<button id='btn-reject-akun-kegiatan-master' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
				}
			},
		]
	})

	$('table').on('click', '#btn-edit-akun-kegiatan-master', function () {
		if ($('#akun_kegiatan_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Master/edit_akun_kegiatan_action/${id}`)
			$('#edit-nama-akun-kegiatan').val($(this).parent().siblings().eq(1).text())
			$('#modal-edit-akun-kegiatan').modal('show')
		}
	})
	$('table').on('click', '#btn-reject-akun-kegiatan-master', function () {
		if ($('#akun_kegiatan_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Master/delete_akun_kegiatan_action/${id}`)
			$('#modal-delete-akun-kegiatan').modal('show')
		}
	})
	

	//Jenis Kegiatan
	$('#jenis_kegiatan_table').DataTable({
		"order": [0, 'asc'],
		processing: true,
		serverSide: false,
		pagingType: "full_numbers",
		language: {
			emptyTable: "Data tidak ditemukan!",
		},
		ajax: {
			url: `${BASE_URL}Master/dataJenisKegiatan`,
			type: "GET",
		},
		columns: [
			{
				data: 'no_jenis_kegiatan',
			},
			{
				data: 'jenis_kegiatan',
			},
			
				
			{
				data: 'id_jenis_kegiatan',
				render: function (data) {
					return `
					<button id='btn-edit-jenis-kegiatan-master' type='submit' class='btn btn-warning btn-block' data-id='${data}'>Edit</button>
					<button id='btn-reject-jenis-kegiatan-master' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
				}
			},
		]
	})

	$('table').on('click', '#btn-edit-jenis-kegiatan-master', function () {
		if ($('#jenis_kegiatan_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Master/edit_jenis_kegiatan_action/${id}`)
			$('#edit-nama-jenis-kegiatan').val($(this).parent().siblings().eq(1).text())
			$('#modal-edit-jenis-kegiatan').modal('show')
		}
	})
	$('table').on('click', '#btn-reject-jenis-kegiatan-master', function () {
		if ($('#jenis_kegiatan_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Master/delete_jenis_kegiatan_action/${id}`)
			$('#modal-delete-jenis-kegiatan').modal('show')
		}
	})

	// Provinsi Kegiatan
	$('#provinsi_kegiatan_table').DataTable({
		"order": [0, 'asc'],
		processing: true,
		serverSide: false,
		pagingType: "full_numbers",
		language: {
			emptyTable: "Data tidak ditemukan!",
		},
		ajax: {
			url: `${BASE_URL}Master/dataProvinsiKegiatan`,
			type: "GET",
		},
		columns: [
			{
				data: 'no_provinsi',
			},
			{
				data: 'provinsi',
			},
			
				
			{
				data: 'id_provinsi',
				render: function (data) {
					return `
					<button id='btn-edit-provinsi-master' type='submit' class='btn btn-warning btn-block' data-id='${data}'>Edit</button>
					<button id='btn-reject-provinsi-master' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
				}
			},
		]
	})

	$('table').on('click', '#btn-edit-provinsi-master', function () {
		if ($('#provinsi_kegiatan_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Master/edit_provinsi_action/${id}`)
			$('#edit-provinsi').val($(this).parent().siblings().eq(1).text())
			$('#modal-edit-provinsi').modal('show')
		}
	})
	$('table').on('click', '#btn-reject-provinsi-master', function () {
		if ($('#provinsi_kegiatan_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Master/delete_provinsi_action/${id}`)
			$('#modal-delete-provinsi').modal('show')
		}
	})

	// Kabupaten Kota Kegiatan
	$('#kota_kegiatan_table').DataTable({
		"order": [0, 'asc'],
		processing: true,
		serverSide: false,
		pagingType: "full_numbers",
		language: {
			emptyTable: "Data tidak ditemukan!",
		},
		ajax: {
			url: `${BASE_URL}Master/dataKotaKegiatan`,
			type: "GET",
		},
		columns: [
			{
				data: 'no_kabupaten_kota',
			},
			{
				data: 'kabupaten_kota',
			},
			
				
			{
				data: 'id_kabupaten_kota',
				render: function (data) {
					return `
					<button id='btn-edit-kabupaten-kota-master' type='submit' class='btn btn-warning btn-block' data-id='${data}'>Edit</button>
					<button id='btn-reject-kabupaten-kota-master' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
				}
			},
		]
	})

	$('table').on('click', '#btn-edit-kabupaten-kota-master', function () {
		if ($('#kota_kegiatan_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Master/edit_kabupaten_kota_action/${id}`)
			$('#edit-kabupaten-kota').val($(this).parent().siblings().eq(1).text())
			$('#modal-edit-kabupaten-kota').modal('show')
		}
	})
	$('table').on('click', '#btn-reject-kabupaten-kota-master', function () {
		if ($('#kota_kegiatan_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Master/delete_kabupaten_kota_action/${id}`)
			$('#modal-delete-kabupaten-kota').modal('show')
		}
	})


	// Kecamatan Kegiatan
	$('#kecamatan_kegiatan_table').DataTable({
		"order": [0, 'asc'],
		processing: true,
		serverSide: false,
		pagingType: "full_numbers",
		language: {
			emptyTable: "Data tidak ditemukan!",
		},
		ajax: {
			url: `${BASE_URL}Master/dataKecamatan`,
			type: "GET",
		},
		columns: [
			{
				data: 'no_kecamatan',
			},
			{
				data: 'kecamatan',
			},
			
				
			{
				data: 'id_kecamatan',
				render: function (data) {
					return `
					<button id='btn-edit-kecamatan-master' type='submit' class='btn btn-warning btn-block' data-id='${data}'>Edit</button>
					<button id='btn-reject-kecamatan-master' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
				}
			},
		]
	})

	$('table').on('click', '#btn-edit-kecamatan-master', function () {
		if ($('#kecamatan_kegiatan_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Master/edit_kecamatan_action/${id}`)
			$('#edit-kecamatan').val($(this).parent().siblings().eq(1).text())
			$('#modal-edit-kecamatan').modal('show')
		}
	})
	$('table').on('click', '#btn-reject-kecamatan-master', function () {
		if ($('#kecamatan_kegiatan_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Master/delete_kecamatan_action/${id}`)
			$('#modal-delete-kecamatan').modal('show')
		}
	})

	// Kecamatan Kegiatan
	$('#kelurahan_kegiatan_table').DataTable({
		"order": [0, 'asc'],
		processing: true,
		serverSide: false,
		pagingType: "full_numbers",
		language: {
			emptyTable: "Data tidak ditemukan!",
		},
		ajax: {
			url: `${BASE_URL}Master/dataKelurahanDesa`,
			type: "GET",
		},
		columns: [
			{
				data: 'no_kelurahan_desa',
			},
			{
				data: 'kelurahan_desa',
			},
			
				
			{
				data: 'id_kelurahan_desa',
				render: function (data) {
					return `
					<button id='btn-edit-kelurahan-desa-master' type='submit' class='btn btn-warning btn-block' data-id='${data}'>Edit</button>
					<button id='btn-reject-kelurahan-desa-master' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
				}
			},
		]
	})

	$('table').on('click', '#btn-edit-kelurahan-desa-master', function () {
		if ($('#kelurahan_kegiatan_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Master/edit_kelurahan_desa_action/${id}`)
			$('#edit-kelurahan').val($(this).parent().siblings().eq(1).text())
			$('#modal-edit-kelurahan').modal('show')
		}
	})
	$('table').on('click', '#btn-reject-kelurahan-desa-master', function () {
		if ($('#kelurahan_kegiatan_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Master/delete_kelurahan_desa_action/${id}`)
			$('#modal-delete-kelurahan').modal('show')
		}
	})

	// status kegiatan table
	$('#status_kegiatan_table').DataTable({
		"order": [0, 'asc'],
		processing: true,
		serverSide: false,
		pagingType: "full_numbers",
		language: {
			emptyTable: "Data tidak ditemukan!",
		},
		ajax: {
			url: `${BASE_URL}Master/dataStatusKegiatan`,
			type: "GET",
		},
		columns: [
			{
				data: 'no_status_kegiatan',
			},
			{
				data: 'status_kegiatan',
			},
			
				
			{
				data: 'id_status_kegiatan',
				render: function (data) {
					return `
					<button id='btn-edit-status-kegiatan-master' type='submit' class='btn btn-warning btn-block' data-id='${data}'>Edit</button>
					<button id='btn-reject-status-kegiatan-master' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
				}
			},
		]
	})

	$('table').on('click', '#btn-edit-status-kegiatan-master', function () {
		if ($('#status_kegiatan_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Master/edit_status_kegiatan_action/${id}`)
			$('#edit-status-kegiatan').val($(this).parent().siblings().eq(1).text())
			$('#modal-edit-status-kegiatan').modal('show')
		}
	})
	$('table').on('click', '#btn-reject-status-kegiatan-master', function () {
		if ($('#status_kegiatan_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Master/delete_status_kegiatan_action/${id}`)
			$('#modal-delete-status-kegiatan').modal('show')
		}
	})

	// status peserta kegiatan
	$('#status_peserta_kegiatan_table').DataTable({
		"order": [0, 'asc'],
		processing: true,
		serverSide: false,
		pagingType: "full_numbers",
		language: {
			emptyTable: "Data tidak ditemukan!",
		},
		ajax: {
			url: `${BASE_URL}Master/dataStatusPeserta`,
			type: "GET",
		},
		columns: [
			{
				data: 'no_status_peserta',
			},
			{
				data: 'status_peserta_kegiatan',
			},
			
				
			{
				data: 'id_status_peserta_kegiatan',
				render: function (data) {
					return `
					<button id='btn-edit-status-peserta-kegiatan-master' type='submit' class='btn btn-warning btn-block' data-id='${data}'>Edit</button>
					<button id='btn-reject-status-peserta-kegiatan-master' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
				}
			},
		]
	})

	$('table').on('click', '#btn-edit-status-peserta-kegiatan-master', function () {
		if ($('#status_peserta_kegiatan_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Master/edit_status_peserta_action/${id}`)
			$('#edit-status-peserta').val($(this).parent().siblings().eq(1).text())
			$('#modal-edit-status-peserta').modal('show')
		}
	})
	$('table').on('click', '#btn-reject-status-peserta-kegiatan-master', function () {
		if ($('#status_peserta_kegiatan_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Master/delete_status_peserta_action/${id}`)
			$('#modal-delete-status-peserta').modal('show')
		}
	})

	//kategori tenaga ahli
	$('#kategori_tenaga_ahli_table').DataTable({
		"order": [0, 'asc'],
		processing: true,
		serverSide: false,
		pagingType: "full_numbers",
		language: {
			emptyTable: "Data tidak ditemukan!",
		},
		ajax: {
			url: `${BASE_URL}Master/dataKategoriTenagaAhli`,
			type: "GET",
		},
		columns: [
			{
				data: 'no_kategori_tenaga_ahli',
			},
			{
				data: 'kategori_tenaga_ahli',
			},
			
				
			{
				data: 'id_kategori_tenaga_ahli',
				render: function (data) {
					return `
					<button id='btn-edit-kategori-tenaga-ahli-master' type='submit' class='btn btn-warning btn-block' data-id='${data}'>Edit</button>
					<button id='btn-reject-kategori-tenaga-ahli-master' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
				}
			},
		]
	})

	$('table').on('click', '#btn-edit-kategori-tenaga-ahli-master', function () {
		if ($('#kategori_tenaga_ahli_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Master/edit_kategori_tenaga_ahli_action/${id}`)
			$('#edit-kategori-ahli').val($(this).parent().siblings().eq(1).text())
			$('#modal-edit-kategori-ahli').modal('show')
		}
	})
	$('table').on('click', '#btn-reject-kategori-tenaga-ahli-master', function () {
		if ($('#kategori_tenaga_ahli_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Master/delete_kategori_tenaga_ahli_action/${id}`)
			$('#modal-delete-kategori-ahli').modal('show')
		}
	})
	//jabker
	$('#jabatan_kerja_table').DataTable({
		"order": [0, 'asc'],
		processing: true,
		serverSide: false,
		pagingType: "full_numbers",
		language: {
			emptyTable: "Data tidak ditemukan!",
		},
		ajax: {
			url: `${BASE_URL}Master/dataJabker`,
			type: "GET",
		},
		columns: [
			{
				data: 'no_jabker',
			},
			{
				data: 'jabker',
			},
			
				
			{
				data: 'id_jabker',
				render: function (data) {
					return `
					<button id='btn-edit-jabker-master' type='submit' class='btn btn-warning btn-block' data-id='${data}'>Edit</button>
					<button id='btn-reject-jabker-master' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
				}
			},
		]
	})

	$('table').on('click', '#btn-edit-jabker-master', function () {
		if ($('#jabatan_kerja_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Master/edit_jabker_action/${id}`)
			$('#edit-jabatan-kerja').val($(this).parent().siblings().eq(1).text())
			$('#modal-edit-jabatan-kerja').modal('show')
		}
	})
	$('table').on('click', '#btn-reject-jabker-master', function () {
		if ($('#jabatan_kerja_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Master/delete_jabker_action/${id}`)
			$('#modal-delete-jabatan-kerja').modal('show')
		}
	})

	$('#status_perkawinan_table').DataTable({
		"order": [0, 'asc'],
		processing: true,
		serverSide: false,
		pagingType: "full_numbers",
		language: {
			emptyTable: "Data tidak ditemukan!",
		},
		ajax: {
			url: `${BASE_URL}Master/dataStatusPerkawinan`,
			type: "GET",
		},
		columns: [
			{
				data: 'no_status_perkawinan',
			},
			{
				data: 'status_perkawinan',
			},
			
				
			{
				data: 'id_status_perkawinan',
				render: function (data) {
					return `
					<button id='btn-edit-status-perkawinan-master' type='submit' class='btn btn-warning btn-block' data-id='${data}'>Edit</button>
					<button id='btn-reject-status-perkawinan-master' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
				}
			},
		]
	})

	$('table').on('click', '#btn-edit-status-perkawinan-master', function () {
		if ($('#status_perkawinan_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Master/edit_status_perkawinan_action/${id}`)
			$('#edit-status-perkawinan').val($(this).parent().siblings().eq(1).text())
			$('#modal-edit-status-perkawinan').modal('show')
		}
	})
	$('table').on('click', '#btn-reject-status-perkawinan-master', function () {
		if ($('#status_perkawinan_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Master/delete_status_perkawinan_action/${id}`)
			$('#modal-delete-status-perkawinan').modal('show')
		}
	})
	

	$('#status_rumah_table').DataTable({
		"order": [0, 'asc'],
		processing: true,
		serverSide: false,
		pagingType: "full_numbers",
		language: {
			emptyTable: "Data tidak ditemukan!",
		},
		ajax: {
			url: `${BASE_URL}Master/dataStatusRumah`,
			type: "GET",
		},
		columns: [
			{
				data: 'no_status_rumah',
			},
			{
				data: 'status_rumah',
			},
			
				
			{
				data: 'id_status_rumah',
				render: function (data) {
					return `
					<button id='btn-edit-status-rumah-master' type='submit' class='btn btn-warning btn-block' data-id='${data}'>Edit</button>
					<button id='btn-reject-status-rumah-master' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
				}
			},
		]
	})

	$('table').on('click', '#btn-edit-status-rumah-master', function () {
		if ($('#status_rumah_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Master/edit_status_rumah_action/${id}`)
			$('#edit-status-rumah').val($(this).parent().siblings().eq(1).text())
			$('#modal-edit-status-rumah').modal('show')
		}
	})
	$('table').on('click', '#btn-reject-status-rumah-master', function () {
		if ($('#status_rumah_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Master/delete_status_rumah_action/${id}`)
			$('#modal-delete-status-rumah').modal('show')
		}
	})

	

	$('#pendidikan_table').DataTable({
		"order": [0, 'asc'],
		processing: true,
		serverSide: false,
		pagingType: "full_numbers",
		language: {
			emptyTable: "Data tidak ditemukan!",
		},
		ajax: {
			url: `${BASE_URL}Master/dataPendidikan`,
			type: "GET",
		},
		columns: [
			{
				data: 'no_pendidikan',
			},
			{
				data: 'pendidikan',
			},
			
				
			{
				data: 'id_pendidikan',
				render: function (data) {
					return `
					<button id='btn-edit-pendidikan-master' type='submit' class='btn btn-warning btn-block' data-id='${data}'>Edit</button>
					<button id='btn-reject-pendidikan-master' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
				}
			},
		]
	})
	$('table').on('click', '#btn-edit-pendidikan-master', function () {
		if ($('#pendidikan_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Master/edit_pendidikan_action/${id}`)
			$('#edit-pendidikan').val($(this).parent().siblings().eq(1).text())
			$('#modal-edit-pendidikan').modal('show')
		}
	})
	$('table').on('click', '#btn-reject-pendidikan-master', function () {
		if ($('#pendidikan_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Master/delete_pendidikan_action/${id}`)
			$('#modal-delete-pendidikan').modal('show')
		}
	})

	$('#skkni_master_table').DataTable({
		"order": [0, 'asc'],
		processing: true,
		serverSide: false,
		pagingType: "full_numbers",
		language: {
			emptyTable: "Data tidak ditemukan!",
		},
		ajax: {
			url: `${BASE_URL}Master/dataSKKNISKA`,
			type: "GET",
		},
		columns: [
			{
				data: 'no_skkni_ska',
			},
			{
				data: 'kategori_skkni',
			},
			
				
			{
				data: 'id_kategori_skkni',
				render: function (data) {
					return `
					<button id='btn-edit-skkni-ska-master' type='submit' class='btn btn-warning btn-block' data-id='${data}'>Edit</button>
					<button id='btn-reject-skkni-ska-master' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
				}
			},
		]
	})

	$('table').on('click', '#btn-edit-skkni-ska-master', function () {
		if ($('#skkni_master_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Master/edit_skkni_ska_action/${id}`)
			$('#edit-skkni').val($(this).parent().siblings().eq(1).text())
			$('#modal-edit-skkni').modal('show')
		}
	})
	$('table').on('click', '#btn-reject-skkni-ska-master', function () {
		if ($('#skkni_master_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Master/delete_skkni_ska_action/${id}`)
			$('#modal-delete-skkni').modal('show')
		}
	})


	$('#kategori_modul_table').DataTable({
		"order": [0, 'asc'],
		processing: true,
		serverSide: false,
		pagingType: "full_numbers",
		language: {
			emptyTable: "Data tidak ditemukan!",
		},
		ajax: {
			url: `${BASE_URL}Master/dataKategoriModul`,
			type: "GET",
		},
		columns: [
			{
				data: 'no_kategori_modul',
			},
			{
				data: 'kategori_modul',
			},
			
				
			{
				data: 'id_kategori_modul',
				render: function (data) {
					return `
					<button id='btn-edit-kategori-modul-master' type='submit' class='btn btn-warning btn-block' data-id='${data}'>Edit</button>
					<button id='btn-reject-kategori-modul-master' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
				}
			},
		]
	})

	$('table').on('click', '#btn-edit-kategori-modul-master', function () {
		if ($('#kategori_modul_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Master/edit_kategori_modul_action/${id}`)
			$('#edit-modul').val($(this).parent().siblings().eq(1).text())
			$('#modal-edit-modul').modal('show')
		}
	})
	$('table').on('click', '#btn-reject-kategori-modul-master', function () {
		if ($('#kategori_modul_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Master/delete_kategori_modul_action/${id}`)
			$('#modal-delete-modul').modal('show')
		}
	})

	$('#pns_table').DataTable({
		"order": [0, 'asc'],
		processing: true,
		serverSide: false,
		pagingType: "full_numbers",
		language: {
			emptyTable: "Data tidak ditemukan!",
		},
		ajax: {
			url: `${BASE_URL}Master/dataStatusPNS`,
			type: "GET",
		},
		columns: [
			{
				data: 'no_status_pns',
			},
			{
				data: 'status_pns',
			},
			
				
			{
				data: 'id_status_pns',
				render: function (data) {
					return `
					<button id='btn-edit-status-pns-master' type='submit' class='btn btn-warning btn-block' data-id='${data}'>Edit</button>
					<button id='btn-reject-status-pns-master' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
				}
			},
		]
	})

	$('table').on('click', '#btn-edit-status-pns-master', function () {
		if ($('#pns_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Master/edit_status_pns_action/${id}`)
			$('#edit-pns').val($(this).parent().siblings().eq(1).text())
			$('#modal-edit-pns').modal('show')
		}
	})
	$('table').on('click', '#btn-reject-status-pns-master', function () {
		if ($('#pns_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}Master/delete_status_pns_action/${id}`)
			$('#modal-delete-pns').modal('show')
		}
	})


	

	$('#btn-filter-kegiatan').click(function () {
		$('#kalender_kegiatan_table').DataTable().destroy();
		fill_datatable($('#filter-tanggal-mulai-kegiatan').val(),
			$('#filter-tanggal-selesai-kegiatan').val(),
			$('#filter-jenis-kegiatan').val(),
			$('#filter-status-kegiatan').val(),
			$('#filter-id-provinsi').val(),
			$('#filter-id-kabupaten-kota').val())
		$('#modal-filter-kegiatan').modal('hide');
	});
	
	// ========= FILTER TENAGA AHLI ON CLICK ===========
	$('#btn-filter-tenaga-ahli').click(function () {
		var checkedAsesor = 0;
		if (document.getElementById('filter-is-asesor-tenaga-ahli').checked) {
			checkedAsesor = 1
		}
		var checkedInstruktur = 0;
		if (document.getElementById('filter-is-instruktur-tenaga-ahli').checked) {
			checkedInstruktur = 1
		}

		$('#tenaga_ahli_table').DataTable().destroy();
		fill_datatable_tenaga_ahli($('#filter-id-provinsi-tenaga-ahli').val(),
			$('#filter-jabatan-kerja-tenaga-ahli').val(),
			checkedAsesor,
			checkedInstruktur)		
		$('#mitra_terampil_table').DataTable().destroy();
		fill_datatable_mitra_terampil($('#filter-id-provinsi-tenaga-ahli').val(),
			$('#filter-jabatan-kerja-tenaga-ahli').val(),
			checkedAsesor,
			checkedInstruktur)		
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
	$('table').on('click', '#btn-detail-experts', function () {
		if ($('#kalender_kegiatan_table').length > 0) {
			const id = $(this).data('id')
			id_kegiatan = $(this).data('id')
			TableAsesor.ajax.url(`${BASE_URL}Kegiatan/dataAsesor/${id}`).load();
			TableInstruktur.ajax.url(`${BASE_URL}Kegiatan/dataInstruktur/${id}`).load();
			$(`#modal-lihat-instruktur-assesor-by-kegiatan`).modal('show')
		}
	})


	// 
	// ========= UPDATE BUTTON ON CLICK ===========
	// 
	// Each Row Table onClick Edit Button
	$('table').on('click', '#btn-update', function () {
		if ($('#kalender_kegiatan_table').length > 0) {
			const id = $(this).data('id')
			var currentRow = $(this).closest("tr");
			var data = $('#kalender_kegiatan_table').DataTable().row(currentRow).data();
			if (data['id_status_kegiatan'] == 1) {
				$('#btn-export-peserta-vva').attr('href', `${BASE_URL}Peserta/export_peserta_VVA/${id}`)
				$('form').attr('action', `${BASE_URL}Kegiatan/update_status_kegiatan_VVA_action/${id}`)
				$(`#modal-ganti-status-kegiatan-vva`).modal('show')
			}
			if (data['id_status_kegiatan'] == 3) {
				$('#btn-export-peserta-asesment').attr('href', `${BASE_URL}Peserta/export_peserta_asesment/${id}`)
				$('form').attr('action', `${BASE_URL}Kegiatan/update_status_kegiatan_asesment_action/${id}`)
				$(`#modal-ganti-status-kegiatan-asesment`).modal('show')
			}
			if (data['id_status_kegiatan'] == 4) {
				$('form').attr('action', `${BASE_URL}Kegiatan/tambah_berita_acara_action/${id}`)
				$(`#modal-ganti-status-kegiatan-berita-acara`).modal('show')
			}
			if (data['id_status_kegiatan'] == 5) {
				$('form').attr('action', `${BASE_URL}Kegiatan/tambah_invoice_action/${id}`)
				$(`#modal-ganti-status-kegiatan-invoice`).modal('show')
			}
			if (data['id_status_kegiatan'] == 6) {
				$('form').attr('action', `${BASE_URL}Kegiatan/tambah_bukti_pembayaran_action/${id}`)
				$(`#modal-ganti-status-kegiatan-bukti-pembayaran`).modal('show')
			}
		}
	})
	// End of edit

	// 
	// ========= DOWNLOAD BUTTON ON CLICK ===========
	// 
	// Each Row Table onClick Edit Button
	$('table').on('click', '#btn-download', function () {
		if ($('#tenaga_ahli_table').length > 0) {
			const id = $(this).data('id')
			$.ajax({
				url: `${BASE_URL}Tenaga_ahli/cv_tenaga_ahli/${id}`,
				type: 'POST',
				success: function () {
					window.location = `${BASE_URL}Tenaga_ahli/cv_tenaga_ahli/${id}`;
				}
			})
		}
		else if ($('#mitra_terampil_table').length > 0) {
			const id = $(this).data('id')
			$.ajax({
				url: `${BASE_URL}Tenaga_ahli/cv_tenaga_ahli/${id}`,
				type: 'POST',
				success: function () {
					window.location = `${BASE_URL}Tenaga_ahli/cv_tenaga_ahli/${id}`;
				}
			})
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
			var currentRow = $(this).closest("tr");
			var data = $('#kalender_kegiatan_table').DataTable().row(currentRow).data();
			$('form').attr('action', `${BASE_URL}Kegiatan/edit_kegiatan_action/${id}`)
			$('#edit-akun-kegiatan').val(data['id_akun_kegiatan'])
			$('#edit-jenis-kegiatan').val(data['id_jenis_kegiatan'])
			$('#banner-image-edit').attr('src', data['foto_banner_kegiatan'])
			$('#edit-nama-kegiatan').val($(this).parent().siblings().eq(1).text())
			$('#edit-deskripsi-kegiatan').val($(this).parent().siblings().eq(2).text())
			$('#edit-lokasi-kegiatan').val($(this).parent().siblings().eq(13).text())
			$(`#modal-edit-kegiatan`).modal('show')
		}
		else if ($('#skkni_table').length > 0) {
			const id = $(this).data('id')
			$('form').attr('action', `${BASE_URL}SKA/edit_ska_action/${id}`)
			var currentRow = $(this).closest("tr");
			var data = $('#skkni_table').DataTable().row(currentRow).data();
			$('#edit-judul-skkni').val($(this).parent().siblings().eq(1).text())
			$('#edit-deskripsi-skkni').val($(this).parent().siblings().eq(2).text())
			$('#edit-kategori-skkni').val(data['id_kategori_ska'])
			$('#modal-edit-skkni').modal('show')
		}
		else if ($('#modul_table').length > 0) {
			const id = $(this).data('id')
			var currentRow = $(this).closest("tr");
			var data = $('#modul_table').DataTable().row(currentRow).data();
			$('form').attr('action', `${BASE_URL}Modul/edit_modul_action/${id}`)
			$('#edit-judul-modul').val($(this).parent().siblings().eq(1).text())
			$('#edit-deskripsi-modul').val($(this).parent().siblings().eq(2).text())
			$('#edit-kategori-modul').val(data['id_kategori_modul'])
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
			var currentRow = $(this).closest("tr");
			var data = $('#tenaga_ahli_table').DataTable().row(currentRow).data();
			$('#edit-nama-tenaga-ahli').val($(this).parent().siblings().eq(1).text())
			$('#edit-tempat-lahir-tenaga-ahli').val($(this).parent().siblings().eq(3).text())
			$('#edit-status-pns-tenaga-ahli').val(data['id_status_pns'])
			$('#edit-pendidikan-tenaga-ahli').val(data['id_pendidikan'])
			$('#edit-nik-tenaga-ahli').val($(this).parent().siblings().eq(8).text())
			$('#edit-email-tenaga-ahli').val($(this).parent().siblings().eq(5).text())
			$('#edit-alamat-tenaga-ahli').val($(this).parent().siblings().eq(12).text())
			$('#edit-nomor-handphone-tenaga-ahli').val($(this).parent().siblings().eq(6).text())
			$('#edit-nomor-rumah-tenaga-ahli').val($(this).parent().siblings().eq(7).text())
			$('#edit-npwp-tenaga-ahli').val($(this).parent().siblings().eq(9).text())
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

	$('#btn-add-instruktur-kegiatan').on('click', function () {
		$('form').attr('action', `${BASE_URL}Kegiatan/add_instruktur_kegiatan_action/${id_kegiatan}`)
		$('#modal-lihat-instruktur-assesor-by-kegiatan').modal('hide')
		$('#modal-tambah-instruktur-kegiatan').modal('show')
	})
	
	$('#btn-add-asesor-kegiatan').on('click', function () {
		$('form').attr('action', `${BASE_URL}Kegiatan/add_asesor_kegiatan_action/${id_kegiatan}`)
		$('#modal-lihat-instruktur-assesor-by-kegiatan').modal('hide')
		$('#modal-tambah-asesor-kegiatan').modal('show')
	})



	jQuery.each(jQuery('textarea[data-autoresize]'), function() {
		var offset = this.offsetHeight - this.clientHeight;
	   
		var resizeTextarea = function(el) {
		  jQuery(el).css('height', 'auto').css('height', el.scrollHeight + offset);
		};
		jQuery(this).on('keyup input', function() { resizeTextarea(this); }).removeAttr('data-autoresize');
	  });

	
	
	// ======================== Change label name after upload file modul =========================
	  $('#file-modul').on('change',function(){
		//get the file name
		var fileName = $('#file-modul')[0].files[0].name;
		//replace the "Choose a file" label
		$(this).next('#custom-file-label-file-modul').html(fileName);
	  })
	
	  $('#edit-file-modul').on('change',function(){
		//get the file name
		var fileName = $('#edit-file-modul')[0].files[0].name;
		//replace the "Choose a file" label
		$(this).next('#custom-file-label-edit-file-modul').html(fileName);
	})
	
	// ======================== Change label name after upload file administrasi =========================
	  $('#file-administrasi-kegiatan').on('change',function(){
		//get the file name
		var fileName = $('#file-administrasi-kegiatan')[0].files[0].name;
		//replace the "Choose a file" label
		$(this).next('#custom-file-label-file-administrasi-kegiatan').html(fileName);
	  })
	
	  $('#edit-file-administrasi-kegiatan').on('change',function(){
		//get the file name
		var fileName = $('#edit-file-administrasi-kegiatan')[0].files[0].name;
		//replace the "Choose a file" label
		$(this).next('#custom-file-label-edit-file-administrasi-kegiatan').html(fileName);
	  })
	
	// ======================== Change label name after upload file administrasi =========================
	  $('#file-materi-kegiatan').on('change',function(){
		//get the file name
		var fileName = $('#file-materi-kegiatan')[0].files[0].name;
		//replace the "Choose a file" label
		$(this).next('#custom-file-label-file-materi-kegiatan').html(fileName);
	  })
	
	  $('#edit-file-materi-kegiatan').on('change',function(){
		//get the file name
		var fileName = $('#edit-file-materi-kegiatan')[0].files[0].name;
		//replace the "Choose a file" label
		$(this).next('#custom-file-label-edit-file-materi-kegiatan').html(fileName);
	  })
	
	  $('#file-excel-tambah-kegiatan').on('change',function(){
		//get the file name
		var fileName = $('#file-excel-tambah-kegiatan')[0].files[0].name;
		//replace the "Choose a file" label
		$(this).next('#custom-file-label-file-excel-tambah-kegiatan').html(fileName);
	})
	  $('#file-excel-vva-ganti-status').on('change',function(){
		//get the file name
		var fileName = $('#file-excel-vva-ganti-status')[0].files[0].name;
		//replace the "Choose a file" label
		$(this).next('#custom-file-label-file-excel-vva-ganti-status').html(fileName);
	})
	  $('#file-excel-asesment-ganti-status').on('change',function(){
		//get the file name
		var fileName = $('#file-excel-asesment-ganti-status')[0].files[0].name;
		//replace the "Choose a file" label
		$(this).next('#custom-file-label-file-excel-asesment-ganti-status').html(fileName);
	  })
	
	  $('#file-berita-acara-ganti-status').on('change',function(){
		//get the file name
		var fileName = $('#file-berita-acara-ganti-status')[0].files[0].name;
		//replace the "Choose a file" label
		$(this).next('#custom-file-label-file-berita-acara-ganti-status').html(fileName);
	  })
	
	  $('#file-invoice-ganti-status').on('change',function(){
		//get the file name
		var fileName = $('#file-invoice-ganti-status')[0].files[0].name;
		//replace the "Choose a file" label
		$(this).next('#custom-file-label-file-invoice-ganti-status').html(fileName);
	  })
	
	  $('#file-bukti-pembayaran-ganti-status').on('change',function(){
		//get the file name
		var fileName = $('#file-bukti-pembayaran-ganti-status')[0].files[0].name;
		//replace the "Choose a file" label
		$(this).next('#custom-file-label-file-bukti-pembayaran-ganti-status').html(fileName);
	  })
	
	  $('#file-import-excel-tambah-peserta-kegiatan').on('change',function(){
		//get the file name
		var fileName = $('#file-import-excel-tambah-peserta-kegiatan')[0].files[0].name;
		//replace the "Choose a file" label
		$(this).next('#custom-file-label-file-import-excel-tambah-peserta-kegiatan').html(fileName);
	  })
	
	// ======================== Change label name after upload TEnaga ahli =========================
	$('#file-excel-tambah-tenaga').on('change',function(){
		//get the file name
		var fileName = $('#file-excel-tambah-tenaga')[0].files[0].name;
		//replace the "Choose a file" label
		$(this).next('#custom-file-label-file-excel-tambah-tenaga').html(fileName);
	  })
	
	  $('#edit-file-tenaga-ahli').on('change',function(){
		//get the file name
		var fileName = $('#edit-file-tenaga-ahli')[0].files[0].name;
		//replace the "Choose a file" label
		$(this).next('#custom-file-label-edit-file-tenaga-ahli').html(fileName);
	  })
	
	  $('#file-excel-import-tenaga-ahli').on('change',function(){
		//get the file name
		var fileName = $('#file-excel-import-tenaga-ahli')[0].files[0].name;
		//replace the "Choose a file" label
		$(this).next('#custom-file-label-file-excel-import-tenaga-ahli').html(fileName);
	  })
	
	// ======================== Change label name after upload Buku Saku =========================
	$('#file-buku-saku').on('change',function(){
		//get the file name
		var fileName = $('#file-buku-saku')[0].files[0].name;
		//replace the "Choose a file" label
		$(this).next('#custom-file-label-file-buku-saku').html(fileName);
	  })
	
	  $('#edit-file-buku-saku').on('change',function(){
		//get the file name
		var fileName = $('#edit-file-buku-saku')[0].files[0].name;
		//replace the "Choose a file" label
		$(this).next('#custom-file-label-edit-file-buku-saku').html(fileName);
	  })
	
	// ======================== Change label name after upload SKKNI =========================
	$('#file-skkni').on('change',function(){
		//get the file name
		var fileName = $('#file-skkni')[0].files[0].name;
		//replace the "Choose a file" label
		$(this).next('#custom-file-label-file-skkni').html(fileName);
	  })
	
	  $('#edit-file-skkni').on('change',function(){
		//get the file name
		var fileName = $('#edit-file-skkni')[0].files[0].name;
		//replace the "Choose a file" label
		$(this).next('#custom-file-label-edit-file-skkni').html(fileName);
	  })
	
});


