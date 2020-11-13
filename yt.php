<?php
header("Access-Control-Allow-Origin: *");
$q = $_GET['q'];
$ch = curl_init('http://youtube-scrape.herokuapp.com/api/search?q='.$q.'&page=1');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$upx = curl_exec($ch);
$data = json_decode($upx,true);
 echo $data['results'][0]['video']['id']."^".$data['results'][0]['video']['title']."^".$data['results'][0]['video']['thumbnail_src'];
?>
