<?php
require "../../../function/connect.php";
require "../../../vendor/autoload.php";
session_start();

use \Dompdf\Dompdf;

if (!isset($_SESSION['login_adm']) && !isset($_SESSION['user_adm'])) {
    header("Location: ../auth/login.php");
    exit;
}

$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Laporan Layanan</title>
    <style>
        body {
            font-family: "Poppins", sans-serif;
            padding: 10px;
            font-size: 14px;
            background: #fff;
            color: #333;
        }
        .invoice-container {
            max-width: 800px;
            margin: 0 auto;
            background: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #008080;
        }
        .highlight {
            color: #0277BD;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            font-size: 16px;
        }
        thead {
            background-color: #f9f9f9;
        }
        .total-row th {
            text-align: right;
        }
        .footer {
            font-size: 12px;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="invoice-container">
        <h1>LAPORAN LAYANAN</h1>
        <p class="footer">laporan ini adalah laporan data layanan yang ada di Ok Laundry.</p>

        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Layanan</th>
                    <th>Harga</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>';

$no = 1;
$query = "SELECT * FROM layanan";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $html .= '
            <tr>
                <td>' . $no++ . '</td>
                <td>' . htmlspecialchars($row['layanan']) . '</td>
                <td>Rp ' . htmlspecialchars(number_format($row['harga'], 0, ',', '.')) . '</td>
                <td>' . htmlspecialchars($row['ket']) . '</td>
            </tr>';
    }


    $html .= '
            </tbody>
        </table>
        <p class="footer">*Laporan dibuat secara otomatis</p>
    </div>
</body>
</html>';


    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    $dompdf->stream('Layanan-OkLaundry.pdf');
} else {
    header("Location: ../../index.php?page=layanan&notFound=true");
    exit;
}
