<?php
require '../../../function/connect.php';

// update data
if (isset($_POST['update'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kontak = $_POST['kontak'];

    $id = $_POST['id'];

    $update = "UPDATE user SET nama = '$nama', alamat = '$alamat', kontak = '$kontak' WHERE id = $id";

    if (mysqli_query($conn, $update) === TRUE) {
        header("location: ../../index.php?page=user&update=true");
    } else {
        echo "Error: " . $update . "<br>" . $conn->error;
    }
}
