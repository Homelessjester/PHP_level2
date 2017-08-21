<?php

namespace PHP_level2\model;

/**
 * Class Product
 */
abstract class Product
{
    /**
     * Базовая цена
     */
    private const BASIC_PRICE = 50;

    private $name;

    private $quantity;

    /**
     * Product constructor.
     * @param $name string
     * @param $quantity float
     */
    public function __construct(string $name , float $quantity)
    {
        $this->name = $name;
        $this->quantity = $quantity;
    }

    /**
     * @return float
     */
    abstract public function cost_calculation() :float;

    /**
     * @return float
     */
    abstract static public function get_final_income() :float;

    /**
     * @return int
     */
    public function getPrice()
    {
        return self::BASIC_PRICE;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

}
