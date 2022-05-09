<?php 
require('config.php');

\Stripe\Stripe::setVerifySslCerts(false);

$token = $_POST['stripeToken'];
$amount = $_POST['amount'];

// $data=\Stripe\Transfer::create(array(
//     "amount" => $amount * 100,
//     "currency" => "php",
//    // "source" => $token,
//     "destination" => "cus_Lc4MdxEizf0deU"
// ));


$data=\Stripe\Charge::create(array(
    "amount" => $amount * 100,
    "currency" => "php",
    "source" => $token,
   // "destination" => "cus_Lc4MdxEizf0deU"
));
echo "<pre>";
print_r($data);
?>


