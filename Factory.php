<?php

abstract class Factory
{
    private $product;

    protected function getProduct()
    {
        return $this->product;
    }

    protected function setProduct(Product $product)
    {
        $this->product = $product;
    }

    public function produce($product)
    {
        if (!class_exists($product)) {
            throw new Exception('We do not produce ' . $product . '!');
        }
        $item = $product;
        $this->setProduct(new $item);
        return $this->getProduct();
    }
}
