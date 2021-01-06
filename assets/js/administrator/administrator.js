$(document).ready(function () {

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

	// input date rangepicker
	// $(function () {

	// 	$('input[name="tanggalkegiatan"]').daterangepicker({
	// 		autoUpdateInput: false,
	// 		locale: {
	// 			cancelLabel: 'Clear'
	// 		}
	// 	});

	// 	$('input[name="tanggalkegiatan"]').on('apply.daterangepicker', function (ev, picker) {
	// 		$(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
	// 	});

	// 	$('input[name="tanggalkegiatan"]').on('cancel.daterangepicker', function (ev, picker) {
	// 		$(this).val('');
	// 	});

	// });

	// tanggal mulai
	$(function () {
		$('input[name="tanggalMulaikegiatan"]').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true,
			minYear: 1900,
			maxYear: parseInt(moment().format('YYYY'), 10)
		}, function (start, end, label) {
			var years = moment().diff(start, 'years');
		});
	});

	// tanggal selesai
	$(function () {
		$('input[name="tanggalSelesaikegiatan"]').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true,
			minYear: 1900,
			maxYear: parseInt(moment().format('YYYY'), 10)
		}, function (start, end, label) {
			var years = moment().diff(start, 'years');
		});
	});
	// end input date rangepicker

	// Datatable js
	$('#kalender_kegiatan').DataTable();


});
