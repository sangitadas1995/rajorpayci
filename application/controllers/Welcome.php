<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// $this->load->view('welcome_message');
		$this->load->view('razorpay');
	}

	public function checkout($product_id = null) {
		include APPPATH.'third_party/razorpay/index.php';

		// ei khne query chaliye total amount tulte hbe
		$orderData = [
		    'receipt'         => 3456,//shoping order id
		    'amount'          => 202.50 * 100, // 2000 rupees in paise
		    'currency'        => 'INR',
		    'payment_capture' => 1 // auto capture
		];

		// this will create a razorpay order id
		$razorpayOrder = $api->order->create($orderData);
		$razorpayOrderId = $razorpayOrder['id'];

		// fetch user details also
		$data['razorpayId'] = $razorpayOrderId;
		$this->load->view('checkout',$data);
	}

	public function pay() {
		echo "<pre>";
		print_r ($_POST);
		echo "</pre>";
	}


}
