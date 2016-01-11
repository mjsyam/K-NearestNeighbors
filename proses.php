<?php

include 'koneksi.php';
$baca = $_POST['baca'];
$tulis = $_POST['tulis'];
$wawancara = $_POST['wawancara'];

$query = "insert into knn (baca,tulis,wawancara) values ($baca,$tulis,$wawancara)";
mysql_query($query);
echo '<meta http-equiv=refresh content=0;url=http://localhost/KNN/index.php?f=prosesHitungJarak>';

?>