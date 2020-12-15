<?php
    require_once "application/lib/koneksi.php";
    require_once "application/lib/config.php";
    require_once "application/functions/app.php";
    require_once "application/functions/admin.php";

    
    $getsoal = GetAllSoal();
    
    $daftarsoal = array();
    
    while($row=mysqli_fetch_assoc($getsoal)){
        $soal = $row['soal'];
        array_push($daftarsoal,$soal);
    }
    
    //print_r($daftarsoal);
    
    shuffle($daftarsoal);
    
    $_SESSION['daftarsoal'] = $daftarsoal;
?>
    <meta http-equiv="refresh" content="0;URL=quiz.php" />