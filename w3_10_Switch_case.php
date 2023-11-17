<?php

$page = "Test"; //default test

//Her bir case den sonra break komutu eklenir.

 switch ($page)
 {
 case "Home": echo "You selected Home";
 break;

 case "About": echo "You selected About";
 break;

 case "News": echo "You selected News";
 break;

 case "Login": echo "You selected Login";
 break;

 case "Links": echo "You selected Links";
 break;

//Hiçbir şey seçilmezse default olarak çalışacak komutlar buraya yazılır.
 default:
 echo "Unrecognized selection";
 break;

 //Veya endswitch; komutu ile de switch case yapısı kapatılabilir.
 }

 ?>