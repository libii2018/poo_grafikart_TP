<?php

namespace App;

class Ap {

    // const DB_NAME = 'Blog';
    // const DB_USER = 'root';
    // const DB_PASS = '';
    // const DB_HOST = 'localhost';

    private $title = 'Mon super site';

    // private static $database;

    // public static function getDb() {
    //     if(self::$database === null) {
    //         self::$database = new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);
    //     }
    //     return self::$database;
    // }

    // public static function notFound() {
    //     header("HTTP/1.0 404 Not Found");
    //     header('Location:index.php?p=404');
    // }

    // public static function getTitle() {
    //     return self::$title;
    // }

    // public static function setTitle($title) {
    //     self::$title = $title . ' | ' . self::$title;
    // }

    private static $_instance;

    public static function getInstance() {
        if(is_null(self::$_instance)) {
            self::$_instance = new Ap();
        }
        return self::$_instance;
    }

}