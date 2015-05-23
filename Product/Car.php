<?php

abstract class Car extends Product
{
    private $max_speed;
    private $engine_power;
    private $seats_amount;
    private $production_year;

    protected function __construct()
    {
        $properties = [
            'engine_power' => $this->getEnginePower(),
            'max_speed' => $this->getMaxSpeed(),
            'production_year' => $this->getProductionYear(),
            'seats_amount' => $this->getSeatsAmount(),
        ];
        $this->setProperties($properties);
    }

    protected function setEnginePower($engine_power)
    {
        $this->engine_power = (int) $engine_power;
    }

    protected function setMaxSpeed($max_speed)
    {
        $this->max_speed = (int) $max_speed;
    }

    protected function setProductionYear($production_year)
    {
        $this->production_year = (int) $production_year;
    }

    protected function setSeatsAmount($seats_amount)
    {
        $this->seats_amount = (int) $seats_amount;
    }

    protected function getEnginePower()
    {
        return $this->engine_power;
    }

    protected function getMaxSpeed()
    {
        return $this->max_speed;
    }

    protected function getProductionYear()
    {
        return $this->production_year;
    }

    protected function getSeatsAmount()
    {
        return $this->seats_amount;
    }
}
