<?php
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

        if (empty($files)){
            throw new Exception('Файлы отсутствуют');
        }

        $dir->close();

        $result = $files;

    } catch (Exception $exception) {

        $result = $exception->getMessage();

    } finally {

        return $result;

    }
}
