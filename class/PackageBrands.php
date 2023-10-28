<?php

class PackageBrands
{
    public $models = [];

    public function listModels(): void
    {
        echo 'Models Parts:' . implode(', ', $this->models) . "\\n";
    }
}
