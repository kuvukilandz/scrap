<?php
$surah = $_GET['surah'] - 1;
$surahr = $surah + 1;
$ch = curl_init('https://raw.githubusercontent.com/penggguna/QuranJSON/master/quran.json');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$upx = curl_exec($ch);
$data = json_decode($upx,true);
$surahx =  $data[$surah]['number_of_ayah']; // Menemukan Jumlah Ayat
$cht = curl_init('https://al-quran-8d642.firebaseio.com/surat/'.$surahr.'.json?print=pretty');
curl_setopt($cht, CURLOPT_RETURNTRANSFER, true);
$x = curl_exec($cht);
$wan = json_decode($x,true);
for($i=0;$i<=$surahx;$i++) {
    $qr = $wan[$i]['ar']."\n".$wan[$i]['id']."\n \n \n";
    echo $qr;
}
?>
