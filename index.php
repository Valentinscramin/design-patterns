<?php

define('ROOT_PATH', dirname(__FILE__));

include ROOT_PATH . '/builder/BrandsBuilder.php';
include ROOT_PATH . '/class/Brands.php';

$brands = new Brands();
$brandsBuilder = new BrandsBuilder();

$brands->setBrands($brandsBuilder);
$brands->buildAll();
$brandsBuilder->getPackBrandModels()->listModels();
