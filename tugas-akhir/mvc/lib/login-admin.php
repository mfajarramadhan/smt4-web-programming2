<?php
session_start();
if (isset($_SESSION["login"])) {
    header("location: ../public/index.php");
}
require 'function.php';



$login = new Login_Admin();
if (isset($_POST["submit"])) {
    $result = $login->login($_POST["username"], $_POST["password"]);
    if ($result == 1) {
        $_SESSION["login"] = true;
        $_SESSION["id"] == $login->idUser();
        header("Location: ../public/index.php");
    } elseif ($result == 10) {
        echo "<script> alert('Password salah!'); </script>";
    } elseif ($result == 100) {
        echo "<script> alert('User tidak terdaftar'); </script>";
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
    <title>Login</title>
</head>

<body>
    <form action="" method="post" autocomplete="off">
        <h2>Login</h2>


        <label for="username">Username :</label>
        <input type="text" name="username" id="username" autofocus required>

        <label for="password">Password :</label>
        <input type="password" name="password" id="password" required>

        <button type="submit" name="submit">Login</button>

        <br>
        <p>Belum punya akun?<b><a href="register-admin.php"> Daftar</a></b></p>
    </form>
</body>

</html>