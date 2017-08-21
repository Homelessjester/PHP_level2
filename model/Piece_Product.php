<?php
/**
 * Created by PhpStorm.
 * User: HOMELESS
 * Date: 21.08.2017
 * Time: 9:27
 */

namespace PHP_level2\model;


class Piece_Product extends Product
{

    private static $final_income = 0;

    /**
     * Piece_Product constructor.
     * @param $name - имя
     * @param $quantity - количество в штуках
     */
    public function __construct($name, $quantity)
    {
        parent::__construct($name, $quantity);
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
     * Вывод финального дохода с продаж штучных товаров
     */
    static public function get_final_income() :float
    {
        return self::$final_income;
    }
}