<?php
	/* static can also be used to define static variables and for late static bindings. ... Declaring class properties or methods as static makes them accessible without needing an instantiation of the class. A property declared as static cannot be accessed with an instantiated class object (though a static method can). */
	class Dog {
		static $hungry = 'Yes Hungry';

		static function eat($food){
			if ($food == 'cookie'){
				self::$hungry = 'Not Hungry Now';
			} else {
				echo "I dont think so";
			}
		}
	}

	//doesn't need to instance Class
	Dog::eat('cookie');

	echo Dog::$hungry;
?>