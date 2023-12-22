<?php 

	require_once 'w12_06_Login.php';
	$connection = new mysqli($hn, $un, $pw, $db);

	if($connection->connect_error) die("Fatal error...");

	if(isset($_SERVER['PHP_AUTH_USER']) &&
	   isset($_SERVER['PHP_AUTH_PW']))
	{
		$un_temp = mysql_entities_fix_string($connection, $_SERVER['PHP_AUTH_USER']); //Zararlı yazılımlardan gelen saldırıları önlemek amacıyla datalar recursive olarak alındı.
		$pw_temp = mysql_entities_fix_string($connection, $_SERVER['PHP_AUTH_PW']);
		$query = "SELECT * FROM users WHERE username = '$un_temp'";
		$result = $connection->query($query);

		if(!$result) die("User not found.");

		else if($result->num_rows)
		{
			$row = $result->fetch_array(MYSQLI_NUM);

			$result->close();

				//Hash ile kriptolanmiş şifreyi doğrulama 'password_verify'
			if(password_verify($pw_temp, $row[3])) echo htmlspecialchars("$row[0] $row[1] :
				Hi $row[0], you are now logged in as '$row[2]'");
			else die("Invalid username/password combination.");	
		}
		else die("Invalid username/password combination.");
	}

	else 
	{
		//Burasi kalip
		header('WWW-Authenticate: Basic realm="Restricted Area"');
		header('HTTP/1.0 401 Unauthorized');
		die("Please enter your username and password");
	}


	$connection->close();

	function mysql_entities_fix_string($connection, $string)
	{
		return htmlentities(mysql_fix_string($connection, $string));
	}

	function mysql_fix_string($connection, $string)
	{
		if(get_magic_quotes_gpc()) $string = stripslashes($string);
		return $connection->real_escape_string($string);
	}

?>

