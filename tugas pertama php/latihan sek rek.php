<?php

echo"<h1>HTML dIdalam PHP</h1>";
echo"<h1>=== Biodata Diri===</h1>";
echo"<hr>";
echo"<br />";

echo"<div>Nama Lengkap : Grestavia Arrabel </div>";
echo"<div>Tempat,Tanggal Lahir : Singapore,15 Mei 2007  </div>";
echo"<div>NomorWhatsapp : 0895321015259</div>";
echo"<div>Deskripsi diri : Seseorang Grafik desainer pemula</div>";


$nama = "Nama Lengkap : Grestavia Arrabel";
$tempat = "Singapore, : 15 Mei 2007";
$wa = "nomor telepon : 0895321015259";
$deskripsi= "Deskripsi diri : Seorang Grafis desainer Pemula" ;

?>
<br>
<hr>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP Di Dalam HTML</h1>
    <H1>===Biodata Diri===</H1>
    <div><?= "$nama" ?></div>
    <div><?= "$tempat" ?></div>
    <div><?= "$wa" ?></div>
    <div><?= "$deskripsi" ?></div>
    
</body>
</html>