<?php 
    session_start();
    include "header.php";
    if ($_SESSION['Ruangan'] == 'Ruangan 3'){
        Echo "Nama   = ".$_SESSION['nama']; 
        include "video.php";
    } else {
        echo "Tidak Memiliki Izin Untuk Masuk";
    }
?>