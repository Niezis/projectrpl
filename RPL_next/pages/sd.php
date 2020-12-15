<?php
$getsoal = GetAllSoal();
$daftarsoal = array();
while($row=mysqli_fetch_assoc($getsoal)){
    $soal = $row['soal'];
    array_push($daftarsoal,$soal);
}
print_r($daftarsoal);
echo '<br>';
echo '<br>';
shuffle($daftarsoal);
$daftarsoal = array_slice($daftarsoal,0,10);
print_r($daftarsoal);
$getopsi = GetOpsi();
while($row=mysqli_fetch_assoc($getopsi)){
    echo $row['opsi'];
    echo '<br>';
}
?>