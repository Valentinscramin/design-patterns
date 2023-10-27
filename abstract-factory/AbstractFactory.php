<?php

abstract class AbstractFactory
{
    abstract function setName(String $name);
    abstract function getName();
}