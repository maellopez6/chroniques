<?php

$clientId = "TON_CLIENT_ID";
$clientSecret = "TON_CLIENT_SECRET";
$channelLogin = "quentinjarguel";

// 1️⃣ Récupérer access token
$token_url = "https://id.twitch.tv/oauth2/token";
$params = [
    "client_id" => $clientId,
    "client_secret" => $clientSecret,
    "grant_type" => "client_credentials"
];

$ch = curl_init($token_url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = json_decode(curl_exec($ch), true);
curl_close($ch);

$accessToken = $response["access_token"];

// 2️⃣ Récupérer infos stream
$api_url = "https://api.twitch.tv/helix/streams?user_login=$channelLogin";

$headers = [
    "Client-ID: $clientId",
    "Authorization: Bearer $accessToken"
];

$ch = curl_init($api_url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = json_decode(curl_exec($ch), true);
curl_close($ch);

header("Content-Type: application/json");
echo json_encode($result);
