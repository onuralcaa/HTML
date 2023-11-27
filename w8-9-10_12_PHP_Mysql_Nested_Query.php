<?php 

require_once 'w8-9-10_01_Login_PHP.php';
$conn = new mysqli($hn, $un, $pw, $db);

if ($conn->connect_error) die("Fatal Error");

$query = "SELECT * FROM customers";
$result = $conn->query($query);
if(!$result) die("Database access failed.");

$rows = $result->num_rows; //3

for($j = 0 ; $j < $rows ; ++$j)
{
	$row = $result->fetch_array(MYSQLI_NUM);
	echo htmlspecialchars($row[0]) . " purchased ISBN ";
	     htmlspecialchars($row[1]) . ":<br>";

	$subquery = "SELECT * FROM classics WHERE isbn = '$row[1]'";
	$subresult = $conn->query($subquery);
	if(!$subresult) die("Database access failed");

	$subrow = $subresult->fetch_array(MYSQLI_NUM);
	echo "&nbsp;&nsbp;" . htmlspecialchars("'$subrow[1]'") . " by ".
						  htmlspecialchars( $subrow[0] ) . "<br><br>";
}

?>