<?php
require '../../../function/connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM user WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    header("location: ../../index.php?page=user&delete=true");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
