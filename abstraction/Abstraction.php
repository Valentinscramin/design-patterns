<?php

class Abstraction
{
    protected $implementation;

    public function __construct(Implementation $implementation)
    {
        $this->implementation = $implementation;
    }

    public function operational(): string
    {
        return "Abstract base oprational with: \\n" . $this->implementation->oprationalImplementation();
    }
}
