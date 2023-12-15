<?php // query.php

	require_once 'w8-9-10_01_Login_PHP.php';
	$conn = new mysqli ($hn, $un, $pw, $db);
	if ($conn -> connect_error) die("Fatal Error");

$query = "SELECT * FROM classics";
$result = $conn -> query($query);
if (!$result) die("Fatal Error");

$rows = $result -> num_rows;

for ($j = 0; $j < $rows; ++$j)
{	

	/*bütün bilgilerin veritabanından alınmasını sağlar.
	data_seek => konum, kayıt belirleme 
	fetch_Assoc => yazdırılacak öğeler belirlenir.

	*/

	$result->data_seek($j);
	echo 'Author: ' .htmlspecialchars($result->fetch_assoc() ['author']).'<br>';
	$result->data_seek($j); 
	echo 'Title:' . htmlspecialchars($result->fetch_assoc() ['title']) .'<br>';
	$result->data_seek($j);
	echo 'Category: ' . htmlspecialchars($result->fetch_assoc() ['category']) . '<br>';
	$result->data_seek($j);
	echo 'Year: ' . htmlspecialchars($result->fetch_assoc() ['year']) .'<br>';
	$result->data_seek($j);
	echo 'ISBN: ' . htmlspecialchars($result->fetch_assoc() ['isbn']) .'<br><br>';
}

$result ->close();
$conn -> close();


?>



