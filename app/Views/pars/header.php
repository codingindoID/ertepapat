<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= APPNAME ?> || <?= strtoupper($active) ?></title>
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/icofont/icofont.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/adminlte.min.css">

    <link rel="icon" href="<?= base_url() ?>/assets/img/app.png">
    <!-- jQuery -->
    <script src="<?= base_url() ?>/assets/js/jquery-3.6.0.min.js"></script>

    <!-- SWALL -->
    <script src="<?= base_url() ?>/assets/sweetalert/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="<?= base_url() ?>/assets/sweetalert/sweetalert2.min.css">
    <!-- datatable -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/datatables-bs4/css/dataTables.bootstrap4.min.css">

    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>/assets/custom.css">
    <div id="site_url" data-id="<?= site_url() ?>"></div>
</head>

<!-- modal loading -->
<div class="modal fade" id="modalLoading" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xs modal-dialog-centered">
        <div class="modal-content py-3">
            <div class="modal-body text-center">
                <img src="<?= base_url('assets/img/loading.gif') ?>" width="50%">
                <h6 class="m-auto text-info font-weight-bold mb-3">Mohon Tunggu</h6>
                <h6 class="m-auto mb-3"><small>-- TD PWJ --</small></h6>
            </div>
        </div>
    </div>
</div>