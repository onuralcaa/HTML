<?php 

	session_start();

	if(!isset($_SESSION['count'])) $_SESSION['count'] = 0;

	else ++$_SESSION['count'];

	echo $_SESSION['count'];


	//en basit session anlatımı:
	/*
	count adındaki session var sa bir arttırılır ekrana yazdırılır.
	yoksa da oluşturulur ve ilk değeri 0 olarak atanır.
	*/



?>