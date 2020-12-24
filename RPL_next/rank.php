<?php
require_once "application/lib/config.php";
require_once "application/lib/koneksi.php";
require_once "application/functions/admin.php";
require_once "application/functions/app.php";
require_once "views/header.php";
if(!empty($_POST['finish'])){
    $ns=1;
    if(!empty($_POST['soal'.$ns.''])){
        foreach($_SESSION['soal'] as $soal){
            if (isset($_POST['opsi'.$ns.''])){
                $jawaban = $_POST['opsi'.$ns.''];
            } else {
                $jawaban = NULL;
            }
            $addjawaban=tambahJawaban($_SESSION['user'],$soal,$jawaban);
            $ns++;
        }
        if(!empty($_POST['time'])){
            $waktu = $_POST['time'];
        }
        $nilai = getNilai();
        if(tambahRank($_SESSION['user'],$nilai,$waktu)){
            kosongJawaban();
            require_once "pages/rank.php";
        }         
    }
} else {
    
    require_once "pages/rank.php";
}


?>