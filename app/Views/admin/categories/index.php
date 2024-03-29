<p>
    <a href="?p=admin.categories.add" class="btn btn-success">Ajouter</a>
</p>

<h1>Administrer les categories</h1>

<table class="table">
    <thead>
        <tr>
            <td>ID</td>
            <td>Titre</td>
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($items as $category): ?>
            <tr>
                <td><?= $category->id; ?></td>
                <td><?= $category->titre; ?></td>
                <td>
                    <a href="?p=admin.categories.edit&id=<?= $category->id; ?>" class="btn btn-primary">Editer</a>

                    <form action="?p=admin.categories.delete" method="POST" style="display: inline;">
                        <input type="hidden" name="id" value="<?= $category->id ?>">
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>