<?php
require_once 'something.php';
require_once '../data/defines.php';
require_once '../data/db_config.php';

try {
    $db = new PDO(DSN,
        DB_USER,
        DB_PASS);
} catch (PDOException $PDOException){
    die($PDOException->getMessage());
}

$files = get_images_from_directory('images');

try {
    if (!is_array($files)){
        throw new Exception('Файлы отсутствуют');
    }
} catch (Exception $exception) {
    $exception->getMessage();
}


/**
 * Добавление фотографий в БД
 * @param array $files
 * @param PDO $db
 * @return int|string
 */
function add_images_to_db(array $files, PDO $db){
    $sth = $db->prepare('INSERT INTO `images` (path, thumb, add_time)
VALUES (?, ?, NOW())');
    foreach ($files as $file){
        $result = false;
        foreach ($db->query('SELECT * FROM `images`', 2) as $row){
            if ($file['path'] == $row['path']){
                $result = !$result;
                break;
            }
        }
        if (!$result){
            $sth->execute([$file['path'], $file['thumb']]);
        }
    }

    if ($sth->errorCode() == 0000){
        unset($files);
        return $sth->rowCount();
    } else {
        return $sth->errorCode();
    }
}

/**
 * @param PDO $db
 * @return array|string
 */
function get_images_from_db(PDO $db){
    $files = [];
    try {
        foreach ($db->query('SELECT * FROM `images`', 2) as $row){
            $files[] = $row;
        }
    } catch (PDOException $exception) {
        $files = $exception->getMessage();
    } finally {
        return $files;
    }

}

