<?php

use App\Table\Article;
use App\Table\Categorie;
use App\Ap;

$categorie = Categorie::find($_GET['id']);

if($categorie === false) {
    Ap::notFound();
}

$articles  = Article::lastByCategory($_GET['id']);

$categories = Categorie::all();

?>

<h1><?= $categorie->titre ?></h1>

<div class="row">
    <div class="col-sm-8">
        <?php foreach ($articles as $post): ?>
            <h2><a href="<?= $post->url; ?>"><?= $post->titre; ?></a></h2>
            <p><em><?= $post->categorie; ?></em></p>
            <p><?= $post->extrait; ?></p>
        <?php endforeach; ?>
    </div>
</div>