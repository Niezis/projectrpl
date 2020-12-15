<?php
require_once "../application/lib/config.php";
session_start();
if(session_destroy()){
    echo '<script>window.location="'.$baseurl.'"</script>';
} else {
    echo "Log out Gagal";
}
?>