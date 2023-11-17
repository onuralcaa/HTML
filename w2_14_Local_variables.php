<?php
function longdate($timestamp)
{
$temp = date("l F jS Y", $timestamp); //temp değişkeni fonksiyonun içinde tanımlandığı için yerel değişken özelliği taşımaktadır.
return "The date is $temp";
}
echo longdate(time());
?>