<?php
require_once '../vendor/autoload.php';
require_once 'images_and_db.php';

add_images_to_db($files, $db);
unset($files);
$files = get_images_from_db($db);

try {
    if (!is_array($files)){
        throw new Exception('Файлы отсутствуют');
    }
} catch (Exception $exception) {
    $exception->getMessage();
}

try {
    $loader = new Twig_Loader_Filesystem(TEMPLATE_DIR);
    $twig = new Twig_Environment($loader,
        ['charset'=>'UTF-8']);

    $template = $twig->load('index.tmpl');

    echo $template->render(['files'=>$files]);
} catch (Exception $exception){
    die('Error: ' . $exception->getMessage());
}