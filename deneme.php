<?php 

// Silindir sınıfını kullanarak örnek oluşturma
$obj = new Silindir(2, 3);

// Hacim hesapla ve ekrana yazdır
echo $obj->hacimHesapla() . "<br>";

// Statik fonksiyonu çağırarak Pi değerini ekrana yazdır
Silindir::piGoster();


class Silindir {
    // Özellikler
    private $yariCap;
    private $yukseklik;

    // Sabit
    const piDeger = 3.14;

    // Kurucu metod (constructor)
    public function __construct($yariCap, $yukseklik) {
        $this->yariCap = $yariCap;
        $this->yukseklik = $yukseklik;
    }

    // Hacim hesaplamak için metot
    public function hacimHesapla() {
        return self::piDeger * $this->yariCap * $this->yariCap * $this->yukseklik;
    }

    // Statik fonksiyon: Pi değerini ekrana yazdıran metot
    public static function piGoster() {
        echo "Pi Değeri: " . self::piDeger . "\n";
    }
}


 ?>
