<?php

include_once('Stripe/init.php');
// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
Stripe\Stripe::setApiKey("sk_test_51HHql6BIzLcygYF0rwkjQUARjY0uLu5J6yxCFErLSXEtYbO56nOzedf0NKWjA4mACmmCz7M1KwQihN7gdrX1a8pN00p1r2bCG3");

// Token is created using Checkout or Elements!
// Get the payment token ID submitted by the form:
$token = $_POST['stripeToken'];

$charge = \Stripe\Charge::create([
    'amount' => 100, //1EURO
    'currency' => 'eur',
    'description' => 'Test charge',
    'source' => $token,
]);
var_dump($charge);

