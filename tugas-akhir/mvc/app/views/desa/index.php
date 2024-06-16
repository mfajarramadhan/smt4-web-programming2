<div class="container">
    <div class="sub_container">
        <div class="header">
            <h5>Data Desa</h5>
        </div>

        <!-- Alert -->
        <div class="row position">
            <div class="col-lg-6">
                <?= Flasher::flash(); ?>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <form action="<?= BASEURL; ?>/desa/cari" method="post">
                    <div class="menu">
                        <div class="search">
                            <input type="text" name="keyword" id="keyword" autocomplete="off" placeholder="Masukkan kata kunci...">
                            <button type="submit" name="cari" id="cari">Cari</button>
                        </div>
                        <!-- Trigger Modal -->
                        <div class="tambah">
                            <button type="button" name="tambah" id="tambah" class="btnTambahDataDesa" data-bs-toggle="modal" data-bs-target="#formModal">Tambah</button>
                        </div>
                    </div>
                </form>

                <br>
                <div class="t_body">
                    <table border="0" cellpadding="10" cellspacing="0" width="100%">
                        <tr>
                            <th>No</th>
                            <th>Kode Desa</th>
                            <th>Desa</th>
                            <th>Opsi</th>
                        </tr>
                        <?php $i = 1; ?>
                        <!-- List Data -->
                        <?php foreach ($data['desa'] as $user) :  ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $user['kode_desa']; ?></td>
                                <td><?= $user['nama_desa']; ?></td>
                                <td class="action-btn">
                                    <button type="submit" name="submit" id="ubah"><a href="<?= BASEURL; ?>/desa/ubah/<?= $user['id']; ?>" class="tampilModalUbahDesa" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $user['id']; ?>">Ubah</a></button>
                                    <button type="submit" name="submit" id="hapus"><a href="<?= BASEURL; ?>/desa/hapus/<?= $user['id']; ?>" onclick="return confirm('yakin menghapus <?= $user['nama_desa']; ?>?');">Hapus</a></button>
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
                <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Desa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Tambah Data -->
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/desa/tambah" method="post">
                    <input type="hidden" name="id" id="id">

                    <div class="form-group">
                        <label for="kode_desa" class="col-sm-4 col-form-label">Kode Desa</label>
                        <input type="text" class="form-control" id="kode_desa" name="kode_desa">
                    </div>
                    <div class="form-group">
                        <label for="nama_desa" class="col-sm-4 col-form-label">Nama Desa</label>
                        <input type="text" class="form-control" id="nama_desa" name="nama_desa">
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                    <div class="form-group">
                        <label for="ket" class="col-sm-2 col-form-label">Keterangan</label>
                        <input type="text" placeholder="(optional)" class="form-control" id="ket" name="ket">
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