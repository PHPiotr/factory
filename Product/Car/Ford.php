<?php

class Ford extends Car
{

    public function __construct()
    {
        $this->setEnginePower(44);
        $this->setMaxSpeed(200);
        $this->setProductionYear(1997);
        $this->setSeatsAmount(5);

        parent::__construct();
    }
}
