<?php

include_once '../data/defines.php';

spl_autoload_register(function ($class_name){
    include_once (str_replace('/', '\\', MODEL_DIR . '\\' . $class_name . '.php'));
});


$dress = new Clothes('Dress',
    '1000',
    'Nice summer dress',
    'S',
    'dress',
    'Cotton');


$shoes = new Footwear('Shoes',
    '5000',
    'Stylish business shoes',
    '41',
    'shoes',
    'Leather');


$cap = new Footwear('Cap',
    '300',
    'Fashionable youth cap',
    '58',
    'caps',
    'Synthetics');

echo $cap->getDescription();