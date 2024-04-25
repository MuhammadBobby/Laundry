<?php
require_once __DIR__ . '/../vendor/autoload.php';
require 'connect.php';

/*Install Midtrans PHP Library (https://github.com/Midtrans/midtrans-php)
composer require midtrans/midtrans-php
                              
Alternatively, if you are not using **Composer**, you can download midtrans-php library 
(https://github.com/Midtrans/midtrans-php/archive/master.zip), and then require 
the file manually.   

require_once dirname(__FILE__) . '/pathofproject/Midtrans.php'; */

require_once dirname(__FILE__) . '/payment.php';

//SAMPLE REQUEST START HERE

// Set your Merchant Server Key
\Midtrans\Config::$serverKey = 'SB-Mid-server-kKpI7zbYhvt83lR-CC3LpNiR';
// Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
\Midtrans\Config::$isProduction = false;
// Set sanitization on (default)
\Midtrans\Config::$isSanitized = true;
// Set 3DS transaction for credit card to true
\Midtrans\Config::$is3ds = true;

$orderId = rand();

$params = array(
    'transaction_details' => array(
        'order_id' => $orderId,
        'gross_amount' => $_POST['total'],
    ),
    'item_details' => json_decode($_POST['layanan'], true),
    'customer_details' => array(
        'first_name' => $_POST['nama'],
        'email' => $_POST['user'] . '@gmail.com',
        'phone' => $_POST['kontak'],
        'address' => $_POST['alamat'],
    ),
);


// mengubah transaksi yang bersangkutan menjadi selesai
// $items = json_decode($_POST['layanan'], true);
// foreach ($items as $item) {
//     $update = $conn->query("UPDATE transaksi SET status = 'selesai' WHERE user = '$_POST[user]'");
// }


$snapToken = \Midtrans\Snap::getSnapToken($params);
$response = [
    'snapToken' => $snapToken,
    'orderId' => $orderId
];
echo json_encode($response);
