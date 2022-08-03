<?php

namespace App\Controller\Admin;

use \Ap;


class PostsController extends ApController {

    public function __construct() {
        parent::__construct();
        $this->loadModel('Post');
    }

    public function index() {
        $posts = $this->Post->all();
        $this->render('admin.posts.index', compact('posts'));
    }

    public function add() {
        if(!empty($_POST)) {
            $resultat = $this->Post->create([
                'titre' => $_POST['titre'],
                'contenu' => $_POST['contenu'],
                'category_id' => $_POST['category_id']
            ]);

            if($resultat) {
                $this->index();
            }
        }
        $this->loadModel('Category');
        $categories = $this->Category->extra('id','titre');
        $form = new \Core\HTML\BootstrapForm($_POST);
        $this->render('admin.posts.edit',compact('categories','form'));
    }

    public function edit() {
        $postTable = Ap::getInstance()->getTable('Post');
        if(!empty($_POST)) {
            $resultat = $this->Post->update($_GET['id'],[
                'titre' => $_POST['titre'],
                'contenu' => $_POST['contenu'],
                'category_id' => $_POST['category_id']
            ]);

            if($resultat) {
                return $this->index();
            }
        }
        $post = $this->Post->find($_GET['id']);
        $this->loadModel('Category');
        $categories = $this->Category->extra('id','titre');
        $form = new \Core\HTML\BootstrapForm($post);
        $this->render('admin.posts.edit',compact('categories','form'));
    }

    public function delete() {
        if(!empty($_POST)) {
            $resultat = $this->Post->delete($_POST['id']);
            return $this->index();
        }
    }
    
}