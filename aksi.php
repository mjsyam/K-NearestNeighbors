<?php
    if (isset($_GET['f'])) {
        $file = $_GET['f'];
        if (file_exists("$file.php")) {
            include_once "$file.php";
        } else {
            echo 'File Tidak ada</b>';
        }
    } else {

        echo '<div id=judul>Selemat Datang di Sistem Pendukung Keputusan Penentuan Kelas Siswa<br><br><br>
                       Oleh Klompok K: <br><br>
                       Moch. Rafiin Irfani(08523206)<br><br>
                       Randy Lapatria Loupaty (08523287)<br><br>
                       Syamsul Mujahidin (08523422)<br><br><br>


                Silahkan pilih menu pilihan di atas untuk mengelola sistem</div>';
    }
?>
