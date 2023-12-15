<?php

echo "<pre>"; // boşlukların görünmesi için
$h = 'Rasmus';
printf("[%s]\n", $h); // Standard string çıktısı
printf("[%12s]\n", $h); // boşluklarla sağa yasla
printf("[%-12s]\n", $h); // boşluklarla sola yasla
printf("[%012s]\n", $h); // 0’la doldur
printf("[%'#12s]\n\n", $h); // '#‘ la doldur
$d = 'Rasmus Lerdorf';
printf("[%12.8s]\n", $d); // sağa yasla, 8 karakterden sonra kes
printf("[%-12.12s]\n", $d); // sola yasla, 12 karakterden sonra kes
printf("[%-'@12.10s]\n", $d); // sola yasla, 10 karakterden sonra kes, @ işaretiyle doldur
//echo "</pre>";
?>