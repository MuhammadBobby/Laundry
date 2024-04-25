<?php
require 'connect.php';
session_start();
require "../vendor/autoload.php";

use \Dompdf\Dompdf;

$tanggal = $_POST['tanggal'];
$user = $_POST['user'];

$html = '
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Invoice</title>
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
        <h1>INVOICE</h1>
        <p>Invoice Number: <span class="highlight">INV-' . rand() . '</span></p>
        <p>Date: <span class="highlight">' . htmlspecialchars($tanggal) . '</span></p>
        <p>Client: <span class="highlight">' . htmlspecialchars($user) . '</span></p>

        <table>
            <thead>
                <tr>
                    <th>Layanan</th>
                    <th>Berat</th>
                    <th>Catatan</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>';

$query = "SELECT * FROM transaksi WHERE user = ? AND DATE(tanggal) = ? AND status = 'selesai'";
$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $user, $tanggal);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $html .= '
            <tr>
                <td>' . htmlspecialchars($row['name']) . '</td>
                <td>' . htmlspecialchars($row['quantity']) . '</td>
                <td>' . htmlspecialchars($row['catatan']) . '</td>
                <td>Rp ' . htmlspecialchars($row['total']) . '</td>
            </tr>';
    }

    $sum = "SELECT SUM(total) as totalHarga FROM transaksi WHERE user = ? AND DATE(tanggal) = ? AND status = 'selesai'";
    $stmt = $conn->prepare($sum);
    $stmt->bind_param("ss", $user, $tanggal);
    $stmt->execute();
    $result1 = $stmt->get_result();
    $row1 = $result1->fetch_assoc();

    $html .= '
            </tbody>
            <tfoot>
                <tr class="total-row">
                    <th colspan="3">Total</th>
                    <td>Rp ' . htmlspecialchars($row1['totalHarga']) . '</td>
                </tr>
            </tfoot>
        </table>
        <p class="footer">*Invoice dibuat secara otomatis dan tidak memerlukan tanda tangan</p>
    </div>
</body>
</html>';


    $dompdf = new Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    $dompdf->stream('Invoice.pdf');
} else {
    header("Location: keranjang.php?notFound=true");
    exit;
}
