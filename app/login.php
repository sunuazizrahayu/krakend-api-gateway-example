<?php
$username = $_POST['username'];
$password = $_POST['password'];

$key = 'sunu';

if ($username==$key && $password==$key) {
	echo json_encode([
		"name" => "Sunu",
		"address" => "Yogyakarta",
		"github" => "sunuazizrahayu",
		"facebook" => "sunuazizrahayu"
	]);
	die();
}


http_response_code(404);