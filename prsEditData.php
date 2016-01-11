<?php

include 'koneksi.php';
$id = $_POST['id'];
$baca = $_POST['baca'];
$tulis = $_POST['tulis'];
$wawancara = $_POST['wawancara'];

$query = "update knn set baca=$baca, tulis=$tulis,wawancara=$wawancara where id_knn=$id";
mysql_query($query);
echo '<meta http-equiv=refresh content=0;url=http://localhost/KNN/index.php?f=aksiData>';

?>
=
