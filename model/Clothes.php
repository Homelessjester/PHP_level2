<?php

include 'Product.php';

class Clothes extends Product
{

    /**
     * Clothes constructor.
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

$dress = new Clothes('Dress',
                    '1000',
                    'Nice summer dress',
                    'S',
                    'dress',
                    'Cotton');
