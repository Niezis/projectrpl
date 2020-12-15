<?php
    require_once "application/lib/koneksi.php";
    require_once "application/lib/config.php";
    require_once "application/functions/app.php";
    require_once "application/functions/admin.php";
    require_once "views/header.php";
    require_once "pages/register.php";
    
    if ( !empty($_POST['register']) ){
        if ( !empty($_POST['username']) & !empty($_POST['password']) & !empty($_POST['password2']) ){
            if ( $_POST['password'] == $_POST['password2'] ) {
                $user = $_POST['username'];
                $pass = $_POST['password'];
                $adduser = tambahUser($user,$pass);
                $_SESSION['user'] = $user;
                header('Location: index.php');
            } else {
                echo "<script>alert('Password dan Konfirmasi Password tidak sesuai, harap mengetik ulang')</script>";
            }
        } else {
            echo "<script>alert('Harap mengisi semua data')</script>";
        }
    }
?>