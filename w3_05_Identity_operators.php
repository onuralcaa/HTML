<?php
 $a = "1000";
 $b = "+1000";
if ($a == $b) echo " 1 ";
 if ($a === $b) echo " 2 "; //=== operatörü tüm özellikleri kıyaslar.

//değil
 $c = "1000";
 $d = "+1000";
 if ($c != $d) echo " 1 ";
 if ($d !== $d) echo " 2 ";

 ?>