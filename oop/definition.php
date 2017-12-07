<?php 

	class SimpleClass {
		//property
		public $nombre = "Testi";

		//method
		public function displayName(){
			echo $this->nombre;
		}
	}

	class Dog {

		public $hungry = 'Hungry';

		function eat($food){
			$this->hungry = 'Not so much';
		}
	}

	$instance = new SimpleClass();

	$dog = new Dog;

	echo $dog->hungry;

	$dog->eat("foodie");

	echo $dog->hungry;

?>
