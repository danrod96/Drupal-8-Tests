<?php
	interface Animal {
		public function eat($food);
	}

	interface Mammal {
		public function giveBirth();
	}

	//implements both interfaces
	class Dog implements Animal, Mammal {
		public $gender = 'male';

		function eat($food){
			if ($food == 'cookie'){
				$this->hungry = 'Not hungry now';
			} else {
				$this->hungry = 'No thanks, I dont want that';
			}
		}

		function giveBirth(){
			if ($this->gender == 'male'){
				echo "No male no give birth";
			} else {
				echo "No pregnant";
			}		
		}
	}

	$dog = new Dog;

	$dog->eat("chips");
	echo $dog->hungry;
	$dog->giveBirth();
?>