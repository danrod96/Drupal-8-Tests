<?php 
	require_once('App/Stark.php');

	use App\Stark\Animal as Mammal;

	$dog = new Mammal;

	$dog->eat("Chilis");
	echo $dog->hungry . "<br>";
?>