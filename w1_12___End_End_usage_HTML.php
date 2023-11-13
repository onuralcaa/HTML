<?php
$author = "Scott Adams";
$yazar = "Onur ALACA";

$out = <<<_END
Normal people believe that if it ain’t broke, don’t fix it.
Engineers believe that if it ain’t broke, it doesn’t have enough
features yet.
- $author.
_END;

$metin = <<<_END
	
	I am a student at KSU.

- $yazar.	
_END;
echo $out;
echo "<br>";
echo $metin;
?>