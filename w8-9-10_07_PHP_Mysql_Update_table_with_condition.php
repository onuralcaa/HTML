<?php
require_once 'w8-9-10_01_Login_PHP.php';//connection parameters

$conn = new mysqli($hn, $un, $pw, $db);

if ($conn->connect_error) die("Fatal Error");

$query = "UPDATE cats SET name='Onur' WHERE id = 6";
$result = $conn->query($query);

if (!$result) die ("Database access failed");

?>