<?php // movefile.php

	if (!rename('testfile2.txt', 'testfile2_new_name.txt'))
	echo "Could not rename file";

	else echo "File successfully renamed to 'testfile2.new'";

?>