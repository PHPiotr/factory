<?php

abstract class Product
{
    private $properties = [];

    public function getProperties()
    {
        return $this->properties;
    }

    protected function setProperties(array $properties)
    {
        $this->properties = $properties;
    }
}
