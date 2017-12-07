<?php

	class Animal {
		public $hungry = 'hungry';

		function eat($food){
			$this->hungry = 'Not So Much';
		}
	}

	class Dog extends Animal {
		function eat($food){
			if ($food == 'cookie'){
				$this->hungry = 'Not So Much';
			} else {
				$this->hungry = 'No thanks';
			}
		}
	}


	$anyanimal = new Animal;

	$anyanimal->eat('Ham');

	echo $anyanimal->hungry . "<br>";

	$anydog = new Dog;

	$anydog->eat('Bread');

	echo $anydog->hungry;

?>