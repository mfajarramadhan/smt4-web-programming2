<?php
require 'function.php';

$register = new SignUp_Admin();
if (isset($_POST["submit"])) {
    $result = $register->registration($_POST["name"], $_POST["username"], $_POST["password"], $_POST["confirmpassword"]);
    if ($result == 1) {
        echo "<script> alert('Registrasi Berhasil'); window.location = '../public/index.php'; </script>";
    } elseif ($result == 10) {
        echo "<script> alert('Username telah terpakai!'); </script>";
    } elseif ($result == 100) {
        echo "<script> alert('Konfirmasi password tidak sesuai'); </script>";
    }
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

        <label for="nama">Nama Admin :</label>
        <input type="text" name="name" id="nama" placeholder="Masukkan nama..." autofocus required>

        <label for="username">Username :</label>
        <input type="text" name="username" id="username" placeholder="Username..." required>

        <label for="password">Password :</label>
        <input type="password" name="password" id="password" placeholder="Masukkan password..." required>

        <label for="confirmpassword">Konfirmasi Password :</label>
        <input type="password" name="confirmpassword" id="confirmpassword" placeholder="Masukkan ulang password..." required>


        <button type="submit" name="submit">Sign Up</button>

        <br>
        <p>sudah punya akun?<b><a href="login-admin.php"> Login</a></b></p>
    </form>
</body>

</html>