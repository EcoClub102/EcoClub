<?php



session_start();
$am = $_GET['am'];
$user= $_GET['user'];

error_reporting(0);
require_once('checksum.php');     //checksum

$token = '4b6bec-eb75f5-82f479-183db7-2d57c2'; // Your Token, (Url:http://example.com/Settings).
$secret = 'KFL9YVqxsG'; // Your Secret Key, (Url:http://example.com/Settings).
$RECHPAY_ENVIRONMENT = 'PROD'; // PROD, TEST  

$checkSum = "";
$upiuid = "";
$paramList = array();

$gateway_type = "Robotics";
$cust_Mobile = $user;          //cust mobile 
$cust_Email = 'test@gmail.com';     //cust email
$orderId = uniqid().time();  //orderid
$txnAmount = $am;                     //amount
$txnNote = $user;                  //special note
$callback_url = "https://quick-win.in/trova/src/api/txnResult.php";  //callback 

if ($gateway_type == "Robotics") {
    $RECHPAY_TXN_URL = 'https://subdomain9.heroclub.online/order/paytm';

    $upiuid = 'paytmqri327j6881a@paytm'; // Its Paytm Business UPI Unique ID.

    $paramList["cust_Mobile"] = $cust_Mobile;
    $paramList["cust_Email"] = $cust_Email;
}

// Create an array having all required parameters for creating checksum.
$paramList["upiuid"] = $upiuid;
$paramList["token"] = $token;
$paramList["orderId"] = $orderId;
$paramList["txnAmount"] = $txnAmount;
$paramList["txnNote"] = $txnNote;
$paramList["callback_url"] = $callback_url;

$checkSum = RechPayChecksum::generateSignature($paramList, $secret);
?>
<html>
<head>
<title>Gateway Check Out Page</title>
</head>
<body>
	<center><h1>Please do not refresh this page...</h1></center>
		<form method="post" action="<?php echo $RECHPAY_TXN_URL ?>" name="f1">
		<table border="1">
			<tbody>
			<?php
			foreach ($paramList as $name => $value) {
				echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
			}
			?>
			<input type="hidden" name="checksum" value="<?php echo $checkSum ?>">
			</tbody>
		</table>
		<script type="text/javascript">
			document.f1.submit();
		</script>
	</form>
</body>
</html>
