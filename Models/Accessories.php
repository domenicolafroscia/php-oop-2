<?php

require_once __DIR__ . '/Product.php';

class Accessories extends Product 
{
    protected $material;

    public function setMaterial($_material)
    {
        $this->material = $_material;
    }

    public function getMaterial()
    {
        return $this->material;
    }
}