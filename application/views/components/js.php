<!-- Bootstrap core JavaScript-->
<script src="<?=base_url('assets/jquery/jquery.min.js')?>"></script>
<script src="<?=base_url('assets/bootstrap/js/bootstrap.bundle.min.js')?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?=base_url('assets/jquery-easing/jquery.easing.min.js')?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?=base_url('assets/js/sb-admin-2.min.js')?>"></script>

<!-- Page level plugins -->
<script src="<?=base_url('assets/chart.js/Chart.min.js')?>"></script>  

<!-- Page level plugins -->
<script src="<?=base_url('assets/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?=base_url('assets/datatables/dataTables.bootstrap4.min.js')?>"></script>


<!-- custom javascript -->
<script>const BASE_URL='<?= base_url(); ?>'; </script>
<script src="<?=base_url('assets/js/administrator/administrator.js')?>"></script>
<script src="<?=base_url('assets/js/administrator/chart.js')?>"></script>

<!-- date range picker -->
<script src="<?=base_url('assets/js/daterangepicker/moment.min.js')?>"></script>
<script src="<?=base_url('assets/js/daterangepicker/daterangepicker.js')?>"></script>

<!-- bootstrap-select -->
<script src="<?=base_url('assets/js/bootstrap-select/bootstrap-select.min.js')?>"></script>

<!-- chart -->
<script src="<?=base_url('assets/js/chart/chart-pie.js')?>"></script>
<script src="<?=base_url('assets/js/chart/chart-area.js')?>"></script>
<script src="<?=base_url('assets/js/chart/chart-bar.js')?>"></script>

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

<script>
    function getStateEdit(val) {
        $.ajax({
            type: "POST",
            url: "<?=base_url()?>Kegiatan/view_kota",
            data: 'id_provinsi=' + val,
            success: function(data) {
                $("#edit-kota-kegiatan").html(data);
            }
        });
    }
</script>

<script>
    function getStateFilterKegiatan(val) {
        $.ajax({
            type: "POST",
            url: "<?=base_url()?>Kegiatan/view_kota",
            data: 'id_provinsi=' + val,
            success: function(data) {
                $("#filter-id-kabupaten-kota").html(data);
            }
        });
    }
</script>

<script>
    function getStateTenagaAhli(val) {
        $.ajax({
            type: "POST",
            url: "<?=base_url()?>Kegiatan/view_kota",
            data: 'id_provinsi=' + val,
            success: function(data) {
                $("#kota-tenaga-ahli").html(data);
            }
        });
    }
</script>

<script>
    function getStateEditTenagaAhli(val) {
        $.ajax({
            type: "POST",
            url: "<?=base_url()?>Kegiatan/view_kota",
            data: 'id_provinsi=' + val,
            success: function(data) {
                $("#edit-kota-tenaga-ahli").html(data);
            }
        });
    }
</script>
<script>
    function getStateProfile(val) {
        $.ajax({
            type: "POST",
            url: "<?=base_url()?>Kegiatan/view_kota",
            data: 'id_provinsi=' + val,
            success: function(data) {
                $("#profile-kota").html(data);
            }
        });
    }
</script>
<script>
    function getKecamatanProfile(val) {
        $.ajax({
            type: "POST",
            url: "<?=base_url()?>User/view_kecamatan",
            data: 'id_kota_kabupaten=' + val,
            success: function(data) {
                $("#profile-kecamatan").html(data);
            }
        });
    }
</script>

<script>
    function getKelurahanProfile(val) {
        $.ajax({
            type: "POST",
            url: "<?=base_url()?>User/view_kelurahan",
            data: 'id_kecamatan=' + val,
            success: function(data) {
                $("#profile-kelurahan").html(data);
            }
        });
    }
</script>

<script>
    function getStateMasterKotaKecamatan(val) {
        $.ajax({
            type: "POST",
            url: "<?=base_url()?>Kegiatan/view_kota",
            data: 'id_provinsi=' + val,
            success: function(data) {
                $("#master-kota-kecamatan").html(data);
            }
        });
    }
</script>

<script>
    function getStateMasterKotaKelurahan(val) {
        $.ajax({
            type: "POST",
            url: "<?=base_url()?>Kegiatan/view_kota",
            data: 'id_provinsi=' + val,
            success: function(data) {
                $("#master-kota-kelurahan").html(data);
            }
        });
    }
</script>

    <script>
        function getStateMasterKecamatanKelurahan(val) {
            $.ajax({
                type: "POST",
                url: "<?=base_url()?>User/view_kecamatan",
                data: 'id_kota_kabupaten=' + val,
                success: function(data) {
                    $("#master-kecamatan-kelurahan").html(data);
                }
            });
        }
    </script>
    
   

  