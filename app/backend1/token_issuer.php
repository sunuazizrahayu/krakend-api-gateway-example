<?php
$username = $_POST['username'];
$password = $_POST['password'];

$credential = 'sunu';

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


	echo json_encode([
		'data' => $data,
		'token' => $token_payload,
	]);
	die();
}

http_response_code(404);