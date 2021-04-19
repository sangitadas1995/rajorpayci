<html>
	<body>
		<!--  The entire list of Checkout fields is available at
 https://docs.razorpay.com/docs/checkout-form#checkout-fields -->

<form action="<?php echo base_url('welcome/pay'); ?>" method="POST">
  <script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="rzp_test_fGi3R1XjOBVlSx"
    data-amount="100.00"
    data-currency="INR"
    data-name="Sangita"
    data-description="Rajozpay"
    data-prefill.name="sangita"
    data-prefill.email="sangitad448@gmail.com"
    data-prefill.contact="9999999999"
    data-notes.shopping_order_id="3456"
    data-order_id="<?php echo $razorpayId; ?>" data-display_amount='100.00' data-display_currency='INR'>
  </script>
  <!-- Any extra fields to be submitted with the form but not sent to Razorpay -->
  <input type="hidden" name="shopping_order_id" value="3456">
</form>

	</body>
</html>