<?php
	$fh = fopen("testfile.txt", 'r') or
	die("File does not exist or you lack permission to open it");

	$line = fgets($fh); //tek satır okuma işlemi yapar.

	fclose($fh);
	echo $line;

?>