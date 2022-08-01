<?php

require '../app/Autoloader.php';

App\Autoloader::register();

$app = App\Ap::getInstance();

$posts = $app->getTable('Posts');
var_dump($posts->all());
