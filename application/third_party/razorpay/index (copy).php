<?php 

use Razorpay\Api\Api;
include 'vendor/autoload.php';

define('KEY','rzp_test_qGZqR8BkKj9t95');
define('SECRET','Ec8BykLnGWSpoEnAtRjd5zZn');

$api = new Api(KEY,SECRET);

$orderData = [
    'receipt'         => 3456,
    'amount'          => 2000 * 100, // 2000 rupees in paise
    'currency'        => 'INR',
    'payment_capture' => 1 // auto capture
];

$razorpayOrder = $api->order->create($orderData);

$razorpayOrderId = $razorpayOrder['id'];


?>

<html>
	<body>
		<!--  The entire list of Checkout fields is available at
 https://docs.razorpay.com/docs/checkout-form#checkout-fields -->

<form action="verify.php" method="POST">
  <script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="rzp_test_qGZqR8BkKj9t95"
    data-amount="100"
    data-currency="INR"
    data-name="Sangita"
    data-description="Rajozpay"
    data-prefill.name="sangita"
    data-prefill.email="sangitad448@gmail.com"
    data-prefill.contact="9999999999"
    data-notes.shopping_order_id="3456"
    data-order_id="<?php echo $razorpayOrderId; ?>" data-display_amount='100' data-display_currency='INR'>
  </script>
  <!-- Any extra fields to be submitted with the form but not sent to Razorpay -->
  <input type="hidden" name="shopping_order_id" value="3456">
</form>

	</body>
</html>