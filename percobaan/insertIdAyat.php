<?php
require_once 'connection.php';
$koneksi = koneksi();
$a = 0;
for($i=0; $i<= 6235; $i++) {
    echo $a++;
    // foreach($query as $row) {
        try{
            $sql = "UPDATE audio SET id_ayat = $a WHERE id_audio = $a";
            $query = mysqli_query($koneksi, $sql);
            $sql = mysqli_query($koneksi, $query);
            echo $i;
        }catch(Exception $e){
            echo $e;
        }
    // }
}