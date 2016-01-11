<?php
    $user = "root";
    $pass = "";
    $base = "knn"; 
    $koneksi = mysql_connect("localhost", $user, $pass);
    mysql_select_db($base, $koneksi)
?>
