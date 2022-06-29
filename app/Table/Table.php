<?php

namespace App\Table;

use App\Ap;

class Table {

    public static function find($id) {
        return static::query("
            SELECT *
            FROM " . static::$table . "
            WHERE id = ?
        ",[$id], true);
    }

    public static function query($statement,$attributes = null, $one = false) {

        if($attributes) {
            return Ap::getDb()->prepare($statement,$attributes,get_called_class(), $one);
        } else {
            return Ap::getDb()->query($statement, get_called_class(), $one);
        }
        
    }

    public static function all() {
        return Ap::getDb()->query("
            SELECT *
            FROM " . static::$table . "
        ",get_called_class());
    }

    public function __get($key){
        $method = 'get' . ucfirst($key);
        $this->$key = $this->$method();
        return $this->$key;
    }

}