<?php
    require_once "application/lib/koneksi.php";
    require_once "application/lib/config.php";
    require_once "application/functions/app.php";
    require_once "application/functions/admin.php";
    require_once "views/header.php";
    
    $getSoal = getSoal();
    
    require_once "pages/vocab_list.php";
    ?>