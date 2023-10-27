<?php

define('ROOT_PATH', dirname(__FILE__));

include ROOT_PATH . "/abstract-factory/CompanyFactory.php";
include ROOT_PATH . "/abstract-factory/PersonFactory.php";

$factory = new CompanyFactory("coffe-with-milk");
$factory->getName();

$factory = new PersonFactory("valentin");
$factory->getName();


