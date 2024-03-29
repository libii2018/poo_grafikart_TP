<?php

namespace App\Controller;

use Core\Database\QueryBuilder;


class DemoController extends ApController {

    public function index() {
        // Fluent
        // $query = new QueryBuilder();
        // echo $query
        //     ->select('id','titre','contenu')
        //     ->from('article','Post')
        //     ->where('post.category_id = 1')
        //     ->where('Post.date > NOW()');

        require ROOT . '/Query.php';
        echo \Query::select('id','titre','contenu')
            ->from('article','Post')
            ->where('post.category_id = 1')
            ->where('Post.date > NOW()');
    }
    
}