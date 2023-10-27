<?php

define('ROOT_PATH', dirname(__FILE__));

include ROOT_PATH . "/abstract-factory/CompanyFactory.php";
include ROOT_PATH . "/abstract-factory/PersonFactory.php";
require_once ROOT_PATH . "/class/OutSourcingAdapter.php";
require_once ROOT_PATH . "/class/OutSourcing.php";

// FACTORYS
$factory = new CompanyFactory("coffe-with-milk");
$factory->getName();

$factory = new PersonFactory("valentin");
$factory->getName();
// END FACTORYS

// ADAPTERS
$factory = new OutSourcingAdapter(new OutSourcing);
$factory->setName(['teste1', 'teste']);
$factory->getName();




