<?php

namespace App\Controller\Admin;

use \Ap;


class CategoriesController extends ApController {

    public function __construct() {
        parent::__construct();
        $this->loadModel('category');
    }

    public function index() {
        $items = $this->category->all();
        $this->render('admin.categories.index', compact('items'));
    }

    public function add() {
        if(!empty($_POST)) {
            $resultat = $this->Category->create([
                'titre' => $_POST['titre']
            ]);
            return $this->index();
            
        }
        $form = new \Core\HTML\BootstrapForm($_POST);
        $this->render('admin.categories.edit',compact('form'));
    }

    public function edit() {
        $postTable = Ap::getInstance()->getTable('Post');
        if(!empty($_POST)) {
            $resultat = $this->Post->update($_GET['id'],[
                'titre' => $_POST['titre']
            ]);
            return $this->index();
        }
        $category = $this->category->find($_GET['id']);
        $form = new \Core\HTML\BootstrapForm($category);
        $this->render('admin.categories.edit',compact('form'));
    }

    public function delete() {
        if(!empty($_POST)) {
            $resultat = $this->category->delete($_POST['id']);
            return $this->index();
        }
    }
    
}