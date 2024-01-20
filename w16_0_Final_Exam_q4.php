<?php

/*
q4= PHP ve HTML kodlarını kullanarak, iki adet text giriş alanına girilen sayılardan hangisinin büyük olduğunu,
butona tıklandığında kendine post ederek hesaplayan ve büyük sayıyı butonun üzerinde gösteren kodu
yazınız. (25 puan)
*/
// Eğer form gönderilmişse, sayıları karşılaştır
$sonuc = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sayi1 = $_POST['sayi1'];
    $sayi2 = $_POST['sayi2'];

    if (is_numeric($sayi1) && is_numeric($sayi2)) {
        if ($sayi1 > $sayi2) {
            $sonuc = $sayi1;
        } elseif ($sayi1 < $sayi2) {
            $sonuc = $sayi2;
        } else {
            $sonuc = "Sayılar eşit.";
        }
    } else {
        $sonuc = "Lütfen geçerli sayılar giriniz.";
    }
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Sayı Karşılaştırma</title>
</head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <label for="sayi1">Birinci Sayı:</label>
    <input type="text" id="sayi1" name="sayi1" required>
    
    <label for="sayi2">İkinci Sayı:</label>
    <input type="text" id="sayi2" name="sayi2" required>
    
    <input type="submit" value="Hangisi Büyük?">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Butonun üzerinde sonucu göster
    echo "<script>document.querySelector('input[type=submit]').value='" . $sonuc . "';</script>";
}
?>

</body>
</html>
