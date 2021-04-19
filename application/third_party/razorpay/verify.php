<?php 

use Razorpay\Api\Api;
include 'vendor/autoload.php';

define('KEY','rzp_test_qGZqR8BkKj9t95');
define('SECRET','Ec8BykLnGWSpoEnAtRjd5zZn');

$api = new Api(KEY,SECRET);

/**
 * To create an order
 */

// $order = $api->order->create(array('receipt' => '122',  'amount' => 140,  'currency' => 'INR'));
echo "<pre>"; print_r($_POST);die;
?>