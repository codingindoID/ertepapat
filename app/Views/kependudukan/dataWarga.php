<div class="row">
    <div class="col-12 mb-3">
        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" data-toggle="modal" data-target="#modalPenduduk" class="btn btn-primary"><i class="icofont-plus-circle"></i> Tambah Data</button>
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
                                    <button type="button" class="btn btn-primary mr-2"><i class="icofont-edit"></i> Edit</button>
                                    <button type="button" class="btn btn-danger"><i class="icofont-trash"></i> Hapus</button>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modalPenduduk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="title_modalPenduduk"><i class="ti-user"></i> Informasi Kependudukan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>