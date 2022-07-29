<?= view('pars/header') ?>
<?php
$sesi = session()->get('po_balance_level');
$collapse = ['leader']
?>


<body class="hold-transition sidebar-mini text-sm <?= in_array($sesi, $collapse, true) ? 'sidebar-collapse' : '' ?>" id="body">
    <div class="wrapper">

        <?= view('pars/navbar') ?>
        <?= view('pars/sidebar') ?>
        <div class="content-wrapper">
            <?= view('pars/bread') ?>

            <div class="content mt-0">
                <div class="container-fluid p-0">
                    <div class="card card-body p-3 mt-0">

                        <?php if (session()->getFlashdata('success')) : ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Success!</strong> <?= session()->getFlashdata('success') ?>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif ?>

                        <?php if (session()->getFlashdata('warning')) : ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Warnng!</strong> <?= session()->getFlashdata('warning') ?>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif ?>

                        <?php if (session()->getFlashdata('error')) : ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Fail!</strong> <?= session()->getFlashdata('error') ?>.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php endif ?>