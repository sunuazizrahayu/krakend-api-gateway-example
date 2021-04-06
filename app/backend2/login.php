<?php
include 'php-jwt/JWT.php';

use \Firebase\JWT\JWT;


$username = $_POST['username'];
$password = $_POST['password'];

$credential = 'sunu';
$jwt_key 	= 'secret';

if ($username == $credential && $password == $credential) {
	$now = time();
	$token_exp = $now+300; //expire in 5 minutes

	//user data / information
	$data = [
		'name' => 'Sunu',
		'address' => 'Yogyakarta',
		'accounts' => [
			'github' => 'sunuazizrahayu',
			'facebook' => 'sunuazizrahayu'
		]
	];

	$token_payload = [
		// "iss" => "http://example.org",
		// "aud" => "http://example.com",
		'data' => $data,
		'exp' => $token_exp,
		'nbf' => $now,
		'iat' => $now
	];


	//generate jwt token
	$jwt = JWT::encode($token_payload, $jwt_key, "HS256", "sim2");
	// $jwt = JWT::encode($token_payload, $jwt_key, "HS256");


	echo json_encode([
		'data' => $data,
		'token' => $jwt,
	]);
	die();
}

http_response_code(404);