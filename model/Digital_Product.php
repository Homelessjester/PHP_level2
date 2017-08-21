<?php
/**
 * Created by PhpStorm.
 * User: HOMELESS
 * Date: 21.08.2017
 * Time: 10:58
 */

namespace PHP_level2\model;


class Digital_Product extends Piece_Product
{
    private static $final_income = 0;

    /**
     * Digital_Product constructor.
     * @param string $name
     * @param float $quantity
     */
    public function __construct($name, $quantity)
    {
        parent::__construct($name, $quantity);
    }

    /**
     * Установка цены цифрового товара
     * @return float|int
     */
    public function getPrice()
    {
        return parent::getPrice()/2;
    }

    /**
     * @return float
     */
    public function cost_calculation(): float
    {
        self::$final_income += $this->getPrice() * $this->getQuantity();
        return $this->getPrice() * $this->getQuantity();
    }

    /**
     * Вывод финального дохода с продаж цифровых товаров
     * @return float
     */
    static public function get_final_income() :float
    {
        return self::$final_income;
    }
}