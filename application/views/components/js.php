<!-- Bootstrap core JavaScript-->
<script src="<?=base_url('assets/jquery/jquery.min.js')?>"></script>
<script src="<?=base_url('assets/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?=base_url('assets/jquery-easing/jquery.easing.min.js')?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?=base_url('assets/js/sb-admin-2.min.js')?>"></script>

<!-- Page level plugins -->
<!-- <script src="<?=base_url('assets/chart.js/Chart.min.js')?>"></script>   -->

<!-- Page level plugins -->
<script src="<?=base_url('assets/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?=base_url('assets/datatables/dataTables.bootstrap4.min.js')?>"></script>

<!-- custom javascript -->
<script src="<?=base_url('assets/js/administrator/administrator.js')?>"></script>

<!-- date range picker -->
<script src="<?=base_url('assets/js/daterangepicker/moment.min.js')?>"></script>
<script src="<?=base_url('assets/js/daterangepicker/daterangepicker.js')?>"></script>

<script>
    function getState(val) {
        $.ajax({
            type: "POST",
            url: "<?=base_url()?>Kegiatan/view_kota",
            data: 'id_provinsi=' + val,
            success: function(data) {
                $("#kota-kegiatan").html(data);
            }
        });
    }
</script>