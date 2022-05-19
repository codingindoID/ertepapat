<div class="row">
    <div class="col-12 mb-3">
        <div class="btn-group" role="group" aria-label="Basic example">
            <<<<<<< HEAD <button type="button" data-toggle="modal" data-target="#modalPenduduk" class="btn btn-primary"><i class="icofont-plus-circle"></i> Tambah Data</button>
                =======
                <button type="button" class="btn btn-primary tambah-penduduk"><i class="icofont-plus-circle"></i> Tambah Data</button>
                >>>>>>> 783c07f3b7c12a7e7de59340f01cf772b45f3fcf
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
                                    <!-- href="/delete-warga/<?= $var['id_warga'] ?>" -->
                                    <button type="button" class="btn btn-primary mr-2 detil-warga" data-id="<?= $var['id_warga'] ?>"><i class="icofont-edit"></i> Edit</button>
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


<!-- Modal -->
<div class="modal fade" id="modalPenduduk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <form action="/simpan-warga" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><i class="<?= $icon ?>"></i> DATA WARGA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <input type="hidden" id="id_warga" name="id_warga">
                        <div class="col-md-4">
                            <label for="kepala_keluarga">Kepala Keluarga</label>
                            <select name="kepala_keluarga" id="kepala_keluarga" class="select-form-control" required>
                                <option value="">--PILIH--</option>
                                <option value="Y">Ya</option>
                                <option value="N">Tidak</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="no_kk">NO KK</label>
                            <input type="no_kk" class="form-control" name="no_kk" id="no_kk" placeholder="nomor KK" required>
                        </div>
                        <div class="col-md-4">
                            <label for="nik">NIK</label>
                            <input type="nik" class="form-control" name="nik" id="nik" placeholder="NIK" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="nama">NAMA</label>
                            <input class="form-control" name="nama" id="nama" placeholder="Nama Lengkap Sesuai KTP" required>
                        </div>
                        <div class="col-md-6">
                            <label for="jk">JENIS KELAMIN</label>
                            <select name="jk" id="jk" class="select-form-control" required>
                                <option value="">--PILIH--</option>
                                <option value="L">Laki - Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="tempat_lahir">TEMPAT LAHIR</label>
                            <input class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat Lahir" required>
                        </div>
                        <div class="col-md-6">
                            <label for="tanggal_lahir">TANGGAL LAHIR</label>
                            <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir" required placeholder="Tanggal Lahir">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <label for="tempat_lahor">Alamat Lengkap</label>
                            <textarea class="form-control" name="alamat" id="alamat" placeholder="Alamat lengkap" required></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="no_hp">NO HP</label>
                            <input type="number" class="form-control" name="no_hp" id="no_hp" required placeholder="Nomor Hp">
                        </div>
                        <div class="col-md-6">
                            <label for="pekerjaan">PEKERJAAN</label>
                            <select name="pekerjaan" id="pekerjaan" class="select-form-control" required>
                                <option value="">--PILIH--</option>
                                <option value="wirastasta">Wirasawasta</option>
                                <option value="pns">PNS</option>
                                <option value="buruh">Buruh</option>
                                <option value="petani">Tani</option>
                                <option value="phl">Pegawai Harian Lepas</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="icofont-close"></i> Close</button>
                    <button type="submit" class="btn btn-primary col-md-4"><i class="icofont-save"></i> SIMPAN</button>
                </div>
            </div>
        </form>
    </div>
</div>