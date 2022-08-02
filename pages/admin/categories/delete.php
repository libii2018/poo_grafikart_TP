<?php
    $category = Ap::getInstance()->getTable('Category');
    if(!empty($_POST)) {
        $resultat = $category->delete($_POST['id']);
        header('Location: admin.php?p=categories.index');
    }
?>