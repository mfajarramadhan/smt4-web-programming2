<?php
require 'function.php';

$register = new SignUp_Peserta();
if (isset($_POST["submit"])) {
    $result = $register->registration($_POST["name"], $_POST["email"], $_POST["no_telp"], $_POST["password"]);
    if ($result == 1) {
        echo "<script> alert('Registrasi Berhasil'); window.location = '../index.html'; </script>";
    } elseif ($result == 10) {
        echo "<script> alert('Email telah terpakai!'); </script>";
    }
    echo "<script> alert('Registrasi Gagal'); </script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            margin: 8px 0;
        }

        button:hover {
            background-color: #45a049;
        }

        p {
            font-size: 13px;
        }
    </style>
    <title>Sign Up</title>
</head>

<body>
    <form action="" method="post" autocomplete="off">
        <h2>Registrasi</h2>

        <label for="nama">Nama :</label>
        <input type="text" name="name" id="nama" placeholder="Masukkan nama..." autofocus required>

        <label for="email">email :</label>
        <input type="text" name="email" id="email" placeholder="email..." required>

        <label for="no_telp">No. Telepon :</label>
        <input type="text" name="no_telp" id="no_telp" placeholder="Masukkan nomor telepon..." required>

        <label for="password">Password :</label>
        <input type="password" name="password" id="password" placeholder="Masukkan password..." required>




        <button type="submit" name="submit">Sign Up</button>

        <br>
        <p>sudah punya akun?<b><a href="login-peserta.php"> Login</a></b></p>
    </form>
</body>

</html>