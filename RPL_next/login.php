<?php
    require_once "application/lib/koneksi.php";
    require_once "application/lib/config.php";
    require_once "application/functions/app.php";
    require_once "application/functions/admin.php";
    require_once "views/header.php";
    require_once "pages/login.php";

    if (!empty($_POST['login'])){
        if (!empty($_POST['user']) & !empty($_POST['password'])){
            $user = $_POST['user'];
            $password = $_POST['password'];
            if(userlogin($user,$password)){
                $_SESSION['user'] = $user;
                header("Location: index.php");
            } else {
                echo "<script>alert('ada masalah saat login')</script>";
            }
        } else {
            echo "<script>alert('Harap isi semua data')</script>";
        }
    }
?>
