<?php


namespace App\Helpers;


class UploadPaths
{
    public static $uploadPaths = array(
        'product_photos' => '/upload/product_images'
    );

    public static function getUploadPaths($path){
        return public_path().self::$uploadPaths[$path];
    }
}
