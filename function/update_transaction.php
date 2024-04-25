<?php
require 'connect.php';
session_start();

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];


    $query = "UPDATE transaksi SET status = 'selesai' WHERE user = ? AND status = 'pending'"; //blm maksimal karena blm memiliki fitur checkout sebagian untuk proses
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $user);
    $stmt->execute();


    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false]);
}
