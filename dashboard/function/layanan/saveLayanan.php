<?php
require '../../../function/connect.php';

if (isset($_POST['submit'])) {

    $layanan = $_POST['layanan'];
    $harga = $_POST['harga'];
    $ket = $_POST['ket'];

    $sql = "INSERT INTO layanan (layanan, harga, ket) VALUES ('$layanan', '$harga', '$ket')";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../../index.php?page=layanan&insert=true");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
