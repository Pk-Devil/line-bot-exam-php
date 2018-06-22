<?php


$access_token = 'YZXbTV/yR0NdTulxTD5sf+lpvGlEfseB9tIR5tny/+WXZ5g7huyJlJrrM842kT7oBDkx/Ef1d3bCXmEyIE92uwCZBZcKHFpAI5BML/6c22Vy+vTE7fw89oAdMt81Kn3g1n22trMpMnrr0m/6L06j/gdB04t89/1O/w1cDnyilFU=';

$userId = 'Ubc6fe13957285237e40e4a1561852d08';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

