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
    </tr>';

$no = 1;
while ($data = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "<tr>  
                <td>$no</td>
                <td>$data[baca]</td>
                <td>$data[tulis]</td>
                <td>$data[wawancara]</td>
                <td>$data[kelas]</td>               
            </tr>";
    $no++;
}
echo '</table>';
?>

<fieldset>
    <legend><b>Input Data Siswa</b></legend>
    <form action="proses.php" method="post" onsubmit="return validasi(this)">
        <table>
            <tr>
                <td>Kemampuan Membaca</td>
                <td>:</td>
                <td><input type="text" name="baca" />  (*Berisi Bilangan)</td>
            </tr>
            <tr>
                <td>Kemampuan Menulis</td>
                <td>:</td>
                <td><input type="text" name="tulis" />  (*Berisi Bilangan)</td>
            </tr>
            <tr>
                <td>Wawancara Orang Tua</td>
                <td>:</td>
                <td><input type="text" name="wawancara" />  (*Berisi Bilangan)</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Tambah" /><input type="reset" value="Kosong" /></td>
            </tr>                                                    
        </table>
    </form>
</fieldset>
