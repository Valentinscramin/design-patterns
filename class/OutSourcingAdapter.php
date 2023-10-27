<?php

include ROOT_PATH . '/class/OutSourcing.php';
require_once ROOT_PATH . '/adapter/TypeAdapter.php';

class OutSourcingAdapter implements TypeAdapter
{
    private $outSourcing;

    public function __construct(OutSourcing $outSourcing)
    {
        $this->outSourcing = $outSourcing;
    }

    public function setName(array $names)
    {
        $this->outSourcing->setData($names);
    }

    public function getName()
    {
        echo $this->outSourcing->getData()."\n";
    }
}
