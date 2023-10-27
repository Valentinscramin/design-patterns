<?php

include "AbstractFactory.factory.php";
require_once "../class/Person.class.php";

class PersonFactory extends AbstractFactory
{
    public function setName($name)
    {
        return new Person($name);
    }
}