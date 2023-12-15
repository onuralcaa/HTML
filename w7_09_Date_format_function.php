<?php 

//date($format, $timestamp);

echo "<br>";

 echo date("l F jS, Y - g:ia", time());
//çıktı :  Thursday July 6th, 2017 - 1:38pm

 echo "<br>";

 echo date(DATE_ATOM, time()) . "<br>";
 //Bunun gibi tarih sabitleri de kullanılabilir.
 //DATE_ATOM
 //DATE_COOKIE
 //DATE_RSS
 //DATE_W3C


 setlocale(LC_ALL, 'tr_TR');
 echo strftime("%e %B %Y %A");

?>



