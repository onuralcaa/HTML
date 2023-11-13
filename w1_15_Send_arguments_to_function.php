<?php

//Global olarak kullanılmak istenen değişkenler 'global $degisken' şeklinde tanımlanmalıdır.

$temp = "The date is ";
echo longdate($temp, time());// temp değişkeni fonksiyona argüman olarak gönderilmiştir. Yerel ve global tanımlama hatalarının önüne bu yöntemle geçilebilir.
function longdate($text, $timestamp) //değişkenler karşılandı.
{
return $text . date("l F jS Y", $timestamp);
}
?>