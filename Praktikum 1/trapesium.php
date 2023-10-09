<?php
/*
NIM     : 210511080
NAMA    : Rizkiana Tit Amelia
KELAS   : D
*/

echo "<h3>Menghitung Trapesium</h3>"; //judul

//variabel
$sisi_atas = 10;
$sisi_bawah = 12;
$tinggi = 7;
//keliling
$a = 20;
$b = 9;
$c = 20;
$d = 9;


$luas = (($sisi_atas + $sisi_bawah) * $tinggi)/2;
$keliling = $a + $b + $c + $d;

//hasil ouput
echo "Sisi Atas ". $sisi_atas;
echo "<br/>";
echo "Sisi Bawah ". $sisi_bawah; 
echo "<br/>";
echo "Tinggi ". $tinggi; 
echo "<br/>";
echo "<br/>";
echo "Luas Trapesium ". $luas;
echo "<br/>";
echo "Keliling Trapesium ". $keliling;

?>