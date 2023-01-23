<?php

$url = "https://api.quran.com/api/v4/quran/verses/uthmani_tajweed?chapter_number=111&verse_key=111:1";

$json = file_get_contents($url);
$json = json_decode($json);

$api = $json->verses;

foreach($api as $apiTaj) {
    $done = $apiTaj->text_uthmani_tajweed;

    echo($done);
    echo "</br>";
    $pisah = explode("<", $done);
    print_r($pisah);
    echo "</br>";
    echo "</br>";
    $encode = substr(json_encode($done), 1, -1);
    echo($encode);
    echo "</br>";
    
}

?>