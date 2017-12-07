<?php
	class Animal {
		public $hungry = 'Hungry';

		function __construct(){
			echo "I'm an animal.";
		}

		function eat($food){
			$this->hungry = 'Not so much.';
		}
	}

	class Dog extends Animal {
		public $breed;

		function __construct($breed){
			$this->breed = $breed;

			//scope operator
			Animal::__construct();
		}

		function eat($food){
			if ($food == 'fish'){
				Animal::eat($food);
			} else {
				echo "I only like fish";
			}
		}
	}

	$dog = new Dog('Rotweiler');

	$dog->eat('fish');

	echo $dog->hungry;
?>