<?php
//09.11.2023 - Onur ALACA

//Her değişken $ ifadesiyle başlar.
//Büyük-küçük harf duyarlılığı mevcuttur.

$degisken = "Temel seviye PHP dersleri.";
$Degisken = "Merhaba PHP";
$sayi = 11;
$sayi2 = 5;

$Degisken = $degisken; //Atamalar sağdan sola yapılır.

echo $degisken;
echo "<br>"; //Bir alt satıra geçme tag ı
echo $sayi2;
echo "<br>";
echo $sayi;
echo "<br>";
echo $Degisken; //Büyük-küçük harf duyarlılığı

?>