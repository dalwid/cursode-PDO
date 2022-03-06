<h2>Cadastrar User</h2>

<form action="/user_store" method="post">
    
    <div class="form-group">
        <label for="">Nome</label>
        <input type="text" name="nome"  placeholder="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">E-mail</label>
        <input type="text" name="email" placeholder="" class="form-control">
    </div>

    <div class="form-group">
        <label for="">Password</label>
        <input type="password" name="senha" placeholder="" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>