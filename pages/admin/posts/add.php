<?php
    $postTable = Ap::getInstance()->getTable('Post');
    if(!empty($_POST)) {
        $resultat = $postTable->create([
            'titre' => $_POST['titre'],
            'contenu' => $_POST['contenu'],
            'category_id' => $_POST['category_id']
        ]);

        if($resultat) {
            header('location: admin.php?p=posts.edit&id=' . Ap::getInstance()->getDb()->lastInsertId());
        }
    }
    $categories = Ap::getInstance()->getTable('Category')->extra('id','titre');
    $form = new \Core\HTML\BootstrapForm($_POST);
?>

<form method="post">
    <?= $form->input('titre', 'Titre de l\'article'); ?> 
    <?= $form->input('contenu', 'Contenu', ['type' => 'textarea']); ?>
    <?= $form->select('category_id', 'Catégorie', $categories ); ?>
    <button class="btn btn-primary">Sauvegarder</button>
</form>