<div class="page-header">
    <div class="page-block">
        <div class="row align-items-center">
            <div class="col-md-8">
                <div class="page-header-title">
                    <h5 class="m-b-10"><?= $title ?></h5>
                    <!-- <p class="m-b-0"><?= $sub_title ?></p> -->
                </div>
            </div>
            <div class="col-md-4">
                <ul class="breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="<?= site_url() ?>"> <i class="<?= ($icon != '') ? $icon : 'fa fa-home'  ?>"></i> </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!"><?= $sub_title ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>