<?php
require_once '../vendor/autoload.php';
require_once '../data/defines.php';

$loader = new Twig_Loader_Filesystem('./templates');
$twig = new Twig_Environment($loader,
    ['cache'=>'./templates/cache',
        'charset'=>'UTF-8']);

$template = $twig->load('index.tmpl');

echo $template->render(['name'=>'Denis']);