@extends("template.users")
@section("title", "Listagem de Postagens")
@section("body")

    <h1 class="text-center">Listagem de Postagens</h1>


    <table class="table table-dark table-hover table-bordered table-striped">
        <thead class="text-center">
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Usuário</th>
                <th scope="col">Título</th>
                <th scope="col">Postagem</th>
                <th scope="col">Data de Cadastro</th>
            </tr>
        </thead>
        <tbody class="text-center">
            @foreach($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->post }}</td>
                    <td>{{ date("H:m | d/m/Y", strtotime($post->created_at)) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection