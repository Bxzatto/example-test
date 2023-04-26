<x-layout title="Listagem de Usuários">
    <a href="/usuarios/criar" class="btn btn-dark mb-2">Adicionar</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Login</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->login}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</x-layout>
