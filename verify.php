<?php
$access_token = '0qp9Q66O8W1tKVR0I4D7yojI+8Oh6ZoXViSsQ/V9m+m0qg86NkRXnRBohaaaaqzGfCcOzek+AKbecKEYCs/S4zBY9sUDwhLuEsGsF1c5VRyM67RwBKsHI5mjS7IAztPvfhyYa/OG7gl/plFl8uoWBgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
