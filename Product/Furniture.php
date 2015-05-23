<?php

abstract class Furniture extends Product
{
    private $material;

    protected function __construct()
    {
        $properties = [
            'material' => $this->getMaterial(),
        ];
        $this->setProperties($properties);
    }

    protected function setMaterial($material)
    {
        $this->material = (string) $material;
    }

    protected function getMaterial()
    {
        return $this->material;
    }
}
