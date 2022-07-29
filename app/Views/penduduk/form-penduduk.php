<div class="card">
    <div class="card-header bg-light">
        <div class="row">
            <div class="col-xs-12 col-md-6 mb-2 d-sm-none d-md-block">
                <button class="btn btn-warning text-white d-none d-md-block back"><i class="icofont-undo"></i> Kembali</button>
            </div>
            <div class="col-xs-12 col-md-6 text-right">
                <h5>Form Tambah Penduduk <i class="icofont-users-alt-4"></i></h5>
            </div>
        </div>
    </div>
    <form action="<?= site_url('penduduk') ?>" method="post">
        <div class="card-body bg-light">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="kk">No KK</label>
                    <input type="number" name="no_kk" class="form-control" id="kk" placeholder="no kk">
                </div>
                <div class="form-group col-md-6">
                    <label for="nik">nik</label>
                    <input type="number" name="nik" class="form-control" id="nik" placeholder="nik">
                </div>
            </div>
            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tempat_lahir">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir">
                </div>
                <div class="form-group col-md-6">
                    <label for="tanggal_lahir">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir">
                </div>
            </div>
            <hr>
            <h6><i class="icofont-contact-add"></i> Alamat</h6>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="rt">RT</label>
                    <select id="rt" class="form-control" name="rt" readonly>
                        <option>... pilih ...</option>
                        <option value="04" selected>04</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="rw">RW</label>
                    <select id="rw" class="form-control" name="rw" readonly>
                        <option>... pilih ...</option>
                        <option value="01" selected>01</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="kecamatan">Kecamatan</label>
                    <input type="text" class="form-control" id="kecamatan" value="pecangaan" readonly name="kecamatan">
                </div>
                <div class="form-group col-md-3">
                    <label for="desa">Desa</label>
                    <input type="text" class="form-control" id="desa" value="lebuawu" readonly name="desa">
                </div>
            </div>
            <hr>
            <h6><i class="icofont-attachment"></i> Info Lain</h6>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="jk">Jenis Kelamin</label>
                    <select id="jk" class="form-control" name="jk" required>
                        <option>... pilih ...</option>
                        <option value="L">LAKI-LAKI</option>
                        <option value="P">PEREMPUAN</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan">
                </div>
                <div class="form-group col-md-3">
                    <label for="agama">Agama</label>
                    <select id="gol_darah" class="form-control" name="kewarganegaraan">
                        <option>... pilih ...</option>
                        <option value="islam" selected>Islam</option>
                        <option value="katolik">Katolik</option>
                        <option value="protestan">Protestan</option>
                        <option value="budha">Budha</option>
                        <option value="hindu">Hindu</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="jk">Jenis Kelamin</label>
                    <select id="jk" class="form-control" name="jk" required>
                        <option>... pilih ...</option>
                        <option value="L">LAKI-LAKI</option>
                        <option value="P">PEREMPUAN</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="gol_darah">Golongan Darah</label>
                    <select id="gol_darah" class="form-control" name="gol_darah" required>
                        <option>... pilih ...</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                        <option value="tidak_tahu">Tidak Tahu</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="gol_darah">Kewarganegaraan</label>
                    <select id="gol_darah" class="form-control" name="kewarganegaraan">
                        <option>... pilih ...</option>
                        <option value="WNI" selected>WNI</option>
                        <option value="WNA">WNA</option>
                    </select>
                </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary col-xs-12 col-md-3">Simpan Data</button>
        </div>
    </form>
</div>