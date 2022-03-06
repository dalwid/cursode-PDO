<h2>Atualizar User</h2>

<form action="/user_update" method="post">
    
    <div class="form-group">
        <label for="">Nome</label>
        <input type="hidden" name="id"  value="<?= $userEncontrado->id;  ?>">
        <input type="text" name="nome"  value="<?= $userEncontrado->nome; ?>" class="form-control">
    </div>

    <div class="form-group">
        <label for="">E-mail</label>
        <input type="text" name="email" value="<?= $userEncontrado->email; ?>" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Password</label>
        <input type="password" name="senha" value="<?= $userEncontrado->senha; ?>" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Atualizar</button>
</form>