<?php
include 'koneksi.php';

$id = $_GET['id'];

if (!empty($id)) {
    $query = "delete from knn where id_knn='$id'";
    mysql_query($query);
}
echo '<meta http-equiv=refresh content=0;url=http://localhost/KNN/index.php?f=aksiData>';
?>
