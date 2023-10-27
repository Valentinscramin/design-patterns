<?php

require_once ROOT_PATH . '/interface/Block.php';

class Person implements Block
{
    public $class = "person";
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function setData(string $name)
    {
        $this->name = $name;
    }

    public function getData(): string
    {
        return $this->class.": ".$this->name;
    }
}
