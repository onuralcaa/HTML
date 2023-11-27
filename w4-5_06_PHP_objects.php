<?php

$object = new User;
print_r($object); // _r: human_readable

class User
{
	public $name, $password;
	
	function save_user()
	{
		echo "Save User code goes here";
	}
}

?>