<?php // deletefile.php

if (!unlink('testfile2_new_name.txt')) echo "Could not delete file";
else echo "File 'testfile2.new' successfully deleted";

?>