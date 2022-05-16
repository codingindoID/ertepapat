<div class="row">
    <div class="col-12 mb-3">
        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-info"><i class="icofont-print"></i> Cetak</button>
            <button type="button" class="btn btn-success"><i class="icofont-print"></i> Excel</button>
        </div>
    </div>
    <div class="col-12">
        <div class="table-responsive">
            <table class="table table-bordered custom-table data-table">
                <thead class="bg-primary">
                    <tr>
                        <th>No</th>
                        <th>No KK</th>
                        <th>Kepala keluarga</th>
                        <th class="text-center">Data Anggota</th>
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
                            <td class="text-center">
                                <a href="/kartu-keluarga/<?= $var['no_kk'] ?>"><i class="icofont-search-document"> Lihat Anggota</i></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>