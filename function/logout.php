<?php

session_start();
$_SESSION["login"] = [];
$_SESSION["user"] = [];
session_unset();
session_destroy();



header("Location: ../index.php");
exit;
