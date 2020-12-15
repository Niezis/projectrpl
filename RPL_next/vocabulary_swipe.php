<?php
    require_once "application/lib/koneksi.php";
    require_once "application/lib/config.php";
    require_once "application/functions/app.php";
    require_once "application/functions/admin.php";
    require_once "views/header.php";

    $page = (isset($_GET['page']))? $_GET['page'] : 1;
    $limit = 1;
    $limit_start = ($page - 1) * $limit;

    $data = JumlahVerb();
	$jumlah_page = ceil($data / $limit);

    $verb = getSoalLimit($limit_start,$limit);

    require_once "pages/vocabulary_swipe.php";
?>