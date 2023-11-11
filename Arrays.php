<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<?php 

$deneme = "Merhaba PHP";
$deneme2 = "Merhaba HTML";
$deneme3 = "Merhaba CSS";

echo $deneme. " " . $deneme2 . " " . $deneme3 . "<br>" . "<br>" ;
 //-----------------------------------------------------------

$dizi = array(); // 1. dizi tanımlama yöntemi
$dizi2[] = ""; // 2. dizi tanımlama yöntemi

$ornek = array("php" =>"Merhaba PHP", "Merhaba HTML", "Merhaba CSS"); //indis ismi ve numarası belirleme işlemi

echo $ornek["php"] . " " . $ornek[0]. " " . $ornek[1] . "<br>"."<br>";//indisler otomatik olarak 0'dan başlar. İndis verilmezse hata verir.

$dizi[] = "Benim";
$dizi[] = "adım";
$dizi[] = "onur";
$dizi[] = "alaca";

echo $dizi[0]. " " . $dizi[1]. " ". ucfirst($dizi[2]). " ". strtoupper($dizi[3]). "<br>"; //İsmin ilk harfi, soyadın ise tüm harfleri büyük harf yapıldı.

?>

</body>
</html>


















