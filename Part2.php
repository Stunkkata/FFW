<?php 
abstract class Vehicle{
	$brand;
	$model;
	$price;
	function getBrand(){

	}
	function getModel(){

	}
	function getPrice(){

	}
	abstract function startEngine(){

	}
	abstract function stopEngine(){

	}
	abstract function printData(){

	}
}

class Car extends Vehicle{

	
}
?>