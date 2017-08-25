<?php
require_once '../vendor/autoload.php';
require_once '../data/defines.php';

/**
 * Название функции говорит само за себя
 * @param $image_dir
 * @return array|string
 */
function get_images_from_directory($image_dir){
    try {

        $result = [];

        $dir = dir(IMAGES_DIR . '\\' . $image_dir);

        $files = [];
        $path = [];

        while (false !== ($file = $dir->read())){
            if (($file !== '.' && $file !== '..') && getimagesize($dir->path . '\\' . $file)){
                $path['path'] = '../data/img/images/' . $file;
                $path['thumb'] = '../data/img/thumb/' . $file;
                array_push($files, $path);
            }
        }

        $dir->close();

        $result = $files;

    } catch (Exception $exception) {

        $result = $exception->getMessage();

    } finally {

        return $result;

    }
}

$files = get_images_from_directory('images');

/*echo '<pre>';
var_dump($files);
echo '</pre>';
die;*/

if (!is_array($files)) {
    die('Error: ' . $files);
}

try {
    $loader = new Twig_Loader_Filesystem('./templates');
    $twig = new Twig_Environment($loader,
        ['charset'=>'UTF-8']);

    $template = $twig->load('index.tmpl');

    echo $template->render(['files'=>$files]);
} catch (Exception $exception){
    die('Error: ' . $exception->getMessage());
}
