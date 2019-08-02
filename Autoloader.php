<?php
error_reporting(E_ALL);
if (!defined('ROOTDIR')) {
    define('ROOTDIR', realpath(__DIR__));   //定义更目录
}

class Autoloader {

    public static function myAutoload($name) {
        $class_path = str_replace('\\', DIRECTORY_SEPARATOR, $name);
        $file = ROOTDIR . '/' . $class_path . '.php';
        if (file_exists($file)) {
            require_once( $file );
            if (class_exists($name, false)) {
                return true;
            }
        } else {
            print_r($file);
        }
        return false;
    }

}
spl_autoload_register('Autoloader::myAutoload');

