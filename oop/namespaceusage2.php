<?php 
	require_once('App/Stark.php');

	use App\Stark\Animal;

	$dog = new Animal;

	$dog->eat("Chilis");
	echo $dog->hungry . "<br>";
?>