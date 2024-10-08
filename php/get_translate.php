<?php
require_once('vendor/autoload.php');

$client = new \GuzzleHttp\Client();

$response = $client->request('POST', 'https://api-b2b.backenster.com/b1/api/v3/translate', [
  'body' => '{"from":"en_GB","to":"de_DE","data":"London is the capital and largest city of England and of the United Kingdom.","platform":"api"}',
  'headers' => [
    'Authorization' => 'Your authorization API key',
    'accept' => 'application/json',
    'content-type' => 'application/json',
  ],
]);

echo $response->getBody();
