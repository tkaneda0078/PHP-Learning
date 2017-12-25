<?php

$url = "https://wordpress.org/wp-json/";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SAFE_UPLOAD, false);
$responce = json_decode(curl_exec($ch), true);
curl_close($ch);
