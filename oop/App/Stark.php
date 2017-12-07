<?php
	namespace App\Stark;

	class Animal {
		public $hungry = 'Hungry';

		function __construct(){
			echo "I'm an animal." . "<br>";
		}

		function eat($food){
			if ($food == 'fish'){
				$this->hungry = "Not so Hungry right now";
			} else {
				$this->hungry = "Dont really like that";
			}
		}
	}
?>