<?php 
	require_once('App/Stark.php');

	$dog = new App\Stark\Animal;

	$dog->eat("Chilis");
	echo $dog->hungry . "<br>";
?>