<?php
require '../../../function/connect.php';

if (isset($_POST['submit'])) {

    $level = $_POST['level'];
    $posisi = $_POST['posisi'];

    // cek level
    $sql = "SELECT * FROM level WHERE levelID = $level";
    $query = mysqli_query($conn, $sql);
    if (mysqli_num_rows($query) > 0) {
        header("Location: ../../index.php?page=function/posisi/addPosisi&exist=true");
        exit();
    }

    $sql = "INSERT INTO level (levelID, posisi) VALUES ('$level', '$posisi')";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../../index.php?page=posisi&insert=true");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
