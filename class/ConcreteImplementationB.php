<?php

require_once ROOT_PATH . "../interface/Implementation.php";

class ConcreteImplementationB implements Implementation
{

    public function oprationalImplementation(): string
    {
        return "ConcreteImplementationB: Implements";
    }
    
}