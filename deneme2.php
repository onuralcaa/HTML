<?php 

// Fonksiyonu örnek bir girişle çağırma
$girisDizi = array(1, 2, 3, 4, 5);
$sonucDizi = array();
indisEkle($girisDizi);

function indisEkle($dizi) 
{
    // Giriş olarak dizi verilmediyse işlem yapma
    if (!is_array($dizi)) 
    {
        echo "Dizi verilmediği için herhangi bir işlem yapılmadı.";
        return;
    }

    // Giriş dizisinin elemanlarına indis değerini ekleyerek çıkış dizisini oluştur
    foreach ($dizi as $index => $eleman) 
    {
        $sonucDizi[] = $eleman + $index;
    }

    echo "sonuc : [";
    foreach($sonucDizi as $index => $eleman)
    {
    	echo $eleman;
    	if($index < count($dizi))echo ",";
    }
    echo "]<br>";
}

 ?>