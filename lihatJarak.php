<?php

include 'koneksi.php';
$query = "select * from knn where kelas<>'' order by jarak";
$result = mysql_query($query);
echo '<div id=judul>Hasil Olahan Data</div>';
echo '<table border=1 id=tabelData>
    <tr>
        <th>No</th>
        <th>Data Ke-</th>
        <th>Kemampuan Membaca</th>
        <th>Kemampuan Menulis</th>
        <th>Wawancara Orang Tua</th>
        <th>Kelas</th>
        <th>Jarak</th>
    </tr>';

$no = 1;
$k = 5;
while ($data = mysql_fetch_array($result, MYSQL_ASSOC)) {
    if($k>0){
        echo "<tr>  
                <td>$no</td>
                <td>$data[id_knn]</td>
                <td>$data[baca]</td>
                <td>$data[tulis]</td>
                <td>$data[wawancara]</td>
                <td>$data[kelas]</td>
                <td>$data[jarak]</td>
            </tr>";
    }else{
    echo "<tr>  
                <td style='background: #fff'>$no</td>
                <td style='background: #fff'>$data[id_knn]</td>
                <td style='background: #fff'>$data[baca]</td>
                <td style='background: #fff'>$data[tulis]</td>
                <td style='background: #fff'>$data[wawancara]</td>
                <td style='background: #fff'>$data[kelas]</td>
                <td style='background: #fff'>$data[jarak]</td>
            </tr>";
    }
    $no++;
    $k--;
}
echo '</table>';
$query2 = "select * from knn where kelas<>'' order by jarak limit 5";
$result2 = mysql_query($query2);

$KlsA = 0;
$KlsB = 0;
$KlsC = 0;

while ($data2 = mysql_fetch_array($result2, MYSQL_ASSOC)){
    if($data2['kelas'] == "A"){
        $KlsA++;
    }else if($data2['kelas'] == "B"){
        $KlsB++;
    }else if($data2['kelas'] == "C"){
        $KlsC++;
    }
}
 $kelas;
if(max($KlsA, $KlsB, $KlsC) == $KlsA){
    $kelas = "A";
}else if(max($KlsA, $KlsB, $KlsC) == $KlsB){
    $kelas = "B";
}else if(max($KlsA, $KlsB, $KlsC) == $KlsC){
    $kelas = "C";
}
$query4 = "select * from knn where jarak=0";
$result4 = mysql_query($query4);
echo '<fieldset id=hasil>
        <legend><b>Hasil Keputusan</b></legend>';
echo '<b>Siswa dengan nilai:</b> <br />';
$data4 = mysql_fetch_array($result4);
    echo '<div id=kedalam>Kemampuan Membaca: '.$data4[0];
    echo '<br>Kemampuan Menulis: '.$data4[1];
    echo '<br>Wawancara Orang Tua: '.$data4[2].'</div>';




echo 'Masuk Ke Kelas: <b>'.$kelas."</b><br>";
$query3 = "update knn set kelas='$kelas' where kelas=''";
mysql_query($query3);
echo "<a href=?f=masukandata class='button biru'>Input Data</a></fieldset>";
?>
