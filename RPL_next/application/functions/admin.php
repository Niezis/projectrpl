<?php

function userlogin($user,$password){
    $query = "SELECT * FROM user WHERE nama_user = '$user' AND password = '$password'";
    global $link;
    if ($result = mysqli_query($link, $query)){
        if(mysqli_num_rows($result) != 0) return true;
        else return false;
    }
}

function tambahUser($user,$password){
    $query = "INSERT INTO user(nama_user, password) VALUES('$user','$password')";
    return run($query);
}

?>