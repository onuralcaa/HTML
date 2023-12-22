<?php 

	require_once 'w12_06_Login.php';
	$connection = new mysqli($hn, $un, $pw, $db);

	if ($connection->connect_error) die("Fatal error...");

	//if not exist -> dosya mevcut değilse komutların çalışmasını sağlıyor. Mevcutsa çalışmaz.
	$query = " CREATE TABLE IF NOT EXISTS users ( 
		forename VARCHAR(32) NOT NULL,
		surname VARCHAR(32) NOT NULL,
		username VARCHAR(32) NOT NULL UNIQUE,
		password VARCHAR(255), NOT NULL
	)";


	$result = $connection->query($query);
	if(!$result) die("Fatal error..");



	$forename = 'Bill';
	$surname = 'Smith';
	$username = 'bsmith2';
	$password = 'mysecret';
	$hash = password_hash($password, PASSWORD_DEFAULT);
	//password u kriptolamak için kullanıldı. Hashleme işlemi.

	add_user($connection, $forename, $surname, $username, $hash);


	function add_user($connection, $fn, $sn, $un, $pw)
	{

		$stmt = $connection->prepare('INSERT INTO users VALUES(?,?,?,?)');
		$stmt->bind_param('ssss', $fn, $sn, $un, $pw);
		$stmt -> execute();
		$stmt -> close();
	}

?>