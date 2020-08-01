<?php

use GuzzleHttp\Exception\ClientException;

require '_bootstrap.php';

$json = [
    'organizationInfo' => [
        'inn' => '1685952780'
    ],
    'requestInfo' => [
        'cityCode' => '7dfa745e-aa19-4688-b121-b655c11e482f'
    ],
    'productInfo' => [
        [
            'productCode' => 'LP_RKO'
        ]
    ]
];

$response = $client->check($json);

try{
    $response = $client->check($json);
    print_r($response->getStatusCode());
    print_r($response->getBody()->getContents());
}
catch (Throwable $e){
    print_r($e->getMessage());
}