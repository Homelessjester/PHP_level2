<?php

class Footwear extends Product
{
    /**
     * Footwear constructor.
     * @param $name
     * @param $price
     * @param $description
     * @param $size
     * @param $type
     * @param $material
     */
    public function __construct($name, $price, $description, $size, $type, $material)
    {
        parent::__construct($name, $price, $description, $size, $type, $material);
    }
}
