<?php
session_start();
session_destroy();
header("Location: ../lib/login-admin.php");
