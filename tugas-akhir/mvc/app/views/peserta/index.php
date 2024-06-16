<div class="modal-box"></div>
<div class="container">
    <div class="sub_container">
        <div class="header">
            <h5>Peserta</h5>
        </div>

        <!-- Alert -->
        <div class="row position">
            <div class="col-lg-6">
                <?= Flasher::flash(); ?>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <form action="<?= BASEURL; ?>/peserta/cari" method="post">
                    <div class="menu">
                        <div class="search">
                            <input type="text" name="keyword" id="keyword" autocomplete="off" placeholder="Masukkan kata kunci...">
                            <button type="submit" name="cari" id="cari">Cari</button>
                        </div>
                        <!-- Trigger Modal -->
                        <div class="tambah">
                            <button type="button" name="tambah" id="tambah" class="btnTambahDataPeserta" data-bs-toggle="modal" data-bs-target="#formModal">Tambah</button>
                        </div>
                    </div>
                </form>

                <br>
                <div class="t_body">
                    <table border="0" cellpadding="10" cellspacing="0" width="100%">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Opsi</th>
                        </tr>
                        <?php $i = 1; ?>
                        <!-- List Data -->
                        <?php foreach ($data['peserta'] as $user) :  ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $user['nama']; ?></td>
                                <td><?= $user['tanggal_lahir']; ?></td>
                                <td class="action-btn">
                                    <button type="submit" name="submit" id="ubah"><a href="<?= BASEURL; ?>/peserta/ubah/<?= $user['nik']; ?>" class="tampilModalUbahPeserta" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $user['nik']; ?>">Ubah</a></button>
                                    <button type="submit" name="submit" id="hapus"><a href="<?= BASEURL; ?>/peserta/hapus/<?= $user['nik']; ?>" onclick="return confirm('yakin menghapus <?= $user['nama']; ?>?');">Hapus</a></button>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>








<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Kejuruan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Tambah Data -->
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/peserta/tambah" method="post">
                    <!-- <div class="form-group mb-2">
                        <label for="kode_kejuruan" class="col-sm-4 col-form-label">Kode Kejuruan</label>
                        <input type="text" class="form-control" id="kode_kejuruan" name="kode_kejuruan">
                    </div> -->

                    <div class="form-group mb-2">
                        <label for="id_kejuruan" class="col-sm-4 col-form-label">Pilih Kejuruan : </label><br>
                        <select name="id_kejuruan" id="kejuruan">
                            <option value="">-- Pilih Kejuruan --</option>
                            <?php
                            foreach ($data['kejuruan'] as $row) :
                            ?>
                                <option value="<?= $row['id']; ?>">
                                    <?= $row['kejuruan']; ?>
                                </option>
                            <?php
                            // }
                            endforeach;
                            ?>
                        </select>
                    </div>

                    <div class="form-group mb-2-nik">
                        <label for="nik" class="col-sm-2 col-form-label">NIK</label>
                        <input type="number" class="form-control nik" id="nik" name="nik" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group mb-2">
                        <label for="tempat_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir">
                    </div>
                    <div class="form-group mb-2">
                        <label for="tanggal_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                    </div>
                    <div class="form-group mb-2">
                        <label for="radio" class="col-sm-4 col-form-label">Jenis Kelamin :</label><br>
                        <input type="radio" id="laki_laki" name="jk" value="L">Laki-Laki <br>
                        <input type="radio" id="perempuan" name="jk" value="P">Perempuan
                    </div>
                    <div class="form-group mb-2">
                        <label for="belum_menikah" class="col-sm-4 col-form-label">Status Pernikahan :</label><br>
                        <input type="radio" id="menikah" name="status_nikah" value="Menikah">Menikah <br>
                        <input type="radio" id="belum_menikah" name="status_nikah" value="Belum Menikah">Belum Memikah
                    </div>
                    <div class="form-group mb-2">
                        <label for="tinggi_badan" class="col-sm-4 col-form-label">Tinggi Badan</label>
                        <input type="number" class="form-control" id="tinggi_badan" name="tinggi_badan">
                    </div>
                    <div class="form-group mb-2">
                        <label for="berat_badan" class="col-sm-4 col-form-label">Berat Badan</label>
                        <input type="number" class="form-control" id="berat_badan" name="berat_badan">
                    </div>
                    <div class="form-group mb-2">
                        <label for="no_telp" class="col-sm-4 col-form-label">No. Telepon</label>
                        <input type="number" class="form-control" id="no_telp" name="no_telp">
                    </div>
                    <div class="form-group mb-2">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group mb-2">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                    <div class="form-group mb-2">
                        <label for="id_desa" class="col-sm-4 col-form-label">Desa :</label><br>
                        <select name="id_desa" id="desa">
                            <option value="">-- Pilih Desa Anda --</option>
                            <?php
                            // $query = $conn->query("SELECT * FROM tbl_kecamatan");
                            // while($data = $query->fetch_assoc()){
                            foreach ($data['desa'] as $row) :
                            ?>
                                <option value="<?= $row['id']; ?>">
                                    <?= $row['nama_desa']; ?>
                                </option>
                            <?php
                            // }
                            endforeach;
                            ?>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="id_kecamatan" class="col-sm-4 col-form-label">Kecamatan :</label><br>
                        <select name="id_kecamatan" id="kecamatan">
                            <option value="">-- Pilih Kecamatan Anda --</option>
                            <?php
                            // $query = $conn->query("SELECT * FROM tbl_kecamatan");
                            // while($data = $query->fetch_assoc()){
                            foreach ($data['kecamatan'] as $row) :
                            ?>
                                <option value="<?= $row['id']; ?>">
                                    <?= $row['nama_kecamatan']; ?>
                                </option>
                            <?php
                            // }
                            endforeach;
                            ?>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="nama_ortu" class="col-sm-4 col-form-label">Nama Orang Tua</label>
                        <input type="text" class="form-control" id="nama_ortu" name="nama_ortu">
                    </div>
                    <div class="form-group mb-2">
                        <label for="no_ortu" class="col-sm-6 col-form-label">No. Telepon Orang Tua</label>
                        <input type="number" class="form-control" id="no_ortu" name="no_ortu">
                    </div>
                    <div class="form-group mb-2">
                        <label for="pendidikan" class="col-sm-4 col-form-label">Pendidikan Terakhir : </label><br>
                        <select name="pendidikan" id="pendidikan" required>
                            <option value="">-- Pilih Pendidikan Terakhir --</option>
                            <option value="strata" id="strata" name="pendidikan">S1/D3/D4</option>
                            <option value="sma/smk" id="sma" name="pendidikan">SMA/SMK</option>
                            <option value="smp" id="smp" name="pendidikan">SMP</option>
                            <option value="sd" id="sd" name="pendidikan">SD</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="asal_sekolah" class="col-sm-4 col-form-label">Asal Sekolah</label>
                        <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah">
                    </div>
                    <div class="form-group mb-2">
                        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan/Kejuruan</label>
                        <input type="text" class="form-control" id="jurusan" name="jurusan" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="tujuan" class="col-sm-8 col-form-label">Tujuan Setelah Pelatihan : </label><br>
                        <select name="tujuan" id="tujuan" required>
                            <option value="">-- Pilih Tujuan --</option>
                            </option>
                            <option value="kerja" id="kerja" name="tujuan">Kerja</option>
                            <option value="usaha" id="usaha" name="tujuan">Usaha</option>
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <label for="ktp" class="col-sm-2 col-form-label">ktp</label>
                        <input type="file" class="form-control" id="ktp" name="ktp">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
            </form>
        </div>
    </div>
</div>