<x-layout title="Listagem de Tarefas">
    <button type="button" class="btn btn-dark">Adicionar nova tarefa</button>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Título</th>
            <th scope="col">Descrição</th>
            <th scope="col">Responsável</th>
            <th scope="col">Tipo</th>
            <th scope="col">Prioridade</th>
            <th scope="col">Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($tasks as $task)
            <tr>
                <th scope="row">{{$task->id}}</th>
                <th scope="row">{{$task->title}}</th>
                <th scope="row">{{$task->description}}</th>
                <th scope="row">{{$task->login}}</th>
                <th scope="row">{{$task->type}}</th>
                <th scope="row">{{$task->priority}}</th>
                <th scope="row">{{$task->status}}</th>
            </tr>
        @endforeach
        </tbody>
    </table>
</x-layout>
