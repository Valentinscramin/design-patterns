<?php

include ROOT_PATH."../interface/Builder.php";
require_once ROOT_PATH."../class/PackageBrands.php";

class BrandsBuilder implements Builder
{
    private $packModels;

    public function __construct()
    {
        $this->reset();
    }

    public function reset(): void
    {
        $this->packModels = new PackageBrands();
    }

    public function motorcyleBrandBmw(): void
    {
        $this->packModels->models[] = "partOne"; // new Bmw class
    }

    public function motorcyleBrandHonda(): void
    {
        $this->packModels->models[] = "partTwo"; // new Honda class
    }

    public function motorcyleBrandYamaha(): void
    {
        $this->packModels->models[] = "partThre"; //// new Yamaha class
    }

    public function getPackBrandModels(): PackageBrands
    {
        $result = $this->packModels;
        $this->reset();
        return $result;
    }


}