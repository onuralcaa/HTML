<?php

	$fh = fopen("testfile.txt", 'r') or
	die("File does not exist or you lack permission to open it");

	$text = fread($fh, 30); //belirli karakterde okuma işlemi yapar. Okunan değerleri yanyana okur.

	fclose($fh);
	echo $text;

?>