<?php

// require_once 'classes/Animals.php';
require_once 'classes/Dog.php';

// $animals	=	new Animals;
$dog	=	new Dog;

$animal = new Dog();
$animal->name = "Bob";
$animal->age = 7;
echo $animal->Describe();
echo $animal->Greet();