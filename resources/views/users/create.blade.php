<x-layout title="Criação">
    <form method="post" action="salvar">
        @csrf
        <div class="mb-3">
            <label for="login" class="form-label">Login</label>
            <input name="login" type="text" class="form-control" id="login" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input name="password" type="password" class="form-control" id="password">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</x-layout>
