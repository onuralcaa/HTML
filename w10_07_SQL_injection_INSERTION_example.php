<?php 

	require_once 'w8-9-10_01_Login_PHP.php';//connection parameters
	$conn = new mysqli($hn, $un, $pw, $db);
	if ($conn->connect_error) die("Fatal Error");

	$stmt = $conn->prepare('INSERT INTO classics VALUES(?,?,?,?,?)');
	$stmt -> bind_param('sssss', $author, $title, $category, $year, $isbn);

	$author  = 'Osman DOGRU';
	$title  = 'Kolpacino';
	$category  = 'Classic fiction';
	$year  = '1867';
	$isbn  = '5435346336757';

	$stmt -> execute(); //burda using statement kullanılarak sıranın belirtilmemesinin nedeni sıralama işlemini yukarda bind_param komutu ile yapıyor olmamızdan kaynaklanıyor.
	printf("%d Row inserted.\n", $stmt->affected_rows);
	$stmt->close();
	$conn->close();

?>