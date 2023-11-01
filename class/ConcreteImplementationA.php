<?php

require_once ROOT_PATH . "../interface/Implementation.php";

class ConcreteImplementationA implements Implementation
{

    public function oprationalImplementation(): string
    {
        return "ConcreteImplementationA: Implements";
    }

}