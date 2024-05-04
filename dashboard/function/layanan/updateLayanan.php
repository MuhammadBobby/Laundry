<?php
require '../../../function/connect.php';

if (isset($_POST['update'])) {
    $layananID = $_POST['layananID'];
    $layanan = $_POST['layanan'];
    $harga = $_POST['harga'];
    $ket = $_POST['ket'];

    $sql = "UPDATE layanan SET layanan = '$layanan', harga = '$harga', ket = '$ket' WHERE layananID = '$layananID'";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../../index.php?page=layanan&update=true");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
