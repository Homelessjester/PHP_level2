<?php

include 'Product.php';

class Headdress extends Product
{
    /**
     * Headdress constructor.
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

$cap = new Footwear('Cap',
                      '300',
                      'Fashionable youth cap',
                      '58',
                      'caps',
                      'Synthetics');