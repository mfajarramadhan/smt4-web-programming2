<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/sidebar.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav class="sidebar">
        <div class="logo">
            <img src="<?= BASEURL; ?>/img/logo-blk.png" alt="Logo BLK Karawang">
            <h4>UPTD BLK <br> Kabupaten Karawang</h4>
        </div>
        <ul>
            <li><a href="<?= BASEURL; ?>">Peserta</a></li>
            <li><a href="<?= BASEURL; ?>/users">Admin</a></li>
            <li>
                <a href="#" class="feat-btn">Kelola Data
                    <span class="fas fa-caret-down first"></span>
                </a>
                <ul class="feat-show">
                    <li><a href="<?= BASEURL; ?>/kejuruan">Data Kejuruan</a></li>
                    <li><a href="<?= BASEURL; ?>/desa">Data Desa</a></li>
                    <li><a href="<?= BASEURL; ?>/kecamatan">Data Kecamatan</a></li>
                </ul>
            </li>
            <li><a href="<?= BASEURL; ?>/logout.php" onclick="return confirm('Yakin ingin keluar?')">Logout</a></li>
        </ul>
    </nav>