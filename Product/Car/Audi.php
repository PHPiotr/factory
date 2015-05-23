<?php

class Audi extends Car
{

    public function __construct()
    {
        $this->setEnginePower(1000);
        $this->setMaxSpeed(300);
        $this->setProductionYear(2015);
        $this->setSeatsAmount(9);

        parent::__construct();
    }
}
