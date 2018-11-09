<?php

$api = "//api.darksky.net/";
$endpoint = "forecast";
$secret = 'cdb91f47eb8e666bf181e4efaedbc886';
$location = "37.8267,-122.4233";


$curl = curl_init();

curl_setopt ($curl, CURLOPT_URL, $api + $endpoint + '/' + $secret + '/' + $location);
//curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec ($curl);
echo json_encode($result);

//$result = json_decode($result, true);


?>