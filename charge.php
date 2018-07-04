<?php

require_once('vendor/autoload.php');

//Api Key
\Stripe\Stripe::setApiKey('api_key');


$POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

$first_name = $POST['first_name'];
$last_name = $POST['last_name'];
$email = $POST['email'];
$token = $POST['stripeToken'];


// Create Customer In Stripe 

$customer = \Stripe\Customer::create(array(
	'email' => 'email',
	'source' => 'token',
));

//Charge Customer

$charge = \Stripe\Charge::create(array(
	"amount" => 200,
	"currency" => "usd",
	"description" => "Develop Website In Laravel",
	"customer" => $customer->id

));

//Redirect To Success

header('Location : success.php?tid=' .$charge->id. '&product=' .$charge->description);


