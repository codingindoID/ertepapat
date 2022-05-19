<?= view('pars/header') ?>

<body>
    <!-- Pre-loader start -->
    <?= view('pars/loader') ?>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <?= view('pars/navbar') ?>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <?= view('pars/sidebar') ?>
                    <div class="pcoded-content p-2">
                        <!-- Lokasi Bread -->
                        <!-- akhir Lokasi Bread -->

                        <div class="card card-body">
                            <?php if (session()->getFlashdata()) : ?>
                                <?php if (session()->getFlashdata('error')) : ?>
                                    <div class="row">
                                        <div class="col">
                                            <div class="alert alert-notif alert-danger alert-dismissible fade show bg-danger text-white" role="alert">
                                                <strong>Error!</strong> <?= session()->getFlashdata('error') ?>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif ?>
                                <?php if (session()->getFlashdata('success')) : ?>
                                    <div class="row">
                                        <div class="col">
                                            <div class="alert alert-notif alert-success alert-dismissible fade show bg-success text-white" role="alert">
                                                <strong>Sukses!</strong> <?= session()->getFlashdata('success') ?>
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif ?>
                            <?php endif ?>
                            <p> <i class="<?= $icon ?>"></i> <span class="font-weight-bold"><?= $title ?></span></p>