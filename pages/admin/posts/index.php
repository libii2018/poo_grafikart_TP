<?php

$posts = Ap::getInstance()->getTable('Post')->all();

?>

<p>
    <a href="?p=posts.add" class="btn btn-success">Ajouter</a>
</p>

<h1>Administrer les articles</h1>

<table class="table">
    <thead>
        <tr>
            <td>ID</td>
            <td>Titre</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($posts as $post): ?>
            <tr>
                <td><?= $post->id; ?></td>
                <td><?= $post->titre; ?></td>
                <td>
                    <a href="?p=posts.edit&id=<?= $post->id; ?>" class="btn btn-primary">Editer</a>

                    <form action="?p=posts.delete" method="POST" style="display: inline;">
                        <input type="hidden" name="id" value="<?= $post->id ?>">
                        <button type="submit" class="btn btn-danger" href="?p=posts.delete&id=<?= $post->id; ?>">Supprimer</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>