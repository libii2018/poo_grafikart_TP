<?php
    $postTable = Ap::getInstance()->getTable('Category');
    if(!empty($_POST)) {
        $resultat = $postTable->create([
            'titre' => $_POST['titre']
        ]);

        if($resultat) {
            header('location: admin.php?p=categories.index');
        }
    }
    $form = new \Core\HTML\BootstrapForm($_POST);
?>

<form method="post">
    <?= $form->input('titre', 'Titre de la categorie'); ?> 
    <button class="btn btn-primary">Sauvegarder</button>
</form>