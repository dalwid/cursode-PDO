<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($users as $user): ?>
            <tr>
                <td><?= $user->id  ?></td>
                <td><?= $user->nome  ?></td>
                <td>
                    <a href="/user_edit?id=<?= $user->id; ?>"    class="btn btn-warning btn-xs">Editar</a>
                </td>
                <td>
                    <a href="/user_destroy?id=<?= $user->id; ?>" class="btn btn-danger btn-xs">Deletar</a>
                </td>
            </tr>
        <?php endforeach; ?>    
    </tbody>
</table>