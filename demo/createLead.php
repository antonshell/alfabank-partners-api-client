<?php

require '_bootstrap.php';

$json = [
    "organizationInfo" => [
        "organizationName" => "ООО Тестовая компания",
        "inn" => "9685952780",
        "ogrn" => "7037770735259",
        "kpp" => "780301031"
    ],
    "contactInfo" => [
        [
            "fullName" => "Иванов Иван Иванович",
            "phoneNumber" => "79000000111",
            "contactEmail" => "mail@example.com",
            "extraPhoneNumbers" => [
                "79000000222",
                "79000000333"
            ]
        ]
    ],
    "requestInfo" => [
        "advCode" => "advcode_1",
        "comment" => "Тестовая заявка. Не звонить!",
        "cityCode" => "7dfa745e-aa19-4688-b121-b655c11e482f"
    ],
    "productInfo" => [
        [
            "productCode" => "LP_RKO"
        ],
        [
            "productCode" => "LP_ACQ_TR"
        ],
        [
            "productCode" => " LP_AKASSA"
        ]
    ],
    "reserveAccount" => [
        "branchId" => "0126",
        "address" => "г. Москва, ул. Маломосковская, д. 16 стр. 9 пом. 14",
        "email" => "mail@example.com"
    ]
];
$response = $client->createLead($json);

$data = $response->getBody()->getContents();
print_r(json_decode($data, true));