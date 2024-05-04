<?php
require '../../../function/connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM transaksi WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        header("location: ../../index.php?page=transaksi&delete=true");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
