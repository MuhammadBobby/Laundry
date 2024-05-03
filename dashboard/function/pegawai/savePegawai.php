<?php
require '../../../function/connect.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kontak = $_POST['kontak'];
    $posisi = $_POST['posisi'];
    $gaji = $_POST['gaji'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $konfirmasi = $_POST['konfirmasi'];

    // cek password dan konfirmasi password
    if ($password != $konfirmasi) {
        header("Location: ../../index.php?page=function/pegawai/addPegawai&wrongPass=false");
        exit();
    }

    // cek username dan password exist
    $sql = "SELECT * FROM pegawai WHERE username = '$username'";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0) {
        header("Location: ../../index.php?page=function/pegawai/addPegawai&exist=true");
        exit();
    }

    $sql = "INSERT INTO pegawai (username, password, nama, alamat, no_telp, posisi, gaji) VALUES ('$username', '$password', '$nama', '$alamat', '$kontak', '$posisi', $gaji)";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../../index.php?page=pegawai&insert=true");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    header("Location: ../../index.php?page=function/pegawai/addPegawai");
}
