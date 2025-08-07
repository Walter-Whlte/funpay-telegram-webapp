<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

$goldenKey = 'j2n31huvea8ofzvo77oczqsx7fne0ebf';
$url = 'https://funpay.com'.$_GET['endpoint'];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'golden-key: '.$goldenKey,
    'User-Agent: Mozilla/5.0'
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

echo $response;
?>