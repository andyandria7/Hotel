<?php
  require_once('./vendor/autoload.php');
  require_once('./config/db.php');
  require_once('./lib/pdo_db.php');
  require_once('./models/Customer.php');
  require_once('./models/Transaction.php');

  
  \Stripe\Stripe::setApiKey('sk_test_51OvjeX2LAPtoIu5BXwvf2bd0C5U9vvo65TYBLVidK8ac1rNMTWP9wmNKdsGXr00GD1nPKQW9HrwCpuR6Iwn76JsX002ANfF0UZ');
  
  // Sanitize POST Array
  $cleaned_post = [];
  foreach ($_POST as $key => $value) {
    $cleaned_post[$key] = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
  }
  
  $roomPrice = $_POST['room_price'];
  $room_type = $_POST['room_type'];
 $first_name = $cleaned_post['first_name'];
 $last_name = $cleaned_post['last_name'];
 $email = $cleaned_post['email'];
 $token = $cleaned_post['stripeToken'];
 

// Create Customer In Stripe
$customer = \Stripe\Customer::create(array(
  "email" => $email,
  "source" => $token
));

// Charge Customer
$charge = \Stripe\Charge::create(array(
  "amount" => $roomPrice,
  "currency" => "mga",
  "description" => $room_type,
  "customer" => $customer->id
));

// Customer Data
$customerData = [
  'id' => $charge->customer,
  'first_name' => $first_name,
  'last_name' => $last_name,
  'email' => $email
];

// Instantiate Customer
$customer = new Customer();

// Add Customer To DB
$customer->addCustomer($customerData);


// Transaction Data
$transactionData = [
  'id' => $charge->id,
  'customer_id' => $charge->customer,
  'product' => $charge->description,
  'amount' => $charge->amount,
  'currency' => $charge->currency,
  'status' => $charge->status,
];

// Instantiate Transaction
$transaction = new Transaction();

// Add Transaction To DB
$transaction->addTransaction($transactionData);

// Redirect to success
header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);