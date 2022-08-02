<?php
    $postTable = Ap::getInstance()->getTable('Post');
    if(!empty($_POST)) {
        $resultat = $postTable->delete($_POST['id']);
        header('Location: admin.php');
    }
?>