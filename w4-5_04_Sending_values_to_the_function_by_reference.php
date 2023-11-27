<?php

//fonksiyona gönderilen değerler gönderilmeden önce referans gösterilerek (bir değişkene atanılarak) tanımlandı.

$a1 = "WILLIAM";
$a2 = "henry";
$a3 = "gatES";

echo $a1 . " " . $a2 . " " . $a3 . "<br>";

fix_names($a1, $a2, $a3); //Degerler fonksiyona gönderildi.

echo $a1 . " " . $a2 . " " . $a3;

function fix_names(&$n1, &$n2, &$n3) //adresler gönderiliyor.
{
	//Bu sayede degerlere kodun herhangi bir yerinde ulaşmak mümkün olacak. 
$n1 = ucfirst(strtolower($n1));
$n2 = ucfirst(strtolower($n2));
$n3 = ucfirst(strtolower($n3));
}

?>