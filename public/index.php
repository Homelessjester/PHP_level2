<?php

try {
    include_once '../data/defines.php';

    spl_autoload_register(function ($class_name){
        include_once (str_replace('/\\', DIRECTORY_SEPARATOR,
            MODEL_DIR . '\\' . strrchr($class_name, '\\') . '.php'));
    });

    /*ДЗ ко 2-му уроку
     * use \PHP_level2\model as Model;
    //Создаем два экземпляра штучного товара
    $good = new Model\Piece_Product('Good',  2);
    $good2 = new Model\Piece_Product('Second Good',  3);

    //Создаем два экземпляра цифрового товара
    $digit_good = new Model\Digital_Product('Digit', 2);
    $digit_good2 = new Model\Digital_Product('Second Digit', 3);

    //Создаем два экземпляра весового товара
    $weight_good = new Model\Weighted_Product('Weight', 2);
    $weight_good2 = new Model\Weighted_Product('Second Weight', 3);


    $obj_array = [$good, $good2, $digit_good, $digit_good2, $weight_good, $weight_good2];

    foreach ($obj_array as $value) {
        echo '<p>Название товара: ' . $value->getName() . '</p>';
        echo '<p>Цена: ' . $value->getPrice() .'</p>';
        echo '<p>Количетсво: ' . $value->getQuantity() .'</p>';
        echo '<p>Стоимость: ' . $value->cost_calculation() .'</p>';
        echo '<p>Доход группы товаров: ' . $value::get_final_income() .'</p>';
        echo '<hr>';
    }*/

    require CONTROLLER_DIR . '\do_render.php';
} catch (Exception $exception){
    $exception->getMessage();
    die;
}

