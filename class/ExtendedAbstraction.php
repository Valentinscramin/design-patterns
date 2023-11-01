<?php

include ROOT_PATH . "../abstraction/Abstraction.php";

class ExtendedAbstraction extends Abstraction
{
    public function operational(): string
    {
        return "ExtendedAbstraction: Extended operational with: \\n".$this->implementation->oprationalImplementation();
    }
}