<?php
require 'connect.php';
session_start();
date_default_timezone_set('Asia/Jakarta');

if (!isset($_SESSION['login']) && !isset($_SESSION['user'])) {
    header('Location: ../auth/login.php');
}

$review = $_POST['review'];
$bintang = $_POST['bintang'];
$reviewer = $_POST['reviewer'];
$tanggal = date('Y-m-d');

$sql = "INSERT INTO review VALUES ('', '$reviewer', $bintang, '$tanggal', '$review')";

if (mysqli_query($conn, $sql)) {
    header('Location: ../index.php?review=true#reviews');
    exit;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
