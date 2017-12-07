<?php
	class Example {
		private $_name;

		public function __construct($name){
			$this->_name = $name;
		}

		function __destruct(){
			echo "Destroying Object " . $this->_name . PHP_EOL;
		}
	}

	$obj1 = new Example("Objeto 1");
	$obj2 = new Example("Objeto 2");

	unset($obj1);

	echo 'Script still running' . PHP_EOL;
?>