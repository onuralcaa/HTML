<?php

	require_once 'w8-9-10_01_Login_PHP.php'; //GEREKLİ BİLGİLER/PARAMETRELER ÇEKİLDİ.

	$conn = new mysqli('localhost', $un, $pw, $db); //BAĞLANTI PARAMETRELERİ

	if ($conn->connect_error) die("Fatal Error connection");//Bağlanma hatası durumu.

	$query = "SELECT * FROM classics";
	$result = $conn->query($query);
	if (!$result) die("Fatal Error result");

	$result->close();//close the connection
    $conn->close(); //close the connection

?>