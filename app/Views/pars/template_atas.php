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
                            <p> <i class="<?= $icon ?>"></i> <span class="font-weight-bold"><?= $title ?></span></p>