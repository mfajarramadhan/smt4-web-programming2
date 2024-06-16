<div class="container">
    <div class="sub_container">
        <div class="header">
            <h5>Admin</h5>
        </div>

        <!-- Alert -->
        <div class="row position">
            <div class="col-lg-6">
                <?= Flasher::flash(); ?>
            </div>
        </div>

        <div class="box">
            <div class="content">
                <form action="<?= BASEURL; ?>/users/cari" method="post">
                    <div class="menu">
                        <div class="search">
                            <input type="text" name="keyword" id="keyword" autocomplete="off" placeholder="Masukkan kata kunci...">
                            <button type="submit" name="cari" id="cari">Cari</button>
                        </div>
                        <!-- Trigger Modal -->
                        <div class="tambah">
                            <button type="button" name="tambah" id="tambah" class="btnTambahDataUsers" data-bs-toggle="modal" data-bs-target="#formModal">Tambah</button>
                        </div>
                    </div>
                </form>

                <br>
                <div class="t_body">
                    <table border="0" cellpadding="10" cellspacing="0" width="100%">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Opsi</th>
                        </tr>
                        <?php $i = 1; ?>
                        <!-- List Data -->
                        <?php foreach ($data['users'] as $user) :  ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><?= $user['nama']; ?></td>
                                <td><?= $user['username']; ?></td>
                                <td class="action-btn">
                                    <button type="submit" name="submit" id="ubah"><a href="<?= BASEURL; ?>/users/ubah/<?= $user['id_admin']; ?>" class="tampilModalUbahUsers" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $user['id_admin']; ?>">Ubah</a></button>
                                    <button type="submit" name="submit" id="hapus"><a href="<?= BASEURL; ?>/users/hapus/<?= $user['id_admin']; ?>" onclick="return confirm('yakin menghapus <?= $user['nama']; ?>?');">Hapus</a></button>
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
                <h1 class="modal-title fs-5" id="formModalLabel">Tambah Data Admin</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Tambah Data -->
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/users/tambah" method="post">
                    <input type="hidden" name="id_admin" id="id_admin">

                    <div class="form-group">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
            </div>

            <!-- Action Button -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
            </form>
        </div>
    </div>
</div>