<?php

// connect database
$conn = mysqli_connect("localhost", "root", "", "laundry");

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}


// query (banyak untuk read)
function query($query)
{
    global $conn;
    $rows = [];
    // memilih table / query
    $result = mysqli_query($conn, $query);

    // fetch
    while ($laundry = mysqli_fetch_assoc($result)) {
        $rows[] = $laundry;
    }

    return $rows;
}
