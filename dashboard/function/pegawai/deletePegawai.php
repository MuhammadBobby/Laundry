<?php
require '../../../function/connect.php';

if (isset($_GET['username'])) {
    $username = $_GET['username'];
    $sql = "DELETE FROM pegawai WHERE username = '$username'";

    if (mysqli_query($conn, $sql)) {
        header("location: ../../index.php?page=pegawai&delete=true");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
