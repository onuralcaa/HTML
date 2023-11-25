<?php

	$fname = "Doctor";
	$sname = "Who";
	$planet = "Gallifrey";
	$system = "Gridlock";
	$constellation = "Kasterborous";
	$contact = compact('fname', 'sname', 'planet', 'system','constellation');

	print_r($contact);

	echo "<br><br>";

	extract($contact, EXTR_PREFIX_ALL, 'yeni'); //dağınık haldeki dizileri tek bir string ifade haline getirir.
	echo $yeni_fname." ".$yeni_sname;

?>