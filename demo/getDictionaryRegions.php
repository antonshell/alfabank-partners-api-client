<?php

require '_bootstrap.php';

$response = $client->getRegionsDictionary();

$data = $response->getBody()->getContents();
print_r(json_decode($data, true));