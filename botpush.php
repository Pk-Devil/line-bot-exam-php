<?php



require "vendor/autoload.php";

//$access_token = '3ALKAbKFoGuJyJnoDdn0HeyfbxLFtEXBKiC0lFeoNl/XbL4WhoCZzefp2n7UDuXaCWfErIDro07BnZNggJmXJChXTIlMPo8LRJ+n1LEgbRUaKehDkiCr5p5CakHrPX+gauOGX/R5bB2e5yi7xjnHDAdB04t89/1O/w1cDnyilFU=';
$access_token = 'YZXbTV/yR0NdTulxTD5sf+lpvGlEfseB9tIR5tny/+WXZ5g7huyJlJrrM842kT7oBDkx/Ef1d3bCXmEyIE92uwCZBZcKHFpAI5BML/6c22Vy+vTE7fw89oAdMt81Kn3g1n22trMpMnrr0m/6L06j/gdB04t89/1O/w1cDnyilFU=';
//$channelSecret = '75c03f392f6e53d662d6f5a8db9e421f';
$channelSecret = '65354fc90ab05e9092db948a5a87538c';
//$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';
$pushID = 'Ubc6fe13957285237e40e4a1561852d08';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







