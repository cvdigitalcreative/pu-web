$(document).ready(function () {
	// trigger modal notification
	$('#notification-modal').ready(function () {
		$('#notification-modal').modal('show')
	})
	
	// upload image kalender kegiatan js
	$("#banner-image").click(function (e) {
		$("#banner-kegiatan").click();
	});

	function fasterPreview(uploader) {
		if (uploader.files && uploader.files[0]) {
			$('#banner-image').attr('src',
				window.URL.createObjectURL(uploader.files[0]));
		}
	}

	$("#banner-kegiatan").change(function () {
		fasterPreview(this);
	});

	$('#modal-tambah-kegiatan').on('hidden.bs.modal', function () {
		$(this).find('form').trigger('reset');
		$(this).find("input,image,textarea").val('').end();
		$("#banner-image, #banner-kegiatan").val('')
	});
	// end upload image kalender kegiatan js

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
	// end input date rangepicker

	// Custom bootstrap-select each select id
	$('#instruktur-kegiatan').selectpicker();

	// End of Custom bootstrap-select each select id

	// 
	// ========= DATATABLE ===========
	// 

	// Kalender Kegiatan Datatable
	$('#kalender_kegiatan_table').DataTable({
		// "order": [0, 'asc'],
		processing: true,
		serverSide: false,
		// sDom: 'lrtip',
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
					<a href='${data}' target="__blank">file</a>`
				}
			},
			{
				data: 'id_kegiatan',
				render: function (data) {
					return `
					<button id='btn-detail' type='submit' class='btn btn-info btn-block' data-id='${data}'>Lihat Peserta</button>
					<button id='btn-edit' type='submit' class='btn btn-warning btn-block' data-id='${data}'>Edit</button>
					<button id='btn-reject' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
				}
			},
		]
	});
	// End of Kalender kegiatan datatable 

	// SKKNI Datatable
	$('#skkni_table').DataTable({
		"order": [0, 'asc'],
		processing: true,
		serverSide: false,
		// sDom: 'lrtip',
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
				data: 'nama_file_ska',
			},
			{
				data: 'file_ska',
				render: function (data) {
					return `
					<a href='${data}' target="__blank">file</a>`
				}
			},
			{
				data: 'pengirim',
			},
			{
				data: 'id_ska',
				render: function (data) {
					return `
					<button id='btn-edit' type='submit' class='btn btn-success btn-block' data-id='${data}'>Detail</button>
					<button id='btn-detail' type='submit' class='btn btn-info btn-block' data-id='${data}'>Edit</button>
					<button id='btn-reject' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
				}
			},
		]
	});

	// Modul Datatable
	$('#modul_table').DataTable({
		"order": [0, 'asc'],
		processing: true,
		serverSide: false,
		// sDom: 'lrtip',
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
				data: 'nama_file_modul',
			},
			{
				data: 'file_modul',
				render: function (data) {
					return `
					<a href='${data}' target="__blank">file</a>`
				}
			},
			{
				data: 'pengirim',
			},
			{
				data: 'id_modul',
				render: function (data) {
					return `
					<button id='btn-edit' type='submit' class='btn btn-success btn-block' data-id='${data}'>Detail</button>
					<button id='btn-detail' type='submit' class='btn btn-info btn-block' data-id='${data}'>Edit</button>
					<button id='btn-reject' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
				}
			},
		]
	});

	// Buku Saku Datatable
	$('#buku_saku_table').DataTable({
		"order": [0, 'asc'],
		processing: true,
		serverSide: false,
		// sDom: 'lrtip',
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
				data: 'nama_file_buku_saku',
			},
			{
				data: 'file_buku_saku',
				render: function (data) {
					return `
					<a href='${data}' target="__blank">file</a>`
				}
			},
			{
				data: 'pengirim',
			},
			{
				data: 'id_buku_saku',
				render: function (data) {
					return `
					<button id='btn-edit' type='submit' class='btn btn-success btn-block' data-id='${data}'>Detail</button>
					<button id='btn-detail' type='submit' class='btn btn-info btn-block' data-id='${data}'>Edit</button>
					<button id='btn-reject' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
				}
			},
		]
	});

	// Administrasi Kegiatan Datatable
	$('#administrasi_kegiatan_table').DataTable({
		"order": [0, 'asc'],
		processing: true,
		serverSide: false,
		// sDom: 'lrtip',
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
				data: 'nama_file_administrasi_kegiatan',
			},
			{
				data: 'file_administrasi_kegiatan',
				render: function (data) {
					return `
					<a href='${data}' target="__blank">file</a>`
				}
			},
			{
				data: 'pengirim',
			},
			{
				data: 'id_administrasi_kegiatan',
				render: function (data) {
					return `
					<button id='btn-edit' type='submit' class='btn btn-success btn-block' data-id='${data}'>Detail</button>
					<button id='btn-detail' type='submit' class='btn btn-info btn-block' data-id='${data}'>Edit</button>
					<button id='btn-reject' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
				}
			},
		]
	});

	// $('#btn-filter-kegiatan').click(function () {
	// 	event.preventDefault();
	// 	$.ajax({
	// 		url: `${BASE_URL}Kegiatan/filter`,
	// 		dataType: 'JSON',
	// 		method: 'POST',
	// 		data: {
	// 			'filter_tanggal_kegiatan_mulai': $('#filter-tanggal-mulai-kegiatan').val(),
	// 			'filter_tanggal_kegiatan_selesai': $('#filter-tanggal-selesai-kegiatan').val(),
	// 			'filter_jenis_kegiatan': $('#filter-jenis-kegiatan').val(),
	// 			'filter_status_kegiatan': $('#filter-status-kegiatan').val()
	// 		},
	// 		success: function (hasil) {
	// 			console.log(hasil);

	// 			$('#kalender_kegiatan_table').DataTable().clear().destroy();
	// 			// reinitiate
	// 			$('#kalender_kegiatan_table').DataTable({
	// 				data: hasil,
	// 				columns: [
	// 					{
	// 						data: 'no_kegiatan',
	// 					},
	// 					{
	// 						data: 'tanggal_kegiatan_full_text',
	// 					},
	// 					{
	// 						data: 'foto_banner_kegiatan',
	// 						render: function (data) {
	// 							return `
	// 							<img src="${data}" style="width: 200px; height: 200px; overflow: hidden;">`
	// 						}
	// 					},
	// 					{
	// 						data: 'jenis_kegiatan',
	// 					},
	// 					{
	// 						data: 'akun_kegiatan',
	// 					},
	// 					{
	// 						data: 'status_kegiatan',
	// 					},
	// 					{
	// 						data: 'judul_kegiatan',
	// 					},
	// 					{
	// 						data: 'str_nama_instruktur_kegiatan',
	// 					},
	// 					{
	// 						data: 'str_nama_asesor_kegiatan',
	// 					},
	// 					{
	// 						data: 'provinsi',
	// 					},
	// 					{
	// 						data: 'kota_kabupaten',
	// 					},
	// 					{
	// 						data: 'lokasi_kegiatan',
	// 					},
	// 					{
	// 						data: 'jumlah_peserta',
	// 					},
	// 					{
	// 						data: 'nama_file_materi_kegiatan',
	// 					},
	// 					{
	// 						data: 'file_materi_kegiatan',
	// 						render: function (data) {
	// 							return `
	// 							<a href='${data}'>file</a>`
	// 						}
	// 					},
	// 					{
	// 						data: 'id_kegiatan',
	// 						render: function (data) {
	// 							return `
	// 							<button id='btn-edit' type='submit' class='btn btn-success btn-block' data-id='${data}'>Detail</button>
	// 							<button id='btn-detail' type='submit' class='btn btn-info btn-block' data-id='${data}'>Edit</button>
	// 							<button id='btn-reject' type='submit' class='btn btn-danger btn-block' data-id='${data}'>Hapus</button>`
	// 						}
	// 					},
	// 				]
	// 			});

	// 			$('#modal-filter-kegiatan').modal('hide');
	// 		}
	// 	})
	// })


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
	})
	// End of delete
});
