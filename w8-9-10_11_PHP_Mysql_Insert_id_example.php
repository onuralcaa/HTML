<?php

require_once 'w8-9-10_01_Login_PHP.php';
$conn = new mysqli($hn, $un, $pw, $db);

if ($conn->connect_error) die("Fatal Error");

$query = "INSERT INTO cats VALUES(NULL, 'Lynx', 'Stumpy', 5)";
$result = $conn->query($query);

if (!$result) die ("Database access failed");

echo "The Insert ID was: " . $conn->insert_id;

?>