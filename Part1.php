<?php
interface Mammal{
	function talk();
	function walk();
}

abstract class Person implements Mammal{
	private $name;
	private $age;
	private $gender;
	function getName(){
	
	}
	function getAge(){
		
	}
	function getGender(){

	}
	function __construct($name, $age, $gender){
		$this->name = $name;
		$this->age = $age;
		$this->gender = $gender;
		
	}
}
class Student extends Person{
	function talk(){
		echo "talk";
	}
	function walk(){
		echo "walk";
	}
}

abstract class Animal implements Mammal{
	private $name;
	private $age;
	private $gender;
	function getName(){
		
	}
	function getAge(){
		
	}

}
class Dolphin extends Animal{
		function talk(){
		echo "talk";
	}
	function walk(){
		echo "walk";
	}
}

$stunkata new Student("Stanislav", 19, "asd");
$stunkata ->talk();
$stunkata ->walk();
$dolph new Dolphin("Dolphi", 5);
$dolph ->talk();
$dolph ->walk();


?>