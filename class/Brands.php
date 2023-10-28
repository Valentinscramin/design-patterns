<?php

require_once ROOT_PATH. "../interface/Builder.php";

class Brands
{
    private $builder;

    public function setBrands(Builder $builder): void
    {
        $this->builder = $builder;
    }

    public function buildAll(): void
    {
        $this->builder->motorcyleBrandBmw();
        $this->builder->motorcyleBrandHonda();
        $this->builder->motorcyleBrandYamaha();
    }
}