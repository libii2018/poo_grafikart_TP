<?php

require '../app/Autoloader.php';

App\Autoloader::register();

$app = App\Ap::getInstance();

var_dump($app->getTable('Posts'));
