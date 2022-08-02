<?php
    $postTable = Ap::getInstance()->getTable('Category');
    if(!empty($_POST)) {
        $resultat = $postTable->update($_GET['id'],[
            'titre' => $_POST['titre']
        ]);

        if($resultat) {
            ?>

                <div class="alert alert-success">La catégorie bien été modifier </div>

            <?php
        }
    }
    $categorie = $postTable->find($_GET['id']);
    $form = new \Core\HTML\BootstrapForm($categorie);
?>

<form method="post">
    <?= $form->input('titre', 'Titre de la categorie'); ?> 
    <button class="btn btn-primary">Sauvegarder</button>
</form>