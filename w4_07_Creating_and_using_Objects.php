<?php 

$object = new User;

print_r($object);
echo "<br>";

$object->name = "Onur";
$object->password = "12234";

print_r($object);
echo "<br>";

$object->save_user();


class User 
{
	public $name, $password;

	function save_user()
	{
		echo "Save User vode goes here.";
	}
}

?>