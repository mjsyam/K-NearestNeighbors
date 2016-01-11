<?php

include 'koneksi.php';
$query = "select * from knn";
$query2 = "select * from knn ORDER BY id_knn DESC LIMIT 1";
$result = mysql_query($query);
$result2 = mysql_query($query2);
$data2 = mysql_fetch_array($result2, MYSQL_ASSOC);
$jarak = array();
$no = 0;
while ($data = mysql_fetch_array($result, MYSQL_ASSOC)) {
    $jarak[$no] = sqrt(pow($data['baca'] - $data2['baca'], 2) + pow($data['tulis'] - $data2['tulis'], 2) + pow($data['wawancara'] - $data2['wawancara'], 2));
    $query = "update knn set jarak=$jarak[$no] where id_knn=$data[id_knn]";
    mysql_query($query);
    $no++;
}
echo '<meta http-equiv=refresh content=0;url=http://localhost/KNN/index.php?f=lihatJarak>';
?>
