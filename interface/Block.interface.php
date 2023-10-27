<?php

interface Block
{
    public function setData(string $name);
    public function getData(): string;
}