<?php

 $temp = new Test();

 echo "Test A: " . Test::$static_property . "<br>"; //çift kolon ile static ve const ifadelere erişim.

 echo "Test B: " . $temp->get_sp() . "<br>";//self anahtar kelimesi ile sabitleri referanslama yöntemi.

 echo "Test C: " . $temp->static_property . "<br>";

 class Test
 {
 static $static_property = "I'm static";
 function get_sp()
 {
 return self::$static_property;
 }
 }
 ?>