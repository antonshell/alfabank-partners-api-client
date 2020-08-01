<?php

require '_bootstrap.php';

$leadId = '';
$leadId = '06109711-40d0-4577-9458-dba077c790b3';
$response = $client->getLeadById($leadId);

$data = $response->getBody()->getContents();
print_r(json_decode($data, true));