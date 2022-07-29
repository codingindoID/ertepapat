<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-info elevation-4">
    <!-- Brand Logo -->
    <a href="<?= site_url() ?>" class="brand-link" style="background-color:#eaeff0 !important ;">
        <img src="<?= base_url() ?>/assets/img/app.png" AdminLTE Logo" class="brand-image img-circle elevation-3">
        <span class="brand-text f-700"><?= APPNAME ?></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?= site_url() ?>" class="nav-link <?= $active == 'beranda' ? 'active' : '' ?>">
                        <i class="nav-icon icofont-ui-home"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <?php
                switch (session()->get(LEVEL)) {
                    case 'user':
                        break;
                    default:
                        echo view('pars/menu/admin');
                        break;
                }
                ?>
                <li class="nav-item">
                    <a href="<?= site_url() ?>" class="nav-link">
                        <i class="nav-icon icofont-dashboard-web"></i>
                        <p>
                            Lainnya
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>