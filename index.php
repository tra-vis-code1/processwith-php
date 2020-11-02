<?php
require 'vendor/autoload.php';

use ProcessWith\ProcessWith;

'sk_test_xxxx'; // your gateway secret ( Paystack | Ravepay )

// $processwith = new ProcessWith('paystack');
// $processwith->setSecretKey($secret_key);

// $transaction = $processwith->transaction();

// $transaction->initialize([
//     'amount'    => (float) 100,
//     'email'     => 'afuwapesunday12@gmail.com'
// ]); 

// if( $transaction->status ) {
//     $transaction->checkout(); // redirect to the gateway checkout page
// }
// else {
//     // beautiful error message display
//     die( $transaction->statusMessage );
// }


$processwith = new ProcessWith('flutterwave');
$processwith->setSecretKey($secret_key);

$transaction = $processwith->transaction();

$transaction->initialize([
    'amount'    => (float) 1000,
    'customer'     => [ 'email' => 'afuwapesunday12@gmail.com', 'name' => 'sunny' ],
    'meta'      => [ 'consumer_id' => 23, 'consumer_mac' => '92a3-912ba-1192a' ],
]); 

if( $transaction->status ) {
    $transaction->checkout(); // redirect to the gateway checkout page
}
else {
    // beautiful error message display
    die( $transaction->statusMessage );
}