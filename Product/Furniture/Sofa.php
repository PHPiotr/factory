<?php

class Sofa extends Furniture
{

    public function __construct()
    {
        $this->setMaterial('leather');

        parent::__construct();
    }
}
