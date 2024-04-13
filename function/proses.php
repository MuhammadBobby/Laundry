<?php
session_start();
require 'connect.php';

if (!isset($_SESSION['login'])) {
    header('Location: ../auth/login.php?gagal=true');
    exit;
}

$layanan = $_POST['layanan'];
$berat = $_POST['berat'];
$harga = $_POST['harga'];
$tanggal = $_POST['tanggal'];
$catatan = $_POST['catatan'];
$total = $berat * $harga;
$user = $_SESSION['user'];
$status = 'Pending';

$query = "INSERT INTO transaksi VALUES ('', '$user', '$layanan', $harga, $berat, '$tanggal', '$catatan',$total, '$status')";
if ($conn->query($query) === TRUE) {
    header("location: ../index.php?berhasil=true");
    exit;
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}
