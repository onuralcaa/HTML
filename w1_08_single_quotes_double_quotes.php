<?php
$variable=2;
$info = 'Preface variables with a $ like this:
$variable'; //tek tırnak da değişken kullanımı mümkün değil. Düz string ifadelerde kullanılır.
echo $info."<br>";
$info = "Preface variables with a $ like this:
$variable"; //İfade içerisinde bir değişken kullanılacaksa çift tırnak kullanılır.
echo $info;
?>