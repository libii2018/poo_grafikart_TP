<?php

namespace App\Controller;

use Core\Controller\Controller;
use \Ap;
class ApController extends Controller {
    protected $template = 'default';

    public function __construct() {
        $this->viewPath = ROOT . '/app/Views/';
    }

    public function loadModel($model_name) {
        $this->$model_name = Ap::getInstance()->getTable($model_name);
    }
}