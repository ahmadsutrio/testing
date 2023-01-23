<?php

$url = "https://raw.githubusercontent.com/semarketir/quranjson/master/source/tajweed/surah_1.json";

$json = file_get_contents($url);
$json = json_decode($json);

$api = $json->verse;
var_dump($api);

foreach($api as $apiTaj) {
    $done = $apiTaj->verse_1;

    echo($done);
    echo "</br>";
    echo "</br>";
    // $pisah = explode("", $done);
	// print_r($done);
    echo "</br>";
    echo "</br>";
	// for($i = 0; $i < count($pisah); $i++) {
	// 	print_r($pisah[$i]);
	// }
	// if()
    echo "</br>";
    echo "</br>";
    $encode = substr(json_encode($done), 1, -1);
    echo($encode);
    echo "</br>";
    
}

?>