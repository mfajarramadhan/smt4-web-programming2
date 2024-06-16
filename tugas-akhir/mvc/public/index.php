<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("location: ../lib/login-admin.php");
    exit;
}

require_once '../app/init.php';

$app = new App();
