<?php
require 'connect.php';

$id = $_GET["id"];
$query = "DELETE FROM transaksi WHERE id = '$id'";

if (mysqli_query($conn, $query) === TRUE) {
    header("location: ../keranjang.php?berhasil=true");
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}
