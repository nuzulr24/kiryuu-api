<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => '45.76.148.33:8080/api/kiryuu/v6/summary',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'User-Agent: Dart/2.8 (dart:io)',
    'Content-Type: application/json',
    'Accept-Encoding: application/gzip',
    'Content-Length: 0'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;