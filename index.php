<?php

define('ROOT_PATH', dirname(__FILE__));

include ROOT_PATH."/class/ConcreteImplementationA.php";
include ROOT_PATH."/class/ConcreteImplementationB.php";
include ROOT_PATH."/abstraction/Abstraction.php";

$implementation = new ConcreteImplementationA();
$abstraction = new Abstraction($implementation);
echo $abstraction->operational();


$implementation = new ConcreteImplementationB();
$abstraction = new Abstraction($implementation);
echo $abstraction->operational();