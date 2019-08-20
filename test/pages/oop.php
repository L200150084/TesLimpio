<?php

$url = 'http://recruitment.api.makekimia.network/api/sales/insert';
$ch = curl_init($url);
$jsonData = array(
    'item_id' => 'Testing',
    'qty' => 1,
    'price' => 9000,
    'total' => 9000
);
$jsonDataEncoded = json_encode($jsonData);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 
$result = curl_exec($ch);