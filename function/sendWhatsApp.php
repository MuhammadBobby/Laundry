
<?php
// send whatsapp : TWILIO
// library : composer require twilio/sdk

// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
include '../config.php';
require_once '../vendor/autoload.php';

use Twilio\Rest\Client;

$sid    = TWILIO_API_KEY;
$token  = TWILIO_TOKEN;
$twilio = new Client($sid, $token);
// menangkap data
$data = json_decode(file_get_contents('php://input'), true);

$user = $data['user'];
$alamat = $data['alamat'];
$kontak = $data['kontak'];
$orderId = $data['orderId'];

$message = $twilio->messages
    ->create(
        TWILIO_TO, // to
        array(
            "from" => TWILIO_FROM,
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
