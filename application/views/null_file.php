<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("components/head.php") ?>
    <link href="<?php echo base_url('assets/css/error.css') ?>" rel="stylesheet">
</head>

<body>
    <div class="container mt-3">
        
        <!-- <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <div class="pt-5 text-center">
                    <span class="masuk-title text-center">Maaf atas ketidaknyamanan Anda.</span>
                    <h6 class="masuk-title text-center">File yang anda download belum tersedia.</h6>
                    <p class="mt-2 keterangan-title mb-2 mt-3 text-center">Mohon kembali ke halaman utama. Terima kasih.
                </div>
                <img src="<?= base_url();?>assets/image/not_found_file.png" alt="File Not Found !!!" width="500px"
                    class="rounded mx-auto d-block">
            </div>

        </div> -->
        <a href="<?= base_url();?>public_page" type="button" class="btn btn-warning float-right bg-flat-color-1"
            > <i class="fas fa-backward"></i> Back</a>

    </div>

    <?php $this->load->view("components/js.php") ?>
</body>

</html>