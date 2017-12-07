<?php
	namespace Stark;

	class Animal {
		public $hungry = 'Hungry';

		function __construct(){
			echo "I'm an animal.";
		}

		function eat($food){
			$this->hungry = 'Not so much.';
		}
	}

	$doggy = new Animal;
?>