<?php
require_once('connection.php');
$koneksi = koneksi();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    for ($i = 1; $i <= 114; $i++) {
        $query = "SELECT * FROM ayat WHERE id_surah = $i";
        $sql = mysqli_query($koneksi, $query);
        foreach ($sql as $row) {
            echo ($row['text']);
            echo ($row['nomor']);
            echo "<br>";
            echo "<p style='color:blueviolet'>";
            // echo ($row['unicode_ayat']);
            $json = json_decode($row['unicode_ayat']);
            echo $json;
            echo "</p>";
            echo "<br>";
        }
    }
    ?>
</body>

</html>