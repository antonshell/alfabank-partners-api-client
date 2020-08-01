<?php

require '_bootstrap.php';

$response = $client->getLeads();

$data = $response->getBody()->getContents();
print_r(json_decode($data, true));