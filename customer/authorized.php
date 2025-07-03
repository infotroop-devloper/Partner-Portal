<?php

$client_id = "1000.NGN5QQ3WXJFVVWK4S0CKSD0DCHFE2Y";
$client_secret = "bf809439cca3dade99e94b3e2a56db49a4ff3aa532";
$redirect_uri = "https://partner.infotroop.co.in/authorized.php";
$code = $_GET['code'];

$url = "https://accounts.zoho.in/oauth/v2/token";
$data = [
    "code" => $code,
    "client_id" => $client_id,
    "client_secret" => $client_secret,
    "redirect_uri" => $redirect_uri,
    "grant_type" => "authorization_code"
];

$options = [
    "http" => [
        "header" => "Content-Type: application/x-www-form-urlencoded",
        "method" => "POST",
        "content" => http_build_query($data)
    ]
];

$context = stream_context_create($options);
$response = file_get_contents($url, false, $context);
$token_data = json_decode($response, true);
echo "<pre>";print_r($token_data);
// Store access_token and refresh_token in session or database
$_SESSION['zoho_access_token'] = $token_data['access_token'];

