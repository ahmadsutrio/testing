<?php
require_once ('connection.php');
$koneksi = koneksi();

for($i=1; $i<= 6236; $i++) {
    $query = "SELECT * FROM ayat WHERE id = $i";
    $sql = mysqli_query($koneksi, $query);
    foreach($sql as $row){
        echo($row['text']) ;
        echo "<br>";
        echo "<br>";
        $json = json_encode($row['text'],1,-1);
        try{
            $backslash = str_replace("\\","\\\\",$json);
            $unicode = "UPDATE ayat SET unicode_ayat = '$backslash' WHERE id = $i";
            $sql = mysqli_query($koneksi, $unicode);
            echo "data berhasil di update";
        }catch(Exception $e){
            echo $e;
        }
        echo "<br>";
        echo "<br>";
    }
}
