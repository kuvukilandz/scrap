<?php
$ua = urlencode($_GET['ua']);
$exec = 'http://api.userstack.com/detect?access_key=61a25c85e1d92c339a513bedf298918b&ua='.$ua;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$exec);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,3);
curl_setopt($ch,CURLOPT_TIMEOUT, 20);
$res = curl_exec($ch);
$data = json_decode($res, true);
$nama = $data['name'];
$os = $data['os']['name'];
$browser = $data['browser']['name'];
$hasil = array(
  'device' => $nama,
  'os' => $os,
  'browser' => $browser
  );
$result = json_encode($hasil, JSON_PRETTY_PRINT);
print_r($result);
?>
