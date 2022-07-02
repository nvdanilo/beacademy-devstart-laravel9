@extends("template.users")
@section("title", "Usuário $user->name")
@section("body")
    <h1 class="text-center">Usuário {{ $user->name }}</h1>
    <table class="table table-dark table-hover table-bordered table-striped">
        <thead class="text-center">
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">NOME</th>
                <th scope="col">EMAIL</th>
                <th scope="col">DATA DE CADASTRO</th>
                <th scope="col">AÇÕES</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ date("H:m | d/m/Y", strtotime($user->created_at)) }}</td>
                <td>
                    <a href="" class="btn btn-warning btn-sm">Editar</a>
                    <a href="" class="btn btn-danger btn-sm">Excluir</a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection