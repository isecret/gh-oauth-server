<?php
require '../run.php';

use GuzzleHttp\Client;

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Method: *');
header('Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization');
header('Content-Type: application/json');

$http = new Client();

$response = $http->request('POST', 'https://github.com/login/oauth/access_token', [
    'headers' => [
        'Accept' => 'application/json',
        'User-Agent' => 'gh-oauth-server',
    ],
    'form_params' => post()
]);

e($response->getBody()->getContents());