<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Usuários</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1 class="text-center">Listagem de Usuários</h1>
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

    </div>
</body>
</html>