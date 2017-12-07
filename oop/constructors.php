<?php
	class Animal {
		public $hungry = 'hungry';

		function eat($food){
			$this->hungry = 'Not So Much';
		}
	}

	class Dog extends Animal {
		public $breed;

		function __construct($breed){
			$this->breed = $breed;
		}

		function eat($food){
			if ($food == 'cookie'){
				$this->hungry = 'Not So Much ' . $this->breed;
			} else {
				$this->hungry = 'No thanks ' . $this->breed;
			}
		}
	}

	$newdog = new Dog('Mixed');

	$newdog->eat('Milk');

	echo $newdog->hungry;

	$newdog->breed = 'Hound';

	$newdog->eat('Leaf');

	echo $newdog->hungry;
?>