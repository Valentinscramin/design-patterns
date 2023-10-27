<?php

require_once ROOT_PATH . "\abstract-factory\AbstractFactory.php";
include ROOT_PATH . "\class\Company.php"; 

class CompanyFactory extends AbstractFactory
{
    private $obj;

    public function __construct(string $name)
    {
        $this->obj = new Company($name);
    }

    public function setName(string $name)
    {
        $this->obj->setData($name);
    }

    public function getName()
    {
        echo "\n".$this->obj->getData();
    }
}