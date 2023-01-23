<?php

$url = "https://api.alquran.cloud/v1/ayah/1:1/quran-tajweed";

$json = file_get_contents($url);
$json = json_decode($json);

$api = $json->data->text;
var_dump($api);

// foreach($api as $apiTaj) {
//     $done = $apiTaj;

//     print_r($done);
    // echo "</br>";
    // $pisah = explode("<", $done);
    // print_r($pisah);
    // echo "</br>";
    // echo "</br>";
    // $encode = substr(json_encode($pisah), 1, -1);
    // echo($encode);
    // echo "</br>";
    
// }

?>