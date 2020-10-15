<?php
$q = urlencode($_GET['q']);
$ch = curl_init('http://youtube-scrape.herokuapp.com/api/search?q='.$q.'&page=1');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$upx = curl_exec($ch);
$data = json_decode($upx,true);
 $url = $data['results'][0]['video']['url'];
$cht = curl_init('http://scrap.terhambar.com/yt?link='.$url.'');
curl_setopt($cht, CURLOPT_RETURNTRANSFER, true);
$up = curl_exec($cht);
$hasil = json_decode($up,true);
$menit = $data['results'][0]['video']['duration'];
$filter = str_replace(":","",$menit);
 if($filter >= 5){
   $waktu = "1:".$menit;
 }else{
   $waktu = $menit;
 }
 echo $hasil['title']."^".$hasil['linkVideo']."^".$waktu;
?>
