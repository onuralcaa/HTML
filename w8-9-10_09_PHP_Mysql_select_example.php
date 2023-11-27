<?php 

require_once 'w8-9-10_01_Login_PHP.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("Fatal Error");

$query = "SELECT * FROM cats";
$result = $conn->query($query);
if(!$result) die("Database access failed.");

$rows = $result->num_rows;
echo "<table><tr> <th>Id</th> <th>Family</th> <th>Name</th> <th>Age</th> </tr>"; //table oluşturma. <th> -> bolt yazdırma.

for($j = 0 ; $j < $rows ; ++$j) //while ($row = $result->fetch_array(MYSQLI_NUM)) --eşdeğer.
{
	//result->data_seek($j); //olmasa da olur. fetch_array bir sonraki kayıta geçiş yapıyor.
	$row = $result->fetch_array(MYSQLI_NUM); //MYSQLI_ASSOC - FARKLI DİZİLİM

	echo "<tr>"; 

	for($k = 0 ; $k < 4 ; ++$k)
		echo "<td>".($row[$k]) . "</td>"; 
	echo "</tr>";
}

echo "</table>";

?>

<?php 
$yenisi = htmlspecialchars("<a href 'dnm'>Deneme</a>");
echo $yenisi; //&lt;a href=$#039;dnm;&gt;Deneme&lt;/a&gt; //Güvenlik amaçlı

?>