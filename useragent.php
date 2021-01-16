<?php
$ua = urlencode($_GET['ua']);
$exec = 'http://api.userstack.com/detect?access_key=61a25c85e1d92c339a513bedf298918b&ua='.$ua;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$exec);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,3);
curl_setopt($ch,CURLOPT_TIMEOUT, 20);
$response = curl_exec($ch);
print_r($response);
?>
