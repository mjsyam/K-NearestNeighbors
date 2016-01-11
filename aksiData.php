<?php
include 'koneksi.php';
$query = "select * from knn";
$result = mysql_query($query);
echo '<div id=judul>Data Siswa Sekolah Dasar Indonesia Sejahtera I</div>';
echo '<table border=1 id=tabelData>
    <tr>
        <th>Data Ke-</th>
        <th>Kemampuan Membaca</th>
        <th>Kemampuan Menulis</th>
        <th>Wawancara Orang Tua</th>
        <th>Kelas</td>
        <th>Aksi</td>
    </tr>';

$no = 1;
while ($data = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "<tr>  
                <td>$no</td>
                <td>$data[baca]</td>
                <td>$data[tulis]</td>
                <td>$data[wawancara]</td>
                <td>$data[kelas]</td>
                <td><a href='?f=hapusData&id=$data[id_knn]'>Hapus</a> || <a href='?f=editData&id=$data[id_knn]'>Edit</a></td>
            </tr>";
    $no++;
}
echo '</table>';
?>