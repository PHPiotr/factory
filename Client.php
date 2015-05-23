<?php

class Client
{
    private $car;
    private $furniture;

    public function setCar($car)
    {
        $car_factory = new CarFactory();
        $this->car = $car_factory->produce($car);
        return $this;
    }

    public function getCar()
    {
        return $this->car;
    }

    public function setFurniture($furniture)
    {
        $furniture_factory = new FurnitureFactory();
        $this->furniture = $furniture_factory->produce($furniture);
        return $this;
    }

    public function getFurniture()
    {
        return $this->furniture;
    }
}
