<?php
$url = "https://test.payu.in/_payment";

$req = req_init($url);
req_setopt($req, CURLOPT_URL, $url);
req_setopt($req, CURLOPT_POST, true); req_setopt($req, CURLOPT_RETURNTRANSFER, true);

$headers = array( "Content-Type: application/x-www-form-urlencoded", ); req_setopt($curl, CURLOPT_HTTPHEADER, $headers);
$data = "key=JP***g&txnid=txnid57257197984&amount=10.00&firstname=PayU User&email=test@gmail.com&phone=9876543210&productinfo=iPhone&pg=&bankcode=&surl=https://test-payment-middleware.payu.in/simulatorResponse&furl=https://test-payment-middleware.payu.in/simulatorResponse&ccnum=&ccexpmon=&ccexpyr=&ccvv=&ccname=&txn_s2s_flow=&hash=bda6c0e6f47e340c91064afa968501a05d11ba7d0d30b2f6519b80e760e2d07534a00f1e3176571e9c0ad59e82e22970eec2b4935b51e3a4b8a1d38e8b2825f3"

req_setopt($curl, CURLOPT_POSTFIELDS, $data);
$resp = req_exec($req);
req_close($req);
var_dump($resp);
?>