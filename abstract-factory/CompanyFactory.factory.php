<?php

include "AbstractFactory.factory.php";
require_once "../class/Company.class.php";

class CompanyFactory extends AbstractFactory
{
    public function setName($name)
    {
        return new Company($name);
    }
}