@extends("template.users")
@section("title", "Listagem de Usuários")
@section("body")

    <h1 class="text-center">Listagem de Usuários</h1>
    <a href="{{ route('users.create') }}" class="btn btn-primary mb-3 text-end">Novo Usuário</a>

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
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ date("H:m | d/m/Y", strtotime($user->created_at)) }}</td>
                    <td>
                        <a href="{{ route('users.show', $user->id) }}" class="btn btn-secondary btn-sm">Visualizar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection