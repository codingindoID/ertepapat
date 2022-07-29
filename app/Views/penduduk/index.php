<div class="card-header mb-3 bg-light">
    <div class="row">
        <div class="col-xs-12 col-md-6 mb-2 d-sm-none d-md-block">
            <button class="btn btn-warning text-white d-none d-md-block"><i class="icofont-undo"></i> Kembali</button>
        </div>
        <div class="col-xs-12 col-md-6 text-right">
            <a href="<?= site_url('tambah-penduduk') ?>" class="btn btn-success col-xs-12 col-md-3"><i class="icofont-user-alt-2"></i> Tambah Penduduk</a>
        </div>
    </div>
</div>
<div class="table-responsive">
    <table class="my-table table-bordered table-striped data-table">
        <thead>
            <tr class="bg-info text-light text-center">
                <th>KK</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Jk</th>
                <th>TTL</th>
                <th>Agama</th>
                <th>Pekerjaan</th>
                <th>Gol Darah</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rekap as $var) : ?>
                <tr>
                    <td><?= $var['no_kk'] ?></td>
                    <td><?= $var['nik'] ?></td>
                    <td><?= $var['nama_lengkap'] ?></td>
                    <td><?= $var['jk'] ?></td>
                    <td><?= $var['tempat_lahir'] ?> , <?= $var['tanggal_lahir'] ?></td>
                    <td><?= $var['agama'] ?></td>
                    <td><?= $var['pekerjaan'] ?></td>
                    <td><?= $var['gol_darah'] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>