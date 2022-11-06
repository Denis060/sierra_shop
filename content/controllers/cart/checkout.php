
<?php

// $country = $_POST["country"];
                                        
// global $,$,$,$,$province,$country,$paymentMethod;
require('admin/views/shared/header.php');
if(isset($_POST["payment_details"])){
	$payment_id = substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"),0, 10);
	$payment;

	$order = array(
		'id' => 0,
		
		'customer' => escape($_POST["name"]),
		// 'province' => escape($_POST["province"]),
		'phone' => escape($_POST["phone"]),
		'phone1' => escape($_POST["phone1"]),
		'email' => escape($_POST["email"]),
		
		
		'address' => escape($_POST["address"]),
		// 'address1' => escape($_POST["address1"]),
		'city' => escape($_POST["city"]),
		'district' => escape($_POST["district"]),

		'cart_total' => $_POST["cart_total"],
		'payment_method' => $_POST["paymentMethod"],
		'payment_id' => $payment_id,
		'createtime' => gmdate('Y-m-d H:i:s', time() + 7 * 3600),
		// 'message' => escape($_POST['message']),
		'user_id' => intval($_POST["user_id"])
	);
	$order_id = save('orders', $order);

	$payMethod = $_POST["paymentMethod"];
	if ($payMethod=='orange_money' ||$payMethod=='afri_money') {
		# code...
		$payment = array(
			'id' => 0,
			'payment_id'=>$payment_id,
			'transaction_id'=>$_POST["transaction_id"],
			'phone'=>$_POST["phone_name"],
			'date'=>$_POST["date"],
			'time'=>$_POST["time"]
		);	
	}

	elseif ($payMethod=='bank') {
		# code...
		$payment = array(
			'id' => 0,
			'payment_id'=>$payment_id,
			'transaction_id'=>$_POST["transaction_id"],
			'name_of_depositor'=>$_POST["phone_name"],
			'date'=>$_POST["date"],
			'time'=>$_POST["time"]
		);	
	}
	elseif ($payMethod=='master_card' ||$payMethod=='visa_card') {
		$payment = array(
			'id' => 0,
			'payment_id'=>$payment_id,
			'name_of_holder'=>$_POST["name_of_holder"],
			'card_number'=>$_POST["card_number"],
			'expire'=>$_POST["month"]."/".$_POST["year"],
			'cvc'=>$_POST["cvc"]
		);
	}

	elseif ($payMethod=='paypal') {
		$payment = array(
			'id' => 0,
			'payment_id'=>$payment_id,
			'name_of_holder'=>$_POST["name_of_holder"],
			'card_number'=>$_POST["card_number"],
			'expire'=>$_POST["month"]."/".$_POST["year"],
			'cvc'=>$_POST["cvc"]
		);
	}

	switch ($payMethod) {
		case 'orange_money':save('payment_orange_money', $payment);break;
		case 'afri_money':save('payment_afri_money', $payment);break;
		case 'bank':save('payment_bank', $payment);break;
		case 'master_card':save('payment_master_card', $payment);break;
		case 'visa_card':save('payment_visa_card', $payment);break;
		case 'paypal':save('payment_paypal', $payment);break;
		default:
			break;
	}
	

	$cart = cart_list();

	foreach ($cart as $product) {
		$order_detail = array(
			'id' => 0,
			'order_id' => $order_id,
			'product_id' => $product['id'],
			'quantity' => $product['number'],
			'price' => $product['price']
		);
		save('order_detail', $order_detail);
	}
	cart_destroy(); 
	global $user_nav;
	if (isset($user_nav)) detroy_cart_user_db();
	$title = 'Successful order - '.SITE_NAME;
	header("refresh:30;url=" . PATH_URL . "home");
	echo '<div style="text-align: center;padding: 20px 10px;">Successfully ordered</div><div style="text-align: center;padding: 20px 10px;">Thank you Ordered from Sierra Shop. The shop will call from the phone number you provided to Confirm (Confirm) back to you as soon as possible to confirm the order.<br>
	The browser will automatically return to the homepage after 30 seconds, or you can click <a href="' .PATH_URL . 'home">here</a>.</div>';
} 
// else {
// 	header('location:.');
// }
else{
	header('location:'.PATH_URL."cart/order/checkout");
}
?>