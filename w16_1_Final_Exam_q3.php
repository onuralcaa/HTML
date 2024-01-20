<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Çarpma İşlemi</title>
</head>
<body>

<script>

  /*
  q3= Bir fonksiyon aracılığıyla girilen argümanların çarpımını tarayıcıya yazdıran JavaScript kodunu yazınız. Örnek
olarak: carp(2,3,4) ise ekrana 24; carp(2,4) ise 8 yazacak gibi. (25 puan)
*/
  
function carp(...args) {
  let sonuc = args.reduce((total, current) => total * current, 1);
  document.write(sonuc);
  return sonuc; // İşlem sonucunu döndürür
}

// Fonksiyonu test etmek için örnek kullanımlar:
carp(2, 3, 4); // Ekrana 24 yazdırır
carp(2, 4);    // Ekrana 8 yazdırır
</script>

</body>
</html>
