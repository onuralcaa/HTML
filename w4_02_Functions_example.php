<?php

echo fix_names("WILLIAM", "henry", "gatES"); //fonksiyona parametre gönderilmesi.

function fix_names($n1, $n2, $n3)
{
$n1 = ucfirst(strtolower($n1)); //String ifadenin sadece baş harfinin büyük yapılmasını sağlayan string kütüphane fonksiyon kombinasyonları.
$n2 = ucfirst(strtolower($n2));
$n3 = ucfirst(strtolower($n3));

return $n1 . " " . $n2 . " " . $n3;
}

?>