@extends("template.users")
@section("title", $title)
@section("body")
    <h1 class="text-center">Usuário {{ $user->name }}</h1>
    <table class="table table-dark table-hover table-bordered table-striped">
        <thead class="text-center">
            <tr>
                <th scope="col">#Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Data de Cadastro</th>
                <th scope="col">Editar</th>
                <th scope="col">Deletar</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ date("H:m | d/m/Y", strtotime($user->created_at)) }}</td>
                <td>
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">Editar</a>
                </td>
                <td>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                        @method("DELETE")
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
@endsection