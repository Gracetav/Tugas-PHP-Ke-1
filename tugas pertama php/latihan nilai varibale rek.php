<?php


$nilaiHarian = 68;
$nilaiUts = 80;
$nilaiAkhir = 80;

$KkmNilaiHarian = $nilaiHarian >= 70;
$KkmNilaiUts = $nilaiUts >= 80;
$KkmNilaiAkhir = $nilaiAkhir >= 80;

$hasil1 = $KkmNilaiHarian && $KkmNilaiUts && $KkmNilaiAkhir;
$hasil2 = $KkmNilaiHarian || $KkmNilaiUts || $KkmNilaiAkhir;
var_dump($hasil1);
var_dump($hasil2);

//Alasan Mengapa Bisa Menunjukkan True & False

//$hasil1 (false):
//Pada hasil 1, muncul nilai false karena terdapat satu nilai yang tidak memenuhi syarat.
// Nilai harian sebesar 68, padahal nilai KKM harian adalah 70. Saat menggunakan Operator AND,
// jika terdapat satu nilai yang bernilai false, maka keseluruhan hasilnya juga akan menjadi false.

//$apakahNilaiHarianBagus adalah false karena nilai harian (68) tidak memenuhi syarat (>= 70).
//$apakahNilaiUtsBagus adalah true karena nilai UTS (80) memenuhi syarat (>= 80).
//$apakahNilaiAkhirBagus adalah true karena nilai akhir (80) memenuhi syarat (>= 80).
//Dengan demikian, $hasil1 menggunakan operator AND (&&), dan karena satu syarat tidak terpenuhi (false),
//hasil keseluruhan juga menjadi false.

//$hasil2 (true):

//Pada hasil 2, muncul nilai true.
//$apakahNilaiHarianBagus adalah false.
//$apakahNilaiUtsBagus adalah true.
//$apakahNilaiAkhirBagus adalah true.
//Oleh karena itu, $hasil2 menggunakan operator OR (||), dan karena setidaknya satu syarat terpenuhi (true),
//hasil keseluruhan juga menjadi true.
?>
