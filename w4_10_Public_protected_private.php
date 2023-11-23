<?php

/*

Özellik ve Yöntem Kapsamı

• Public üyelere, herhangi bir yerden başvurulabilir (diğer sınıflar). ‘var’ da kullanılabilir.

• Protected üyelere, sadece ilgili nesnenin sınıf yöntemleri ve alt sınıfları tarafından başvurulabilir.

• Private üyelere, sadece ilgili nesnenin sınıf yöntemleri tarafından başvurulabilir. Alt sınıflar tarafından başvurulamaz.

*/

class Example
	{
		var $name = "Michael"; // Same as public but deprecated

		public $age = 23; // Public property

		protected $usercount; // Protected property

		private function admin() // Private method
		{

			// Admin code goes here
		}
	}
?>