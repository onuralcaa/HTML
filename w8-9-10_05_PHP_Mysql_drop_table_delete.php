<?php

require_once 'w8-9-10_01_Login_PHP.php';

$conn = new mysqli($hn, $un, $pw, $db);

if ($conn->connect_error) die("Fatal Error");
$query = "DROP TABLE cats"; //Tablo silme işlemi

$result = $conn->query($query);
if (!$result) die ("Database access failed");

?>