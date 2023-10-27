<?php


class OutSourcing
{
    public $class = "OutSourcing";
    private $name;

    public function setData(array $array)
    {
        $this->name = implode(" ", $array);
    }

    public function getData()
    {
        return $this->class." ".$this->name;
    }
}