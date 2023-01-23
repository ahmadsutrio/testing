<?php
require_once('connection.php');
$koneksi = koneksi();

$url_json = "../juz1.json";
$json = file_get_contents($url_json);
$json = json_decode($json, true);

$ayat = $json['ayahs'];
$a = 0;
for ($i = 0; $i <= 6235; $i++) {
    // var_dump($ayat[$i]['text']);
    // var_dump($ayat[$i]['number']);
    echo "<br>";
    $json = json_encode($ayat[$i]['text'], 1, -1);
    // var_dump($json);
    echo "<br>";
    echo "<br>";
    echo $a++;
    echo "<br>";
    try {
        $backslash = str_replace("\\", "\\\\", $json);
        $unicode = "UPDATE ayat SET unicode_tajwid = '$backslash' WHERE id = $a";
        $sql = mysqli_query($koneksi, $unicode);
        // echo "data berhasil di update";
    } catch (Exception $e) {
        echo $e;
    }
}
