<?php

require '_bootstrap.php';

$json = [
    'organizationInfo' => [
        'inn' => '9685952780'
    ],
    'requestInfo' => [
        "regionCode" => "a84b2ef4-db03-474b-b552-6229e801ae9b"
    ],
    'productInfo' => [
        [
            'productCode' => 'LP_RKO'
        ]
    ]
];

try{
    $response = $client->check($json);
    print_r($response->getStatusCode());
    print_r($response->getBody()->getContents());
}
catch (Throwable $e){
    print_r($e->getMessage());
}