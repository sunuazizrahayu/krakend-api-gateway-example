<?php
include 'php-jwt/JWT.php';

use \Firebase\JWT\JWT;


$username = $_POST['username'];
$password = $_POST['password'];

$key = 'sunu';

if ($username==$key && $password==$key) {
	$data = [
		"name" => "Sunu",
		"address" => "Yogyakarta",
		"github" => "sunuazizrahayu",
		"facebook" => "sunuazizrahayu"
	];

	//generate token
	$key = "secret";
	$payload = array(
		// "iss" => "http://example.org",
		// "aud" => "http://example.com",
		// "iat" => 1356999524,
		// "nbf" => 1357000000,
		"data" => $data,
		"exp" => time()+ 3000,
	);

	//bug if kid none
	// $jwt = JWT::encode($payload, $key, "HS256");
	
	//done
	$jwt = JWT::encode($payload, $key, "HS256", "sim2");

	echo json_encode([
		"token" => [
			"token" => $jwt,
			"type" => "Bearer",
			"exp" => $payload['exp']
		],
		"user" => $data
	]);
	die();
}


http_response_code(404);