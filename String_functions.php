<?php 

$metin = "pHp de neLer yapılabilir ?";
echo $metin . "<br>";

$kucuk = strtolower($metin); //Tüm harfleri küçültür.
echo $kucuk . "<br>"; //"." iki metinsel ifadeyi birleştirir.

$buyuk = strtoupper($metin); //Tüm harfleri büyük harf yapar.
echo $buyuk . "<br>";

$bas_harf_buyuk = ucwords($metin); //Bai harfleri büyük harf yapar.
echo $bas_harf_buyuk . "<br>";

$paragraf = ucfirst($metin); //Sadece ilk harfi büyük harf yapar.
echo $paragraf . "<br>";

$kucuk_mutasyon = mb_strtolower($metin , "UTF-8");//Türkçe karakter sorunun önler. Büyük küçük sorununuda önler.
echo $kucuk_mutasyon . "<br>";

$islem = ucwords(mb_strtolower($metin, "UTF-8"));//Düzelte içinde düzeltme işlemi.
echo $islem . "<br>";

?>