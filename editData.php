<?php
include 'koneksi.php';
$id = $_GET['id']; 
$query = "select * from knn where id_knn=$id";
$result = mysql_query($query);
$data = mysql_fetch_array($result, MYSQL_ASSOC);
echo "<fieldset>
    <legend><b>Edit Data Siswa</b></legend>
    <form action='prsEditData.php' method='post' onsubmit='return validasi(this)'>
        <input type='hidden' name='id' value='$data[id_knn]' />
        <table>
            <tr>
                <td>Kemampuan Membaca</td>
                <td>:</td>
                <td><input type='text' name='baca' value='$data[baca]' />  (*Berisi Bilangan)</td>
            </tr>
            <tr>
                <td>Kemampuan Menulis</td>
                <td>:</td>
                <td><input type='text' name='tulis' value='$data[tulis]' />  (*Berisi Bilangan)</td>
            </tr>
            <tr>
                <td>Wawancara Orang Tua</td>
                <td>:</td>
                <td><input type='text' name='wawancara' value='$data[wawancara]' />  (*Berisi Bilangan)</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type='submit' value='Update' /><input type='reset' value='Kosong' /></td>
            </tr>                                                    
        </table>
    </form>
</fieldset>";
?>
