<?php 


use Razorpay\Api\Api;
include 'vendor/autoload.php';

define('KEY','rzp_test_qGZqR8BkKj9t95');
define('SECRET','Ec8BykLnGWSpoEnAtRjd5zZn');

$api = new Api(KEY,SECRET);

/**
 * To create an order
 */

$order = $api->order->create(array('receipt' => '122',  'amount' => 140,  'currency' => 'INR'));
echo "<pre>";
print_r($order);
echo "</pre>";

$order_id = $order->id;
echo "<br> order_id - ".$order_id;

/**
 * Fetch order by it's id
 */

$fetch_order = $api->order->fetch($order_id);
echo "<br> Order details <pre>";
print_r($fetch_order);
echo "</pre>";

/**
 * Make Payment
 */

$payment = $api->payment->fetch($payment_id)->capture(array('amount'=>$amount, 'currency'=>$currency));


?>