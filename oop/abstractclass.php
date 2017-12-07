<?php
	abstract class Animal {
		public $hungry = 'Yes Im Hungry';

		abstract public function eat($food);
	}

	class Dog extends Animal {
		function eat($food){
			if ($food == 'cookie'){
				$this->hungry = 'Not right now';
			} else {
				echo "I don't like that";
			}
		}
	}

	$dog = new Dog();
	echo $dog->hungry;
	echo $dog->eat('apple');
?>