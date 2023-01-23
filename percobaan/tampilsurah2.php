<?php
require_once ('connection.php');
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
    // for ($i = 1; $i <= 114; $i++) {
        $query = "SELECT * FROM ayat WHERE id = 1";
        $sql = mysqli_query($koneksi, $query);
        foreach ($sql as $row) {
            // echo ($row['unicode_ayat']); 
            echo "<br>";
            // $backslash = str_replace("\\", " ", $row['unicode_ayat']);
            // var_dump($backslash);
            $pisah = explode("\\", $row['unicode_ayat']);
            echo "<br>";
            echo "<br>";
            print_r($pisah);
            echo "<br>";
            echo "<br>";
            print_r($row['unicode_ayat']);
            echo "<br>";
            echo "<br>";
            echo "<p style='color:red;'>";
            print_r($row['unicode_ayat']);
            echo "</p>";
            echo "<br>";
            echo "<br>";
            echo "<p style='color:red;'>";
            print_r($row['unicode_ayat']);
            echo "</p>";
            echo "</>";
            echo "<br>";

        }
    // }
    ?>
</body>
</html>
