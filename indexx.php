<html>
    <header>
        <title>Implementasi Algoritma KNN</title>
        <link type="text/css" href="Style/style.css" rel="stylesheet"></link>
        <link type="text/css" href="Style/styleBody.css" rel="stylesheet"></link>
        <link type="text/css" href="Style/link_frbutton.css" rel="stylesheet"></link>
    </header>
    <script type="text/javascript">
        function validasi(form){
            var baca = form.baca.value;
            var tulis = form.tulis.value
            var wawancara = form.wawancara.value;
            if(form.baca.value == ""){
                alert("Anda belum mengisikan Kemampuan Membaca");
                form.baca.focus();
                return(false);
            }
            if(form.tulis.value == ""){
                alert("Anda belum mengisikan Kemampuan Menulis");
                form.tulis.focus();
                return(false);
            }
            if(form.wawancara.value == ""){
                alert("Anda belum mengisikan Hasil Wawancara");
                form.wawancara.focus();
                return(false);
            }

            if(isNaN(parseFloat(baca)) || isNaN(parseFloat(tulis)) || isNaN(parseFloat(wawancara))){
                alert("harus Berisi Bilangan");
                form.baca.focus();
                return(false);
            }
        }
    </script>
    <body>
        <ul class="tombol">
            <li><a href="http://localhost/KNN/index.php">Home</a></li>
            <li><a href="?f=masukandata">Input Data</a></li>
            <li><a href="?f=aksiData">Aksi Data</a></li>
        </ul>
        <?php
             echo '<div id=bungkus>';
             include 'aksi.php';
             echo '</div>';
        ?>
    </body>
</html>