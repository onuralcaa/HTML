<?php // update.php

$fh = fopen("testfile.txt", 'r+') or die("Failed to open file");
$text =fgets($fh);

fseek($fh, 0, SEEK_END); //dosyanın sonundan 0 öncesi

fwrite($fh, "$text") or die("Could not write to file");


fclose($fh);
echo "File 'testfile.txt' successfully updated";

/*
• fseek($fh, 18, SEEK_SET); //baştan 18. konuma
git
• fseek($fh, 5, SEEK_CUR); //cursorun bulunduğu
konumdan 5 ilerisine git (18+5=23 gibi)
*/

?>
