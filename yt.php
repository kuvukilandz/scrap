<?php
$q = $_GET['q'];
$ch = curl_init('http://youtube-scrape.herokuapp.com/api/search?q=Alan%20Walker%20Force&page=1');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$upx = curl_exec($ch);
$data = json_decode($upx,true);
print_r($upx);
echo "<br>";
print_r($data);
 echo $upx['results']['video'][0]['title']."|".$upx['results']['video'][0]['url'];
?>
