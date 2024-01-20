<?php
/*
q2 = “localhost” adresindeki bir mysql sunucusunun “final” veritabanına “root” kullanıcı adı ve “ksubm”
parolasıyla erişilebilmektedir. Bu veritabanından 4 sütunlu “kediler” tablosuna ait tüm kayıtlar mysqli
sınıfından üretilen bir nesne aracılığıyla getirilerek bir HTML tablosunda görüntüleyen PHP ve HTML kodlarını
yazınız. (25 puan)
*/

$servername = "localhost";
$username = "root";
$password = "ksubm";
$dbname = "final";

// Veritabanı bağlantısını oluşturma
$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantıyı kontrol etme
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// SQL sorgusunu hazırlama
$sql = "SELECT * FROM kediler";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Kediler Tablosu</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>

<?php
if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>İsim</th><th>Yaş</th><th>Cins</th></tr>";
    // Her satırı döngü ile işle
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["isim"]. "</td><td>" . $row["yas"]. "</td><td>" . $row["cins"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 sonuç bulundu.";
}
// Bağlantıyı kapatma
$conn->close();
?>

</body>
</html>
