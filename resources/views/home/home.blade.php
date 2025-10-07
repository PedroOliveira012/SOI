@extends('index.index')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="mt-5 text-center">Projetos</h1>
        <a href="{{ url('/new-project') }}">
            <button class="mt-5 align-middle btn btn-primary">Novo Projeto</button>
        </a>
    </div>
    <table class="table table-dark table-hover tabela mt-5">
        <thead>
            <tr>
                <th>N° de Projeto</th>
                <th>Cliente</th>
                <th>Contato</th>
                <th>Nome do Projeto</th>
                <th></th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            <?php foreach ($projects as $project): ?>
            <tr class="align-middle">
                <td >
                    <p>{{ $project->project_number }}</p>
                </td>
                <td >
                    <p>{{ $project->client }}</p>
                </td>
                <td >
                    <p>{{ $project->contact }}</p>
                </td>
                <td >
                    <p>{{ $project->project_name }}</p>
                </td>
                <td>
                    <div>
                        <button type="button" class="btn btn-primary">
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </div>
                </td>
            </tr>
            <?php endforeach?>
        <tbody>
    </table>
</div>
@endsection