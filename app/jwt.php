<?php
include 'php-jwt/JWT.php';

use \Firebase\JWT\JWT;


$hd = getallheaders()['Authorization'];
$arr = explode(' ', $hd);
$jwt = $arr[count($arr)-1];

$key = "secret";
try {
	$decoded = JWT::decode($jwt, $key, array('HS256'));
} catch (Exception $e) {
	http_response_code(401);
	echo "error: ".$e;
}


echo "<pre>";
print_r($decoded);