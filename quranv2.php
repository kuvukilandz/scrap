<?php
$surah = $_GET['surah'] - 1;
$surahr = $surah + 1;
$ch = curl_init('https://raw.githubusercontent.com/penggguna/QuranJSON/master/quran.json');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$upx = curl_exec($ch);
$data = json_decode($upx,true);
print_r($data);
?>
