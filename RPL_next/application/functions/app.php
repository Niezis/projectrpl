<?php
function result($query){
    global $link;
    if ($result = mysqli_query($link, $query) or die($query)){
        return $result;
    }
}
 
function run($query){
    global $link;
 
    if(mysqli_query($link, $query)) return true;
    else return false;
}
 
function excerpt($string){
    $string = substr($string, 0, 350);
    return $string . "...";
}
 
function escape($data){
    global $link;
    return mysqli_real_escape_string($link, $data);
}
function getClass(){
    $query = "SELECT * FROM jabatan ORDER BY id ASC";
    return result($query);
}
function ambilStruktur($tabel){
    $query = "SELECT * FROM $tabel ORDER BY id DESC";
    return result($query);    
}

function GetAllSoal(){
    $query = "SELECT v_ing as soal FROM t_vocabulary UNION SELECT v_indo as soal FROM t_vocabulary";
    return result($query);
}

function GetSoal(){
    $query = "SELECT v_indo as ind, v_ing as ing FROM t_vocabulary";
    return result($query);
}

function GetSoalLimit($limit_start, $limit){
    $query = "SELECT v_indo as ind, v_ing as ing FROM t_vocabulary LIMIT $limit_start, $limit";
    return result($query);
}

function JumlahVerb(){
    $query = "SELECT COUNT(*) AS jumlah FROM t_vocabulary";
    $jmlh  = result($query);
    $totalsoal = $jmlh->fetch_assoc();
    return $totalsoal['jumlah'];
}

function GetOpsi($soal){
    $query = "SELECT opsi FROM t_opsi INNER JOIN t_vocabulary as b ON (vocab = b.v_ing) or (vocab = b.v_indo) WHERE vocab='$soal'";
    return result($query);
}


function tambahJawaban($user,$soal,$jawaban){
    $query = "INSERT INTO t_jawaban(user, soal, jawaban) VALUES('$user','$soal','$jawaban')";
    return run($query);
}

function GetNilai(){
    $query = "SELECT COUNT(*) as nilai FROM (SELECT a.soal, a.jawaban, b.hasil FROM `t_jawaban` as a INNER JOIN `t_opsi` as b ON (a.soal = b.vocab) and (a.jawaban = b.opsi) WHERE b.hasil = 'benar') as nilai";
    $jmlh = result($query);
    $total = $jmlh->fetch_assoc();
    return $total['nilai'];
}

function kosongJawaban(){
    $query = "DELETE FROM t_jawaban";
    return run($query);
}

function tambahRank($user,$nilai,$waktu){
    $query = "INSERT INTO t_ranking(user, nilai, waktu) VALUES('$user','$nilai','$waktu')";
    return run($query);
}

function getRank(){
    $query = "SELECT user, nilai, waktu FROM t_ranking ORDER BY nilai DESC, waktu ASC LIMIT 0,10";
    return result($query);
}

function verif_user(){
    if (!empty($_SESSION['user'])){
        require_once "pages/quiz.php";
    } else {
        echo "<script>alert('harap login terlebih dahulu')</script>";
        echo '<meta http-equiv="refresh" content="0;URL=login.php" />';
    }
}
?>