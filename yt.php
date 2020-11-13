<?php
header("Access-Control-Allow-Origin: *");
$url = $_GET['url'];
$itu = str_replace('https://www.','',$url);
$trim = explode("/", $itu);
$potong = 'https://www.'.$trim[0].'/'.$trim[1].'/'.$trim[2].'/?__a=1';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'https://www.w3toys.com/get.php?url=http://w3toys.xyz/get.php?url='.$potong.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$data = curl_exec ($ch);

curl_close ($ch);

$json = json_decode($data, true);
$url = $json['graphql']['shortcode_media']['video_url'];
$caption = $json['graphql']['shortcode_media']['edge_media_to_caption']['edges'][0]['node']['text'];


$hasil = array(
    'url' => $url,
    'caption' => $caption
    );
    header('Content-Type: application/json');
 print_r(json_encode($hasil,JSON_PRETTY_PRINT));
?>
