
<?php
// send whatsapp : TWILIO
// library : composer require twilio/sdk

// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require_once '../vendor/autoload.php';

use Twilio\Rest\Client;

$sid    = "AC67b096c5cd0ac9fb60408a3cfccb0d75";
$token  = "2bcd40e980b9e8b63425f1795a700a45";
$twilio = new Client($sid, $token);
// menangkap data
$data = json_decode(file_get_contents('php://input'), true);

$user = $data['user'];
$alamat = $data['alamat'];
$kontak = $data['kontak'];
$orderId = $data['orderId'];

$message = $twilio->messages
    ->create(
        "whatsapp:+6282277448525", // to
        array(
            "from" => "whatsapp:+14155238886",
            "body" => 'Customer : ' . $user . '
Address : ' . $alamat . '
Contact : ' . $kontak . '

🙌 Ada pesanan masuk di dalam order kita, segera tangani. 
Lihat detail pemesanan di Database atau melalui link :
https://dashboard.sandbox.midtrans.com/beta/transactions

Order ID : ' . $orderId . '

segera di proses !!! 🚀🔥
'
        )
    );

// print($message->sid);
echo json_encode(['success' => true, 'message' => 'Pesan WhatsApp berhasil dikirim.']);
