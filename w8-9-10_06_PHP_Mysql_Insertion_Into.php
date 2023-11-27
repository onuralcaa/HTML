<?php

require_once 'w8-9-10_01_Login_PHP.php';

$conn = new mysqli($hn, $un, $pw, $db);

if ($conn->connect_error) die("Fatal Error");

$query = "INSERT INTO cats VALUES(NULL, 'Lion', 'Onur', 4)";
$result = $conn->query($query);

if (!$result) die ("Database access failed");

?>