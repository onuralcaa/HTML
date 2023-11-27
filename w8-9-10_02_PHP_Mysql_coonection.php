<?php

	require_once 'w8-9-10_01_Login_PHP.php'; //GEREKLİ BİLGİLER/PARAMETRELER ÇEKİLDİ.

	$conn = new mysqli('localhost', $un, $pw, $db); //BAĞLANTI PARAMETRELERİ

	if ($conn->connect_error) die("Fatal Error");//Bağlanma hatası durumu.

	

?>