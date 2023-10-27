<?php

require_once ROOT_PATH . "\abstract-factory\AbstractFactory.php";
include ROOT_PATH .  "\class\Person.php";

class PersonFactory extends AbstractFactory
{
    private $obj;

    public function __construct(string $name)
    {
        $this->obj = new Person($name);
    }

    public function setName(string $name)
    {
        $this->obj->setData($name);;
    }

    public function getName()
    {
        echo $this->obj->getData()."\n";
    }
}