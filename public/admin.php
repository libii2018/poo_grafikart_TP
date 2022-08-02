<?php

define('ROOT',dirname(__DIR__));
require ROOT . '/app/Ap.php';
Ap::load();


if(isset($_GET['p'])) {
    $page = $_GET['p'];
} else {
    $page = 'home';
}

// Auth
$app = Ap::getInstance();
$auth = new \Core\Auth\DBAuth($app->getDb());
if (!$auth->logged()) {
    $app->forbidden();
}

ob_start();
if($page === 'home') {
    require ROOT . '/pages/admin/posts/index.php';
} elseif($page === 'posts.edit'){
    require ROOT . '/pages/admin/posts/edit.php';
} elseif ($page === 'posts.show'){
    require ROOT . '/pages/admin/posts/show.php';
} elseif ($page === 'posts.add'){
    require ROOT . '/pages/admin/posts/add.php';
} elseif ($page === 'posts.delete'){
    require ROOT . '/pages/admin/posts/delete.php';
} if($page === 'categories.index') {
    require ROOT . '/pages/admin/categories/index.php';
} elseif($page === 'categories.edit'){
    require ROOT . '/pages/admin/categories/edit.php';
} elseif ($page === 'categories.show'){
    require ROOT . '/pages/admin/categories/show.php';
} elseif ($page === 'categories.add'){
    require ROOT . '/pages/admin/categories/add.php';
} elseif ($page === 'categories.delete'){
    require ROOT . '/pages/admin/categories/delete.php';
}
$content = ob_get_clean();
require ROOT . '/pages/templates/default.php';