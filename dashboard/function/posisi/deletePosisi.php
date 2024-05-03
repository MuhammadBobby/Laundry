<?php
require '../../../function/connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM level WHERE levelID = $id";

if (mysqli_query($conn, $sql)) {
    header("location: ../../index.php?page=posisi&delete=true");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
