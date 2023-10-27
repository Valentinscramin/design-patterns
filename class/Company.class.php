<?php

include '../interface/Block.interface.php';

class Company implements Block
{
    public $class = "company";
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
