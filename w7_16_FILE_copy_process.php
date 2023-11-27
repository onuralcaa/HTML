<?php // copyfile.php

//sağ tarafa yazılan dosyayı oluşturur. Ve soldaki dosyayı kopyalar. Var ise içeriğini değiştirme yetkisine sahiptir.

copy('testfile.txt', 'testfile2.txt') or die("Could not copy file"); //işlem başarısız olursa die fonksiyonu çalışır ve program sonlanır.
echo "File successfully copied to 'testfile2.txt'";

?>