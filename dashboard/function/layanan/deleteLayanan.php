<?php
require '../../../function/connect.php';

if (isset($_GET['id'])) {
    $layananID = $_GET['id'];
    $sql = "DELETE FROM layanan WHERE layananID = '$layananID'";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        header('location: ../../index.php?page=layanan&delete=true');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
