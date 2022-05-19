<div class="card">
    <div class="card-body">
        <div class="row mb-3">
            <div class="col text-right">
                <h5 class="font-weight-bold"> <small>No KK :</small> <?= $no_kk->no_kk ?></h5>
                <h5 class="font-weight-bold mt-2"><small> Nama Kepala Keluarga :</small> <?= $no_kk->nama ?></h5>
            </div>
        </div>
        <hr>
        <h5 class="mb-3"><i class="icofont-attachment"></i> Daftar Anggota Keluarga</h5>
        <div class="table-responsive">
            <table class="table table-bordered custom-table data-table">
                <thead class="bg-primary">
                    <tr>
                        <th>No</th>
                        <th>No KK</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>TTL</th>
                        <th>Umur</th>
                        <th>No HP</th>
                        <th class="text-center">#</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($warga as $var) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $var['no_kk'] ?></td>
                            <td><?= $var['nik'] ?></td>
                            <td><?= $var['nama'] ?></td>
                            <td><?= $var['tempat_lahir'] . " , " . $var['tanggal_lahir'] ?></td>
                            <td>Nama</td>
                            <td><?= $var['no_hp'] ?></td>
                            <td class="text-center">
                                <div class="btn-group btn-group-sm" role="group">
                                    <a type="button" class="btn btn-danger text-white" data-id="<?= $var['id_warga'] ?>" onclick="deleteWarga(this)"><i class="icofont-trash"></i> Hapus</a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>