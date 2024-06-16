<div class="container">
    <div class="sub_container">
        <div class="header">
            <h5>Data Kejuruan</h5>
        </div>

        <!-- Alert -->
        <div class="row position">
            <div class="col-lg-6">
                <?= Flasher::flash(); ?>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <form action="<?= BASEURL; ?>/kejuruan/cari" method="post">
                    <div class="menu">
                        <div class="search">
                            <input type="text" name="keyword" id="keyword" autocomplete="off" placeholder="Masukkan kata kunci...">
                            <button type="submit" name="cari" id="cari">Cari</button>
                        </div>
                        <!-- Trigger Modal -->
                        <div class="tambah">
                            <button type="button" name="tambah" id="tambah" class="btnTambahDataKejuruan" data-bs-toggle="modal" data-bs-target="#formModal">Tambah</button>
                        </div>
                    </div>
                </form>

                <br>
                <div class="t_body">
                    <table border="0" cellpadding="10" cellspacing="0" width="100%">
                        <tr>
                            <th>No</th>
                            <th>Kode Kejuruan</th>
                            <th>Kejuruan</th>
                            <th>Opsi</th>
                        </tr>
                        <?php $i = 1; ?>
                        <!-- List Data -->
                        <?php foreach ($data['kejuruan'] as $user) :  ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $user['kode_kejuruan']; ?></td>
                                <td><?= $user['kejuruan']; ?></td>
                                <td class="action-btn">
                                    <button type="submit" name="submit" id="ubah"><a href="<?= BASEURL; ?>/kejuruan/ubah/<?= $user['id']; ?>" class="tampilModalUbahKejuruan" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $user['id']; ?>">Ubah</a></button>
                                    <button type="submit" name="submit" id="hapus"><a href="<?= BASEURL; ?>/kejuruan/hapus/<?= $user['id']; ?>" onclick="return confirm('yakin menghapus <?= $user['kejuruan']; ?>?');">Hapus</a></button>
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
                <form action="<?= BASEURL; ?>/kejuruan/tambah" method="post">
                    <input type="hidden" name="id" id="id">

                    <div class="form-group">
                        <label for="kode_kejuruan" class="col-sm-4 col-form-label">Kode Kejuruan</label>
                        <input type="text" class="form-control" id="kode_kejuruan" name="kode_kejuruan">
                    </div>
                    <div class="form-group">
                        <label for="kejuruan" class="col-sm-2 col-form-label">Kejuruan</label>
                        <input type="text" class="form-control" id="kejuruan" name="kejuruan">
                    </div>
                    <div class="form-group">
                        <label for="pelatihan" class="col-sm-2 col-form-label">Pelatihan</label>
                        <input type="text" class="form-control" id="pelatihan" name="pelatihan">
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