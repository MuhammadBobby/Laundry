<?php
require '../../../function/connect.php';

if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kontak = $_POST['kontak'];
    $posisi = $_POST['posisi'];
    $gaji = $_POST['gaji'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "UPDATE pegawai SET  password = '$password', nama = '$nama', alamat = '$alamat', no_telp = '$kontak', posisi = '$posisi', gaji = $gaji WHERE username = '$username'";

    if (mysqli_query($conn, $sql)) {
        header("location: ../../index.php?page=pegawai&update=true");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
