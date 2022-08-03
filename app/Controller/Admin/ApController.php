<?php

namespace App\Controller\Admin;

use \Ap;
use \Core\Auth\DBAuth;

class ApController extends \App\Controller\ApController {
   public function __construct() {
       parent::__construct();
        $app = Ap::getInstance();
        $auth = new DBAuth($app->getDb());
        if (!$auth->logged()) {
            $this->forbidden();
        }
   }
}