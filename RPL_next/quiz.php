<?php
    require_once "application/lib/koneksi.php";
    require_once "application/lib/config.php";
    require_once "application/functions/app.php";
    require_once "application/functions/admin.php";
    require_once "views/header.php";

    verif_user();
    $daftarsoal = $_SESSION['daftarsoal'];

    $no = 1;

    $daftarsoal = array_slice($daftarsoal,0,10);
    
    //print_r($daftarsoal);
    


    $jawaban = array();

    require_once "pages/quiz.php";
    ?>
